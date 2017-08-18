<?php

/* theme::partials/metadata */
class __TwigTemplate_f75499e96e4674e878e0c880cf3966a2085b8a31db1c0f003f4e7799b4d719bd extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'opengraph' => array($this, 'block_opengraph'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
    ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::distribution.name")), "html", null, true);
        echo " &#8250; ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["template"] ?? null), "meta_title", array()))), "html", null, true);
        echo "
</title>

";
        // line 11
        $this->displayBlock('opengraph', $context, $blocks);
        // line 18
        echo "
<!-- Favicons -->
";
        // line 20
        echo call_user_func_array($this->env->getFunction('favicons')->getCallable(), array("theme::img/favicon.png"));
        echo "


<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
";
        // line 24
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.css", "theme::css/bootstrap.css"));
        echo "

<!-- Custom CSS -->
";
        // line 27
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.css", "theme::less/freelancer.less"));
        echo "

<!-- Custom Fonts -->
";
        // line 30
        echo call_user_func_array($this->env->getFunction('asset_add')->getCallable(), array("add", "theme.css", "theme::font-awesome/css/font-awesome.css", array(0 => "parse")));
        echo "
<link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

";
        // line 34
        echo call_user_func_array($this->env->getFunction('asset_style')->getCallable(), array("style", "theme.css"));
        echo "

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('asset_styles')->getCallable(), array("styles", "styles.css")));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "    ";
            echo $context["style"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        echo call_user_func_array($this->env->getFunction('constants')->getCallable(), array());
        echo "

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn\"t work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
";
    }

    // line 11
    public function block_opengraph($context, array $blocks = array())
    {
        // line 12
        echo "    <meta property=\"og:site_name\" content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("streams::distribution.name")), "html", null, true);
        echo "\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "meta_title", array()), "html", null, true);
        echo "\"/>
    <meta property=\"og:description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["template"] ?? null), "meta_description", array()), "html", null, true);
        echo "\">
    <meta property=\"og:url\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "getUri", array()), "html", null, true);
        echo "\"/>
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
        return array (  120 => 16,  116 => 15,  112 => 14,  106 => 12,  103 => 11,  90 => 40,  87 => 39,  78 => 37,  74 => 36,  69 => 34,  62 => 30,  56 => 27,  50 => 24,  43 => 20,  39 => 18,  37 => 11,  29 => 8,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
    {{ config_get(\"streams::distribution.name\") }} &#8250; {{ trans(template.meta_title) }}
</title>

{% block opengraph %}
    <meta property=\"og:site_name\" content=\"{{ config_get(\"streams::distribution.name\") }}\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"{{ template.meta_title }}\"/>
    <meta property=\"og:description\" content=\"{{ template.meta_description }}\">
    <meta property=\"og:url\" content=\"{{ app.request.getUri }}\"/>
{% endblock %}

<!-- Favicons -->
{{ favicons(\"theme::img/favicon.png\") }}


<!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
{{ asset_add(\"theme.css\", \"theme::css/bootstrap.css\") }}

<!-- Custom CSS -->
{{ asset_add(\"theme.css\", \"theme::less/freelancer.less\") }}

<!-- Custom Fonts -->
{{ asset_add(\"theme.css\", \"theme::font-awesome/css/font-awesome.css\", [\"parse\"]) }}
<link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

{{ asset_style(\"theme.css\") }}

{% for style in asset_styles(\"styles.css\") %}
    {{ style|raw }}
{% endfor %}

{{ constants() }}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn\"t work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
", "theme::partials/metadata", "");
    }
}
