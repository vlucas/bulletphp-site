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
        return array (  60 => 14,  53 => 12,  49 => 11,  42 => 9,  39 => 8,  32 => 5,  129 => 25,  122 => 22,  119 => 21,  116 => 20,  110 => 18,  106 => 16,  88 => 13,  58 => 11,  54 => 9,  50 => 8,  40 => 6,  37 => 5,  35 => 2,  285 => 241,  269 => 230,  247 => 210,  214 => 181,  212 => 180,  201 => 171,  162 => 136,  95 => 77,  281 => 6,  271 => 231,  267 => 3,  265 => 2,  252 => 1,  246 => 77,  243 => 76,  235 => 40,  232 => 39,  220 => 29,  217 => 28,  208 => 109,  177 => 80,  175 => 76,  160 => 135,  155 => 64,  148 => 61,  143 => 120,  138 => 59,  133 => 58,  128 => 57,  123 => 56,  118 => 55,  113 => 54,  108 => 53,  102 => 14,  97 => 78,  87 => 42,  85 => 39,  76 => 12,  74 => 28,  61 => 19,  46 => 17,  38 => 16,  20 => 2,  55 => 18,  52 => 8,  44 => 7,  36 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
