<?php

/* core/modules/system/templates/fieldset.html.twig */
class __TwigTemplate_c9a8a4348a420582b6b378f9f61431a86883310e343e5d7351a3af852827efb9 extends Twig_Template
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
        // line 25
        echo "<fieldset";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 26
        if (((!twig_test_empty($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title"))) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 28
            echo "    <legend";
            echo twig_render_var($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes"));
            echo "><span class=\"fieldset-legend\">";
            echo twig_render_var($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title"));
            echo twig_render_var((isset($context["required"]) ? $context["required"] : null));
            echo "</span></legend>";
        }
        // line 30
        echo "  <div class=\"fieldset-wrapper\">
    ";
        // line 31
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 32
            echo "      <span class=\"field-prefix\">";
            echo twig_render_var((isset($context["prefix"]) ? $context["prefix"] : null));
            echo "</span>
    ";
        }
        // line 34
        echo "    ";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "
    ";
        // line 35
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 36
            echo "      <span class=\"field-suffix\">";
            echo twig_render_var((isset($context["suffix"]) ? $context["suffix"] : null));
            echo "</span>
    ";
        }
        // line 38
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content")) {
            // line 39
            echo "      <div";
            echo twig_render_var($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"));
            echo ">";
            echo twig_render_var($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"));
            echo "</div>
    ";
        }
        // line 41
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 35,  45 => 34,  39 => 32,  37 => 31,  34 => 30,  26 => 28,  24 => 26,  19 => 25,);
    }
}
