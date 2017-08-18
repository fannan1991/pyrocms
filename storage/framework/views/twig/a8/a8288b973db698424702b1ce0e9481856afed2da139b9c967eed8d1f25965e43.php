<?php

/* theme::partials/assets */
class __TwigTemplate_2668f10badd9fbd3c2b6c0946d41365ac681e3130c2ad3b9bfbcbd7186bb982b extends TwigBridge\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_styles')->getCallable(), array("styles", "styles.css")));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 2
            echo "    ";
            echo $context["style"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_scripts')->getCallable(), array("scripts", "scripts.js")));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 6
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
        return "theme::partials/assets";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  32 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for style in asset_styles(\"styles.css\") %}
    {{ style|raw }}
{% endfor %}

{% for script in asset_scripts(\"scripts.js\") %}
    {{ script|raw }}
{% endfor %}
", "theme::partials/assets", "");
    }
}
