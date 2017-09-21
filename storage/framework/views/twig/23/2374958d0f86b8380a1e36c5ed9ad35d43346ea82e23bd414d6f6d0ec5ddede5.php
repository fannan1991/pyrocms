<?php

/* module::admin/upload/partials/heading */
class __TwigTemplate_24c60e90673bb1f156ef92cc5bc2adfb85e1694297ea2578f1e9506e154bdc40 extends TwigBridge\Twig\Template
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
    <div class=\"card-block\">

        <h4 class=\"title\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "name", array()), "html", null, true);
        echo "

            ";
        // line 7
        if ($this->getAttribute(($context["folder"] ?? null), "description", array())) {
            // line 8
            echo "                <br>
                <small class=\"text-muted\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "description", array()), "html", null, true);
            echo "</small>
            ";
        }
        // line 11
        echo "        </h4>

        <div>
            <span class=\"tag tag-info\">Max:
                ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('max_upload_size')->getCallable(), array()), "html", null, true);
        echo "MB</span>

            ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "value", array())) {
            // line 18
            echo "                ";
            echo twig_join_filter($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "labels", array()), " ");
            echo "
            ";
        }
        // line 20
        echo "        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "module::admin/upload/partials/heading";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 20,  53 => 18,  51 => 17,  46 => 15,  40 => 11,  35 => 9,  32 => 8,  30 => 7,  25 => 5,  19 => 1,);
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
    <div class=\"card-block\">

        <h4 class=\"title\">
            {{ folder.name }}

            {% if folder.description %}
                <br>
                <small class=\"text-muted\">{{ folder.description }}</small>
            {% endif %}
        </h4>

        <div>
            <span class=\"tag tag-info\">Max:
                {{ max_upload_size() }}MB</span>

            {% if folder.allowed_types.value %}
                {{ folder.allowed_types.labels|join(' ')|raw }}
            {% endif %}
        </div>

    </div>
</div>
", "module::admin/upload/partials/heading", "");
    }
}
