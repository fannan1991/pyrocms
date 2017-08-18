<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/relationship-field_type/resources/views/table/table.twig */
class __TwigTemplate_e5795c5b0299c53fc41d7b8359eabfffbc526a0dc4ebd40750e809314f84c962 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
            'no_results' => array($this, 'block_no_results'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "scripts.js", "streams::js/table/jquery-sortable.js"));
        echo "

";
        // line 3
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "rows", array()), "empty", array(), "method")) {
            // line 4
            echo "    ";
            $this->displayBlock('panel', $context, $blocks);
        } else {
            // line 23
            echo "
    ";
            // line 24
            $this->displayBlock('no_results', $context, $blocks);
            // line 31
            echo "
";
        }
    }

    // line 4
    public function block_panel($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "panel_class", array()), "html", null, true);
        echo " panel-table\">

            <div class=\"table-responsive\">
                <table
                        class=\"";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) ? ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "class", array())) : ("table table-striped")), "html", null, true);
        echo "\"
                        ";
        // line 10
        echo (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) ? ("data-sortable") : (""));
        echo "
                        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "attributes", array())));
        echo ">

                    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
                </table>
            </div>

        </div>
    ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "                        ";
        echo call_user_func_array($this->env->getFunction('view')->getCallable(), array("anomaly.field_type.relationship::table/partials/body", array("table" => ($context["table"] ?? null))));
        echo "
                    ";
    }

    // line 24
    public function block_no_results($context, array $blocks = array())
    {
        // line 25
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "panel_class", array()), "html", null, true);
        echo "\">
            <div class=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "panel_body_class", array()), "html", null, true);
        echo "\">
                ";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "get", array(0 => "no_results_message", 1 => "streams::message.no_results"), "method"))), "html", null, true);
        echo "
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/relationship-field_type/resources/views/table/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  97 => 26,  92 => 25,  89 => 24,  82 => 14,  79 => 13,  70 => 16,  68 => 13,  63 => 11,  59 => 10,  55 => 9,  47 => 5,  44 => 4,  38 => 31,  36 => 24,  33 => 23,  29 => 4,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ asset_add(\"scripts.js\", \"streams::js/table/jquery-sortable.js\") }}

{% if not table.rows.empty() %}
    {% block panel %}
        <div class=\"{{ table.options.panel_class }} panel-table\">

            <div class=\"table-responsive\">
                <table
                        class=\"{{ table.options.class ?: 'table table-striped' }}\"
                        {{ table.options.sortable ? 'data-sortable' }}
                        {{ html_attributes(table.options.attributes) }}>

                    {% block body %}
                        {{ view(\"anomaly.field_type.relationship::table/partials/body\", {'table': table}) }}
                    {% endblock %}

                </table>
            </div>

        </div>
    {% endblock %}
{% else %}

    {% block no_results %}
        <div class=\"{{ table.options.panel_class }}\">
            <div class=\"{{ table.options.panel_body_class }}\">
                {{ trans(table.options.get('no_results_message', 'streams::message.no_results')) }}
            </div>
        </div>
    {% endblock %}

{% endif %}", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/relationship-field_type/resources/views/table/table.twig", "");
    }
}
