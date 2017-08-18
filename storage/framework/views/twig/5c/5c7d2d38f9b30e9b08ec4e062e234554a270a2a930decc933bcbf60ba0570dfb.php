<?php

/* theme::layouts/default */
class __TwigTemplate_9945cbd68b332d34d3486dfe2c2f05b549edf58d5c55da1136cdbeca9341f555 extends TwigBridge\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html>

<head>
    ";
        // line 6
        $this->loadTemplate("theme::partials/metadata", "theme::layouts/default", 6)->display($context);
        // line 7
        echo "</head>

<body class=\"variant-";
        // line 9
        echo twig_escape_filter($this->env, twig_random($this->env, 8), "html", null, true);
        echo (($this->getAttribute(call_user_func_array($this->env->getFunction('locale')->getCallable(), array()), "isRtl", array(), "method")) ? (" rtl") : (""));
        echo "\" data-variants=\"8\">

";
        // line 15
        echo "
<section id=\"app\">

    ";
        // line 18
        $this->loadTemplate("theme::partials/topbar", "theme::layouts/default", 18)->display($context);
        // line 19
        echo "    ";
        $this->loadTemplate("theme::partials/sidebar", "theme::layouts/default", 19)->display($context);
        // line 20
        echo "    ";
        $this->loadTemplate("theme::partials/menu", "theme::layouts/default", 20)->display($context);
        // line 21
        echo "
    <main id=\"main\" style=\"min-height: 1500px;\">

        ";
        // line 24
        echo call_user_func_array($this->env->getFunction('breadcrumb')->getCallable(), array());
        echo "

        <div class=\"container-fluid\">
            ";
        // line 27
        $this->loadTemplate("theme::partials/messages", "theme::layouts/default", 27)->display($context);
        // line 28
        echo "            ";
        $this->loadTemplate("theme::partials/buttons", "theme::layouts/default", 28)->display($context);
        // line 29
        echo "        </div>

        ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
    </main>
</section>

";
        // line 36
        $this->loadTemplate("theme::partials/footer", "theme::layouts/default", 36)->display($context);
        // line 37
        $this->loadTemplate("theme::partials/modals", "theme::layouts/default", 37)->display($context);
        // line 38
        $this->loadTemplate("theme::partials/assets", "theme::layouts/default", 38)->display($context);
        // line 39
        echo "
</body>
</html>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "theme::layouts/default";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  86 => 39,  84 => 38,  82 => 37,  80 => 36,  74 => 32,  72 => 31,  68 => 29,  65 => 28,  63 => 27,  57 => 24,  52 => 21,  49 => 20,  46 => 19,  44 => 18,  39 => 15,  33 => 9,  29 => 7,  27 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>

<html>

<head>
    {% include \"theme::partials/metadata\" %}
</head>

<body class=\"variant-{{ random(8) }}{{ locale().isRtl() ? ' rtl' }}\" data-variants=\"8\">

{#{% include \"theme::partials/push\" %}#}
{#{% include \"theme::partials/brand\" %}#}
{#{% include \"theme::partials/navbar\" %}#}
{#{% include \"theme::partials/header\" %}#}

<section id=\"app\">

    {% include \"theme::partials/topbar\" %}
    {% include \"theme::partials/sidebar\" %}
    {% include \"theme::partials/menu\" %}

    <main id=\"main\" style=\"min-height: 1500px;\">

        {{ breadcrumb() }}

        <div class=\"container-fluid\">
            {% include \"theme::partials/messages\" %}
            {% include \"theme::partials/buttons\" %}
        </div>

        {% block content %}{% endblock %}

    </main>
</section>

{% include \"theme::partials/footer\" %}
{% include \"theme::partials/modals\" %}
{% include \"theme::partials/assets\" %}

</body>
</html>
", "theme::layouts/default", "");
    }
}
