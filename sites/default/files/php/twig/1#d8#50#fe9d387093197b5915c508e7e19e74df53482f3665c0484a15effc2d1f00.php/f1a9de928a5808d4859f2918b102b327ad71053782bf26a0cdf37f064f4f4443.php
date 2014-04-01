<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_d850fe9d387093197b5915c508e7e19e74df53482f3665c0484a15effc2d1f00 extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 25
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 24,  85 => 44,  79 => 43,  65 => 37,  47 => 47,  28 => 27,  51 => 48,  43 => 46,  36 => 29,  25 => 41,  23 => 40,  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 32,  45 => 34,  39 => 32,  37 => 31,  34 => 23,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 33,  48 => 30,  46 => 29,  41 => 26,  35 => 43,  32 => 28,  26 => 25,  24 => 26,  19 => 23,);
    }
}
