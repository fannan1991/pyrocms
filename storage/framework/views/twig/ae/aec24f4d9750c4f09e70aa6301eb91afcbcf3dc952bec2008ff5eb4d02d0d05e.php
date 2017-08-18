<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/caaa077b46d853a9d9720806a1acc33a.twig */
class __TwigTemplate_19caee2836b7ccda1f2f8d142bc0abb69b053f0ff783005a935a5827eefef2a1 extends TwigBridge\Twig\Template
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
        echo $this->getAttribute(($context["entry"] ?? null), "preview", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/caaa077b46d853a9d9720806a1acc33a.twig";
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
        return new Twig_Source("{{ entry.preview|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/caaa077b46d853a9d9720806a1acc33a.twig", "");
    }
}
