<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/multiple-field_type/resources/views/tags.twig */
class __TwigTemplate_431d76eeede7d49429f65a9e01e8008ddd486a0657101ccbe3c60288d0ebac25 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.multiple::scss/select2.min.scss"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.multiple::scss/overrides.scss"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.multiple::js/select2.min.js"));
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.multiple::js/tags.js"));
        echo "

<select multiple
        data-key=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "key", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "[]\"
        data-placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["field_type"] ?? null), "placeholder", array()))), "html", null, true);
        echo "\"
        ";
        // line 10
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["field_type"] ?? null), "attributes", array())));
        echo "
        ";
        // line 11
        echo (($this->getAttribute(($context["field_type"] ?? null), "disabled", array())) ? ("disabled") : (""));
        echo "
        ";
        // line 12
        echo (($this->getAttribute(($context["field_type"] ?? null), "readonly", array())) ? ("readonly") : (""));
        echo ">

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field_type"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["title"]) {
            // line 15
            echo "        <option ";
            echo ((twig_in_filter($context["key"], $this->getAttribute(($context["field_type"] ?? null), "ids", array()))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
</select>

<small class=\"text-muted\">
    ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.field_type.multiple::input.help")), "html", null, true);
        echo "
</small>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/multiple-field_type/resources/views/tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  79 => 17,  66 => 15,  62 => 14,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"styles.css\", \"anomaly.field_type.multiple::scss/select2.min.scss\") }}
{{ asset_add(\"styles.css\", \"anomaly.field_type.multiple::scss/overrides.scss\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.multiple::js/select2.min.js\") }}
{{ asset_add(\"scripts.js\", \"anomaly.field_type.multiple::js/tags.js\") }}

<select multiple
        data-key=\"{{ field_type.key }}\"
        name=\"{{ field_type.input_name }}[]\"
        data-placeholder=\"{{ trans(field_type.placeholder) }}\"
        {{ html_attributes(field_type.attributes) }}
        {{ field_type.disabled ? 'disabled' }}
        {{ field_type.readonly ? 'readonly' }}>

    {% for key, title in field_type.options %}
        <option {{ key in field_type.ids ? 'selected' }} value=\"{{ key }}\">{{ title }}</option>
    {% endfor %}

</select>

<small class=\"text-muted\">
    {{ trans('anomaly.field_type.multiple::input.help') }}
</small>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/multiple-field_type/resources/views/tags.twig", "");
    }
}
