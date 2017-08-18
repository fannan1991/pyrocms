<?php

/* theme::partials/footer */
class __TwigTemplate_b9173fd63640953b78f3c9bdeded7029429e1a5cfa7d8984863856a235bc3e8a extends TwigBridge\Twig\Template
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
        echo "<section id=\"footer\">

    <ul class=\"meta\">
        <li class=\"copyright\">
            &copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " PyroCMS, Inc
        </li>
        <li class=\"footprint\">
            ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('request_time')->getCallable(), array()), "html", null, true);
        echo " <span>|</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('memory_usage')->getCallable(), array()), "html", null, true);
        echo "
        </li>
        <li class=\"version\">
            ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), array("streams::distribution.version")), "html", null, true);
        echo "
        </li>
    </ul>

    <ul class=\"extra\">
        <li class=\"language\">
            <select class=\"custom-select\" onchange=\"window.location = '?_locale=' + this.value;\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(call_user_func_array($this->env->getFunction('config')->getCallable(), array("streams::locales.supported"))));
        foreach ($context['_seq'] as $context["_key"] => $context["iso"]) {
            // line 19
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo "\" ";
            echo (((call_user_func_array($this->env->getFunction('config')->getCallable(), array("app.locale")) == $context["iso"])) ? ("selected") : (""));
            echo ">
                        ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array((("streams::locale." . $context["iso"]) . ".name"))), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $context["iso"], "html", null, true);
            echo ")
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </select>
        </li>
        <li class=\"help\">
            <a class=\"btn btn-danger\" href=\"http://pyrocms.com/docs\" target=\"_blank\">
                ";
        // line 27
        echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("question-circle"));
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("pyrocms.theme.accelerant::control_panel.help")), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

</section>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/footer";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  71 => 23,  60 => 20,  53 => 19,  49 => 18,  39 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"footer\">

    <ul class=\"meta\">
        <li class=\"copyright\">
            &copy; {{ 'now'|date('Y') }} PyroCMS, Inc
        </li>
        <li class=\"footprint\">
            {{ request_time() }} <span>|</span> {{ memory_usage() }}
        </li>
        <li class=\"version\">
            {{ config('streams::distribution.version') }}
        </li>
    </ul>

    <ul class=\"extra\">
        <li class=\"language\">
            <select class=\"custom-select\" onchange=\"window.location = '?_locale=' + this.value;\">
                {% for iso in config('streams::locales.supported')|keys %}
                    <option value=\"{{ iso }}\" {{ config('app.locale') == iso ? 'selected' }}>
                        {{ trans('streams::locale.' ~ iso ~ '.name') }} ({{ iso }})
                    </option>
                {% endfor %}
            </select>
        </li>
        <li class=\"help\">
            <a class=\"btn btn-danger\" href=\"http://pyrocms.com/docs\" target=\"_blank\">
                {{ icon('question-circle') }} {{ trans('pyrocms.theme.accelerant::control_panel.help') }}
            </a>
        </li>
    </ul>

</section>
", "theme::partials/footer", "");
    }
}
