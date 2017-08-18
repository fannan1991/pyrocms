<?php

/* theme::partials/navigation */
class __TwigTemplate_1931ff335c25104679dc2366605344fffcf8efefc50cd60309bda28fc0c0382f extends TwigBridge\Twig\Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url("/");
        echo "\">
                ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::distribution.name")), "html", null, true);
        echo "
                ";
        // line 16
        echo $this->getAttribute(call_user_func_array($this->env->getFunction('image')->getCallable(), array("theme::img/icon.svg")), "height", array(0 => "50"), "method");
        echo "
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("route", "anomaly.module.posts::posts.index")), "html", null, true);
        echo "\">Posts</a>
                </li>
                <li>
                    ";
        // line 28
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), array())) {
            // line 29
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("route", "anomaly.module.users::logout")), "html", null, true);
            echo "\">Logout</a>
                    ";
        } else {
            // line 31
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("route", "anomaly.module.users::login")), "html", null, true);
            echo "\">Login</a>
                    ";
        }
        // line 33
        echo "                </li>
            </ul>

            ";
        // line 36
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(call_user_func_array($this->env->getFunction('structure')->getCallable(), array()), "linkAttributesDropdown", array(0 => array("data-toggle" => "dropdown")), "method"), "listClass", array(0 => "nav navbar-nav navbar-right"), "method"), "childListClass", array(0 => "dropdown-menu"), "method"), "render", array(), "method");
        // line 40
        echo "
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/navigation";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  79 => 36,  74 => 33,  68 => 31,  62 => 29,  60 => 28,  54 => 25,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container\">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ url(\"/\") }}\">
                {{ config_get(\"streams::distribution.name\") }}
                {{ image(\"theme::img/icon.svg\").height(\"50\")|raw }}
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ url_route('anomaly.module.posts::posts.index') }}\">Posts</a>
                </li>
                <li>
                    {% if auth_check() %}
                        <a href=\"{{ url_route('anomaly.module.users::logout') }}\">Logout</a>
                    {% else %}
                        <a href=\"{{ url_route('anomaly.module.users::login') }}\">Login</a>
                    {% endif %}
                </li>
            </ul>

            {{ structure()
            .linkAttributesDropdown({'data-toggle': 'dropdown'})
            .listClass('nav navbar-nav navbar-right')
            .childListClass('dropdown-menu')
            .render()|raw }}
        </div>
        <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->
</nav>
", "theme::partials/navigation", "");
    }
}
