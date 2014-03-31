<?php

/* core/modules/filter/templates/filter-guidelines.html.twig */
class __TwigTemplate_ae41ee6ca639aa5199f8e7ebd0cac2fa2c37e832ac0d23ee87fd6e0bb518c1d2 extends Twig_Template
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
        // line 22
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  <h4 class=\"label\">";
        // line 23
        echo twig_render_var(twig_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "name")));
        echo "</h4>
  ";
        // line 24
        echo twig_render_var((isset($context["tips"]) ? $context["tips"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 24,  24 => 23,  19 => 22,);
    }
}
