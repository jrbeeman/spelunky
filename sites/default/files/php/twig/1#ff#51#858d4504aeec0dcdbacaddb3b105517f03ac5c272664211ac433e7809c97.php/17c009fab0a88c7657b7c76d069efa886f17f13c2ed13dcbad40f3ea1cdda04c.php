<?php

/* core/modules/filter/templates/text-format-wrapper.html.twig */
class __TwigTemplate_ff51858d4504aeec0dcdbacaddb3b105517f03ac5c272664211ac433e7809c97 extends Twig_Template
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
        // line 13
        echo "<div class=\"text-format-wrapper form-item\">
  ";
        // line 14
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
  ";
        // line 15
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 16
            echo "    <div class=\"description\">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</div>
  ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 18,  26 => 15,  22 => 14,  106 => 50,  104 => 49,  101 => 48,  95 => 47,  91 => 45,  89 => 44,  86 => 43,  82 => 41,  71 => 39,  67 => 38,  64 => 37,  62 => 36,  59 => 35,  54 => 33,  49 => 32,  46 => 31,  42 => 30,  39 => 29,  32 => 26,  30 => 25,  27 => 24,  21 => 22,  28 => 16,  24 => 23,  35 => 27,  29 => 23,  23 => 20,  19 => 13,);
    }
}
