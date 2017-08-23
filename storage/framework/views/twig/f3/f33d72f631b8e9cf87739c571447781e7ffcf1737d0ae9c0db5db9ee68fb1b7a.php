<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/form/partials/filter.twig */
class __TwigTemplate_932a6ebb2f5e3699cdb3319c4bc6bd10fe0911d65381ed1824a7684ace96a052 extends TwigBridge\Twig\Template
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
        value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "getInputName", array(), "method"), "html", null, true);
        echo "\"
        class=\"form-control ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "class", array()), "html", null, true);
        echo "\"
        type=\"";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "type", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "type", array())) : ("text")), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        ";
        // line 7
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 8
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/partials/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
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
        value=\"{{ field_type.value }}\"
        name=\"{{ field_type.getInputName() }}\"
        class=\"form-control {{ field_type.class }}\"
        type=\"{{ field_type.config.type ?: 'text' }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/partials/filter.twig", "");
    }
}
