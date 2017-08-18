<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/ajax/footer.twig */
class __TwigTemplate_3be4122796902f5377ef3dd4ff8810e1722cbe242e1065edfdab2ef4d0da3317 extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal-footer\">

    <div class=\"pull-left actions\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute(($context["table"] ?? null), "actions", array())));
        echo "
    </div>

    ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "data", array()), "pagination", array()), "links", array())) {
            // line 8
            echo "        <div class=\"pull-right\">
            ";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["table"] ?? null), "data", array()), "pagination", array()), "links", array());
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    <div style=\"clear: both;\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal-footer\">

    <div class=\"pull-left actions\">
        {{ buttons(table.actions)|raw }}
    </div>

    {% if table.data.pagination.links %}
        <div class=\"pull-right\">
            {{ table.data.pagination.links|raw }}
        </div>
    {% endif %}

    <div style=\"clear: both;\"></div>

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/footer.twig", "");
    }
}
