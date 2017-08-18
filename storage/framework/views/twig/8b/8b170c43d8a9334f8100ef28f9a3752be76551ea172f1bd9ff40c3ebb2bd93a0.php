<?php

/* module::ajax/partials/support */
class __TwigTemplate_faf07d1d051b0d74d626298664be7a7a8f87b44e0d86f4892f22724274016137 extends TwigBridge\Twig\Template
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
        echo "<h3 class=\"lead\">
    ";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.support")), "html", null, true);
        echo "
</h3>

<ul class=\"list-unstyled\">

    ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "email", array())) {
            // line 8
            echo "        <li>";
            echo call_user_func_array($this->env->getFunction('html_mailto')->getCallable(), array("mailto", $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "email", array()), call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.support_email"))));
            echo "</li>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "issues", array())) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "issues", array()), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.known_issues")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "forum", array())) {
            // line 20
            echo "        <li>
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "forum", array()), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.support_forum")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "wiki", array())) {
            // line 28
            echo "        <li>
            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "wiki", array()), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 30
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.project_wiki")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "irc", array())) {
            // line 36
            echo "        <li>
            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "irc", array()), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 38
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.irc_channel")), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "source", array())) {
            // line 44
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["json"] ?? null), "support", array()), "source", array()), "html", null, true);
            echo "\" target=\"_blank\">Source Code</a></li>
    ";
        }
        // line 46
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "module::ajax/partials/support";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  119 => 44,  117 => 43,  114 => 42,  107 => 38,  103 => 37,  100 => 36,  98 => 35,  95 => 34,  88 => 30,  84 => 29,  81 => 28,  79 => 27,  76 => 26,  69 => 22,  65 => 21,  62 => 20,  60 => 19,  57 => 18,  50 => 14,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"lead\">
    {{ trans('module::label.support') }}
</h3>

<ul class=\"list-unstyled\">

    {% if json.support.email %}
        <li>{{ html_mailto(json.support.email, trans('module::label.support_email')) }}</li>
    {% endif %}

    {% if json.support.issues %}
        <li>
            <a href=\"{{ json.support.issues }}\" target=\"_blank\">
                {{ trans('module::label.known_issues') }}
            </a>
        </li>
    {% endif %}

    {% if json.support.forum %}
        <li>
            <a href=\"{{ json.support.forum }}\" target=\"_blank\">
                {{ trans('module::label.support_forum') }}
            </a>
        </li>
    {% endif %}

    {% if json.support.wiki %}
        <li>
            <a href=\"{{ json.support.wiki }}\" target=\"_blank\">
                {{ trans('module::label.project_wiki') }}
            </a>
        </li>
    {% endif %}

    {% if json.support.irc %}
        <li>
            <a href=\"{{ json.support.irc }}\" target=\"_blank\">
                {{ trans('module::label.irc_channel') }}
            </a>
        </li>
    {% endif %}

    {% if json.support.source %}
        <li><a href=\"{{ json.support.source }}\" target=\"_blank\">Source Code</a></li>
    {% endif %}

</ul>
", "module::ajax/partials/support", "");
    }
}
