<?php

/* pyrocms.theme.accelerant::layouts/login */
class __TwigTemplate_c00f8f4101fc42aa32fc910a67ee78308b1fd24bbb8b17f8c00dca937a806884 extends TwigBridge\Twig\Template
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
        $this->loadTemplate("theme::partials/metadata", "pyrocms.theme.accelerant::layouts/login", 6)->display($context);
        // line 7
        echo "</head>

<body id=\"login\" class=\"variant-";
        // line 9
        echo twig_escape_filter($this->env, twig_random($this->env, 8), "html", null, true);
        echo "\" data-variants=\"8\">

";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->loadTemplate("theme::partials/assets", "pyrocms.theme.accelerant::layouts/login", 13)->display($context);
        // line 14
        echo "
</body>
</html>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "pyrocms.theme.accelerant::layouts/login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  45 => 14,  43 => 13,  40 => 12,  38 => 11,  33 => 9,  29 => 7,  27 => 6,  20 => 1,);
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

<body id=\"login\" class=\"variant-{{ random(8) }}\" data-variants=\"8\">

{% block content %}{% endblock %}

{% include \"theme::partials/assets\" %}

</body>
</html>
", "pyrocms.theme.accelerant::layouts/login", "");
    }
}
