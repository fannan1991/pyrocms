<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/partials/heading.twig */
class __TwigTemplate_b9f7fb732e3305ceb043b34030faf6cfe1fcf791dcf807b38b1ebfd9de68c8ca extends TwigBridge\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "title", array()) || $this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "description", array()))) {
            // line 2
            echo "    <div class=\"card\">

        ";
            // line 4
            if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "title", array())) {
                // line 5
                echo "            <div class=\"card-block\">
                <h4 class=\"card-title\">
                    ";
                // line 7
                echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "title", array())));
                echo "

                    ";
                // line 9
                if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "description", array())) {
                    // line 10
                    echo "                        <small>
                            <br>";
                    // line 11
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "description", array())));
                    echo "
                        </small>
                    ";
                }
                // line 14
                echo "                </h4>
            </div>
        ";
            }
            // line 17
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 14,  41 => 11,  38 => 10,  36 => 9,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if table.options.title or table.options.description %}
    <div class=\"card\">

        {% if table.options.title %}
            <div class=\"card-block\">
                <h4 class=\"card-title\">
                    {{ trans(table.options.title)|raw }}

                    {% if table.options.description %}
                        <small>
                            <br>{{ trans(table.options.description)|raw }}
                        </small>
                    {% endif %}
                </h4>
            </div>
        {% endif %}

    </div>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/partials/heading.twig", "");
    }
}
