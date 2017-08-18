<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/partials/filters.twig */
class __TwigTemplate_618fe4e83028760170c011ba9502123158daef9772fbefbde05588ffd48db224 extends TwigBridge\Twig\Template
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
            echo "    <div class=\"card card-container\">
        ";
            // line 3
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("method" => "get", "id" => "filters", "url" => call_user_func_array($this->env->getFunction('url_full')->getCallable(), array("full")), "class" => "form-inline")));
            echo "
        <input type=\"hidden\" name=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "prefix", array()), "html", null, true);
            echo "view\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "views", array()), "active", array(), "method"), "getSlug", array(), "method"), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "prefix", array()), "html", null, true);
            echo "page\" value=\"1\">

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? null), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 8
                echo "            <div class=\"form-group\">
                ";
                // line 9
                echo $this->getAttribute($context["filter"], "input", array());
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
        <button type=\"submit\" class=\"btn btn-success\">
            ";
            // line 14
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_icon", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_icon", array())) : ("filter"))));
            echo "
            ";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "filter_text", array())) : ("streams::button.filter")))), "html", null, true);
            echo "
        </button>
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")), "html", null, true);
            echo "\" class=\"btn btn-inverse\">
            ";
            // line 18
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_icon", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_icon", array())) : (""))));
            echo "
            ";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "filters", array()), "clear_text", array())) : ("streams::button.clear")))), "html", null, true);
            echo "
        </a>
        ";
            // line 21
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  76 => 19,  72 => 18,  68 => 17,  63 => 15,  59 => 14,  55 => 12,  46 => 9,  43 => 8,  39 => 7,  34 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    <div class=\"card card-container\">
        {{ form_open({'method': 'get', 'id': 'filters', 'url': url_full(), 'class': 'form-inline'}) }}
        <input type=\"hidden\" name=\"{{ table.options.prefix }}view\" value=\"{{ table.views.active().getSlug() }}\">
        <input type=\"hidden\" name=\"{{ table.options.prefix }}page\" value=\"1\">

        {% for filter in table.filters %}
            <div class=\"form-group\">
                {{ filter.input|raw }}
            </div>
        {% endfor %}

        <button type=\"submit\" class=\"btn btn-success\">
            {{ icon(table.options.filters.filter_icon ?: 'filter') }}
            {{ trans(table.options.filters.filter_text ?: 'streams::button.filter') }}
        </button>
        <a href=\"{{ url_current() }}\" class=\"btn btn-inverse\">
            {{ icon(table.options.filters.clear_icon ? table.options.filters.clear_icon) }}
            {{ trans(table.options.filters.clear_text ?: 'streams::button.clear') }}
        </a>
        {{ form_close() }}
    </div>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/filters.twig", "");
    }
}
