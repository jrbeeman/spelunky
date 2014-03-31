<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_4571dd1d6f737114de24197f7957b7430a5eeb7d3c08985085a45c6a8d86ca19 extends Twig_Template
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
        // line 68
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"branding__inner\">
      ";
        // line 70
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
      ";
        // line 71
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 72
            echo "        <h1 class=\"page-title\">";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h1>
      ";
        }
        // line 74
        echo "      ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "
      ";
        // line 75
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 76
            echo "        ";
            echo twig_render_var((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null));
            echo "
      ";
        }
        // line 78
        echo "    </div>
  </header>

  <div id=\"page\">
    ";
        // line 82
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 83
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_render_var((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null));
            echo "</div>
    ";
        }
        // line 85
        echo "
    ";
        // line 86
        echo twig_render_var((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\"></a></div>
      ";
        // line 90
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 91
            echo "        <div id=\"console\" class=\"clearfix\">";
            echo twig_render_var((isset($context["messages"]) ? $context["messages"] : null));
            echo "</div>
      ";
        }
        // line 93
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 94
            echo "        <div id=\"help\">
          ";
            // line 95
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"));
            echo "
        </div>
      ";
        }
        // line 98
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 99
            echo "        <ul class=\"action-links\">
          ";
            // line 100
            echo twig_render_var((isset($context["action_links"]) ? $context["action_links"] : null));
            echo "
        </ul>
      ";
        }
        // line 103
        echo "      ";
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
    </main>

    <footer id=\"footer\" role=\"contentinfo\">
      ";
        // line 107
        echo twig_render_var((isset($context["feed_icons"]) ? $context["feed_icons"] : null));
        echo "
    </footer>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 107,  104 => 103,  98 => 100,  95 => 99,  92 => 98,  86 => 95,  83 => 94,  80 => 93,  74 => 91,  72 => 90,  65 => 86,  62 => 85,  56 => 83,  54 => 82,  48 => 78,  42 => 76,  40 => 75,  35 => 74,  29 => 72,  27 => 71,  23 => 70,  19 => 68,);
    }
}
