<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/partials/header.twig */
class __TwigTemplate_3eac04877ceab9ad70a1d66722a7a71b332dbf1cfc092678777ba5a25714483f extends TwigBridge\Twig\Template
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
        echo "<thead>
<tr>

    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) {
            // line 5
            echo "        <th style=\"width: 30px;\">&nbsp;</th>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "actions", array()), "empty", array(), "method")) {
            // line 9
            echo "        <th style=\"width: 30px;\">
            <input data-toggle=\"all\" type=\"checkbox\">
        </th>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? null), "headers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
            // line 15
            echo "        <th>
            ";
            // line 16
            if ($this->getAttribute($context["header"], "sortable", array())) {
                // line 17
                echo "
                <nobr>
                    ";
                // line 19
                echo call_user_func_array($this->env->getFunction('html_link')->getCallable(), array("link", ((call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current")) . "?") . $this->getAttribute($context["header"], "getQueryString", array(), "method")), call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["header"], "heading", array())))));
                echo "

                    ";
                // line 21
                if (($this->getAttribute($context["header"], "direction", array()) == "asc")) {
                    // line 22
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("sort-ascending", "text-muted"));
                    echo "
                    ";
                } elseif (($this->getAttribute(                // line 23
$context["header"], "direction", array()) == "desc")) {
                    // line 24
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("sort-descending", "text-muted"));
                    echo "
                    ";
                } else {
                    // line 26
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("sortable", "text-muted"));
                    echo "
                    ";
                }
                // line 28
                echo "                </nobr>

            ";
            } else {
                // line 31
                echo "                ";
                echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["header"], "heading", array())));
                echo "
            ";
            }
            // line 33
            echo "        </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    <th class=\"buttons\">&nbsp;</th>
</tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  94 => 33,  88 => 31,  83 => 28,  77 => 26,  71 => 24,  69 => 23,  64 => 22,  62 => 21,  57 => 19,  53 => 17,  51 => 16,  48 => 15,  44 => 14,  41 => 13,  35 => 9,  33 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<thead>
<tr>

    {% if table.options.sortable %}
        <th style=\"width: 30px;\">&nbsp;</th>
    {% endif %}

    {% if not table.actions.empty() %}
        <th style=\"width: 30px;\">
            <input data-toggle=\"all\" type=\"checkbox\">
        </th>
    {% endif %}

    {% for header in table.headers %}
        <th>
            {% if header.sortable %}

                <nobr>
                    {{ html_link(url_current() ~ '?' ~ header.getQueryString(), trans(header.heading)) }}

                    {% if header.direction == 'asc' %}
                        {{ icon('sort-ascending', 'text-muted') }}
                    {% elseif header.direction == 'desc' %}
                        {{ icon('sort-descending', 'text-muted') }}
                    {% else %}
                        {{ icon('sortable', 'text-muted') }}
                    {% endif %}
                </nobr>

            {% else %}
                {{ trans(header.heading)|raw }}
            {% endif %}
        </th>
    {% endfor %}

    <th class=\"buttons\">&nbsp;</th>
</tr>
</thead>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/header.twig", "");
    }
}
