<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/partials/body.twig */
class __TwigTemplate_c2adcf505ac38927d30978a801238399bf96fd0d3ccc6c4000c24a7b033b2670 extends TwigBridge\Twig\Template
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
        echo "<tbody>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? null), "rows", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">

        ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "sortable", array())) {
                // line 6
                echo "            <td>
                ";
                // line 7
                echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("fa fa-arrows handle"));
                echo "
                <input type=\"hidden\" name=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "table", array()), "options", array()), "prefix", array()), "html", null, true);
                echo "order[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "key", array()), "html", null, true);
                echo "\"/>
            </td>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "actions", array()), "empty", array(), "method")) {
                // line 13
                echo "            <td>
                <input type=\"checkbox\" name=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "table", array()), "options", array()), "prefix", array()), "html", null, true);
                echo "id[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "key", array()), "html", null, true);
                echo "\"/>
            </td>
        ";
            }
            // line 17
            echo "
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 19
                echo "            <td class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "attributes", array()), "html", null, true);
                echo ">
                ";
                // line 20
                echo $this->getAttribute($context["column"], "value", array());
                echo "
            </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        <td class=\"text-lg-right\">
            <nobr>";
            // line 25
            echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute($context["row"], "buttons", array())));
            echo "</nobr>
        </td>

    </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</tbody>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  105 => 25,  101 => 23,  92 => 20,  85 => 19,  81 => 18,  78 => 17,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  54 => 8,  50 => 7,  47 => 6,  45 => 5,  39 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tbody>
{% for row in table.rows %}
    <tr id=\"{{ loop.index }}\">

        {% if table.options.sortable %}
            <td>
                {{ icon('fa fa-arrows handle') }}
                <input type=\"hidden\" name=\"{{ row.table.options.prefix }}order[]\" value=\"{{ row.key }}\"/>
            </td>
        {% endif %}

        {% if not table.actions.empty() %}
            <td>
                <input type=\"checkbox\" name=\"{{ row.table.options.prefix }}id[]\" value=\"{{ row.key }}\"/>
            </td>
        {% endif %}

        {% for column in row.columns %}
            <td class=\"{{ column.class }}\" {{ column.attributes }}>
                {{ column.value|raw }}
            </td>
        {% endfor %}

        <td class=\"text-lg-right\">
            <nobr>{{ buttons(row.buttons)|raw }}</nobr>
        </td>

    </tr>
{% endfor %}
</tbody>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/body.twig", "");
    }
}
