<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/631855c4bfc721b80c5f3bbd47e80847.twig */
class __TwigTemplate_a1ebedb864745791bf0d99d72803d2d9ec07714ed682bef432b09783dda023c1 extends TwigBridge\Twig\Template
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
        echo $this->getAttribute($this->getAttribute(($context["entry"] ?? null), "integral_member_id", array()), "real_name", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/631855c4bfc721b80c5f3bbd47e80847.twig";
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
        return new Twig_Source("{{ entry.integral_member_id.real_name|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/631855c4bfc721b80c5f3bbd47e80847.twig", "");
    }
}
