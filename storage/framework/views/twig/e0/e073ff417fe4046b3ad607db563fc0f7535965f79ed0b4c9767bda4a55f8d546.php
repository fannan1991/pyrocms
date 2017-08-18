<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/table.twig */
class __TwigTemplate_a0919bcbf002dd7b83d0a9e823ace697646e24ea138843077321ec7a34abf921 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'card' => array($this, 'block_card'),
            'body' => array($this, 'block_body'),
            'no_results' => array($this, 'block_no_results'),
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
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/jquery-sortable.js"));
            echo "
    ";
            // line 9
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/sortable.js"));
            echo "
";
        }
        // line 11
        echo "
<div class=\"container-fluid\">

    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/filters", array("table" => ($context["table"] ?? null))));
        echo "
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/views", array("table" => ($context["table"] ?? null))));
        echo "

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array((($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "heading", array())) ? ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "heading", array())) : ("streams::table/partials/heading")), array("table" => ($context["table"] ?? null))));
        echo "

    ";
        // line 19
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "rows", array()), "empty", array(), "method")) {
            // line 20
            echo "        ";
            $this->displayBlock('card', $context, $blocks);
            // line 44
            echo "    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            $this->displayBlock('no_results', $context, $blocks);
            // line 53
            echo "
    ";
        }
        // line 55
        echo "
</div>
";
    }

    // line 20
    public function block_card($context, array $blocks = array())
    {
        // line 21
        echo "            <div class=\"card\">

                ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("url" => call_user_func_array($this->env->getFunction('url_full')->getCallable(), array("full")))));
        echo "
                <div class=\"table-responsive\">
                    <table
                            class=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) ? ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) : ("table")), "html", null, true);
        echo "\"
                            ";
        // line 27
        echo (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) ? ("data-sortable") : (""));
        echo "
                            ";
        // line 28
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "attributes", array())));
        echo ">

                        ";
        // line 30
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/header", array("table" => ($context["table"] ?? null))));
        echo "

                        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
                        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/footer", array("table" => ($context["table"] ?? null))));
        echo "

                    </table>
                </div>
                ";
        // line 40
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

            </div>
        ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "                            ";
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("streams::table/partials/body", array("table" => ($context["table"] ?? null))));
        echo "
                        ";
    }

    // line 46
    public function block_no_results($context, array $blocks = array())
    {
        // line 47
        echo "            <div class=\"card\">
                <div class=\"card-block\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "get", array(0 => "no_results_message", 1 => "streams::message.no_results"), "method"))), "html", null, true);
        echo "
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 49,  156 => 47,  153 => 46,  146 => 33,  143 => 32,  135 => 40,  128 => 36,  125 => 35,  123 => 32,  118 => 30,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  95 => 21,  92 => 20,  86 => 55,  82 => 53,  80 => 46,  77 => 45,  74 => 44,  71 => 20,  69 => 19,  64 => 17,  59 => 15,  55 => 14,  50 => 11,  45 => 9,  40 => 8,  38 => 7,  35 => 6,  29 => 4,  27 => 3,  22 => 1,);
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
    {{ asset_add(\"scripts.js\", \"streams::js/table/jquery-sortable.js\") }}
    {{ asset_add(\"scripts.js\", \"streams::js/table/sortable.js\") }}
{% endif %}

<div class=\"container-fluid\">

    {{ view(\"streams::table/partials/filters\", {'table': table}) }}
    {{ view(\"streams::table/partials/views\", {'table': table}) }}

    {{ view(table.options.heading ?: \"streams::table/partials/heading\", {'table': table}) }}

    {% if not table.rows.empty() %}
        {% block card %}
            <div class=\"card\">

                {{ form_open({ 'url': url_full() }) }}
                <div class=\"table-responsive\">
                    <table
                            class=\"{{ table.options.class ?: 'table' }}\"
                            {{ table.options.sortable ? 'data-sortable' }}
                            {{ html_attributes(table.options.attributes) }}>

                        {{ view(\"streams::table/partials/header\", {'table': table}) }}

                        {% block body %}
                            {{ view(\"streams::table/partials/body\", {'table': table}) }}
                        {% endblock %}

                        {{ view(\"streams::table/partials/footer\", {'table': table}) }}

                    </table>
                </div>
                {{ form_close() }}

            </div>
        {% endblock %}
    {% else %}

        {% block no_results %}
            <div class=\"card\">
                <div class=\"card-block\">
                    {{ trans(table.options.get('no_results_message', 'streams::message.no_results')) }}
                </div>
            </div>
        {% endblock %}

    {% endif %}

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/table.twig", "");
    }
}
