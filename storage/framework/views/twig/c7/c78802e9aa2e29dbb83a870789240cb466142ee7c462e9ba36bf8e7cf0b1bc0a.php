<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/addons-module/resources/views/ajax/details.twig */
class __TwigTemplate_0b8d4f1e9ee6d0b31dafc9082c1879f51357062eba0c18ca285bf57d7dec0bc3 extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">";
        // line 5
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["addon"] ?? null), "name", array())));
        echo "</h4>
</div>

<div class=\"modal-body\">
    ";
        // line 9
        $this->loadTemplate("module::ajax/partials/details", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/details.twig", 9)->display($context);
        // line 10
        echo "    <hr>
    ";
        // line 11
        $this->loadTemplate("module::ajax/partials/authors", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/details.twig", 11)->display($context);
        // line 12
        echo "    <hr>
    ";
        // line 13
        $this->loadTemplate("module::ajax/partials/support", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/details.twig", 13)->display($context);
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  42 => 13,  39 => 12,  37 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">{{ trans(addon.name)|raw }}</h4>
</div>

<div class=\"modal-body\">
    {% include \"module::ajax/partials/details\" %}
    <hr>
    {% include \"module::ajax/partials/authors\" %}
    <hr>
    {% include \"module::ajax/partials/support\" %}
</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/details.twig", "");
    }
}
