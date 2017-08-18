<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/decimal-field_type/resources/views/input.twig */
class __TwigTemplate_759dc924b5b0724496b58b35eb60cfc3bee0e33c14cd48c54bfa3c79d7f0c585 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.decimal::js/input.js"));
        echo "

<input
        step=\"any\"
        type=\"number\"
        class=\"form-control\"
        name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        data-decimals=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "decimals", array()), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        value=\"";
        // line 10
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["field_type"] ?? null), "value", array()) != null)) ? (twig_number_format_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "decimals", array()), null, false)) : ("")), "html", null, true);
        echo "\"
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 12
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 13
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/decimal-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  28 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add('scripts.js', 'anomaly.field_type.decimal::js/input.js') }}

<input
        step=\"any\"
        type=\"number\"
        class=\"form-control\"
        name=\"{{ field_type.input_name }}\"
        data-decimals=\"{{ field_type.config.decimals }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        value=\"{{ field_type.value != null ? field_type.value|number_format(field_type.config.decimals, null, false) }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/decimal-field_type/resources/views/input.twig", "");
    }
}
