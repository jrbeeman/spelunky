<?php

/* core/modules/system/templates/status-report.html.twig */
class __TwigTemplate_4c690f013ff843a60ab30ea0820d1c5c5d00ca2eeea3c2a1997f005259761c9f extends Twig_Template
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
        // line 19
        echo "<table class=\"system-status-report\">
  <thead>
    <tr class=\"visually-hidden\">
      <th>";
        // line 22
        echo twig_render_var(t("Status"));
        echo "</th><th>";
        echo twig_render_var(t("Component"));
        echo "</th><th>";
        echo twig_render_var(t("Details"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) ? $context["requirements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 27
            echo "    <tr class=\"";
            echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_class"));
            echo "\">
      <td class=\"status-icon\">
        <div title=\"";
            // line 29
            echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_title"));
            echo "\">
          <span class=\"visually-hidden\">";
            // line 30
            echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_title"));
            echo "</span>
        </div>
      </td>
      <td class=\"status-title\">";
            // line 33
            echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "title"));
            echo "</td>
      <td class=\"status-value\">
        ";
            // line 35
            echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "value"));
            echo "
        ";
            // line 36
            if ($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "description")) {
                // line 37
                echo "          <div class=\"description\">";
                echo twig_render_var($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "description"));
                echo "</div>
        ";
            }
            // line 39
            echo "      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 42,  72 => 39,  66 => 37,  64 => 36,  60 => 35,  55 => 33,  49 => 30,  45 => 29,  39 => 27,  35 => 26,  24 => 22,  19 => 19,);
    }
}
