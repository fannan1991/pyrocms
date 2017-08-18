<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/partials/footer.twig */
class __TwigTemplate_353527eeda740427436ed467bb1aab269ff892ef0cc0c7caa5b3e5ae6bf821d6 extends TwigBridge\Twig\Template
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
        echo "<tfoot>
<tr>
    <th colspan=\"50%\" style=\"padding: 10px;\">

        <div class=\"pull-left actions\">
            ";
        // line 6
        echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute(($context["table"] ?? null), "actions", array())));
        echo "
        </div>

        ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "data", array()), "pagination", array()), "links", array())) {
            // line 10
            echo "            <div class=\"pull-right\">
                ";
            // line 11
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "data", array()), "pagination", array()), "links", array());
            echo "
            </div>
        ";
        }
        // line 14
        echo "
        <div style=\"clear: both;\"></div>

    </th>
</tr>
</tfoot>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  37 => 11,  34 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tfoot>
<tr>
    <th colspan=\"50%\" style=\"padding: 10px;\">

        <div class=\"pull-left actions\">
            {{ buttons(table.actions)|raw }}
        </div>

        {% if table.data.pagination.links %}
            <div class=\"pull-right\">
                {{ table.data.pagination.links|raw }}
            </div>
        {% endif %}

        <div style=\"clear: both;\"></div>

    </th>
</tr>
</tfoot>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/footer.twig", "");
    }
}
