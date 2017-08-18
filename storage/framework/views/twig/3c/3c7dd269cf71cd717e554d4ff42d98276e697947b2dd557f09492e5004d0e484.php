<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/columns.twig */
class __TwigTemplate_2c4bdfb773dcfa885b66745d6cec86bbb8c0d6cf268ae70ea032f0a12cdfa863 extends TwigBridge\Twig\Template
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
        echo "<div class=\"row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["dashboard"] ?? null), "widgets", array()), "pinned", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 3
            echo "        <div class=\"col-lg-24\">
            ";
            // line 4
            echo $this->getAttribute($context["widget"], "output", array(), "method");
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>


<div class=\"columns row\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["dashboard"] ?? null), "layout", array()), "-"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["span"]) {
            // line 12
            echo "        <div class=\"column col-lg-";
            echo twig_escape_filter($this->env, $context["span"], "html", null, true);
            echo "\">

            ";
            // line 14
            $context["column"] = $this->getAttribute($this->getAttribute(($context["dashboard"] ?? null), "widgets", array()), "column", array(0 => $this->getAttribute($context["loop"], "index", array()), 1 => $this->getAttribute($context["loop"], "last", array())), "method");
            // line 15
            echo "
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["column"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 17
                echo "                ";
                echo $this->getAttribute($context["widget"], "output", array(), "method");
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
        </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['span'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/columns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  85 => 19,  76 => 17,  72 => 16,  69 => 15,  67 => 14,  61 => 12,  44 => 11,  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    {% for widget in dashboard.widgets.pinned() %}
        <div class=\"col-lg-24\">
            {{ widget.output()|raw }}
        </div>
    {% endfor %}
</div>


<div class=\"columns row\">
    {% for span in dashboard.layout|split('-') %}
        <div class=\"column col-lg-{{ span }}\">

            {% set column = dashboard.widgets.column(loop.index, loop.last) %}

            {% for widget in column %}
                {{ widget.output()|raw }}
            {% endfor %}

        </div>
    {% endfor %}
</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/columns.twig", "");
    }
}
