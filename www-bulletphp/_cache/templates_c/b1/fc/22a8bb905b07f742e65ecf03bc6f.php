<?php

/* default.html */
class __TwigTemplate_b1fc22a8bb905b07f742e65ecf03bc6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "
<!doctype html>
<html>
<head>
  <title>";
        // line 14
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ((!twig_test_empty($this->getAttribute($_page_, "title")))) {
            echo " &mdash; ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
        }
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t<meta name=\"description\" content=\"";
        // line 16
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "description"), "html", null, true);
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 17
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "author"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 18
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "css/bootstrap.min.css\" type=\"text/css\" media=\"screen, projection\" />
  <link rel=\"stylesheet\" href=\"";
        // line 19
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "css/site.css\" type=\"text/css\" media=\"screen, projection\" />
</head>
<body>

    <div class=\"container\">

      <div class=\"row\">
        <div id=\"page_head\">
          <div id=\"region_head_logo\" class=\"span12\">
          ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "          </div>
        </div>
      </div>

      <div class=\"row\">
        <div id=\"page_main\" class=\"span8\">
          <div class=\"inside\">
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "          </div>
        </div>

        <div id=\"page_side\" class=\"span4\">
          <div class=\"inside\">
            <!-- content -->
            <div class=\"well sidebar-nav\">
              <ul class=\"nav nav-list\">
                <li>";
        // line 50
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "", 1 => $this->getAttribute($_page_, "slug"), 2 => "Home"), "method"), "html", null, true);
        echo "</li>
                <li>";
        // line 51
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs", 1 => $this->getAttribute($_page_, "slug"), 2 => "Documentation"), "method"), "html", null, true);
        echo "
                  <ul>
                    <li>";
        // line 53
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/install", 1 => $this->getAttribute($_page_, "slug"), 2 => "Installation Guide"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 54
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/organization", 1 => $this->getAttribute($_page_, "slug"), 2 => "Project Organization"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 55
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/events", 1 => $this->getAttribute($_page_, "slug"), 2 => "Event Handling"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 56
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/path-callbacks-handlers", 1 => $this->getAttribute($_page_, "slug"), 2 => "Path Callbacks & Handlers"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 57
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/param-callbacks", 1 => $this->getAttribute($_page_, "slug"), 2 => "Param Callbacks"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 58
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/templates", 1 => $this->getAttribute($_page_, "slug"), 2 => "Templates & Views"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 59
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/sub-requests", 1 => $this->getAttribute($_page_, "slug"), 2 => "Nested Sub-Requests"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 60
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/request", 1 => $this->getAttribute($_page_, "slug"), 2 => "Request"), "method"), "html", null, true);
        echo "
                    <li>";
        // line 61
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "docs/response", 1 => $this->getAttribute($_page_, "slug"), 2 => "Response"), "method"), "html", null, true);
        echo "
                  </ul>
                </li>
                <li>";
        // line 64
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "nav_entry", array(0 => "blog", 1 => $this->getAttribute($_page_, "slug"), 2 => "Blog"), "method"), "html", null, true);
        echo "</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <footer id=\"page_foot\">
        <div class=\"row\">
          <div id=\"region_foot\" class=\"span9\">
            <div class=\"inside\">
              ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "            </div>
          </div>
          <div class=\"span3 right\">
            <div class=\"inside\">
              <a href=\"http://brightbit.com\">Built by Brightbit</a><br />
              <small>Site powered by <a href=\"http://bolt80.com/piecrust/\">PieCrust</a></small>
            </div>
          </div>
        </div>
      </footer>
    </div> <!-- /container -->

    <!-- Github Badge -->
    <a href=\"http://github.com/vlucas/bulletphp\"><img style=\"position: absolute; top: 0; right: 0; border: 0;\" src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png\" alt=\"Fork me on GitHub\"></a>

    <!-- GA Tracker Code -->
    <script type=\"text/javascript\">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-359731-31']);
      _gaq.push(['_setDomainName', 'bulletphp.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

\t";
        // line 108
        if (isset($context["piecrust"])) { $_piecrust_ = $context["piecrust"]; } else { $_piecrust_ = null; }
        echo $this->getAttribute($_piecrust_, "debug_info");
        echo "
</body>
</html>
";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "              <h1><a href=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "\">";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
        echo "</a></h1>
              <h2>The Functional-Style PHP Micro-framework Built for REST APIs</h2>
          ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "                ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
            ";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "                <p>Using Bullet in an awesome project? <a href=\"http://twitter.com/vlucas\">Let me know</a>!</p>
                <p>BulletPHP &copy; 2012 <a href=\"http://www.vancelucas.com\">Vance Lucas</a> from <a href=\"http://brightbit.com\">Brightbit</a>. All rights reserved. Open source under the <a href=\"http://www.opensource.org/licenses/bsd-license.php\">BSD license</a>.</p>
              ";
    }

    // line 1
    public function getnav_entry($slug = null, $current = null, $label = null)
    {
        $context = $this->env->mergeGlobals(array(
            "slug" => $slug,
            "current" => $current,
            "label" => $label,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
            if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
            if (($_current_ == $_slug_)) {
                // line 4
                echo "<a class=\"active\" href=\"";
                if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($_slug_), "html", null, true);
                echo "\">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "</a>
";
            } else {
                // line 6
                echo "<a href=\"";
                if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($_slug_), "html", null, true);
                echo "\">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "</a>
";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 6,  258 => 4,  254 => 3,  252 => 2,  239 => 1,  233 => 76,  230 => 75,  222 => 40,  219 => 39,  207 => 29,  204 => 28,  195 => 108,  164 => 79,  162 => 75,  147 => 64,  140 => 61,  135 => 60,  130 => 59,  125 => 58,  120 => 57,  115 => 56,  110 => 55,  105 => 54,  100 => 53,  94 => 51,  89 => 50,  79 => 42,  77 => 39,  68 => 32,  66 => 28,  53 => 19,  48 => 18,  43 => 17,  38 => 16,  20 => 10,  55 => 9,  52 => 8,  44 => 7,  36 => 6,  29 => 4,  26 => 14,  17 => 1,);
    }
}
