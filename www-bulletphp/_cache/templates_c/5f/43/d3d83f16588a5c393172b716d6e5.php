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
        return array (  60 => 14,  49 => 11,  42 => 9,  39 => 8,  32 => 5,  129 => 25,  122 => 22,  119 => 21,  116 => 20,  102 => 14,  88 => 13,  76 => 12,  58 => 11,  54 => 9,  50 => 8,  40 => 6,  37 => 5,  35 => 2,  349 => 298,  335 => 288,  333 => 287,  311 => 267,  278 => 238,  276 => 237,  265 => 228,  226 => 193,  161 => 135,  159 => 134,  124 => 101,  108 => 89,  106 => 16,  253 => 6,  243 => 4,  239 => 3,  237 => 2,  224 => 192,  218 => 73,  215 => 72,  207 => 177,  204 => 39,  192 => 29,  189 => 28,  180 => 105,  149 => 76,  147 => 72,  132 => 61,  125 => 58,  120 => 57,  115 => 56,  110 => 18,  105 => 54,  100 => 53,  94 => 51,  89 => 50,  79 => 42,  77 => 39,  68 => 32,  66 => 28,  53 => 12,  48 => 18,  43 => 17,  38 => 16,  20 => 2,  55 => 9,  52 => 8,  44 => 7,  36 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
