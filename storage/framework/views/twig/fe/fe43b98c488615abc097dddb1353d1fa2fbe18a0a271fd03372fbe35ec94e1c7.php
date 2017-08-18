<?php

/* streams::form/partials/translations */
class __TwigTemplate_2d26062542195d25ef8f1802bc6e3cafc7e0157b4035148606025cf62a4a06b3 extends TwigBridge\Twig\Template
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
        echo "<div class=\"btn-group\" style=\"display: inline-block;\">
    <a href=\"#\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((("streams::locale." . $this->getAttribute(($context["field_type"] ?? null), "locale", array())) . ".name"))), "html", null, true);
        echo "
    </a>
    <div class=\"dropdown-menu\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::locales.enabled")));
        foreach ($context['_seq'] as $context["_key"] => $context["iso"]) {
            // line 7
            echo "            <a class=\"dropdown-item ";
            echo ((($context["iso"] == call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::locales.default")))) ? ("active") : (""));
            echo "\"
               href=\"#\"
               data-toggle=\"lang\" lang=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((("streams::locale." . $context["iso"]) . ".name"))), "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "streams::form/partials/translations";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  43 => 10,  39 => 9,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"btn-group\" style=\"display: inline-block;\">
    <a href=\"#\" class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">
        {{ trans('streams::locale.' ~ field_type.locale ~ '.name') }}
    </a>
    <div class=\"dropdown-menu\">
        {% for iso in config_get('streams::locales.enabled') %}
            <a class=\"dropdown-item {{ iso == config_get('streams::locales.default') ? 'active' }}\"
               href=\"#\"
               data-toggle=\"lang\" lang=\"{{ iso }}\">
                {{ trans('streams::locale.' ~ iso ~ '.name') }}
            </a>
        {% endfor %}
    </div>
</div>
", "streams::form/partials/translations", "");
    }
}
