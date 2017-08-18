<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/boolean-field_type/resources/views/checkbox.twig */
class __TwigTemplate_18b96665efe375de7d32fa83d1c9f99402dc7795bcaf58e241476835b84c5690 extends TwigBridge\Twig\Template
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
        echo "<div class=\"c-inputs-stacked\">

    <label class=\"c-input c-checkbox\">

        <input
                value=\"0\"
                type=\"hidden\"
                name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\">
        
        <input
                type=\"checkbox\"
                name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
                ";
        // line 13
        echo (($this->getAttribute(($context["field_type"] ?? null), "value", array())) ? ("checked") : (""));
        echo "
                ";
        // line 14
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo "
                ";
        // line 15
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo ">

        <span class=\"c-indicator\"></span>

        ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "label", array()))), "html", null, true);
        echo "
    </label>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"c-inputs-stacked\">

    <label class=\"c-input c-checkbox\">

        <input
                value=\"0\"
                type=\"hidden\"
                name=\"{{ field_type.input_name }}\">
        
        <input
                type=\"checkbox\"
                name=\"{{ field_type.input_name }}\"
                {{ field_type.value ? 'checked' }}
                {{ field_type.readonly ? 'readonly' }}
                {{ field_type.disabled ? 'disabled' }}>

        <span class=\"c-indicator\"></span>

        {{ trans(field_type.config.label) }}
    </label>

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/boolean-field_type/resources/views/checkbox.twig", "");
    }
}
