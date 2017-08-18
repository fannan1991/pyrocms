<?php

/* theme::partials/sidebar */
class __TwigTemplate_394fd33b0fc26831271d16fed07d1a671381c8d60a1336794c87bc903363a26f extends TwigBridge\Twig\Template
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
        echo "<aside id=\"sidebar\" class=\"scrollbar ";
        echo ((call_user_func_array($this->env->getFunction('preference_value')->getCallable(), array("pyrocms.theme.accelerant::sidebar_hover", call_user_func_array($this->env->getFunction('setting_value')->getCallable(), array("pyrocms.theme.accelerant::sidebar_hover"))))) ? ("hover") : (""));
        echo "\">

    <ul>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "navigation", array()));
        foreach ($context['_seq'] as $context["key"] => $context["navigation"]) {
            // line 5
            echo "            <li class=\"";
            echo (($this->getAttribute($context["navigation"], "active", array())) ? ("active") : (""));
            echo " variant-border\" data-slug=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["navigation"], "slug", array()), "html", null, true);
            echo "\">
                <a ";
            // line 6
            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["navigation"], "attributes", array())));
            echo " title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["navigation"], "title", array()))), "html", null, true);
            echo "\">
                    <span class=\"icon\">";
            // line 7
            echo $this->getAttribute($context["navigation"], "icon", array(), "method");
            echo "</span>
                    <span class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["navigation"], "title", array()))), "html", null, true);
            echo "</span>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['navigation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>

</aside>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/sidebar";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  47 => 8,  43 => 7,  37 => 6,  30 => 5,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside id=\"sidebar\" class=\"scrollbar {{ preference_value('pyrocms.theme.accelerant::sidebar_hover', setting_value('pyrocms.theme.accelerant::sidebar_hover')) ? 'hover' }}\">

    <ul>
        {% for key, navigation in template.cp.navigation %}
            <li class=\"{{ navigation.active ? 'active' }} variant-border\" data-slug=\"{{ navigation.slug }}\">
                <a {{ html_attributes(navigation.attributes) }} title=\"{{ trans(navigation.title) }}\">
                    <span class=\"icon\">{{ navigation.icon()|raw }}</span>
                    <span class=\"title\">{{ trans(navigation.title) }}</span>
                </a>
            </li>
        {% endfor %}
    </ul>

</aside>
", "theme::partials/sidebar", "");
    }
}
