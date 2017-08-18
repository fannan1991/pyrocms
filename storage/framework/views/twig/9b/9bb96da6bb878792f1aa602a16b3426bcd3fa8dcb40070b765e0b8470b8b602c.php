<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/checkboxes-field_type/resources/views/checkboxes.twig */
class __TwigTemplate_650f3d0e7006d0211d55e4d5432bd5261eb4b83ca0929313616cfd546d2b0d52 extends TwigBridge\Twig\Template
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
        echo "<div class=\"custom-inputs-stacked\">

    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field_type"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["value"] => $context["option"]) {
            // line 4
            echo "
        ";
            // line 5
            if (twig_test_iterable($context["option"])) {
                // line 6
                echo "            <p>
                <strong> ";
                // line 7
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["value"])), "html", null, true);
                echo " </strong>

                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["value"] => $context["option"]) {
                    // line 10
                    echo "                    <label class=\"";
                    echo " custom-checkbox\" style=\"display: block;\">
                        <input
                                type=\"checkbox\"
                                value=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
                                name=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
                    echo "[]\"
                                ";
                    // line 15
                    echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
                    echo "
                                ";
                    // line 16
                    echo ((twig_in_filter($context["value"], $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "disabled", array()))) ? ("disabled") : (""));
                    echo "
                                ";
                    // line 17
                    echo ((twig_in_filter($context["value"], $this->getAttribute(($context["field_type"] ?? null), "value", array()))) ? ("checked") : (""));
                    echo ">

                        <span class=\"";
                    // line 19
                    echo "\"></span>

                        ";
                    // line 21
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["option"])), "html", null, true);
                    echo "
                    </label>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            </p>
        ";
            } else {
                // line 26
                echo "            <label class=\"";
                echo " custom-checkbox\" style=\"display: block;\">
                <input
                        type=\"checkbox\"
                        value=\"";
                // line 29
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
                        name=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
                echo "[]\"
                        ";
                // line 31
                echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
                echo "
                        ";
                // line 32
                echo ((twig_in_filter($context["value"], $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "disabled", array()))) ? ("disabled") : (""));
                echo "
                        ";
                // line 33
                echo ((twig_in_filter($context["value"], $this->getAttribute(($context["field_type"] ?? null), "value", array()))) ? ("checked") : (""));
                echo ">

                <span class=\"";
                // line 35
                echo "\"></span>

                ";
                // line 37
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["option"])), "html", null, true);
                echo "
            </label>
        ";
            }
            // line 40
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/checkboxes-field_type/resources/views/checkboxes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  125 => 40,  119 => 37,  115 => 35,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  88 => 26,  84 => 24,  75 => 21,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  44 => 10,  40 => 9,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"custom-inputs-stacked\">

    {% for value, option in field_type.options %}

        {% if option is iterable %}
            <p>
                <strong> {{ trans(value) }} </strong>

                {% for value, option in option %}
                    <label class=\"{#custom-control#} custom-checkbox\" style=\"display: block;\">
                        <input
                                type=\"checkbox\"
                                value=\"{{ value }}\"
                                name=\"{{ field_type.input_name }}[]\"
                                {{ field_type.disabled ? 'disabled' }}
                                {{ value in field_type.config.disabled ? 'disabled' }}
                                {{ value in field_type.value ? 'checked' }}>

                        <span class=\"{#custom-control-indicator#}\"></span>

                        {{ trans(option) }}
                    </label>
                {% endfor %}
            </p>
        {% else %}
            <label class=\"{#custom-control#} custom-checkbox\" style=\"display: block;\">
                <input
                        type=\"checkbox\"
                        value=\"{{ value }}\"
                        name=\"{{ field_type.input_name }}[]\"
                        {{ field_type.disabled ? 'disabled' }}
                        {{ value in field_type.config.disabled ? 'disabled' }}
                        {{ value in field_type.value ? 'checked' }}>

                <span class=\"{#custom-control-indicator#}\"></span>

                {{ trans(option) }}
            </label>
        {% endif %}

    {% endfor %}

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/checkboxes-field_type/resources/views/checkboxes.twig", "");
    }
}
