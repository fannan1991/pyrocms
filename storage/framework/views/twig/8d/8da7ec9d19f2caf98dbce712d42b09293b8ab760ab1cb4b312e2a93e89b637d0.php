<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/31ac45b06fdab02c0e42bf4433c9e247.twig */
class __TwigTemplate_d8338bc3b7d4a737e0f82c4c3984922802002c42dab021b9c285fef02004d3f4 extends TwigBridge\Twig\Template
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
        echo $this->getAttribute($this->getAttribute(($context["entry"] ?? null), "ad_image", array()), "preview", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/31ac45b06fdab02c0e42bf4433c9e247.twig";
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
        return new Twig_Source("{{ entry.ad_image.preview|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/31ac45b06fdab02c0e42bf4433c9e247.twig", "");
    }
}
