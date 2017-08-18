<?php

/* theme::partials/buttons */
class __TwigTemplate_450cdd82e4f2eabf5313a35129d1a1f40da09f57efa7cf636580d574e1312369 extends TwigBridge\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "buttons", array()), "isEmpty", array(), "method")) {
            // line 2
            echo "    <div id=\"buttons\">
        ";
            // line 3
            echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "buttons", array())));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "theme::partials/buttons";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not template.cp.buttons.isEmpty() %}
    <div id=\"buttons\">
        {{ buttons(template.cp.buttons) }}
    </div>
{% endif %}
", "theme::partials/buttons", "");
    }
}
