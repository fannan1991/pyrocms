<?php

/* streams::modals/filter */
class __TwigTemplate_26d36b439fd10dae66039d87cfa3c39a9a96cc7dc4ca979ff78bd66b3ab01971 extends TwigBridge\Twig\Template
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
        echo "<script type=\"text/javascript\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_inline')->getCallable(), array("inline", "streams::js/modal/filter.js"));
        echo "
</script>

<form class=\"modal-filter\">
    <input type=\"text\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::message.search")), "html", null, true);
        echo "...\" class=\"form-control\">
</form>
";
    }

    public function getTemplateName()
    {
        return "streams::modals/filter";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    {{ asset_inline('streams::js/modal/filter.js') }}
</script>

<form class=\"modal-filter\">
    <input type=\"text\" placeholder=\"{{ trans('streams::message.search') }}...\" class=\"form-control\">
</form>
", "streams::modals/filter", "");
    }
}
