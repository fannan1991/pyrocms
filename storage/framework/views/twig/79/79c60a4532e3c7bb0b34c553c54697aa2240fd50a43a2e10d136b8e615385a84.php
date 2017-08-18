<?php

/* streams::form/partials/header */
class __TwigTemplate_d576d7e7ea7048d211ee2f5ae8ee08aa9edaf1740722980718af4dfeaedd168d extends TwigBridge\Twig\Template
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
        if ($this->getAttribute(($context["section"] ?? null), "title", array())) {
            // line 2
            echo "    <div class=\"card-header\">
        <h5 class=\"card-title\">

            ";
            // line 5
            echo (($this->getAttribute(($context["section"] ?? null), "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "icon", array())))) : (""));
            echo "

            ";
            // line 7
            echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "title", array())));
            echo "

            ";
            // line 9
            if ($this->getAttribute(($context["section"] ?? null), "description", array())) {
                // line 10
                echo "
                <br>

                <small>
                    ";
                // line 14
                echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "description", array())));
                echo "
                </small>
            ";
            }
            // line 17
            echo "        </h5>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "streams::form/partials/header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  44 => 14,  38 => 10,  36 => 9,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if section.title %}
    <div class=\"card-header\">
        <h5 class=\"card-title\">

            {{ section.icon ? icon(section.icon) }}

            {{ trans(section.title)|raw }}

            {% if section.description %}

                <br>

                <small>
                    {{ trans(section.description)|raw }}
                </small>
            {% endif %}
        </h5>
    </div>
{% endif %}
", "streams::form/partials/header", "");
    }
}
