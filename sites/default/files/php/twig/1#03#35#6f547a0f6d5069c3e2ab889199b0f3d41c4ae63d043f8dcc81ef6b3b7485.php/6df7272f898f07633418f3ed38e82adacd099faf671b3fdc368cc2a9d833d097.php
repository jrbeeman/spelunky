<?php

/* core/modules/system/templates/details.html.twig */
class __TwigTemplate_03356f547a0f6d5069c3e2ab889199b0f3d41c4ae63d043f8dcc81ef6b3b7485 extends Twig_Template
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
        echo "<details";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 20
            echo "<summary";
            echo twig_render_var((isset($context["summary_attributes"]) ? $context["summary_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</summary>";
        }
        // line 22
        echo "<div class=\"details-wrapper\">";
        // line 23
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 24
            echo "<div class=\"details-description\">";
            echo twig_render_var((isset($context["description"]) ? $context["description"] : null));
            echo "</div>";
        }
        // line 26
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 27
            echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        }
        // line 29
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 30
            echo twig_render_var((isset($context["value"]) ? $context["value"] : null));
        }
        // line 32
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 32,  43 => 27,  36 => 24,  25 => 20,  23 => 19,  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 35,  45 => 34,  39 => 32,  37 => 31,  34 => 23,  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 30,  46 => 29,  41 => 26,  35 => 44,  32 => 22,  26 => 28,  24 => 26,  19 => 18,);
    }
}
