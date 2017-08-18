<?php

/* theme::partials/messages */
class __TwigTemplate_11a398af6b04aef29afb06c9d88b48e253f5505c58f0da32e9be4a9c6a848344 extends TwigBridge\Twig\Template
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
        echo "<!-- Success Messages -->
";
        // line 2
        if (call_user_func_array($this->env->getFunction('message_exists')->getCallable(), array("success"))) {
            // line 3
            echo "    <div class=\"alert alert-success\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('message_get')->getCallable(), array("success")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "            ";
                echo $this->env->getExtension('Aptoma\Twig\Extension\MarkdownExtension')->parseMarkdown(call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["message"])));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
";
        }
        // line 12
        echo "
<!-- Informational Messages -->
";
        // line 14
        if (call_user_func_array($this->env->getFunction('message_exists')->getCallable(), array("info"))) {
            // line 15
            echo "    <div class=\"alert alert-info\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('message_get')->getCallable(), array("info")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "            ";
                echo $this->env->getExtension('Aptoma\Twig\Extension\MarkdownExtension')->parseMarkdown(call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["message"])));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </div>
";
        }
        // line 24
        echo "
<!-- Warning Messages -->
";
        // line 26
        if (call_user_func_array($this->env->getFunction('message_exists')->getCallable(), array("warning"))) {
            // line 27
            echo "    <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('message_get')->getCallable(), array("warning")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "            ";
                echo $this->env->getExtension('Aptoma\Twig\Extension\MarkdownExtension')->parseMarkdown(call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["message"])));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </div>
";
        }
        // line 36
        echo "
<!-- Error Messages -->
";
        // line 38
        if (call_user_func_array($this->env->getFunction('message_exists')->getCallable(), array("error"))) {
            // line 39
            echo "    <div class=\"alert alert-danger\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('message_get')->getCallable(), array("error")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "            ";
                echo $this->env->getExtension('Aptoma\Twig\Extension\MarkdownExtension')->parseMarkdown(call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["message"])));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "theme::partials/messages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  121 => 44,  117 => 43,  111 => 39,  109 => 38,  105 => 36,  101 => 34,  92 => 32,  88 => 31,  82 => 27,  80 => 26,  76 => 24,  72 => 22,  63 => 20,  59 => 19,  53 => 15,  51 => 14,  47 => 12,  43 => 10,  34 => 8,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Success Messages -->
{% if message_exists('success') %}
    <div class=\"alert alert-success\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        {% for message in message_get('success') %}
            {{ trans(message)|markdown }}
        {% endfor %}
    </div>
{% endif %}

<!-- Informational Messages -->
{% if message_exists('info') %}
    <div class=\"alert alert-info\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        {% for message in message_get('info') %}
            {{ trans(message)|markdown }}
        {% endfor %}
    </div>
{% endif %}

<!-- Warning Messages -->
{% if message_exists('warning') %}
    <div class=\"alert alert-warning\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        {% for message in message_get('warning') %}
            {{ trans(message)|markdown }}
        {% endfor %}
    </div>
{% endif %}

<!-- Error Messages -->
{% if message_exists('error') %}
    <div class=\"alert alert-danger\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
            <span>&times;</span>
        </button>
        {% for message in message_get('error') %}
            {{ trans(message)|markdown }}
        {% endfor %}
    </div>
{% endif %}
", "theme::partials/messages", "");
    }
}
