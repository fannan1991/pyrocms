<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/files-module/resources/views/admin/upload/index.twig */
class __TwigTemplate_a5bdb9c3fdc338f96e8b786dc9d3cc616aba3d7ab57862fd9e811c695cc40810 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("theme::layouts/default", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "theme::layouts/default";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.module.files::less/upload.less"));
        echo "

    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.module.files::js/dropzone.min.js"));
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.module.files::js/upload.js"));
        echo "

    <div id=\"upload\">

        <div class=\"container-fluid\">
            ";
        // line 13
        $this->loadTemplate("module::admin/upload/partials/heading", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig", 13)->display($context);
        // line 14
        echo "            ";
        $this->loadTemplate("module::admin/upload/partials/body", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig", 14)->display($context);
        // line 15
        echo "            ";
        $this->loadTemplate("module::admin/upload/partials/template", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig", 15)->display($context);
        // line 16
        echo "        </div>

        <div class=\"uploaded\">
            ";
        // line 19
        echo $this->getAttribute(($context["table"] ?? null), "content", array());
        echo "
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  59 => 16,  56 => 15,  53 => 14,  51 => 13,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"theme::layouts/default\" %}

{% block content %}

    {{ asset_add('styles.css', 'anomaly.module.files::less/upload.less') }}

    {{ asset_add('scripts.js', 'anomaly.module.files::js/dropzone.min.js') }}
    {{ asset_add('scripts.js', 'anomaly.module.files::js/upload.js') }}

    <div id=\"upload\">

        <div class=\"container-fluid\">
            {% include \"module::admin/upload/partials/heading\" %}
            {% include \"module::admin/upload/partials/body\" %}
            {% include \"module::admin/upload/partials/template\" %}
        </div>

        <div class=\"uploaded\">
            {{ table.content|raw }}
        </div>

    </div>

{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/files-module/resources/views/admin/upload/index.twig", "");
    }
}
