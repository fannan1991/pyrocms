<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/c369ff45af1cf1c7355e64c128eb554d.twig */
class __TwigTemplate_377d5077566108a3c27ad14a120f2a47d43a6cacb438fe908d7f2e1cb7cecc1f extends TwigBridge\Twig\Template
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
        echo $this->getAttribute(($context["entry"] ?? null), "edit_link", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/c369ff45af1cf1c7355e64c128eb554d.twig";
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
        return new Twig_Source("{{ entry.edit_link|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/c369ff45af1cf1c7355e64c128eb554d.twig", "");
    }
}
