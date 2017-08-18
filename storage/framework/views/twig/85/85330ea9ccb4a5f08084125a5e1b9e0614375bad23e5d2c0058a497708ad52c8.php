<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/navbar.twig */
class __TwigTemplate_4131d968b1382e3212a0fcb85d69f41dee3fe35e8d6998ab2cf4ca2014084e14 extends TwigBridge\Twig\Template
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
        if (($this->getAttribute(($context["dashboards"] ?? null), "count", array(), "method") > 1)) {
            // line 2
            echo "    <div class=\"card\">

        <nav class=\"navbar navbar-light\">
            <div class=\"nav navbar-nav\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dashboards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard"]) {
                // line 7
                echo "                    <a
                            class=\"nav-item nav-link ";
                // line 8
                echo (($this->getAttribute($context["dashboard"], "active", array())) ? ("active") : (""));
                echo "\"
                            href=\"";
                // line 9
                echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url(("admin/dashboard/view/" . $this->getAttribute($context["dashboard"], "slug", array())));
                echo "\">
                        ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["dashboard"], "name", array()), "html", null, true);
                echo "
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </div>
        </nav>

    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if dashboards.count() > 1 %}
    <div class=\"card\">

        <nav class=\"navbar navbar-light\">
            <div class=\"nav navbar-nav\">
                {% for dashboard in dashboards %}
                    <a
                            class=\"nav-item nav-link {{ dashboard.active ? 'active' }}\"
                            href=\"{{ url('admin/dashboard/view/' ~ dashboard.slug) }}\">
                        {{ dashboard.name }}
                    </a>
                {% endfor %}
            </div>
        </nav>

    </div>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/dashboards/partials/navbar.twig", "");
    }
}
