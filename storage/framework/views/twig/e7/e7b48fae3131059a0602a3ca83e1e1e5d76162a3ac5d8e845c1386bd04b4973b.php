<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default//support/parsed/81be3e627060aff53d91be959d465e2c.twig */
class __TwigTemplate_6ba29c22626138d40953efdf9a8f4424977e6fddb79c836acc4b1e0478c60c24 extends TwigBridge\Twig\Template
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
        echo $this->getAttribute($this->getAttribute(($context["entry"] ?? null), "gold_member_id", array()), "real_name", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/81be3e627060aff53d91be959d465e2c.twig";
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
        return new Twig_Source("{{ entry.gold_member_id.real_name|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default//support/parsed/81be3e627060aff53d91be959d465e2c.twig", "");
    }
}
