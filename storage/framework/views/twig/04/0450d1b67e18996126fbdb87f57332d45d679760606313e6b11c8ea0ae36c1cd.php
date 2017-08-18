<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/slug-field_type/resources/views/input.twig */
class __TwigTemplate_17ab85d175b63324d3e6e14762e3716c2e4704a34e3a050afacdc411c82f91a8 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.slug::js/jquery.slugify.js"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.slug::js/input.js"));
        echo "


<div class=\"";
        // line 5
        echo ((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "prefix", array()) || $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "suffix", array()))) ? ("input-group") : (""));
        echo "\">

    ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "prefix", array())) {
            // line 8
            echo "        <span class=\"input-group-addon\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "prefix", array()), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 12
        echo "
    <input
            type=\"text\"
            value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "\"
            name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
            data-type=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "type", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "placeholder", array()), "html", null, true);
        echo "\"
            data-slugify=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "slugify", array()), "html", null, true);
        echo "\"
            data-always_slugify=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "always_slugify", array()), "html", null, true);
        echo "\"
            data-lowercase=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "lowercase", array()), "html", null, true);
        echo "\"
            ";
        // line 22
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
            ";
        // line 23
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
            ";
        // line 24
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">


    ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "suffix", array())) {
            // line 28
            echo "        <span class=\"input-group-addon\">
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "suffix", array()), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 32
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/slug-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  97 => 29,  94 => 28,  92 => 27,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  45 => 12,  39 => 9,  36 => 8,  34 => 7,  29 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"anomaly.field_type.slug::js/jquery.slugify.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.slug::js/input.js\") }}


<div class=\"{{ field_type.config.prefix or field_type.config.suffix ? 'input-group' }}\">

    {% if field_type.config.prefix %}
        <span class=\"input-group-addon\">
            {{ field_type.config.prefix }}
        </span>
    {% endif %}

    <input
            type=\"text\"
            value=\"{{ field_type.value }}\"
            name=\"{{ field_type.input_name }}\"
            data-type=\"{{ field_type.config.type }}\"
            placeholder=\"{{ field_type.placeholder }}\"
            data-slugify=\"{{ field_type.config.slugify }}\"
            data-always_slugify=\"{{ field_type.config.always_slugify }}\"
            data-lowercase=\"{{ field_type.config.lowercase }}\"
            {{ html_attributes(field_type.attributes) }}
            {{ field_type.disabled ? 'disabled' }}
            {{ field_type.readonly ? 'readonly' }}>


    {% if field_type.config.suffix %}
        <span class=\"input-group-addon\">
            {{ field_type.config.suffix }}
        </span>
    {% endif %}


</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/slug-field_type/resources/views/input.twig", "");
    }
}
