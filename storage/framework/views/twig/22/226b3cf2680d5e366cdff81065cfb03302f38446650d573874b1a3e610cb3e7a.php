<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/country-field_type/resources/views/input.twig */
class __TwigTemplate_9fe0a225155852fb22308e08911d077a955ccbbb58e7f30b7df50a7f15af69e6 extends TwigBridge\Twig\Template
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
        type=\"text\"
        maxlength=\"2\"
        value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "getInputName", array(), "method"), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 8
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 9
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/country-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
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
        type=\"text\"
        maxlength=\"2\"
        value=\"{{ field_type.value }}\"
        name=\"{{ field_type.getInputName() }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/country-field_type/resources/views/input.twig", "");
    }
}
