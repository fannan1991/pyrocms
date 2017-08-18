<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/ajax/heading.twig */
class __TwigTemplate_990c72b91953eec3f6ab6c46c5126d54a2a630280518d92fb2fce918846a59fe extends TwigBridge\Twig\Template
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
            echo "
    ";
            // line 3
            if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "title", array())) {
                // line 4
                echo "        <div class=\"modal-header\">

            <button class=\"close\" data-dismiss=\"modal\">
                <span>&times;</span>
            </button>

            <h4 class=\"modal-title\">
                ";
                // line 11
                echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "title", array())));
                echo "

                ";
                // line 13
                if ($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "description", array())) {
                    // line 14
                    echo "                    <small class=\"clearfix\">
                        ";
                    // line 15
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($this->getAttribute(($context["table"] ?? null), "options", array()), "description", array())));
                    echo "
                    </small>
                ";
                }
                // line 18
                echo "            </h4>

        </div>
    ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/heading.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  51 => 18,  45 => 15,  42 => 14,  40 => 13,  35 => 11,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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

    {% if table.options.title %}
        <div class=\"modal-header\">

            <button class=\"close\" data-dismiss=\"modal\">
                <span>&times;</span>
            </button>

            <h4 class=\"modal-title\">
                {{ trans(table.options.title)|raw }}

                {% if table.options.description %}
                    <small class=\"clearfix\">
                        {{ trans(table.options.description)|raw }}
                    </small>
                {% endif %}
            </h4>

        </div>
    {% endif %}

{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/heading.twig", "");
    }
}
