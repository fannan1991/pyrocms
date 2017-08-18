<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/10a7483a7114dd627850f402d3f893fe.twig */
class __TwigTemplate_69a5ef6dfff9b805e15cdc884b8b52026dbdc99f317a53b40c36e85530241bab extends TwigBridge\Twig\Template
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
        echo twig_join_filter($this->getAttribute($this->getAttribute(($context["entry"] ?? null), "keywords", array()), "labels", array()));
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/10a7483a7114dd627850f402d3f893fe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ entry.keywords.labels|join|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/10a7483a7114dd627850f402d3f893fe.twig", "");
    }
}
