<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_6c1090da038fdc3dbee512acbf10678752a31d241ef91dee895d16921228810a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var((isset($context["html_attributes"]) ? $context["html_attributes"] : null));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var((isset($context["head"]) ? $context["head"] : null));
        echo "
    <title>";
        // line 33
        echo twig_render_var((isset($context["head_title"]) ? $context["head_title"] : null));
        echo "</title>
    ";
        // line 34
        echo twig_render_var((isset($context["styles"]) ? $context["styles"] : null));
        echo "
    ";
        // line 35
        echo twig_render_var((isset($context["scripts"]) ? $context["scripts"] : null));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 42
        echo twig_render_var((isset($context["page"]) ? $context["page"] : null));
        echo "
    ";
        // line 43
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 43,  44 => 37,  22 => 30,  49 => 39,  31 => 33,  20 => 44,  42 => 19,  33 => 17,  81 => 46,  74 => 43,  68 => 41,  64 => 39,  45 => 51,  39 => 35,  354 => 209,  348 => 206,  345 => 205,  343 => 204,  340 => 203,  334 => 200,  330 => 199,  326 => 198,  322 => 197,  319 => 196,  317 => 195,  312 => 192,  306 => 189,  302 => 188,  298 => 187,  295 => 186,  293 => 185,  288 => 182,  282 => 179,  279 => 178,  277 => 177,  274 => 176,  268 => 173,  265 => 172,  263 => 171,  257 => 168,  252 => 167,  246 => 164,  243 => 163,  241 => 162,  236 => 161,  230 => 158,  227 => 157,  225 => 156,  220 => 155,  214 => 152,  211 => 151,  209 => 150,  205 => 149,  202 => 148,  196 => 147,  190 => 144,  186 => 142,  180 => 139,  177 => 138,  175 => 137,  172 => 136,  166 => 133,  163 => 132,  161 => 131,  157 => 129,  151 => 126,  148 => 125,  146 => 124,  141 => 122,  138 => 121,  134 => 119,  128 => 116,  121 => 115,  119 => 114,  116 => 113,  113 => 112,  103 => 109,  96 => 108,  93 => 107,  83 => 103,  75 => 101,  72 => 100,  61 => 97,  58 => 42,  38 => 90,  29 => 46,  27 => 32,  76 => 58,  70 => 99,  67 => 54,  60 => 53,  55 => 37,  85 => 44,  79 => 43,  65 => 37,  50 => 93,  47 => 47,  28 => 27,  43 => 92,  36 => 31,  34 => 23,  77 => 44,  71 => 39,  66 => 54,  63 => 98,  57 => 52,  54 => 41,  48 => 35,  46 => 29,  35 => 34,  26 => 25,  24 => 14,  59 => 35,  56 => 33,  51 => 55,  41 => 91,  37 => 28,  32 => 29,  30 => 28,  25 => 45,  23 => 27,  21 => 13,  19 => 29,);
    }
}
