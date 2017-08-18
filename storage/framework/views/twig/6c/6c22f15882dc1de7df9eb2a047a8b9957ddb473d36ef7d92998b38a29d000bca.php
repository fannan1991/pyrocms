<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/relationship-field_type/resources/views/lookup.twig */
class __TwigTemplate_ac9059093198e9309654ec171d6176a5ba252328bf6cf608257874b287cb2370 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.relationship::less/lookup.less"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.relationship::js/lookup.js"));
        echo "

<a
        data-toggle=\"modal\"
        data-target=\"#";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
        echo "-modal\"
        class=\"btn btn-success btn-xs\"
        href=\"";
        // line 8
        echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url(("streams/relationship-field_type/index/" . $this->getAttribute(($context["field_type"] ?? null), "key", array())));
        echo "\"
>
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("search"));
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::button.select")), "html", null, true);
        echo "</a>

<input
        type=\"hidden\"
        name=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
        value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "value", array()), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "value", array()), "id", array())) : ($this->getAttribute(($context["field_type"] ?? null), "value", array()))), "html", null, true);
        echo "\"
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 18
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 19
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

<div class=\"selected\">
    ";
        // line 22
        echo $this->getAttribute(($context["field_type"] ?? null), "table", array());
        echo "
</div>

<div class=\"modal remote\" id=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
        echo "-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/relationship-field_type/resources/views/lookup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  73 => 22,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  44 => 11,  40 => 10,  35 => 8,  30 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add('styles.css', 'anomaly.field_type.relationship::less/lookup.less') }}
{{ asset_add('scripts.js', 'anomaly.field_type.relationship::js/lookup.js') }}

<a
        data-toggle=\"modal\"
        data-target=\"#{{ field_type.field_name }}-modal\"
        class=\"btn btn-success btn-xs\"
        href=\"{{ url('streams/relationship-field_type/index/' ~ field_type.key) }}\"
>
    {{ icon('search') }}
    {{ trans('streams::button.select') }}</a>

<input
        type=\"hidden\"
        name=\"{{ field_type.input_name }}\"
        value=\"{{ field_type.value.id ?: field_type.value }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>

<div class=\"selected\">
    {{ field_type.table|raw }}
</div>

<div class=\"modal remote\" id=\"{{ field_type.field_name }}-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/relationship-field_type/resources/views/lookup.twig", "");
    }
}
