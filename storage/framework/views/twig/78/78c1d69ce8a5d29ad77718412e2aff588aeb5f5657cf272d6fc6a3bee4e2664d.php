<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/boolean-field_type/resources/views/switch.twig */
class __TwigTemplate_bb767b75605977dfe97057aba73088369ade2feec4cc78c5e2e13099f13ea52c extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.boolean::less/bootstrap-switch.less"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.boolean::js/bootstrap-switch.js"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.boolean::js/input.js"));
        echo "

<label>

    <input
            value=\"0\"
            type=\"hidden\"
            name=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\">

    <input
            type=\"checkbox\"
            name=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
            ";
        // line 15
        echo (($this->getAttribute(($context["field_type"] ?? null), "value", array())) ? ("checked") : (""));
        echo "
            data-on-text=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "on_text", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "on_text", array())) : ("anomaly.field_type.boolean::choice.yes")))), "html", null, true);
        echo "\"
            data-off-text=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "off_text", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "off_text", array())) : ("anomaly.field_type.boolean::choice.no")))), "html", null, true);
        echo "\"
            data-disabled=\"";
        // line 18
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("true") : ("false"));
        echo "\"
            data-on-color=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "on_color", array()), "html", null, true);
        echo "\"
            data-off-color=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "off_color", array()), "html", null, true);
        echo "\"
            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
            ";
        // line 22
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
            ";
        // line 23
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

    ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "label", array()))), "html", null, true);
        echo "
</label>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/switch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  37 => 10,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add('styles.css', 'anomaly.field_type.boolean::less/bootstrap-switch.less') }}
{{ asset_add('scripts.js', 'anomaly.field_type.boolean::js/bootstrap-switch.js') }}
{{ asset_add('scripts.js', 'anomaly.field_type.boolean::js/input.js') }}

<label>

    <input
            value=\"0\"
            type=\"hidden\"
            name=\"{{ field_type.input_name }}\">

    <input
            type=\"checkbox\"
            name=\"{{ field_type.input_name }}\"
            {{ field_type.value ? 'checked' }}
            data-on-text=\"{{ trans(field_type.config.on_text ?: 'anomaly.field_type.boolean::choice.yes') }}\"
            data-off-text=\"{{ trans(field_type.config.off_text ?: 'anomaly.field_type.boolean::choice.no') }}\"
            data-disabled=\"{{ field_type.disabled ? 'true' : 'false' }}\"
            data-on-color=\"{{ field_type.config.on_color }}\"
            data-off-color=\"{{ field_type.config.off_color }}\"
            {{ html_attributes(field_type.attributes) }}
            {{ field_type.disabled ? 'disabled' }}
            {{ field_type.readonly ? 'readonly' }}>

    {{ trans(field_type.config.label) }}
</label>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/switch.twig", "");
    }
}
