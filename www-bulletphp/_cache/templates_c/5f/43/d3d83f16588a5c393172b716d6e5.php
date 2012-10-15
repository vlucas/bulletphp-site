<?php

/* blog.html */
class __TwigTemplate_5f43d3d83f16588a5c393172b716d6e5 extends Twig_Template
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
        echo "
";
        // line 5
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "

<div id=\"navigation\">
\t";
        // line 8
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($this->getAttribute($_pagination_, "prev_page")) {
            // line 9
            echo "\t\t&laquo;&nbsp;<a href=\"";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute($_pagination_, "prev_page")), "html", null, true);
            echo "\" id=\"navigation-next\">Newer Entries</a>
\t";
        }
        // line 11
        echo "\t";
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($this->getAttribute($_pagination_, "next_page")) {
            // line 12
            echo "\t\t<a href=\"";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute($_pagination_, "next_page")), "html", null, true);
            echo "\" id=\"navigation-next\">Older Entries</a>&nbsp;&raquo;
\t";
        }
        // line 14
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  53 => 12,  49 => 11,  39 => 8,  32 => 5,  129 => 25,  122 => 22,  119 => 21,  116 => 20,  110 => 18,  106 => 16,  102 => 14,  88 => 13,  76 => 12,  58 => 11,  54 => 9,  50 => 8,  40 => 6,  35 => 2,  176 => 49,  173 => 48,  165 => 35,  162 => 34,  151 => 20,  148 => 19,  139 => 80,  109 => 52,  107 => 48,  94 => 37,  92 => 34,  82 => 27,  78 => 26,  73 => 25,  68 => 22,  66 => 19,  47 => 8,  42 => 9,  37 => 5,  25 => 4,  20 => 2,  55 => 9,  52 => 9,  44 => 7,  36 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
