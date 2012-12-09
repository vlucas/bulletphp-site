<?php

/* post.html */
class __TwigTemplate_4916ed2bb8650bc7e076cb9c7e4aecd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
        echo "</h2>
\t<div class=\"post-meta\">
\t\t<span class=\"post-date\">";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "date"), "html", null, true);
        echo "&nbsp;";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "time"), "html", null, true);
        echo "</span>
\t\t";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "author")) {
            echo "<span class=\"post-author\">by ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "author"), "html", null, true);
            echo "</span>";
        }
        // line 8
        echo "\t</div>
\t";
        // line 9
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  44 => 7,  36 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
