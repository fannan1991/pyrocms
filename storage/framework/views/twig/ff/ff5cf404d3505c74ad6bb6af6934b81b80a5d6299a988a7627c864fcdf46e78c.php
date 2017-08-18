<?php

/* streams::form/partials/controls */
class __TwigTemplate_8f1b856f61df74faf44a0f638e1d59834c9ebda44aabdab33c11b8800f87e5be extends TwigBridge\Twig\Template
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
        echo "<div class=\"controls ";
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "options", array()), "get", array(0 => "section_class", 1 => "card"), "method"), "html", null, true);
        echo "\">
    <div class=\"card-block\">

        ";
        // line 4
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "options", array()), "read_only", array())) {
            // line 5
            echo "            <div class=\"actions\">
                ";
            // line 6
            echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute(($context["form"] ?? null), "actions", array())));
            echo "
            </div>
        ";
        }
        // line 9
        echo "
        <div class=\"buttons\">
            ";
        // line 11
        echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute(($context["form"] ?? null), "buttons", array())));
        echo "
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "streams::form/partials/controls";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 9,  33 => 6,  30 => 5,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"controls {{ position }} {{ form.options.get('section_class', 'card') }}\">
    <div class=\"card-block\">

        {% if not form.options.read_only %}
            <div class=\"actions\">
                {{ buttons(form.actions)|raw }}
            </div>
        {% endif %}

        <div class=\"buttons\">
            {{ buttons(form.buttons)|raw }}
        </div>

    </div>
</div>
", "streams::form/partials/controls", "");
    }
}
