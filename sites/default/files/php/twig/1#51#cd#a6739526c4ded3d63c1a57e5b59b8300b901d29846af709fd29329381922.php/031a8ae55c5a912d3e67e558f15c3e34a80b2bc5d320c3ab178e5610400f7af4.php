<?php

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_51cda6739526c4ded3d63c1a57e5b59b8300b901d29846af709fd29329381922 extends Twig_Template
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
        // line 74
        echo "<article id=\"node-";
        echo twig_render_var($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id"));
        echo "\" class=\"";
        echo twig_render_var($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class"));
        echo " clearfix\"";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo " role=\"article\">

  <header>
    ";
        // line 77
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
    ";
        // line 78
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 79
            echo "      <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">
        <a href=\"";
            // line 80
            echo twig_render_var((isset($context["node_url"]) ? $context["node_url"] : null));
            echo "\">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</a>
      </h2>
    ";
        }
        // line 83
        echo "    ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

    ";
        // line 85
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 86
            echo "      <div class=\"meta submitted\">
        ";
            // line 87
            echo twig_render_var((isset($context["user_picture"]) ? $context["user_picture"] : null));
            echo "
        ";
            // line 88
            echo twig_render_var((isset($context["submitted"]) ? $context["submitted"] : null));
            echo "
      </div>
    ";
        }
        // line 91
        echo "  </header>

  <div class=\"content clearfix\"";
        // line 93
        echo twig_render_var((isset($context["content_attributes"]) ? $context["content_attributes"] : null));
        echo ">
    ";
        // line 94
        echo twig_render_var(twig_without((isset($context["content"]) ? $context["content"] : null), "links"));
        echo "
  </div>

  ";
        // line 97
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links")) {
            // line 98
            echo "    <footer class=\"link-wrapper\">
      ";
            // line 99
            echo twig_render_var($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"));
            echo "
    </footer>
  ";
        }
        // line 102
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 102,  89 => 99,  86 => 98,  84 => 97,  78 => 94,  74 => 93,  70 => 91,  64 => 88,  60 => 87,  57 => 86,  55 => 85,  49 => 83,  41 => 80,  36 => 79,  34 => 78,  30 => 77,  19 => 74,);
    }
}
