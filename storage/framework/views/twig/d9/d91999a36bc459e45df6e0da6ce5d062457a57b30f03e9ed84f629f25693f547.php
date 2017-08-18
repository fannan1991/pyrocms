<?php

/* streams::form/partials/fields */
class __TwigTemplate_7f0a6bc2af453452dd39770a962c1f4d265ee55e07c5045991cc1de48b543d7a extends TwigBridge\Twig\Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "    <div class=\"field-group ";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "translations", array(0 => $context["field"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 4
                echo "            ";
                echo $this->getAttribute($context["field"], "render", array(0 => array("form" => ($context["form"] ?? null))), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "streams::form/partials/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  32 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for field in fields %}
    <div class=\"field-group {{ field }}\">
        {% for field in form.fields.translations(field) %}
            {{ field.render({'form': form})|raw }}
        {% endfor %}
    </div>
{% endfor %}
", "streams::form/partials/fields", "");
    }
}
