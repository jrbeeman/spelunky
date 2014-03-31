<?php

/* core/modules/system/templates/progress-bar.html.twig */
class __TwigTemplate_9c85bc14cb5c60306f9dcf268c57e9f8fa77c62d93c59f872594597357af0b1c extends Twig_Template
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
        // line 16
        echo "<div class=\"progress\" data-drupal-progress>
  ";
        // line 17
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 18
            echo "    <div class=\"progress__label\">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</div>
  ";
        }
        // line 20
        echo "  <div class=\"progress__track\"><div class=\"progress__bar\" style=\"width: ";
        echo twig_render_var((isset($context["percent"]) ? $context["percent"] : null));
        echo "%\"></div></div>
  <div class=\"progress__percentage\">";
        // line 21
        echo twig_render_var((isset($context["percent"]) ? $context["percent"] : null));
        echo "%</div>
  <div class=\"progress__description\">";
        // line 22
        echo twig_render_var((isset($context["message"]) ? $context["message"] : null));
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/progress-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  35 => 21,  30 => 20,  24 => 18,  22 => 17,  19 => 16,);
    }
}
