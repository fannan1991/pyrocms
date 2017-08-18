<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/url-field_type/resources/views/input.twig */
class __TwigTemplate_645b564e222abfe93f12b154d5846252ecb0213c3b6708bec8369c8b68600c6d extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.url::js/input.js"));
        echo "

<input
        type=\"url\"
        value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array())))) ? (call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array())))) : ("http://")), "html", null, true);
        echo "\"
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 9
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 10
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/url-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"anomaly.field_type.url::js/input.js\") }}

<input
        type=\"url\"
        value=\"{{ field_type.value }}\"
        name=\"{{ field_type.input_name }}\"
        placeholder=\"{{ trans(field_type.placeholder) ?: 'http://' }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/url-field_type/resources/views/input.twig", "");
    }
}
