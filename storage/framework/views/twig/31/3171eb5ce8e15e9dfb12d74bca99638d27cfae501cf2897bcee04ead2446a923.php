<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/d0f5de73f32866c2d11b7bbba4da3cda.twig */
class __TwigTemplate_65d18326f36f1f13f7c3ecf8656fa8b2ebf4b7421ed67606a672d748dd334746 extends TwigBridge\Twig\Template
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
        echo $this->getAttribute(($context["entry"] ?? null), "exchange", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/d0f5de73f32866c2d11b7bbba4da3cda.twig";
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
        return new Twig_Source("{{ entry.exchange|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/d0f5de73f32866c2d11b7bbba4da3cda.twig", "");
    }
}
