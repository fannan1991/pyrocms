<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/file-field_type/resources/views/upload/index.twig */
class __TwigTemplate_70d46864855081deeda3fc8a6b11aba013f779b286124395aefbf3e0a9c92d6b extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.field_type.file::less/upload.less"));
        echo "

";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.file::js/dropzone.min.js"));
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.field_type.file::js/upload.js"));
        echo "

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_paths')->getCallable(), array("paths", "styles.css")));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 7
            echo "    ";
            echo call_user_func_array($this->env->getFunction('html_style')->getCallable(), array("style", $context["path"]));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_paths')->getCallable(), array("paths", "scripts.js")));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('html_script')->getCallable(), array("script", $context["path"]));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
<div id=\"upload\">

    ";
        // line 16
        $this->loadTemplate("anomaly.field_type.file::upload/partials/header", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/upload/index.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("anomaly.field_type.file::upload/partials/body", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/upload/index.twig", 17)->display($context);
        // line 18
        echo "    ";
        $this->loadTemplate("anomaly.field_type.file::upload/partials/template", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/upload/index.twig", 18)->display($context);
        // line 19
        echo "
    <div class=\"uploaded\">
        ";
        // line 21
        echo $this->getAttribute(($context["table"] ?? null), "content", array());
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/upload/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  75 => 19,  72 => 18,  69 => 17,  67 => 16,  62 => 13,  53 => 11,  49 => 10,  46 => 9,  37 => 7,  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add('styles.css', 'anomaly.field_type.file::less/upload.less') }}

{{ asset_add('scripts.js', 'anomaly.field_type.file::js/dropzone.min.js') }}
{{ asset_add('scripts.js', 'anomaly.field_type.file::js/upload.js') }}

{% for path in asset_paths(\"styles.css\") %}
    {{ html_style(path) }}
{% endfor %}

{% for path in asset_paths(\"scripts.js\") %}
    {{ html_script(path) }}
{% endfor %}

<div id=\"upload\">

    {% include \"anomaly.field_type.file::upload/partials/header\" %}
    {% include \"anomaly.field_type.file::upload/partials/body\" %}
    {% include \"anomaly.field_type.file::upload/partials/template\" %}

    <div class=\"uploaded\">
        {{ table.content|raw }}
    </div>

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/file-field_type/resources/views/upload/index.twig", "");
    }
}
