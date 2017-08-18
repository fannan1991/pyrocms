<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/partials/breadcrumb.twig */
class __TwigTemplate_35895de34424f0ce95a8c284133f052cca3c8fa1a1dc95e9844f7d8a4e2d3c8e extends TwigBridge\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["template"] ?? null), "breadcrumbs", array()), "count", array(), "method")) {
            // line 2
            echo "    <ol class=\"breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["template"] ?? null), "breadcrumbs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["breadcrumb"] => $context["url"]) {
                // line 4
                echo "            ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 5
                    echo "                <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["breadcrumb"])), "html", null, true);
                    echo "</li>
            ";
                } else {
                    // line 7
                    echo "                <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["breadcrumb"])), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 9
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['breadcrumb'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/partials/breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  58 => 9,  50 => 7,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if template.breadcrumbs.count() %}
    <ol class=\"breadcrumb\">
        {% for breadcrumb, url in template.breadcrumbs %}
            {% if loop.last %}
                <li class=\"breadcrumb-item active\">{{ trans(breadcrumb) }}</li>
            {% else %}
                <li class=\"breadcrumb-item\"><a href=\"{{ url }}\">{{ trans(breadcrumb) }}</a></li>
            {% endif %}
        {% endfor %}
    </ol>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/partials/breadcrumb.twig", "");
    }
}
