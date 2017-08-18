<?php

/* D:\phpstudy\WWW\pyrocms\core/pyrocms/accelerant-theme/resources/views/login.twig */
class __TwigTemplate_76209d10ea286429a755e59fe1e1a088008b0390835e091e44df2f51c6383703 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("pyrocms.theme.accelerant::layouts/login", "D:\\phpstudy\\WWW\\pyrocms\\core/pyrocms/accelerant-theme/resources/views/login.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "pyrocms.theme.accelerant::layouts/login";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"logo-container\">
        <div class=\"logo\">
            ";
        // line 7
        echo $this->getAttribute(call_user_func_array($this->env->getFunction('img')->getCallable(), array("theme::img/icon.svg")), "data", array());
        echo "
            PYRO
            <span>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), array("streams::distribution.version")), "html", null, true);
        echo "</span>
        </div>
        <div class=\"overlay\"></div>
    </div>

    <div class=\"login-container variant-background-pattern\">
        <div class=\"login-wrapper container-fluid\">

            <div class=\"logo\">
                ";
        // line 18
        echo $this->getAttribute(call_user_func_array($this->env->getFunction('img')->getCallable(), array("theme::img/icon.svg")), "data", array());
        echo "
            </div>

            <div class=\"col-sm-12 offset-sm-6\">

                ";
        // line 23
        $this->loadTemplate("theme::partials/messages", "D:\\phpstudy\\WWW\\pyrocms\\core/pyrocms/accelerant-theme/resources/views/login.twig", 23)->display($context);
        // line 24
        echo "
                ";
        // line 25
        $context["form"] = $this->getAttribute($this->getAttribute(call_user_func_array($this->env->getFunction('form')->getCallable(), array("login")), "redirect", array(0 => "admin"), "method"), "get", array(), "method");
        // line 26
        echo "
                ";
        // line 27
        echo $this->getAttribute(($context["form"] ?? null), "open", array());
        echo "

                <div class=\"form-group\">
                    ";
        // line 30
        if ((call_user_func_array($this->env->getFunction('setting_value')->getCallable(), array("anomaly.module.users::login")) == "username")) {
            // line 31
            echo "                        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "username", array()), "setPlaceholder", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "username", array()), "label", array())), "method"), "input_name", array());
            echo "
                    ";
        } else {
            // line 33
            echo "                        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "email", array()), "setPlaceholder", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "email", array()), "label", array())), "method"), "input", array());
            echo "
                    ";
        }
        // line 35
        echo "                </div>

                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "password", array()), "setPlaceholder", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "password", array()), "label", array())), "method"), "input", array());
        echo "
                </div>

                <div class=\"form-group checkbox pull-left\">
                    <label>
                        ";
        // line 43
        echo call_user_func_array($this->env->getFunction('form_checkbox')->getCallable(), array("checkbox", "remember", null, false, array("id" => "remember")));
        echo "
                        ";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.users::field.remember_me.name")), "html", null, true);
        echo "
                    </label>
                </div>

                <div class=\"form-group pull-right\">
                    <button type=\"submit\" value=\"Login\" class=\"btn btn-white btn-outline\"
                            onclick=\"\$('body').addClass('success');\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.users::button.login")), "html", null, true);
        echo "
                    </button>
                </div>

                ";
        // line 55
        echo $this->getAttribute(($context["form"] ?? null), "close", array());
        echo "

                <div class=\"clearfix\"></div>

                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("route", "anomaly.module.users::password.forgot")), "html", null, true);
        echo "\">
                    <small>
                        ";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.users::message.forgot_password")), "html", null, true);
        echo "
                    </small>
                </a>

            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/pyrocms/accelerant-theme/resources/views/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  132 => 59,  125 => 55,  118 => 51,  108 => 44,  104 => 43,  96 => 38,  91 => 35,  85 => 33,  79 => 31,  77 => 30,  71 => 27,  68 => 26,  66 => 25,  63 => 24,  61 => 23,  53 => 18,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"pyrocms.theme.accelerant::layouts/login\" %}

{% block content %}

    <div class=\"logo-container\">
        <div class=\"logo\">
            {{ img('theme::img/icon.svg').data|raw }}
            PYRO
            <span>{{ config('streams::distribution.version') }}</span>
        </div>
        <div class=\"overlay\"></div>
    </div>

    <div class=\"login-container variant-background-pattern\">
        <div class=\"login-wrapper container-fluid\">

            <div class=\"logo\">
                {{ img('theme::img/icon.svg').data|raw }}
            </div>

            <div class=\"col-sm-12 offset-sm-6\">

                {% include \"theme::partials/messages\" %}

                {% set form = form('login').redirect('admin').get() %}

                {{ form.open|raw }}

                <div class=\"form-group\">
                    {% if setting_value('anomaly.module.users::login') == 'username' %}
                        {{ form.fields.username.setPlaceholder(form.fields.username.label).input_name|raw }}
                    {% else %}
                        {{ form.fields.email.setPlaceholder(form.fields.email.label).input|raw }}
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    {{ form.fields.password.setPlaceholder(form.fields.password.label).input|raw }}
                </div>

                <div class=\"form-group checkbox pull-left\">
                    <label>
                        {{ form_checkbox(\"remember\", null, false, {'id': 'remember'}) }}
                        {{ trans('anomaly.module.users::field.remember_me.name') }}
                    </label>
                </div>

                <div class=\"form-group pull-right\">
                    <button type=\"submit\" value=\"Login\" class=\"btn btn-white btn-outline\"
                            onclick=\"\$('body').addClass('success');\">
                        {{ trans('anomaly.module.users::button.login') }}
                    </button>
                </div>

                {{ form.close|raw }}

                <div class=\"clearfix\"></div>

                <a href=\"{{ url_route('anomaly.module.users::password.forgot') }}\">
                    <small>
                        {{ trans('anomaly.module.users::message.forgot_password') }}
                    </small>
                </a>

            </div>
        </div>
    </div>

{% endblock %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/pyrocms/accelerant-theme/resources/views/login.twig", "");
    }
}
