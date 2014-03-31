<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_0450f770cb7f10c0be89c32025f33d8c2c9f88ff40cd55ee43bc6407dafa7a07 extends Twig_Template
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
        // line 15
        echo "<select";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["options"]) ? $context["options"] : null));
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  107 => 59,  99 => 56,  93 => 54,  87 => 52,  84 => 51,  80 => 49,  77 => 48,  72 => 46,  70 => 45,  66 => 44,  63 => 42,  57 => 39,  54 => 38,  48 => 36,  46 => 35,  41 => 34,  37 => 33,  33 => 32,  28 => 31,  24 => 30,  19 => 15,);
    }
}
