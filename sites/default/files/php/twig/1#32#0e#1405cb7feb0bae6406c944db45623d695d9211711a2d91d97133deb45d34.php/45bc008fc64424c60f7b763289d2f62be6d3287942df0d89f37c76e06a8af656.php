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
        return array (  42 => 19,  33 => 17,  81 => 46,  74 => 43,  68 => 41,  64 => 39,  45 => 34,  39 => 32,  354 => 209,  348 => 206,  345 => 205,  343 => 204,  340 => 203,  334 => 200,  330 => 199,  326 => 198,  322 => 197,  319 => 196,  317 => 195,  312 => 192,  306 => 189,  302 => 188,  298 => 187,  295 => 186,  293 => 185,  288 => 182,  282 => 179,  279 => 178,  277 => 177,  274 => 176,  268 => 173,  265 => 172,  263 => 171,  257 => 168,  252 => 167,  246 => 164,  243 => 163,  241 => 162,  236 => 161,  230 => 158,  227 => 157,  225 => 156,  220 => 155,  214 => 152,  211 => 151,  209 => 150,  205 => 149,  202 => 148,  196 => 147,  190 => 144,  186 => 142,  180 => 139,  177 => 138,  175 => 137,  172 => 136,  166 => 133,  163 => 132,  161 => 131,  157 => 129,  151 => 126,  148 => 125,  146 => 124,  141 => 122,  138 => 121,  134 => 119,  128 => 116,  121 => 115,  119 => 114,  116 => 113,  113 => 112,  103 => 109,  96 => 108,  93 => 107,  83 => 103,  75 => 101,  72 => 100,  61 => 97,  58 => 96,  38 => 90,  29 => 16,  27 => 85,  76 => 58,  70 => 99,  67 => 54,  60 => 52,  55 => 37,  85 => 44,  79 => 43,  65 => 37,  50 => 93,  47 => 47,  28 => 27,  43 => 92,  36 => 31,  34 => 23,  77 => 44,  71 => 39,  66 => 54,  63 => 98,  57 => 50,  54 => 33,  48 => 35,  46 => 29,  35 => 43,  26 => 25,  24 => 14,  59 => 35,  56 => 33,  51 => 36,  41 => 91,  37 => 28,  32 => 29,  30 => 28,  25 => 41,  23 => 27,  21 => 13,  19 => 12,);
    }
}
