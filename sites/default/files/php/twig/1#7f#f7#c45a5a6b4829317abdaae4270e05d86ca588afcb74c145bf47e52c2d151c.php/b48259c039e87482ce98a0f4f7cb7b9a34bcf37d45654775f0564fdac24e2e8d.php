<?php

/* core/modules/datetime/templates/datetime-wrapper.html.twig */
class __TwigTemplate_7ff7c45a5a6b4829317abdaae4270e05d86ca588afcb74c145bf47e52c2d151c extends Twig_Template
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
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "  <h4 class=\"label\">
    ";
            // line 20
            echo t("!title!required", array("!title" => (isset($context["title"]) ? $context["title"] : null), "!required" => (isset($context["required"]) ? $context["required"] : null), ));
            // line 21
            echo "  </h4>
";
        }
        // line 23
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
";
        // line 24
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 25
            echo "  <div class=\"description\">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 25,  34 => 24,  26 => 21,  22 => 14,  106 => 50,  104 => 49,  101 => 48,  95 => 47,  91 => 45,  89 => 44,  86 => 43,  82 => 41,  71 => 39,  67 => 38,  64 => 37,  62 => 36,  59 => 35,  54 => 33,  49 => 32,  46 => 31,  42 => 30,  39 => 29,  32 => 26,  30 => 23,  27 => 24,  21 => 19,  28 => 16,  24 => 20,  35 => 27,  29 => 23,  23 => 20,  19 => 18,);
    }
}
