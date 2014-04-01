<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_380104df87aa265dddf58f864a5fee32fda5e519f5f4b69cb8b1f9188eb39598 extends Twig_Template
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
        // line 38
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 39
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 40
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level")) {
                    // line 41
                    echo "<";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level"));
                    echo ">";
                } else {
                    // line 43
                    echo "<h2";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text"));
                    echo "</h2>";
                }
            }
            // line 46
            echo "<ul";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "<li";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"));
                echo ">";
                // line 49
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                    // line 50
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"));
                } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes")) {
                    // line 52
                    echo "<span";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text_attributes"));
                    echo ">";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                    echo "</span>";
                } else {
                    // line 54
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"));
                }
                // line 56
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  21 => 39,  85 => 44,  79 => 43,  65 => 37,  47 => 47,  28 => 27,  51 => 48,  43 => 46,  36 => 29,  25 => 41,  23 => 40,  69 => 41,  61 => 39,  58 => 38,  52 => 36,  50 => 32,  45 => 34,  39 => 32,  37 => 31,  34 => 23,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 50,  54 => 33,  48 => 30,  46 => 29,  41 => 26,  35 => 43,  32 => 28,  26 => 28,  24 => 26,  19 => 38,);
    }
}
