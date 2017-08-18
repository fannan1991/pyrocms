<?php

/* streams::form/partials/default */
class __TwigTemplate_81bb85482432cf5c423fbe41b411764c884abf32f0fe3d672f25883425a95f3c extends TwigBridge\Twig\Template
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
        echo "<div class=\"card\">

    ";
        // line 3
        $this->loadTemplate("streams::form/partials/header", "streams::form/partials/default", 3)->display(array_merge($context, array("section" => ($context["section"] ?? null))));
        // line 4
        echo "
    <div class=\"card-block\">

        ";
        // line 7
        $this->loadTemplate("streams::form/partials/fields", "streams::form/partials/default", 7)->display(array_merge($context, array("fields" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "base", array(), "method"), "pluck", array(0 => "field_name"), "method"), "all", array(), "method"))));
        // line 8
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "streams::form/partials/default";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">

    {% include \"streams::form/partials/header\" with {\"section\": section} %}

    <div class=\"card-block\">

        {% include \"streams::form/partials/fields\" with {\"fields\": form.fields.base().pluck('field_name').all()} %}

    </div>
</div>
", "streams::form/partials/default", "");
    }
}
