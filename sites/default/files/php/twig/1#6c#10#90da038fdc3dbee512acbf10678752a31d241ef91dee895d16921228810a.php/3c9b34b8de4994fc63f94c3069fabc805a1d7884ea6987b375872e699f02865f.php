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
        return array (  49 => 39,  44 => 37,  31 => 33,  22 => 30,  81 => 46,  68 => 41,  64 => 39,  30 => 28,  33 => 17,  112 => 107,  104 => 103,  98 => 100,  95 => 99,  92 => 98,  86 => 95,  83 => 94,  80 => 93,  74 => 43,  72 => 90,  62 => 43,  56 => 83,  42 => 19,  40 => 75,  29 => 16,  27 => 32,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 37,  21 => 13,  85 => 44,  79 => 43,  65 => 86,  47 => 47,  28 => 27,  51 => 36,  43 => 46,  36 => 31,  25 => 41,  23 => 27,  69 => 41,  61 => 39,  58 => 42,  52 => 36,  50 => 32,  45 => 34,  39 => 35,  37 => 31,  34 => 23,  77 => 44,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 41,  48 => 35,  46 => 29,  41 => 26,  35 => 34,  32 => 29,  26 => 25,  24 => 14,  19 => 29,);
    }
}
