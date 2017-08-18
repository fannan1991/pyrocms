<?php

/* streams::form/partials/section */
class __TwigTemplate_360471ac6aab347765c6e783c9a722667e9f5f8ce3a63a69fe8f0ca235706b19 extends TwigBridge\Twig\Template
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
        echo "<div class=\"card ";
        echo (($this->getAttribute(($context["section"] ?? null), "stacked", array())) ? ("card-flex") : (""));
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["section"] ?? null), "attributes", array())));
        echo ">

    ";
        // line 3
        $this->loadTemplate("streams::form/partials/header", "streams::form/partials/section", 3)->display(array_merge($context, array("section" => ($context["section"] ?? null))));
        // line 4
        echo "
    ";
        // line 5
        if ($this->getAttribute(($context["section"] ?? null), "fields", array())) {
            // line 6
            echo "
        <div class=\"card-block\">
            ";
            // line 8
            $this->loadTemplate("streams::form/partials/fields", "streams::form/partials/section", 8)->display(array_merge($context, array("fields" => $this->getAttribute(($context["section"] ?? null), "fields", array()))));
            // line 9
            echo "        </div>

    ";
        } elseif ($this->getAttribute(        // line 11
($context["section"] ?? null), "tabs", array())) {
            // line 12
            echo "
        ";
            // line 14
            echo "        ";
            $this->loadTemplate("streams::form/partials/tabs", "streams::form/partials/section", 14)->display(array_merge($context, array("tabs" => $this->getAttribute(($context["section"] ?? null), "tabs", array()), "stacked" => $this->getAttribute(($context["section"] ?? null), "stacked", array()))));
            // line 15
            echo "
    ";
        } elseif ($this->getAttribute(        // line 16
($context["section"] ?? null), "rows", array())) {
            // line 17
            echo "
        <div class=\"card-block\">
            ";
            // line 19
            $this->loadTemplate("streams::form/partials/rows", "streams::form/partials/section", 19)->display(array_merge($context, array("rows" => $this->getAttribute(($context["section"] ?? null), "rows", array()))));
            // line 20
            echo "        </div>

    ";
        }
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "streams::form/partials/section";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  63 => 20,  61 => 19,  57 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 12,  44 => 11,  40 => 9,  38 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card {{ section.stacked ? 'card-flex' }}\" {{ html_attributes(section.attributes) }}>

    {% include \"streams::form/partials/header\" with {\"section\": section} %}

    {% if section.fields %}

        <div class=\"card-block\">
            {% include \"streams::form/partials/fields\" with {\"fields\": section.fields} %}
        </div>

    {% elseif section.tabs %}

        {# No card block - tabs push to the edges #}
        {% include \"streams::form/partials/tabs\" with {\"tabs\": section.tabs, \"stacked\": section.stacked} %}

    {% elseif section.rows %}

        <div class=\"card-block\">
            {% include \"streams::form/partials/rows\" with {\"rows\": section.rows} %}
        </div>

    {% endif %}

</div>
", "streams::form/partials/section", "");
    }
}
