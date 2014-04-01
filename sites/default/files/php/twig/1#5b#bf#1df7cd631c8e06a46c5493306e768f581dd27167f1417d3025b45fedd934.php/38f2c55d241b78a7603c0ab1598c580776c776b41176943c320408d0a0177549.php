<?php

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_5bbf1df7cd631c8e06a46c5493306e768f581dd27167f1417d3025b45fedd934 extends Twig_Template
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
        // line 39
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 40
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 41
            echo "    ";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "
  ";
        }
        // line 43
        echo "  ";
        if ((!twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)))) {
            // line 44
            echo "    <span class=\"field-prefix\">";
            echo twig_render_var((isset($context["prefix"]) ? $context["prefix"] : null));
            echo "</span>
  ";
        }
        // line 46
        echo "  ";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
  ";
        // line 47
        if ((!twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 48
            echo "    <span class=\"field-suffix\">";
            echo twig_render_var((isset($context["suffix"]) ? $context["suffix"] : null));
            echo "</span>
  ";
        }
        // line 50
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 51
            echo "    ";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "
  ";
        }
        // line 53
        echo "  ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content")) {
            // line 54
            echo "    <div";
            echo twig_render_var($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"));
            echo ">
      ";
            // line 55
            echo twig_render_var($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"));
            echo "
    </div>
  ";
        }
        // line 58
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  48 => 48,  46 => 47,  41 => 46,  35 => 44,  32 => 43,  26 => 41,  24 => 40,  19 => 39,);
    }
}
