<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_f2fc3c4e85d93e57f45dec0c5a6194071edb2640096fe4a6fe1ceb567fc2331a extends Twig_Template
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
        echo "<form";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo "><div>";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "</div></form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 32,  43 => 27,  36 => 24,  25 => 20,  23 => 19,  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 35,  45 => 34,  39 => 32,  37 => 31,  34 => 23,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 30,  46 => 29,  41 => 26,  35 => 44,  32 => 22,  26 => 28,  24 => 26,  19 => 15,);
    }
}
