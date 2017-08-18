<?php

/* theme::partials/scripts */
class __TwigTemplate_d892880a839f13093c351989268f752932d0d033eaab083fae73450e4ef625b6 extends TwigBridge\Twig\Template
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
        echo "<!-- jQuery -->
";
        // line 2
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "theme::js/vendor/jquery.js"));
        echo "

<!-- Bootstrap Core JavaScript -->
";
        // line 5
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "theme::js/bootstrap.js"));
        echo "

<!-- Plugin JavaScript -->
";
        // line 8
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "theme::js/classie.js"));
        echo "
";
        // line 9
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "theme::js/cbpAnimatedHeader.js"));
        echo "

<!-- Custom Theme JavaScript -->
";
        // line 12
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "theme::js/freelancer.js"));
        echo "

";
        // line 14
        echo call_user_func_array($this->env->getFunction('asset_script')->getCallable(), array("script", "theme.js", array(0 => "min")));
        echo "

<!-- After the theme.js assets -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_scripts')->getCallable(), array("scripts", "scripts.js")));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 20
            echo "    ";
            echo $context["script"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "theme::partials/scripts";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  57 => 19,  49 => 14,  44 => 12,  38 => 9,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- jQuery -->
{{ asset_add(\"theme.js\", \"theme::js/vendor/jquery.js\") }}

<!-- Bootstrap Core JavaScript -->
{{ asset_add(\"theme.js\", \"theme::js/bootstrap.js\") }}

<!-- Plugin JavaScript -->
{{ asset_add(\"theme.js\", \"theme::js/classie.js\") }}
{{ asset_add(\"theme.js\", \"theme::js/cbpAnimatedHeader.js\") }}

<!-- Custom Theme JavaScript -->
{{ asset_add(\"theme.js\", \"theme::js/freelancer.js\") }}

{{ asset_script(\"theme.js\", [\"min\"]) }}

<!-- After the theme.js assets -->
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

{% for script in asset_scripts(\"scripts.js\") %}
    {{ script|raw }}
{% endfor %}
", "theme::partials/scripts", "");
    }
}
