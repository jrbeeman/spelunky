<?php

/* core/modules/datetime/templates/datetime-form.html.twig */
class __TwigTemplate_d23b33034e36539e975ebcf3480afa8d85a791c57ef005f247755203960942df extends Twig_Template
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
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 16
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  35 => 26,  29 => 23,  23 => 20,  19 => 15,);
    }
}
