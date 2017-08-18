<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/wysiwyg-field_type/resources/views/input.twig */
class __TwigTemplate_f8191f5d501a6d66cb80f621d1ea13c94b9538e074a8d2b8cf92beee56e27bf9 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.wysiwyg::less/redactor.less"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.wysiwyg::less/input.less"));
        echo "

";
        // line 4
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.wysiwyg::js/redactor.min.js"));
        echo "

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "plugins", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('config_get')->getCallable(), array((("anomaly.field_type.wysiwyg::redactor.plugins." . $context["plugin"]) . ".scripts"))));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 8
                echo "        ";
                echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", $context["script"]));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('config_get')->getCallable(), array((("anomaly.field_type.wysiwyg::redactor.plugins." . $context["plugin"]) . ".styles"))));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 12
                echo "        ";
                echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", $context["style"]));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 16
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.wysiwyg::js/input.js"));
        echo "

<textarea name=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "\" data-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "field_name", array()), "html", null, true);
        echo "\" data-disk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "disk", array()), "html", null, true);
        echo "\" data-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "height", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\" data-folders=\"";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "folders", array()), ","), "html", null, true);
        echo "\" data-locale=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field_type"] ?? null), "locale", array())) ? ($this->getAttribute(($context["field_type"] ?? null), "locale", array())) : (call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("app.locale")))), "html", null, true);
        echo "\" data-buttons=\"";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "buttons", array()), ","), "html", null, true);
        echo "\" data-plugins=\"";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "plugins", array()), ","), "html", null, true);
        echo "\" data-available_buttons=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('config_get')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "getNamespace", array(0 => "redactor.buttons"), "method")))), "html", null, true);
        echo "\" data-available_plugins=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('config_get')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "getNamespace", array(0 => "redactor.plugins"), "method")))), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo " ";
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo " ";
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "value", array()), "html", null, true);
        echo "</textarea>

";
        // line 20
        if ((call_user_func_array($this->env->getFunction('config')->getCallable(), array("app.debug")) && $this->getAttribute(($context["field_type"] ?? null), "storage_path", array()))) {
            // line 21
            echo "    <small class=\"text-muted hidden-md\">
        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "storage_path", array()), "html", null, true);
            echo "
    </small>
";
        }
        // line 25
        echo "
<div class=\"modal remote\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/wysiwyg-field_type/resources/views/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 26,  123 => 25,  117 => 22,  114 => 21,  112 => 20,  79 => 18,  74 => 16,  71 => 15,  58 => 12,  54 => 11,  51 => 10,  42 => 8,  37 => 7,  33 => 6,  28 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"styles.css\", \"anomaly.field_type.wysiwyg::less/redactor.less\") }}
{{ asset_add(\"styles.css\", \"anomaly.field_type.wysiwyg::less/input.less\") }}

{{ asset_add(\"scripts.js\", \"anomaly.field_type.wysiwyg::js/redactor.min.js\") }}

{% for plugin in field_type.config.plugins %}
    {% for script in config_get(\"anomaly.field_type.wysiwyg::redactor.plugins.\" ~ plugin ~ \".scripts\") %}
        {{ asset_add(\"scripts.js\", script) }}
    {% endfor %}

    {% for style in config_get(\"anomaly.field_type.wysiwyg::redactor.plugins.\" ~ plugin ~ \".styles\") %}
        {{ asset_add(\"styles.css\", style) }}
    {% endfor %}
{% endfor %}

{{ asset_add(\"scripts.js\", \"anomaly.field_type.wysiwyg::js/input.js\") }}

<textarea name=\"{{ field_type.input_name }}\" data-field=\"{{ field_type.field_name }}\" data-disk=\"{{ field_type.config.disk }}\" data-height=\"{{ field_type.config.height }}\" placeholder=\"{{ trans(field_type.placeholder) }}\" data-folders=\"{{ field_type.config.folders|join(',') }}\" data-locale=\"{{ field_type.locale ?: config_get('app.locale') }}\" data-buttons=\"{{ field_type.config.buttons|join(',') }}\" data-plugins=\"{{ field_type.config.plugins|join(',') }}\" data-available_buttons=\"{{ config_get(field_type.getNamespace('redactor.buttons'))|json_encode }}\" data-available_plugins=\"{{ config_get(field_type.getNamespace('redactor.plugins'))|json_encode }}\" {{ html_attributes(field_type.attributes) }} {{ field_type.disabled ? 'disabled' }} {{ field_type.readonly ? 'readonly' }}>{{ field_type.value }}</textarea>

{% if config('app.debug') and field_type.storage_path %}
    <small class=\"text-muted hidden-md\">
        {{ field_type.storage_path }}
    </small>
{% endif %}

<div class=\"modal remote\" id=\"{{ field_type.input_name }}-modal\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\"></div>
    </div>
</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/wysiwyg-field_type/resources/views/input.twig", "");
    }
}
