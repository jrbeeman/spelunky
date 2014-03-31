<?php

/* core/modules/system/templates/system-themes-page.html.twig */
class __TwigTemplate_cda3b17b6a4493e5f8b2c4b5862085008d39a2258d34b54ccb9b730983252e8a extends Twig_Template
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
        // line 29
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_groups"]) ? $context["theme_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 31
            echo "    <div";
            echo twig_render_var($this->getAttribute((isset($context["theme_group"]) ? $context["theme_group"] : null), "attributes"));
            echo ">
      <h2>";
            // line 32
            echo twig_render_var($this->getAttribute((isset($context["theme_group"]) ? $context["theme_group"] : null), "title"));
            echo "</h2>
      ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theme_group"]) ? $context["theme_group"] : null), "themes"));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 34
                echo "        <div";
                echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "attributes"));
                echo ">
          ";
                // line 35
                if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "screenshot")) {
                    // line 36
                    echo "            ";
                    echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "screenshot"));
                    echo "
          ";
                } else {
                    // line 38
                    echo "            <div class=\"no-screenshot\">
              <div class=\"no-screenshot__text\">";
                    // line 39
                    echo twig_render_var(t("no screenshot"));
                    echo "</div>
            </div>
          ";
                }
                // line 42
                echo "          <div class=\"theme-info\">
            <h3>";
                // line 44
                echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name"));
                echo " ";
                echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version"));
                // line 45
                if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "notes")) {
                    // line 46
                    echo "                (";
                    echo twig_render_var(twig_join_filter($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "notes"), ", "));
                    echo ")";
                }
                // line 48
                echo "</h3>
            <div class=\"theme-description\">";
                // line 49
                echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description"));
                echo "</div>
            ";
                // line 51
                echo "            ";
                if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "incompatible")) {
                    // line 52
                    echo "              <div class=\"incompatible\">";
                    echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "incompatible"));
                    echo "</div>
            ";
                } else {
                    // line 54
                    echo "              ";
                    echo twig_render_var($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "operations"));
                    echo "
            ";
                }
                // line 56
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  107 => 59,  99 => 56,  93 => 54,  87 => 52,  84 => 51,  80 => 49,  77 => 48,  72 => 46,  70 => 45,  66 => 44,  63 => 42,  57 => 39,  54 => 38,  48 => 36,  46 => 35,  41 => 34,  37 => 33,  33 => 32,  28 => 31,  24 => 30,  19 => 29,);
    }
}
