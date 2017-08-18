<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/blank.twig */
class __TwigTemplate_abfdaa3649cae0ba886cd7803cf2e055af8e070efd36fa3f954976ad721c03fb extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute(($context["template"] ?? null), "layout", array())) ? ($this->getAttribute(($context["template"] ?? null), "layout", array())) : ("theme::layouts/default")), "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/blank.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends template.layout ?: \"theme::layouts/default\" %}

{% block content %}
    {{ content|raw }}
{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/blank.twig", "");
    }
}
