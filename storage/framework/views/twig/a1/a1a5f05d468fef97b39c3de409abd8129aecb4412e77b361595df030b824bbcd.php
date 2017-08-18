<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/file-field_type/resources/views/input.twig */
class __TwigTemplate_d7cc83a92a616b360680739eb363104ca74ddd1db0b2ff183be0007c9f10cf37 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.file::js/input.js"));
        echo "

";
        // line 3
        if ( !$this->getAttribute(($context["field_type"] ?? null), "readonly", array())) {
            // line 4
            echo "    ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "mode", array()), array(0 => "default", 1 => "select"))) {
                // line 5
                echo "        <a data-toggle=\"modal\" data-target=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
                echo "-modal\" class=\"btn btn-info btn-xs\"
           href=\"";
                // line 6
                echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url(("streams/file-field_type/index/" . $this->getAttribute(($context["field_type"] ?? null), "config_key", array())));
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.file::button.select_file")), "html", null, true);
                echo "</a>
    ";
            }
            // line 8
            echo "
    ";
            // line 9
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "mode", array()), array(0 => "default", 1 => "upload"))) {
                // line 10
                echo "        <a data-toggle=\"modal\"
           data-target=\"#";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
                echo "-modal\" ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "folders", array())) == 1)) {
                    echo " href=\"";
                    echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url(("streams/file-field_type/upload/" . twig_first($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "folders", array()))));
                    echo "\" ";
                } else {
                    echo " href=\"";
                    echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url(("streams/file-field_type/choose/" . $this->getAttribute(($context["field_type"] ?? null), "config_key", array())));
                    echo "\" ";
                }
                // line 12
                echo "           class=\"btn btn-success btn-xs\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.file::button.upload")), "html", null, true);
                echo "</a>
    ";
            }
        }
        // line 15
        echo "
<input type=\"hidden\" name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\"
       value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "value", array()), "id", array())) ? ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "value", array()), "id", array())) : ($this->getAttribute(($context["field_type"] ?? null), "value", array()))), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo " ";
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo " ";
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

<div class=\"selected\">
    ";
        // line 20
        echo $this->getAttribute(($context["field_type"] ?? null), "value_table", array());
        echo "
</div>

<div class=\"modal remote\" id=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
        echo "-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  87 => 20,  75 => 17,  71 => 16,  68 => 15,  61 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  34 => 6,  29 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add('scripts.js', 'anomaly.field_type.file::js/input.js') }}

{% if not (field_type.readonly) %}
    {% if field_type.config.mode in ['default', 'select'] %}
        <a data-toggle=\"modal\" data-target=\"#{{ field_type.field_name }}-modal\" class=\"btn btn-info btn-xs\"
           href=\"{{ url('streams/file-field_type/index/' ~ field_type.config_key) }}\">{{ trans('anomaly.field_type.file::button.select_file') }}</a>
    {% endif %}

    {% if field_type.config.mode in ['default', 'upload'] %}
        <a data-toggle=\"modal\"
           data-target=\"#{{ field_type.field_name }}-modal\" {% if field_type.config.folders|length == 1 %} href=\"{{ url('streams/file-field_type/upload/' ~ field_type.config.folders|first) }}\" {% else %} href=\"{{ url('streams/file-field_type/choose/' ~ field_type.config_key) }}\" {% endif %}
           class=\"btn btn-success btn-xs\">{{ trans('anomaly.field_type.file::button.upload') }}</a>
    {% endif %}
{% endif %}

<input type=\"hidden\" name=\"{{ field_type.input_name }}\"
       value=\"{{ field_type.value.id ?: field_type.value }}\" {{ html_attributes(field_type.attributes) }} {{ field_type.disabled ? 'disabled' }} {{ field_type.readonly ? 'readonly' }}>

<div class=\"selected\">
    {{ field_type.value_table|raw }}
</div>

<div class=\"modal remote\" id=\"{{ field_type.field_name }}-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/input.twig", "");
    }
}
