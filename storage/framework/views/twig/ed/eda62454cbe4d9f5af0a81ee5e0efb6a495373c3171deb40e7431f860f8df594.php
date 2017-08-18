<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/textarea-field_type/resources/views/input.twig */
class __TwigTemplate_61c85080b8b20e0825692ee5355ed0cf72d543109a0598ad7bb0ea97a3ab5b0b extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.textarea::js/jquery.charactercounter.js"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.textarea::js/input.js"));
        echo "

<textarea
        name=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        data-max=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array()), "html", null, true);
        echo "\"
        rows=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "rows", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "rows", array())) : (6)), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"

        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array())) {
            // line 11
            echo "        maxlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array()), "html", null, true);
            echo "\"
        ";
        }
        // line 13
        echo "        
        ";
        // line 14
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 15
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 16
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "</textarea>

";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "max", array())) {
            // line 19
            echo "    <small class=\"counter text-muted\">
        <span class=\"count\"></span> ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.textarea::input.characters_remaining")), "html", null, true);
            echo "
    </small>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/textarea-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  72 => 18,  65 => 16,  61 => 15,  57 => 14,  54 => 13,  48 => 11,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"anomaly.field_type.textarea::js/jquery.charactercounter.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.textarea::js/input.js\") }}

<textarea
        name=\"{{ field_type.input_name }}\"
        data-max=\"{{ field_type.config.max }}\"
        rows=\"{{ field_type.config.rows ?: 6 }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"

        {% if field_type.config.max %}
        maxlength=\"{{ field_type.config.max }}\"
        {% endif %}
        
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>{{ field_type.value }}</textarea>

{% if field_type.config.max %}
    <small class=\"counter text-muted\">
        <span class=\"count\"></span> {{ trans('anomaly.field_type.textarea::input.characters_remaining') }}
    </small>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/textarea-field_type/resources/views/input.twig", "");
    }
}
