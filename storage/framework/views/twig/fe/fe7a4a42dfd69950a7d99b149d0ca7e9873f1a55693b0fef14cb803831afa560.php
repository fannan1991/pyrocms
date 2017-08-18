<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/ajax.twig */
class __TwigTemplate_2c08d40a4c4e8b2ed988e3c46bb4e65e236babe8bf0972693a0bc4931887f618 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'no_results' => array($this, 'block_no_results'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/table.js"));
        echo "

";
        // line 3
        if ( !$this->getAttribute(($context["actions"] ?? null), "empty", array(), "method")) {
            // line 4
            echo "    ";
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/actions.js"));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) {
            // line 8
            echo "    ";
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/sortable.js"));
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/ajax/heading", array("table" => ($context["table"] ?? null))));
        echo "

";
        // line 13
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/ajax/views", array("table" => ($context["table"] ?? null))));
        echo "
";
        // line 14
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/ajax/filters", array("table" => ($context["table"] ?? null))));
        echo "

";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "rows", array()), "empty", array(), "method")) {
            // line 17
            echo "    ";
            $this->displayBlock('no_results', $context, $blocks);
        }
        // line 25
        echo "
";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "rows", array()), "empty", array(), "method")) {
            // line 27
            echo "
    ";
            // line 28
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("url" => call_user_func_array($this->env->getFunction('url_full')->getCallable(), array("full")), "class" => "ajax")));
            echo "

    <div class=\"table-responsive\">
        <table
                class=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) ? ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) : ("table-condensed")), "html", null, true);
            echo " table ajax\"
                ";
            // line 33
            echo (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) ? ("data-sortable") : (""));
            echo "
                ";
            // line 34
            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "attributes", array())));
            echo ">

            ";
            // line 36
            echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/header", array("table" => ($context["table"] ?? null))));
            echo "

            ";
            // line 38
            $this->displayBlock('body', $context, $blocks);
            // line 41
            echo "
        </table>
    </div>

    ";
            // line 45
            echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/ajax/footer", array("table" => ($context["table"] ?? null))));
            echo "

    ";
            // line 47
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

";
        }
    }

    // line 17
    public function block_no_results($context, array $blocks = array())
    {
        // line 18
        echo "        <div class=\"no-results\">
            <p>
                ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "get", array(0 => "no_results_message", 1 => "streams::message.no_results"), "method"))), "html", null, true);
        echo "
            </p>
        </div>
    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "                ";
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/body", array("table" => ($context["table"] ?? null))));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  137 => 38,  129 => 20,  125 => 18,  122 => 17,  114 => 47,  109 => 45,  103 => 41,  101 => 38,  96 => 36,  91 => 34,  87 => 33,  83 => 32,  76 => 28,  73 => 27,  71 => 26,  68 => 25,  64 => 17,  62 => 16,  57 => 14,  53 => 13,  48 => 11,  45 => 10,  39 => 8,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"streams::js/table/table.js\") }}

{% if not actions.empty() %}
    {{ asset_add(\"scripts.js\", \"streams::js/table/actions.js\") }}
{% endif %}

{% if table.options.sortable %}
    {{ asset_add(\"scripts.js\", \"streams::js/table/sortable.js\") }}
{% endif %}

{{ view(\"streams::table/ajax/heading\", {'table': table}) }}

{{ view(\"streams::table/ajax/views\", {'table': table}) }}
{{ view(\"streams::table/ajax/filters\", {'table': table}) }}

{% if table.rows.empty() %}
    {% block no_results %}
        <div class=\"no-results\">
            <p>
                {{ trans(table.options.get('no_results_message', 'streams::message.no_results')) }}
            </p>
        </div>
    {% endblock %}
{% endif %}

{% if not table.rows.empty() %}

    {{ form_open({'url': url_full(), 'class': 'ajax'}) }}

    <div class=\"table-responsive\">
        <table
                class=\"{{ table.options.class ?: 'table-condensed' }} table ajax\"
                {{ table.options.sortable ? 'data-sortable' }}
                {{ html_attributes(table.options.attributes) }}>

            {{ view(\"streams::table/partials/header\", {'table': table}) }}

            {% block body %}
                {{ view(\"streams::table/partials/body\", {'table': table}) }}
            {% endblock %}

        </table>
    </div>

    {{ view(\"streams::table/ajax/footer\", {'table': table}) }}

    {{ form_close() }}

{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax.twig", "");
    }
}
