<?php

/* core/modules/views/templates/views-view.html.twig */
class __TwigTemplate_fb9e15899c82066afe101d70cd8ac14edb2407827cbc7b5b8f1f042c448b74c8 extends Twig_Template
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
        // line 40
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 41
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 42
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 43
            echo "    ";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "
  ";
        }
        // line 45
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
  ";
        // line 46
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 47
            echo "    <div class=\"view-header\">
      ";
            // line 48
            echo twig_render_var((isset($context["header"]) ? $context["header"] : null));
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 52
            echo "    <div class=\"view-filters\">
      ";
            // line 53
            echo twig_render_var((isset($context["exposed"]) ? $context["exposed"] : null));
            echo "
    </div>
  ";
        }
        // line 56
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 57
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 58
            echo twig_render_var((isset($context["attachment_before"]) ? $context["attachment_before"] : null));
            echo "
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 63
            echo "    <div class=\"view-content\">
      ";
            // line 64
            echo twig_render_var((isset($context["rows"]) ? $context["rows"] : null));
            echo "
    </div>
  ";
        } elseif ((isset($context["empty"]) ? $context["empty"] : null)) {
            // line 67
            echo "    <div class=\"view-empty\">
      ";
            // line 68
            echo twig_render_var((isset($context["empty"]) ? $context["empty"] : null));
            echo "
    </div>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 73
            echo "    ";
            echo twig_render_var((isset($context["pager"]) ? $context["pager"] : null));
            echo "
  ";
        }
        // line 75
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 76
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 77
            echo twig_render_var((isset($context["attachment_after"]) ? $context["attachment_after"] : null));
            echo "
    </div>
  ";
        }
        // line 80
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 81
            echo "    ";
            echo twig_render_var((isset($context["more"]) ? $context["more"] : null));
            echo "
  ";
        }
        // line 83
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 84
            echo "    <div class=\"view-footer\">
      ";
            // line 85
            echo twig_render_var((isset($context["footer"]) ? $context["footer"] : null));
            echo "
    </div>
  ";
        }
        // line 88
        echo "  ";
        if ((isset($context["feed_icon"]) ? $context["feed_icon"] : null)) {
            // line 89
            echo "    <div class=\"feed-icon\">
      ";
            // line 90
            echo twig_render_var((isset($context["feed_icon"]) ? $context["feed_icon"] : null));
            echo "
    </div>
  ";
        }
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  131 => 83,  122 => 80,  113 => 76,  110 => 75,  102 => 72,  93 => 68,  84 => 64,  79 => 62,  76 => 61,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  41 => 46,  36 => 45,  30 => 43,  28 => 42,  141 => 70,  134 => 84,  125 => 81,  120 => 64,  116 => 77,  111 => 62,  107 => 61,  104 => 73,  99 => 71,  90 => 67,  85 => 53,  81 => 63,  77 => 50,  74 => 49,  70 => 58,  66 => 45,  60 => 43,  57 => 42,  51 => 40,  49 => 39,  46 => 48,  43 => 47,  37 => 35,  31 => 33,  29 => 32,  26 => 31,  24 => 41,  19 => 40,);
    }
}
