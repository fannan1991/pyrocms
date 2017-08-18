<?php

/* theme::partials/breadcrumbs */
class __TwigTemplate_1fe88c6f04a81d521a1d036c9e502cb087e458b61c3e4c37d69a2651261d295d extends TwigBridge\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["template"] ?? null), "breadcrumbs", array()), "count", array(), "method")) {
            // line 2
            echo "    <ol class=\"breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["template"] ?? null), "breadcrumbs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["breadcrumb"] => $context["href"]) {
                // line 4
                echo "            ";
                if ((($this->getAttribute($context["loop"], "last", array())) ? ("active") : (""))) {
                    // line 5
                    echo "                <li class=\"active\">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["breadcrumb"])), "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 9
                    echo "                <li>
                    <a href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $context["href"], "html", null, true);
                    echo "\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($context["breadcrumb"])), "html", null, true);
                    echo "
                    </a>
                </li>
            ";
                }
                // line 15
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['breadcrumb'], $context['href'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "theme::partials/breadcrumbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  67 => 15,  60 => 11,  56 => 10,  53 => 9,  47 => 6,  44 => 5,  41 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if template.breadcrumbs.count() %}
    <ol class=\"breadcrumb\">
        {% for breadcrumb, href in template.breadcrumbs %}
            {% if loop.last ? 'active' %}
                <li class=\"active\">
                    {{ trans(breadcrumb) }}
                </li>
            {% else %}
                <li>
                    <a href=\"{{ href }}\">
                        {{ trans(breadcrumb) }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
    </ol>
{% endif %}
", "theme::partials/breadcrumbs", "");
    }
}
