<?php

/* theme::partials/topbar */
class __TwigTemplate_4bcb4db62d71d2d0dc1a6d24a5caad67537f6020a802ef15af3de972aa836fa7 extends TwigBridge\Twig\Template
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
        echo "<section id=\"topbar\">

    <div class=\"topbar-left\">
        <a href=\"/admin\" class=\"logo variant-logo\">
            ";
        // line 5
        echo $this->getAttribute(call_user_func_array($this->env->getFunction('img')->getCallable(), array("theme::img/icon.svg")), "data", array());
        echo "
            <span>Pyro <small>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), array("streams::distribution.version")), "html", null, true);
        echo "</small></span>
        </a>
    </div>

    <div class=\"navbar navbar-default\">
        <div class=\"container-fluid\">

            <div class=\"button-menu\">
                <button href=\"javascript:void(0);\" type=\"button\" class=\"button-menu-mobile\"
                        onclick=\"\$('#sidebar').toggleClass('open');\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <form class=\"navbar-form dropdown\" id=\"search\">

                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type to search...\">

                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>

                <div class=\"dropdown-menu results\">
                    <h6 class=\"dropdown-header\">Navigation</h6>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "navigation", array()));
        foreach ($context['_seq'] as $context["key"] => $context["navigation"]) {
            // line 29
            echo "                        <a class=\"dropdown-item\" ";
            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["navigation"], "attributes", array())));
            echo ">
                            <span class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["navigation"], "title", array()))), "html", null, true);
            echo "</span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    <h6 class=\"dropdown-header\">Links</h6>
                    <a href=\"/\" target=\"_blank\" class=\"dropdown-item\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("theme::control_panel.view_site")), "html", null, true);
        echo "
                    </a>
                    <a href=\"/admin/logout\" class=\"dropdown-item\">
                        ";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("theme::control_panel.logout")), "html", null, true);
        echo "
                    </a>
                </div>

            </form>

            <ul class=\"nav navbar-nav navbar-left\">
                ";
        // line 46
        echo "                ";
        // line 47
        echo "                ";
        // line 48
        echo "                ";
        // line 49
        echo "                ";
        // line 50
        echo "                <li class=\"nav-item dropdown\">
                    <a href=\"javascript:void(0);\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(call_user_func_array($this->env->getFunction('user')->getCallable(), array()), "gravatar", array()), "path", array()), "html", null, true);
        echo "\" width=\"36\" class=\"rounded-circle\">
                    </a>
                    <ul class=\"dropdown-menu-right dropdown-menu\">
                        <li class=\"dropdown-item\">
                            <a href=\"/\" target=\"_blank\">
                                <i class=\"fa fa-external-link\"></i>
                                ";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("theme::control_panel.view_site")), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"/admin/logout\">
                                <i class=\"fa fa-power-off\"></i>
                                ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("theme::control_panel.logout")), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/topbar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 64,  113 => 58,  104 => 52,  100 => 50,  98 => 49,  96 => 48,  94 => 47,  92 => 46,  82 => 38,  76 => 35,  72 => 33,  63 => 30,  58 => 29,  54 => 28,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"topbar\">

    <div class=\"topbar-left\">
        <a href=\"/admin\" class=\"logo variant-logo\">
            {{ img('theme::img/icon.svg').data|raw }}
            <span>Pyro <small>{{ config('streams::distribution.version') }}</small></span>
        </a>
    </div>

    <div class=\"navbar navbar-default\">
        <div class=\"container-fluid\">

            <div class=\"button-menu\">
                <button href=\"javascript:void(0);\" type=\"button\" class=\"button-menu-mobile\"
                        onclick=\"\$('#sidebar').toggleClass('open');\">
                    <i class=\"fa fa-bars\"></i>
                </button>
            </div>

            <form class=\"navbar-form dropdown\" id=\"search\">

                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type to search...\">

                <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>

                <div class=\"dropdown-menu results\">
                    <h6 class=\"dropdown-header\">Navigation</h6>
                    {% for key, navigation in template.cp.navigation %}
                        <a class=\"dropdown-item\" {{ html_attributes(navigation.attributes) }}>
                            <span class=\"title\">{{ trans(navigation.title) }}</span>
                        </a>
                    {% endfor %}
                    <h6 class=\"dropdown-header\">Links</h6>
                    <a href=\"/\" target=\"_blank\" class=\"dropdown-item\">
                        {{ trans('theme::control_panel.view_site') }}
                    </a>
                    <a href=\"/admin/logout\" class=\"dropdown-item\">
                        {{ trans('theme::control_panel.logout') }}
                    </a>
                </div>

            </form>

            <ul class=\"nav navbar-nav navbar-left\">
                {#<li class=\"nav-item\">#}
                {#<a href=\"#\">#}
                {#{{ icon('search') }}#}
                {#</a>#}
                {#</li>#}
                <li class=\"nav-item dropdown\">
                    <a href=\"javascript:void(0);\" data-toggle=\"dropdown\">
                        <img src=\"{{ user().gravatar.path }}\" width=\"36\" class=\"rounded-circle\">
                    </a>
                    <ul class=\"dropdown-menu-right dropdown-menu\">
                        <li class=\"dropdown-item\">
                            <a href=\"/\" target=\"_blank\">
                                <i class=\"fa fa-external-link\"></i>
                                {{ trans('theme::control_panel.view_site') }}
                            </a>
                        </li>
                        <li class=\"dropdown-item\">
                            <a href=\"/admin/logout\">
                                <i class=\"fa fa-power-off\"></i>
                                {{ trans('theme::control_panel.logout') }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</section>
", "theme::partials/topbar", "");
    }
}
