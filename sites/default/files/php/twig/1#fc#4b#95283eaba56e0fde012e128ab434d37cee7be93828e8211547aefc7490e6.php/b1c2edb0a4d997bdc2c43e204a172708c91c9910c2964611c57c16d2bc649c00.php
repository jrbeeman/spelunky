<?php

/* core/modules/system/templates/vertical-tabs.html.twig */
class __TwigTemplate_fc4b95283eaba56e0fde012e128ab434d37cee7be93828e8211547aefc7490e6 extends Twig_Template
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
        echo "<div data-vertical-tabs-panes";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 35,  45 => 34,  39 => 32,  37 => 31,  34 => 30,  26 => 28,  24 => 26,  19 => 15,);
    }
}
