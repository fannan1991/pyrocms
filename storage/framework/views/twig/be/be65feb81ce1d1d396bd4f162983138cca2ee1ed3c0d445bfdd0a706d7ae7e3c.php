<?php

/* D:\phpstudy\WWW\pyrocms\storage\streams/default/posts/types/1/layout.twig */
class __TwigTemplate_142ba59dd99f3ffc8b172bd2189892e37cb6be4547d75ac22d91efc0b6f68c0e extends TwigBridge\Twig\Template
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
        echo $this->getAttribute(($context["post"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default/posts/types/1/layout.twig";
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
        return new Twig_Source("{{ post.content|raw }}", "D:\\phpstudy\\WWW\\pyrocms\\storage\\streams/default/posts/types/1/layout.twig", "");
    }
}
