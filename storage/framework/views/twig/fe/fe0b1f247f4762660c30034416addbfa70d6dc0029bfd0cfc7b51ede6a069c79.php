<?php

/* theme::layouts.default */
class __TwigTemplate_1d472a8e477f44d1c5ce322b213f3067c122d30d74f9675893fda1e3801f3029 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metadata' => array($this, 'block_metadata'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), array("app.locale")), "html", null, true);
        echo "\">

<head>
    ";
        // line 5
        $this->displayBlock('metadata', $context, $blocks);
        // line 8
        echo "</head>

<body>

";
        // line 12
        $this->loadTemplate("theme::partials/navigation", "theme::layouts.default", 12)->display($context);
        // line 13
        echo "
<div id=\"content\">
    <div class=\"container\">
        ";
        // line 16
        $this->loadTemplate("theme::partials/breadcrumbs", "theme::layouts.default", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("theme::partials/messages", "theme::layouts.default", 17)->display($context);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        if ((call_user_func_array($this->env->getFunction('request_path')->getCallable(), array("path")) == "/")) {
            // line 22
            echo "            <hr> ";
            $this->loadTemplate("theme::partials/posts", "theme::layouts.default", 22)->display($context);
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
</div>

";
        // line 27
        $this->loadTemplate("theme::partials/footer", "theme::layouts.default", 27)->display($context);
        // line 28
        $this->loadTemplate("theme::partials/scripts", "theme::layouts.default", 28)->display($context);
        // line 29
        echo "
</body>

</html>
";
    }

    // line 5
    public function block_metadata($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->loadTemplate("theme::partials/metadata", "theme::layouts.default", 6)->display($context);
        // line 7
        echo "    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "theme::layouts.default";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  89 => 7,  86 => 6,  83 => 5,  75 => 29,  73 => 28,  71 => 27,  66 => 24,  63 => 23,  60 => 22,  58 => 21,  55 => 20,  53 => 19,  50 => 18,  47 => 17,  45 => 16,  40 => 13,  38 => 12,  32 => 8,  30 => 5,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ config('app.locale') }}\">

<head>
    {% block metadata %}
        {% include \"theme::partials/metadata\" %}
    {% endblock %}
</head>

<body>

{% include \"theme::partials/navigation\" %}

<div id=\"content\">
    <div class=\"container\">
        {% include \"theme::partials/breadcrumbs\" %}
        {% include \"theme::partials/messages\" %}

        {% block content %}{% endblock %}

        {% if (request_path() == '/') %}
            <hr> {% include \"theme::partials/posts\" %}
        {% endif %}
    </div>
</div>

{% include \"theme::partials/footer\" %}
{% include \"theme::partials/scripts\" %}

</body>

</html>
", "theme::layouts.default", "");
    }
}
