<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/form/form.twig */
class __TwigTemplate_db8060d6b8b83aeeb3dbbd95b12937c1bfb832c9e5d9e1dc3e6b69596c055bb9 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/form/form.js"));
        echo "
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/form/keyboard.js"));
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/form/translations.js"));
        echo "

";
        // line 5
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container-fluid\">

        ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("class" => "form", "enctype" => "multipart/form-data", "url" => (($this->getAttribute($this->getAttribute(        // line 12
($context["form"] ?? null), "options", array()), "url", array())) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "options", array()), "url", array())) : (call_user_func_array($this->env->getFunction('url_full')->getCallable(), array("full")))))));
        // line 13
        echo "

        ";
        // line 16
        echo "        ";
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["form"] ?? null), "options", array()), "get", array(0 => "heading", 1 => "streams::form/partials/heading"), "method"), "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/form.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("streams::form/partials/layout", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/form.twig", 17)->display($context);
        // line 18
        echo "        ";
        $this->loadTemplate("streams::form/partials/controls", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/form.twig", 18)->display($context);
        // line 19
        echo "
        ";
        // line 20
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  60 => 19,  57 => 18,  54 => 17,  51 => 16,  47 => 13,  45 => 12,  44 => 9,  39 => 6,  33 => 5,  28 => 3,  24 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"streams::js/form/form.js\") }}
{{ asset_add(\"scripts.js\", \"streams::js/form/keyboard.js\") }}
{{ asset_add(\"scripts.js\", \"streams::js/form/translations.js\") }}

{% block content %}

    <div class=\"container-fluid\">

        {{ form_open({
            'class': 'form',
            'enctype': 'multipart/form-data',
            'url': form.options.url ?: url_full()
        }) }}

        {#{% include \"streams::form/partials/controls\" with {\"position\": \"top\"} %}#}
        {% include form.options.get('heading', \"streams::form/partials/heading\") %}
        {% include \"streams::form/partials/layout\" %}
        {% include \"streams::form/partials/controls\" %}

        {{ form_close() }}

    </div>

{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/form.twig", "");
    }
}
