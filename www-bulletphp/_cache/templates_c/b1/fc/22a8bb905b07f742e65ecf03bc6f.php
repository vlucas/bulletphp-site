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
        // line 1
        echo "<!doctype html>
<html>
<head>
  <title>";
        // line 4
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
        // line 6
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "description"), "html", null, true);
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 7
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "author"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "css/bootstrap.min.css\" type=\"text/css\" media=\"screen, projection\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "css/site.css\" type=\"text/css\" media=\"screen, projection\" />
</head>
<body>

    <div class=\"container\">

      <div id=\"page_content\">
        <div id=\"page_head\">
          <div class=\"row\">
            <div id=\"region_head_logo\" class=\"span6\">
            ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "            </div>
            <div id=\"region_head_nav\" class=\"span6\">
              <ul class=\"header_nav\">
                <li><a href=\"";
        // line 25
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("blog"), "html", null, true);
        echo "\">Blog</a></li>
                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("about"), "html", null, true);
        echo "\">About</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"page_main\" class=\"span8\">
            ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "          </div>

          <div id=\"page_side\" class=\"span4\">
            <!-- content -->
          </div>
        </div>
      </div>

      <footer id=\"page_foot\">
        <div class=\"row\">
          <div id=\"region_foot\" class=\"span9\">
          ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "          </div>
          <div class=\"span3 right\">
            <a href=\"http://brightbit.com\">Built by Brightbit</a><br />
            <small>Site powered by <a href=\"http://bolt80.com/piecrust/\">PieCrust</a></small>
          </div>
        </div>
      </footer>
    </div> <!-- /container -->

    <!-- Github Badge -->
    <a href=\"http://github.com/vlucas/bulletphp\"><img style=\"position: absolute; top: 0; right: 0; border: 0;\" src=\"https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png\" alt=\"Fork me on GitHub\"></a>

    <!-- GA Tracker Code -->
    <script type=\"text/javascript\">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '']);
      _gaq.push(['_setDomainName', 'bulletphp.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

\t";
        // line 80
        if (isset($context["piecrust"])) { $_piecrust_ = $context["piecrust"]; } else { $_piecrust_ = null; }
        echo $this->getAttribute($_piecrust_, "debug_info");
        echo "
</body>
</html>
";
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "                <h1><a href=\"";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "root"), "html", null, true);
        echo "\">";
        if (isset($context["site"])) { $_site_ = $context["site"]; } else { $_site_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_site_, "title"), "html", null, true);
        echo "</a></h1>
            ";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "                ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
        \t\t";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "            <p>Using Bullet in an awesome project? <a href=\"http://twitter.com/vlucas\">Let me know</a>!</p>
            <p>BulletPHP &copy; 2012 <a href=\"http://www.vancelucas.com\">Vance Lucas</a> from <a href=\"http://brightbit.com\">Brightbit</a>. All rights reserved. Open source under the <a href=\"http://www.opensource.org/licenses/bsd-license.php\">BSD license</a>.</p>
          ";
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
        return array (  176 => 49,  173 => 48,  165 => 35,  162 => 34,  151 => 20,  148 => 19,  139 => 80,  109 => 52,  107 => 48,  94 => 37,  92 => 34,  82 => 27,  78 => 26,  73 => 25,  68 => 22,  66 => 19,  47 => 8,  42 => 7,  37 => 6,  25 => 4,  20 => 1,  55 => 9,  52 => 9,  44 => 7,  36 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
