<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/multiple-field_type/resources/views/filter.twig */
class __TwigTemplate_4d3c25654a099f213358c83bf4e6ed9654a419c3af4e17d1ece40489cdf0d8bd extends TwigBridge\Twig\Template
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
        echo "<select
        class=\"custom-select form-control\"
        name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\">

    <option value=\"\" disabled ";
        // line 5
        echo (( !$this->getAttribute(($context["field_type"] ?? null), "value", array())) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "</option>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field_type"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["value"] => $context["option"]) {
            // line 8
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
            echo ((($context["value"] == $this->getAttribute(($context["field_type"] ?? null), "value", array()))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["option"])), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
</select>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/multiple-field_type/resources/views/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  39 => 8,  35 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<select
        class=\"custom-select form-control\"
        name=\"{{ field_type.input_name }}\">

    <option value=\"\" disabled {{ not field_type.value ? 'selected' }}>{{ trans(field_type.placeholder) }}</option>

    {% for value, option in field_type.options %}
        <option value=\"{{ value }}\" {{ value == field_type.value ? 'selected' }}>{{ trans(option) }}</option>
    {% endfor %}

</select>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/multiple-field_type/resources/views/filter.twig", "");
    }
}
