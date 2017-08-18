<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/db2ebd26cf1646c07eb091cfb0038eb2.twig */
class __TwigTemplate_25107f24ab9c8b9e91b93ffcc541a0f1ce8ef4717ea75d58daaf5572abd2887c extends TwigBridge\Twig\Template
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
        echo $this->getAttribute(($context["entry"] ?? null), "grade_value", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/db2ebd26cf1646c07eb091cfb0038eb2.twig";
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
        return new Twig_Source("{{ entry.grade_value|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/db2ebd26cf1646c07eb091cfb0038eb2.twig", "");
    }
}
