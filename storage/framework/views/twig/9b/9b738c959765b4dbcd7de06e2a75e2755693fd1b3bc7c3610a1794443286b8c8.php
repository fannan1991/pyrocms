<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/tags-field_type/resources/views/input.twig */
class __TwigTemplate_644686ac0a005d2db820bbcd6e18186ee937a4284ca817ec990cc5bcf577382d extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.tags::less/tagsinput.less"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.tags::js/bootstrap-tagsinput.min.js"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.tags::js/bootstrap3-typeahead.min.js"));
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.tags::js/input.js"));
        echo "

<input
        class=\"form-control\"
        name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["field_type"] ?? null), "value", array()), ","), "html", null, true);
        echo "\"
        placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        data-options=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["field_type"] ?? null), "options", array()), ","), "html", null, true);
        echo "\"
        data-free_input=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "free_input", array()), "html", null, true);
        echo "\"
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 14
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 15
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

<small class=\"text-muted\">
    ";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.tags::input.help")), "html", null, true);
        echo "
</small>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/tags-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"styles.css\", \"anomaly.field_type.tags::less/tagsinput.less\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.tags::js/bootstrap-tagsinput.min.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.tags::js/bootstrap3-typeahead.min.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.tags::js/input.js\") }}

<input
        class=\"form-control\"
        name=\"{{ field_type.input_name }}\"
        value=\"{{ field_type.value|join(',') }}\"
        placeholder=\"{{ trans(field_type.placeholder) }}\"
        data-options=\"{{ field_type.options|join(',') }}\"
        data-free_input=\"{{ field_type.config.free_input }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>

<small class=\"text-muted\">
    {{ trans('anomaly.field_type.tags::input.help') }}
</small>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/tags-field_type/resources/views/input.twig", "");
    }
}
