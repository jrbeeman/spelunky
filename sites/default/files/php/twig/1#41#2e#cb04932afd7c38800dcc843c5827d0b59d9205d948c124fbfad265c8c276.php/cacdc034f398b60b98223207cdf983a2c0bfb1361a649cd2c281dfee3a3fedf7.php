<?php

/* core/modules/system/templates/pager.html.twig */
class __TwigTemplate_412ecb04932afd7c38800dcc843c5827d0b59d9205d948c124fbfad265c8c276 extends Twig_Template
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
        // line 14
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Pages"));
            echo "</h2>
  ";
            // line 16
            echo twig_render_var((isset($context["items"]) ? $context["items"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 19,  21 => 15,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  131 => 83,  122 => 80,  113 => 76,  110 => 75,  102 => 72,  93 => 68,  84 => 64,  79 => 62,  76 => 61,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  41 => 46,  36 => 45,  30 => 43,  28 => 21,  141 => 70,  134 => 84,  125 => 81,  120 => 64,  116 => 77,  111 => 62,  107 => 61,  104 => 73,  99 => 71,  90 => 67,  85 => 53,  81 => 63,  77 => 50,  74 => 49,  70 => 58,  66 => 45,  60 => 43,  57 => 42,  51 => 40,  49 => 39,  46 => 48,  43 => 47,  37 => 35,  31 => 22,  29 => 32,  26 => 16,  24 => 41,  19 => 14,);
    }
}
