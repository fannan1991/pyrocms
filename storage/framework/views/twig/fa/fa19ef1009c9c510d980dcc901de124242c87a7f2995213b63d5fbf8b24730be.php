<?php

/* theme::partials/metadata */
class __TwigTemplate_87e985d022b3a7440428d0e8eee37d0c437594a6ee14ce814eee76b049cf9bf5 extends TwigBridge\Twig\Template
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
        echo "<!-- Meta -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

<title>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("pyrocms.theme.accelerant::control_panel.title")), "html", null, true);
        echo "
    &#8250; ";
        // line 8
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array(twig_last($this->env, twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["template"] ?? null), "breadcrumbs", array()), "all", array(), "method")))));
        echo "</title>

<!-- Favicons -->
";
        // line 11
        echo call_user_func_array($this->env->getFunction('favicons')->getCallable(), array("pyrocms.theme.accelerant::img/favicon.png"));
        echo "

";
        // line 14
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.css", "pyrocms.theme.accelerant::scss/fonts/fonts.scss", array(0 => "parse")));
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.css", "pyrocms.theme.accelerant::scss/bootstrap/bootstrap.scss"));
        echo "
";
        // line 16
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "build.css", "pyrocms.theme.accelerant::scss/theme/theme.scss"));
        echo "

";
        // line 18
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "pyrocms.theme.accelerant::js/vendor/*"));
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "pyrocms.theme.accelerant::js/libraries/tether.min.js"));
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "pyrocms.theme.accelerant::js/libraries/*"));
        echo "
";
        // line 21
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.js", "pyrocms.theme.accelerant::js/theme/*"));
        echo "

";
        // line 23
        echo call_user_func_array($this->env->getFunction('asset_style')->getCallable(), array("style", "theme.css"));
        echo "
";
        // line 24
        echo call_user_func_array($this->env->getFunction('asset_style')->getCallable(), array("style", "build.css", array(0 => "live")));
        echo "

";
        // line 26
        if ($this->getAttribute(call_user_func_array($this->env->getFunction('locale')->getCallable(), array()), "isRtl", array(), "method")) {
            // line 27
            echo "    ";
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "pyrocms.theme.accelerant::css/bootstrap-rtl/bootstrap.rtl.css"));
            echo "
    ";
            // line 28
            echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "styles.css", "pyrocms.theme.accelerant::scss/theme/rtl.scss"));
            echo "
";
        }
        // line 30
        echo "
";
        // line 31
        echo call_user_func_array($this->env->getFunction('constants')->getCallable(), array());
        echo "

";
        // line 33
        echo call_user_func_array($this->env->getFunction('asset_script')->getCallable(), array("script", "theme.js"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme::partials/metadata";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  96 => 31,  93 => 30,  88 => 28,  83 => 27,  81 => 26,  76 => 24,  72 => 23,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  46 => 15,  42 => 14,  37 => 11,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Meta -->
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

<title>{{ trans('pyrocms.theme.accelerant::control_panel.title') }}
    &#8250; {{ trans(template.breadcrumbs.all()|keys|last)|raw }}</title>

<!-- Favicons -->
{{ favicons(\"pyrocms.theme.accelerant::img/favicon.png\") }}

{#{{ asset_add(\"theme.css\", \"pyrocms.theme.accelerant::scss/flat-ui/flat-ui.scss\") }}#}
{{ asset_add(\"theme.css\", \"pyrocms.theme.accelerant::scss/fonts/fonts.scss\", [\"parse\"]) }}
{{ asset_add(\"theme.css\", \"pyrocms.theme.accelerant::scss/bootstrap/bootstrap.scss\") }}
{{ asset_add(\"build.css\", \"pyrocms.theme.accelerant::scss/theme/theme.scss\") }}

{{ asset_add(\"theme.js\", \"pyrocms.theme.accelerant::js/vendor/*\") }}
{{ asset_add(\"theme.js\", \"pyrocms.theme.accelerant::js/libraries/tether.min.js\") }}
{{ asset_add(\"theme.js\", \"pyrocms.theme.accelerant::js/libraries/*\") }}
{{ asset_add(\"theme.js\", \"pyrocms.theme.accelerant::js/theme/*\") }}

{{ asset_style(\"theme.css\") }}
{{ asset_style(\"build.css\", [\"live\"]) }}

{% if locale().isRtl() %}
    {{ asset_add(\"styles.css\", \"pyrocms.theme.accelerant::css/bootstrap-rtl/bootstrap.rtl.css\") }}
    {{ asset_add(\"styles.css\", \"pyrocms.theme.accelerant::scss/theme/rtl.scss\") }}
{% endif %}

{{ constants() }}

{{ asset_script(\"theme.js\") }}
", "theme::partials/metadata", "");
    }
}
