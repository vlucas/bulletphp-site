<?php

/* blog.html */
class __TwigTemplate_57ef90f2b63216f394799a2d2ecd5985 extends Twig_Template
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
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

<div id=\"navigation\">
\t";
        // line 8
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev_page")) {
            // line 9
            echo "\t\t&laquo;&nbsp;<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prev_page")), "html", null, true);
            echo "\" id=\"navigation-next\">Newer Entries</a>
\t";
        }
        // line 11
        echo "\t";
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next_page")) {
            // line 12
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "next_page")), "html", null, true);
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
        return array (  55 => 14,  49 => 12,  40 => 9,  38 => 8,  32 => 5,  114 => 25,  108 => 22,  103 => 20,  98 => 18,  94 => 16,  90 => 14,  46 => 11,  43 => 8,  33 => 5,  27 => 4,  34 => 2,  255 => 6,  247 => 4,  245 => 3,  243 => 2,  230 => 1,  224 => 78,  221 => 77,  214 => 40,  211 => 39,  201 => 29,  198 => 28,  190 => 110,  159 => 81,  157 => 77,  143 => 66,  139 => 65,  133 => 62,  129 => 61,  125 => 60,  121 => 59,  117 => 58,  113 => 57,  109 => 56,  105 => 21,  101 => 54,  97 => 53,  92 => 51,  88 => 50,  78 => 42,  76 => 13,  67 => 12,  65 => 28,  53 => 19,  48 => 18,  20 => 2,  50 => 11,  47 => 8,  41 => 17,  35 => 6,  29 => 4,  26 => 3,  17 => 1,);
    }
}
