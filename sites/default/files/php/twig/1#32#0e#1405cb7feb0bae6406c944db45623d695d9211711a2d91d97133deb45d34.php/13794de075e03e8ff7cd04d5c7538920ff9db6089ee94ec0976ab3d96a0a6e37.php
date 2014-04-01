<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_320e1405cb7feb0bae6406c944db45623d695d9211711a2d91d97133deb45d34 extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\">
    <h2 class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("You are here"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>";
                echo twig_render_var((isset($context["item"]) ? $context["item"] : null));
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 17,  112 => 107,  104 => 103,  98 => 100,  95 => 99,  92 => 98,  86 => 95,  83 => 94,  80 => 93,  74 => 91,  72 => 90,  62 => 85,  56 => 83,  42 => 19,  40 => 75,  29 => 16,  27 => 71,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 13,  85 => 44,  79 => 43,  65 => 86,  47 => 47,  28 => 27,  51 => 48,  43 => 46,  36 => 29,  25 => 41,  23 => 70,  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 32,  45 => 34,  39 => 32,  37 => 31,  34 => 23,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 82,  48 => 78,  46 => 29,  41 => 26,  35 => 74,  32 => 28,  26 => 25,  24 => 14,  19 => 12,);
    }
}
