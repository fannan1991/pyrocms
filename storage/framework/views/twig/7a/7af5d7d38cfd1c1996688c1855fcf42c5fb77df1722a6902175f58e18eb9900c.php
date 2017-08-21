<?php

/* anomaly.field_type.file::upload/partials/header */
class __TwigTemplate_896179b3c529a06686af94b298bc0b5b5342d5a0cb9db13292f1060776c11340 extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal-header\">

    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>

    <h4 class=\"title\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "name", array()), "html", null, true);
        echo "

        ";
        // line 10
        if ($this->getAttribute(($context["folder"] ?? null), "description", array())) {
            // line 11
            echo "            <br>
            <small class=\"text-muted\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "description", array()), "html", null, true);
            echo "</small>
        ";
        }
        // line 14
        echo "    </h4>

    <div>
        <span class=\"tag tag-info\">Max:
            ";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('max_upload_size')->getCallable(), array()), "html", null, true);
        echo " MB</span>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "value", array())) {
            // line 21
            echo "            ";
            echo twig_join_filter($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "labels", array()), " ");
            echo "
        ";
        }
        // line 23
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "anomaly.field_type.file::upload/partials/header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  56 => 21,  54 => 20,  49 => 18,  43 => 14,  38 => 12,  35 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal-header\">

    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>

    <h4 class=\"title\">
        {{ folder.name }}

        {% if folder.description %}
            <br>
            <small class=\"text-muted\">{{ folder.description }}</small>
        {% endif %}
    </h4>

    <div>
        <span class=\"tag tag-info\">Max:
            {{ max_upload_size() }} MB</span>

        {% if folder.allowed_types.value %}
            {{ folder.allowed_types.labels|join(' ')|raw }}
        {% endif %}
    </div>

</div>
", "anomaly.field_type.file::upload/partials/header", "");
    }
}
