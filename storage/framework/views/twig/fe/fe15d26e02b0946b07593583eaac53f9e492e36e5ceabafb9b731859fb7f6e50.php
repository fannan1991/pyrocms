<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/ajax/filters.twig */
class __TwigTemplate_9937da1c4fbf86ba4e45f3764f1dd81f6a7e37a56c5a9a1f482dd21f6727c3a0 extends TwigBridge\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "filters", array()), "empty", array(), "method")) {
            // line 2
            echo "    <div class=\"table-filters\">

        ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("method" => "get", "id" => "filters", "url" => call_user_func_array($this->env->getFunction('url_full')->getCallable(), array("full")), "class" => "ajax form-inline")));
            echo "
        <input type=\"hidden\" name=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "prefix", array()), "html", null, true);
            echo "view\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "views", array()), "active", array(), "method"), "getSlug", array(), "method"), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "prefix", array()), "html", null, true);
            echo "page\" value=\"\">

        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? null), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 9
                echo "            <div class=\"form-group\">
                ";
                // line 10
                echo $this->getAttribute($context["filter"], "input", array());
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "
        <button type=\"submit\" class=\"btn btn-success\">
            ";
            // line 15
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_icon", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_icon", array())) : ("filter"))));
            echo "
            ";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_text", array())) : ("streams::button.filter")))), "html", null, true);
            echo "
        </button>
        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")), "html", null, true);
            echo "\" class=\"btn btn-inverse ajax\">
            ";
            // line 19
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_icon", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_icon", array())) : (""))));
            echo "
            ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_text", array())) : ("streams::button.clear")))), "html", null, true);
            echo "
        </a>
        ";
            // line 22
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 20,  73 => 19,  69 => 18,  64 => 16,  60 => 15,  56 => 13,  47 => 10,  44 => 9,  40 => 8,  35 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not table.filters.empty() %}
    <div class=\"table-filters\">

        {{ form_open({'method': 'get', 'id': 'filters', 'url': url_full(), 'class': 'ajax form-inline'}) }}
        <input type=\"hidden\" name=\"{{ table.options.prefix }}view\" value=\"{{ table.views.active().getSlug() }}\">
        <input type=\"hidden\" name=\"{{ table.options.prefix }}page\" value=\"\">

        {% for filter in table.filters %}
            <div class=\"form-group\">
                {{ filter.input|raw }}
            </div>
        {% endfor %}

        <button type=\"submit\" class=\"btn btn-success\">
            {{ icon(table.options.filters.filter_icon ?: 'filter') }}
            {{ trans(table.options.filters.filter_text ?: 'streams::button.filter') }}
        </button>
        <a href=\"{{ url_current() }}\" class=\"btn btn-inverse ajax\">
            {{ icon(table.options.filters.clear_icon ? table.options.filters.clear_icon) }}
            {{ trans(table.options.filters.clear_text ?: 'streams::button.clear') }}
        </a>
        {{ form_close() }}

    </div>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/filters.twig", "");
    }
}
