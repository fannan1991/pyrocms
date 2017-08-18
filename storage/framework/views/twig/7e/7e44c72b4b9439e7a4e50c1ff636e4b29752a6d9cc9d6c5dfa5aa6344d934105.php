<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/ajax.twig */
class __TwigTemplate_c3aa2c5398b33bbb4c9dac21f40d5cb710452dae7f5721d5b9f76b6cc5873a51 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
    var IS_AJAX = true;
</script>

";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_paths')->getCallable(), array("paths", "styles.css")));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 10
            echo "    ";
            echo call_user_func_array($this->env->getFunction('html_style')->getCallable(), array("style", $context["path"]));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_paths')->getCallable(), array("paths", "scripts.js")));
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 14
            echo "    ";
            echo call_user_func_array($this->env->getFunction('html_script')->getCallable(), array("script", $context["path"]));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 6,  62 => 5,  51 => 14,  47 => 13,  44 => 12,  35 => 10,  31 => 9,  28 => 8,  26 => 5,  20 => 1,);
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
    var IS_AJAX = true;
</script>

{% block content %}
    {{ content|raw }}
{% endblock %}

{% for path in asset_paths(\"styles.css\") %}
    {{ html_style(path) }}
{% endfor %}

{% for path in asset_paths(\"scripts.js\") %}
    {{ html_script(path) }}
{% endfor %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/ajax.twig", "");
    }
}
