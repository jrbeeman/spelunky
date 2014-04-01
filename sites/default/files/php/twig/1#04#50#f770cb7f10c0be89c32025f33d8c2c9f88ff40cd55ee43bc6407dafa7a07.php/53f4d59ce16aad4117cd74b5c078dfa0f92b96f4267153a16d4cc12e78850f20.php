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
        return array (  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 35,  45 => 34,  39 => 32,  37 => 31,  34 => 30,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 48,  46 => 47,  41 => 46,  35 => 44,  32 => 43,  26 => 28,  24 => 26,  19 => 15,);
    }
}
