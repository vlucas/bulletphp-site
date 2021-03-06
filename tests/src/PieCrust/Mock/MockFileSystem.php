<?php

namespace PieCrust\Mock;

use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\visitor\vfsStreamStructureVisitor;
use Symfony\Component\Yaml\Yaml;


class MockFileSystem
{
    public static function create($withDefaultStructure = true)
    {
        return new MockFileSystem($withDefaultStructure);
    }

    protected $root;

    public function __construct($withDefaultStructure = true)
    {
        $this->root = 'root_' . rand();
        $structure = array();
        if ($withDefaultStructure)
        {
            $structure['kitchen'] = array(
                '_content' => array(
                    'config.yml' => 'site:\n  title: Mock Website'
                )
            );
            $structure['counter'] = array();
        }
        vfsStream::setup($this->root, null, $structure);
    }

    public function getRootName()
    {
        return $this->root;
    }

    public function url($path)
    {
        return vfsStream::url($this->root . '/' . $path);
    }

    public function getAppRoot()
    {
        return $this->url('kitchen');
    }

    public function getStructure()
    {
        return vfsStream::inspect(new vfsStreamStructureVisitor())->getStructure();
    }

    public function getApp($params = array())
    {
        $params['root'] = $this->getAppRoot();
        return new \PieCrust\PieCrust($params);
    }

    public function withDir($path)
    {
        mkdir($this->url($path), 0777, true);
        return $this;
    }

    public function withFile($path, $contents)
    {
        // Ensure the path exists.
        $path = $this->url($path);
        if (!is_dir(dirname($path)))
            mkdir(dirname($path), 0777, true);

        // Create the file.
        file_put_contents($path, $contents);
        return $this;
    }

    public function withCacheDir()
    {
        mkdir($this->url('kitchen/_cache'));
        mkdir($this->url('kitchen/_cache/pages_r'));
        mkdir($this->url('kitchen/_cache/templates_c'));
        return $this;
    }

    public function withPagesDir()
    {
        mkdir($this->url('kitchen/_content/pages'));
        return $this;
    }

    public function withPostsDir()
    {
        mkdir($this->url('kitchen/_content/posts'));
        return $this;
    }

    public function withTemplatesDir()
    {
        mkdir($this->url('kitchen/_content/templates'));
        return $this;
    }

    public function withConfig(array $config)
    {
        return $this->withFile(
            'kitchen/_content/config.yml',
            Yaml::dump($config)
        );
    }

    public function withThemeConfig(array $config)
    {
        return $this->withFile(
            'kitchen/_content/theme/_content/theme_config.yml',
            Yaml::dump($config)
        );
    }

    public function withPage($url, $config = array(), $contents = 'A test page.')
    {
        $text  = '---' . PHP_EOL;
        $text .= Yaml::dump($config) . PHP_EOL;
        $text .= '---' . PHP_EOL;
        $text .= $contents;

        // Don't add an extension if there's one already.
        $fileName = $url . '.html';
        if (preg_match('/\\.[a-zA-Z0-9]+$/', $url))
            $fileName = $url;
        return $this->withAsset("_content/pages/{$fileName}", $text);
    }

    public function withPageAsset($pageUrl, $assetName, $assetContents = 'A test asset.')
    {
        $dir = $pageUrl . '-assets';
        if (preg_match('/\\.[a-zA-Z0-9]+$/', $pageUrl))
            $dir = pathinfo($pageUrl, PATHINFO_FILENAME) . '-assets';
        return $this->withAsset("_content/pages/{$dir}/$assetName", $assetContents);
    }

    public function withPost($slug, $day, $month, $year, $config, $contents)
    {
        $text  = '---' . PHP_EOL;
        $text .= Yaml::dump($config) . PHP_EOL;
        $text .= '---' . PHP_EOL;
        $text .= $contents;

        if (is_int($day)) $day = sprintf('%02d', $day);
        if (is_int($month)) $month = sprintf('%02d', $month);
        if (is_int($year)) $year = sprintf('%04d', $year);
        $path = "_content/posts/{$year}-{$month}-{$day}_{$slug}.html";
        return $this->withAsset($path, $text);
    }

    public function withDummyPosts(array $dates, array $commonConfig = array())
    {
        $i = 0;
        foreach ($dates as $d)
        {
            $bits = explode('/', $d);
            $year = $bits[0];
            $month = $bits[1];
            $day = $bits[2];
            $slug = "test-slug-{$i}";
            $pageConfig = array_merge(
                array(
                    'title' => "Test Title {$i}"
                ),
                $commonConfig
            );
            $pageContents = "Contents {$i}";

            $this->withPost($slug, $day, $month, $year, $pageConfig, $pageContents);
            ++$i;
        }
        return $this;
    }

    public function withTemplate($name, $contents)
    {
        return $this->withAsset('_content/templates/' . $name . '.html', $contents);
    }

    public function withCustomTemplate($name, $subDir, $contents)
    {
        return $this->withAsset('_content/' . $subDir . '/' . $name . '.html', $contents);
    }

    public function withAsset($path, $contents)
    {
        return $this->withFile('kitchen/' . $path, $contents);
    }
}

