<?php

/* theme::partials/footer */
class __TwigTemplate_f0c5c2333fac660729c20702584f6a5a8a0a56a9213c5aa0684a49dd6d9dc5a7 extends TwigBridge\Twig\Template
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
        echo "<!-- Footer -->
<footer class=\"text-center\">
    <div class=\"footer-above\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-col col-md-4\">
                    <h3>PyroCMS</h3>

                    ";
        // line 10
        echo "
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(call_user_func_array($this->env->getFunction('links')->getCallable(), array("footer")), "get", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 12
            echo "                        <p>
                            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
            echo "</a>
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
                </div>
                <div class=\"footer-col col-md-4\">
                    <h3>Around the Web</h3>
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"http://facebook.com/pyrocms\" class=\"btn-social btn-outline\">
                                <i class=\"fa fa-fw fa-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://twitter.com/pyrocms\" class=\"btn-social btn-outline\">
                                <i class=\"fa fa-fw fa-twitter\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer-col col-md-4\">
                    <h3>About Starter Theme</h3>

                    <p>The Starter theme is based on the Freelance theme. A free to use, open source Bootstrap theme
                        created by <a
                                href=\"http://startbootstrap.com\">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-below\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    Copyright &copy; Your Website ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                </div>
            </div>

        </div>
    </div>
</footer>
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
        return array (  84 => 48,  50 => 16,  39 => 13,  36 => 12,  32 => 11,  29 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer -->
<footer class=\"text-center\">
    <div class=\"footer-above\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"footer-col col-md-4\">
                    <h3>PyroCMS</h3>

                    {#{{ menu('footer').listClass('list list-unstyled')|raw }}#}

                    {% for link in links('footer').get() %}
                        <p>
                            <a href=\"{{ link.url }}\">{{ link.title }}</a>
                        </p>
                    {% endfor %}

                </div>
                <div class=\"footer-col col-md-4\">
                    <h3>Around the Web</h3>
                    <ul class=\"list-inline\">
                        <li>
                            <a href=\"http://facebook.com/pyrocms\" class=\"btn-social btn-outline\">
                                <i class=\"fa fa-fw fa-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"http://twitter.com/pyrocms\" class=\"btn-social btn-outline\">
                                <i class=\"fa fa-fw fa-twitter\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer-col col-md-4\">
                    <h3>About Starter Theme</h3>

                    <p>The Starter theme is based on the Freelance theme. A free to use, open source Bootstrap theme
                        created by <a
                                href=\"http://startbootstrap.com\">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-below\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    Copyright &copy; Your Website {{ 'now'|date(\"Y\") }}
                </div>
            </div>

        </div>
    </div>
</footer>
", "theme::partials/footer", "");
    }
}
