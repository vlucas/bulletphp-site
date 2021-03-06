<?php

namespace PieCrust;

use \Exception;
use Symfony\Component\Yaml\Yaml;
use PieCrust\IO\Cache;
use PieCrust\Util\Configuration;
use PieCrust\Util\ServerHelper;


/**
 * The configuration for a PieCrust application.
 */
class PieCrustConfiguration extends Configuration
{
    protected $paths;
    protected $cache;
    protected $fixupCallback;
    
    /**
     * Gets the paths to the composite configuration file.
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Sets a callback to fixup configuration data before it is merged
     * into the composite configuration.
     */
    public function setFixup($fixupCallback)
    {
        $this->fixupCallback = $fixupCallback;
    }
    
    /**
     * Builds a new instance of PieCrustConfiguration.
     */
    public function __construct(array $paths = null, $cache = false)
    {
        $this->paths = $paths;
        $this->cache = $cache;
        $this->fixupCallback = null;
    }
    
    protected function loadConfig()
    {
        if ($this->paths)
        {
            // Cache a validated JSON version of the configuration for faster
            // boot-up time (this saves a couple milliseconds).
            // 
            // First, get the times of the different configuration files. There's
            // usually one or two of them (one for the site configuration, an optional
            // one for the current theme's configuration).
            $pathTimes = array();
            foreach ($this->paths as $path)
            {
                $pathTimes[] = @filemtime($path);
            }
            $validPathTimes = array_filter($pathTimes, function ($t) { return $t !== false; });
            if (count($validPathTimes) == 0)
            {
                throw new PieCrustException("No PieCrust configuration file is readable, or none exists: " . implode(', ', $this->paths));
            }

            // Compare the modification times of those configuration files with the
            // cached JSON version.
            $cache = $this->cache ? new Cache($this->cache) : null;
            if ($cache != null and $cache->isValid('config', 'json', $validPathTimes))
            {
                $configText = $cache->read('config', 'json');
                $this->config = json_decode($configText, true);

                // If the site root URL was automatically defined, we need to re-compute
                // it in case the website is being run from a different place.
                $isAutoRoot = $this->getValue('site/is_auto_root');
                if ($isAutoRoot === true or $isAutoRoot === null)
                {
                    $this->config['site']['root'] = ServerHelper::getSiteRoot($_SERVER);
                }
            }
            else
            {
                $config = array();
                foreach ($this->paths as $i => $path)
                {
                    try
                    {
                        $curConfig = Yaml::parse(file_get_contents($path));
                        if ($curConfig != null) 
                        {
                            if ($this->fixupCallback != null)
                            {
                                $fixup = $this->fixupCallback;
                                $fixup($i, $curConfig);
                            }
                            $config = self::mergeArrays($config, $curConfig);
                        }
                    }
                    catch (Exception $e)
                    {
                        throw new PieCrustException("An error was found in the PieCrust configuration file '{$path}': " . $e->getMessage(), 0, $e);
                    }
                }
                try
                {
                    $this->config = $this->validateConfig($config);
                }
                catch (Exception $e)
                {
                    throw new PieCrustException("Error while validating PieCrust configuration: " . $e->getMessage(), 0, $e);
                }
                
                $yamlMarkup = json_encode($this->config);
                if ($cache != null)
                {
                    $cache->write('config', 'json', $yamlMarkup);
                }
            }
        }
        else
        {
            // No path given. Just create a default configuration.
            $this->config = $this->validateConfig(array());
        }
    }
    
    protected function validateConfig(array $config)
    {
        return self::getValidatedConfig($config);
    }
    
    protected function validateConfigValue($keyPath, $value)
    {
        if ($keyPath == 'site/root')
        {
            return rtrim($value, '/') . '/';
        }
        return $value;
    }
    
    /**
     * Returns a validated version of the given site configuration.
     *
     * This is exposed as a public static function for convenience (unit tests,
     * etc.)
     */
    public static function getValidatedConfig($config)
    {
        // Validate defaults.
        if (!$config)
        {
            $config = array();
        }
        if (!isset($config['site']))
        {
            $config['site'] = array();
        }
        $config['site'] = array_merge(
            array(
                'title' => 'Untitled PieCrust Website',
                'root' => null,
                'theme_root' => null,
                'default_format' => PieCrustDefaults::DEFAULT_FORMAT,
                'default_template_engine' => PieCrustDefaults::DEFAULT_TEMPLATE_ENGINE,
                'enable_gzip' => false,
                'pretty_urls' => false,
                'posts_fs' => PieCrustDefaults::DEFAULT_POSTS_FS,
                'date_format' => PieCrustDefaults::DEFAULT_DATE_FORMAT,
                'blogs' => array(PieCrustDefaults::DEFAULT_BLOG_KEY),
                'plugins_sources' => array(PieCrustDefaults::DEFAULT_PLUGIN_SOURCE),
                'themes_sources' => array(PieCrustDefaults::DEFAULT_THEME_SOURCE),
                'cache_time' => 28800,
                'display_errors' => false,
                'enable_debug_info' => true
            ),
            $config['site']);

        // Validate the site root URL, and remember if it was specified in the
        // source config.yml, because we won't be able to tell the difference from
        // the completely validated cache version.
        if ($config['site']['root'] == null)
        {
            $config['site']['root'] = ServerHelper::getSiteRoot($_SERVER);
            $config['site']['is_auto_root'] = true;
        }
        else
        {
            $config['site']['root'] = rtrim($config['site']['root'], '/') . '/';
            $config['site']['is_auto_root'] = false;
        }

        // Validate the plugins sources.
        if (!is_array($config['site']['plugins_sources']))
        {
            $config['site']['plugins_sources'] = array($config['site']['plugins_sources']);
        }
        if (!in_array(PieCrustDefaults::DEFAULT_PLUGIN_SOURCE, $config['site']['plugins_sources']))
        {
            $config['site']['plugins_sources'][] = PieCrustDefaults::DEFAULT_PLUGIN_SOURCE;
        }

        // Validate the themes sources.
        if (!is_array($config['site']['themes_sources']))
        {
            $config['site']['themes_sources'] = array($config['site']['themes_sources']);
        }
        if (!in_array(PieCrustDefaults::DEFAULT_THEME_SOURCE, $config['site']['themes_sources']))
        {
            $config['site']['themes_sources'][] = PieCrustDefaults::DEFAULT_THEME_SOURCE;
        }
        
        // Validate multi-blogs settings.
        if (in_array(PieCrustDefaults::DEFAULT_BLOG_KEY, $config['site']['blogs']) and 
            count($config['site']['blogs']) > 1)
        {
            throw new PieCrustException("'".PieCrustDefaults::DEFAULT_BLOG_KEY."' cannot be specified as a blog key for multi-blog configurations. Please pick custom keys.");
        }
        // Add default values for the blogs configurations, or use values
        // defined at the site level for easy site-wide configuration of multiple blogs
        // and backwards compatibility.
        $defaultValues = array(
            'post_url' => '%year%/%month%/%day%/%slug%',
            'tag_url' => 'tag/%tag%',
            'category_url' => '%category%',
            'posts_per_page' => 5
        );
        foreach (array_keys($defaultValues) as $key)
        {
            if (isset($config['site'][$key]))
                $defaultValues[$key] = $config['site'][$key];
        }
        foreach ($config['site']['blogs'] as $blogKey)
        {
            $prefix = '';
            if ($blogKey != PieCrustDefaults::DEFAULT_BLOG_KEY)
            {
                $prefix = $blogKey . '/';
            }
            if (!isset($config[$blogKey]))
            {
                $config[$blogKey] = array();
            }
            $config[$blogKey] = array_merge(array(
                            'post_url' => $prefix . $defaultValues['post_url'],
                            'tag_url' => $prefix . $defaultValues['tag_url'],
                            'category_url' => $prefix . $defaultValues['category_url'],
                            'posts_per_page' => $defaultValues['posts_per_page'],
                            'date_format' => $config['site']['date_format']
                        ),
                        $config[$blogKey]);
        }
        
        return $config;
    }
}
