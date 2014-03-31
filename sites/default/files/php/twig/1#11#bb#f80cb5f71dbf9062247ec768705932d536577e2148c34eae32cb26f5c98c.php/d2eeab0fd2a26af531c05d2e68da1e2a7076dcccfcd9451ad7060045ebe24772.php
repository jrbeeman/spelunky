<?php

/* core/modules/system/templates/admin-block-content.html.twig */
class __TwigTemplate_11bbf80cb5f71dbf9062247ec768705932d536577e2148c34eae32cb26f5c98c extends Twig_Template
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
        // line 18
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 19
            echo "  <dl";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "      <dt>";
                echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"));
                echo "</dt>
      ";
                // line 22
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description")) {
                    // line 23
                    echo "        <dd>";
                    echo twig_render_var($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"));
                    echo "</dd>
      ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  43 => 25,  37 => 23,  35 => 22,  30 => 21,  26 => 20,  21 => 19,  19 => 18,);
    }
}
