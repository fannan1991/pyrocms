<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/select-field_type/resources/views/dropdown.twig */
class __TwigTemplate_323e57385ac5254fb2f053816b8da894ffe17648b61090ceb3aa32473335facb extends TwigBridge\Twig\Template
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
        name=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 4
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 5
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

    ";
        // line 7
        if ($this->getAttribute(($context["field_type"] ?? null), "placeholder", array())) {
            // line 8
            echo "        <option value=\"\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
            echo "</option>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field_type"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["value"] => $context["option"]) {
            // line 12
            echo "        ";
            if (twig_test_iterable($context["option"])) {
                // line 13
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["value"])), "html", null, true);
                echo "\">
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["value"] => $context["option"]) {
                    // line 15
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo ((($context["value"] == $this->getAttribute(($context["field_type"] ?? null), "key", array()))) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["option"])), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </optgroup>
        ";
            } else {
                // line 19
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
                echo ((($context["value"] == $this->getAttribute(($context["field_type"] ?? null), "key", array()))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["option"])), "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
</select>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/select-field_type/resources/views/dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  93 => 21,  83 => 19,  79 => 17,  66 => 15,  62 => 14,  57 => 13,  54 => 12,  50 => 11,  47 => 10,  41 => 8,  39 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
        name=\"{{ field_type.input_name }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>

    {% if field_type.placeholder %}
        <option value=\"\">{{ trans(field_type.placeholder) }}</option>
    {% endif %}

    {% for value, option in field_type.options %}
        {% if option is iterable %}
            <optgroup label=\"{{ trans(value) }}\">
                {% for value, option in option %}
                    <option value=\"{{ value }}\" {{ value == field_type.key ? 'selected' }}>{{ trans(option) }}</option>
                {% endfor %}
            </optgroup>
        {% else %}
            <option value=\"{{ value }}\" {{ value == field_type.key ? 'selected' }}>{{ trans(option) }}</option>
        {% endif %}
    {% endfor %}

</select>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/select-field_type/resources/views/dropdown.twig", "");
    }
}
