<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/integer-field_type/resources/views/input.twig */
class __TwigTemplate_92a75d50e69495dd2f6d8ba944ddf055aa2c31405cb7e539f5a32d215ab33739 extends TwigBridge\Twig\Template
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
        echo "<input
        type=\"number\"
        class=\"form-control\"
        value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
        min=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "min", array()), "html", null, true);
        echo "\"
        max=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        step=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "step", array()), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        ";
        // line 10
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 11
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo "
        onhover=\"(function (e) {e.preventDefault();})(event);\">
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/integer-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input
        type=\"number\"
        class=\"form-control\"
        value=\"{{ field_type.value }}\"
        min=\"{{ field_type.config.min }}\"
        max=\"{{ field_type.config.max }}\"
        name=\"{{ field_type.input_name }}\"
        step=\"{{ field_type.config.step }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}
        onhover=\"(function (e) {e.preventDefault();})(event);\">
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/integer-field_type/resources/views/input.twig", "");
    }
}
