<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/text-field_type/resources/views/input.twig */
class __TwigTemplate_0a99015d5b38327d3c6c3ca0fc05b981fc95ed04b1e2d3aac013c61df6197af9 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.text::js/jquery.charactercounter.js"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.text::js/jquery.mask.min.js"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.text::js/input.js"));
        echo "

<input
        value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "getInputName", array(), "method"), "html", null, true);
        echo "\"
        data-max=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array()), "html", null, true);
        echo "\"
        type=\"";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "type", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "type", array())) : ("text")), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        data-suggested=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "suggested", array()), "html", null, true);
        echo "\"
        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 13
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 14
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

";
        // line 16
        if (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array()) && $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "show_counter", array()))) {
            // line 17
            echo "    <small class=\"counter text-muted\">
        <span class=\"count\"></span> ";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.text::input.characters_remaining")), "html", null, true);
            echo "
    </small>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/text-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  72 => 17,  70 => 16,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"anomaly.field_type.text::js/jquery.charactercounter.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.text::js/jquery.mask.min.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.text::js/input.js\") }}

<input
        value=\"{{ field_type.value }}\"
        name=\"{{ field_type.getInputName() }}\"
        data-max=\"{{ field_type.config.max }}\"
        type=\"{{ field_type.config.type ?: 'text' }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        data-suggested=\"{{ field_type.config.suggested }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>

{% if field_type.config.max and field_type.config.show_counter %}
    <small class=\"counter text-muted\">
        <span class=\"count\"></span> {{ trans('anomaly.field_type.text::input.characters_remaining') }}
    </small>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/text-field_type/resources/views/input.twig", "");
    }
}
