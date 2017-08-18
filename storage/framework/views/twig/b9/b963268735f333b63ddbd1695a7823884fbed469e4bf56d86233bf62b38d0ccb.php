<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/dashboard-module/resources/views/admin/dashboards/dashboard.twig */
class __TwigTemplate_a2306368701751279734d4ed079c1beef165f3b43ba0a9bbed7516dfb451727b extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["template"] ?? null), "layout", array())) ? ($this->getAttribute(($context["template"] ?? null), "layout", array())) : ("theme::layouts/default")), "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/dashboard.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "anomaly.module.dashboard::scss/dashboard.scss"));
        echo "
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.module.dashboard::js/jquery-sortable.js"));
        echo "
    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "anomaly.module.dashboard::js/dashboard.js"));
        echo "

    <div id=\"dashboard\">
        <div class=\"container-fluid\">

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("module::admin/dashboards/partials/navbar", array("dashboards" => ($context["dashboards"] ?? null))));
        echo "
            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("module::admin/dashboards/partials/columns", array("dashboard" => ($context["dashboard"] ?? null))));
        echo "

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  49 => 12,  41 => 7,  37 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends template.layout ?: \"theme::layouts/default\" %}

{% block content %}

    {{ asset_add('styles.css', 'anomaly.module.dashboard::scss/dashboard.scss') }}
    {{ asset_add('scripts.js', 'anomaly.module.dashboard::js/jquery-sortable.js') }}
    {{ asset_add('scripts.js', 'anomaly.module.dashboard::js/dashboard.js') }}

    <div id=\"dashboard\">
        <div class=\"container-fluid\">

            {{ view('module::admin/dashboards/partials/navbar', {'dashboards': dashboards}) }}
            {{ view('module::admin/dashboards/partials/columns', {'dashboard': dashboard}) }}

        </div>
    </div>
{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/dashboard.twig", "");
    }
}
