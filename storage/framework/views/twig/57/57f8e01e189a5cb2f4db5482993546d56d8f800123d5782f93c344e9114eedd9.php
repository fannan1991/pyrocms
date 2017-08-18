<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/datetime-field_type/resources/views/picker.twig */
class __TwigTemplate_abec78aed722d1e33bb1e04c40bafdd0c103b712b9f5d6009dcb4b03d649fa1b extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.datetime::js/flatpickr.min.js"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.datetime::scss/flatpicker.scss"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.datetime::scss/light.scss"));
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.datetime::js/picker.js"));
        echo "

<div class=\"input-group\">

    <input
            type=\"text\"
            class=\"form-control\"
            name=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
            data-step=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "step", array()), "html", null, true);
        echo "\"
            data-input-mode=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "mode", array()), "html", null, true);
        echo "\"
            value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "format", array(0 => $this->getAttribute(($context["field_type"] ?? null), "datetime_format", array())), "method"), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", $this->getAttribute(($context["field_type"] ?? null), "datetime_format", array())), "html", null, true);
        echo "\"
            data-datetime-format=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "plugin_format", array()), "html", null, true);
        echo "\"
            ";
        // line 17
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
            ";
        // line 18
        echo (($this->getAttribute(($context["field_type"] ?? null), "required", array())) ? ("required") : (""));
        echo "
            ";
        // line 19
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
            ";
        // line 20
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

    ";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "mode", array()) != "date")) {
            // line 23
            echo "        <span class=\"input-group-addon\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "timezone", array()), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 27
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/datetime-field_type/resources/views/picker.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"anomaly.field_type.datetime::js/flatpickr.min.js\") }}
{{ asset_add(\"styles.css\", \"anomaly.field_type.datetime::scss/flatpicker.scss\") }}
{{ asset_add(\"styles.css\", \"anomaly.field_type.datetime::scss/light.scss\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.datetime::js/picker.js\") }}

<div class=\"input-group\">

    <input
            type=\"text\"
            class=\"form-control\"
            name=\"{{ field_type.input_name }}\"
            data-step=\"{{ field_type.config.step }}\"
            data-input-mode=\"{{ field_type.config.mode }}\"
            value=\"{{ field_type.format(field_type.datetime_format) }}\"
            placeholder=\"{{ 'now'|date(field_type.datetime_format) }}\"
            data-datetime-format=\"{{ field_type.plugin_format }}\"
            {{ html_attributes(field_type.attributes) }}
            {{ field_type.required ? 'required' }}
            {{ field_type.disabled ? 'disabled' }}
            {{ field_type.readonly ? 'readonly' }}>

    {% if field_type.config.mode != 'date' %}
        <span class=\"input-group-addon\">
            {{ field_type.config.timezone }}
        </span>
    {% endif %}

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/datetime-field_type/resources/views/picker.twig", "");
    }
}
