<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/boolean-field_type/resources/views/filter.twig */
class __TwigTemplate_f8654e75698057e344c4fcc0b49255c5a12e862cd2ac74fc76c3182e31a23800 extends TwigBridge\Twig\Template
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
        echo "\" ";
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo ">

    <option value=\"\" disabled ";
        // line 5
        echo (( !$this->getAttribute(($context["field_type"] ?? null), "value", array())) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "</option>

    <option value=\"false\" ";
        // line 7
        echo ((($this->getAttribute(($context["field_type"] ?? null), "value", array()) == "false")) ? ("selected") : (""));
        echo ">
        ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "off_text", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "off_text", array())) : ("anomaly.field_type.boolean::choice.no")))), "html", null, true);
        echo "
    </option>
    <option value=\"true\" ";
        // line 10
        echo ((($this->getAttribute(($context["field_type"] ?? null), "value", array()) == "true")) ? ("selected") : (""));
        echo ">
        ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "on_text", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "on_text", array())) : ("anomaly.field_type.boolean::choice.yes")))), "html", null, true);
        echo "
    </option>

</select>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  41 => 8,  37 => 7,  30 => 5,  23 => 3,  19 => 1,);
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
        name=\"{{ field_type.input_name }}\" {{ field_type.disabled ? 'disabled' }}>

    <option value=\"\" disabled {{ not field_type.value ? 'selected' }}>{{ trans(field_type.placeholder) }}</option>

    <option value=\"false\" {{ field_type.value == 'false' ? 'selected' }}>
        {{ trans(field_type.config.off_text ?: 'anomaly.field_type.boolean::choice.no') }}
    </option>
    <option value=\"true\" {{ field_type.value == 'true' ? 'selected' }}>
        {{ trans(field_type.config.on_text ?: 'anomaly.field_type.boolean::choice.yes') }}
    </option>

</select>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/filter.twig", "");
    }
}
