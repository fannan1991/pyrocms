<?php

/* theme::partials/menu */
class __TwigTemplate_ddbb0e5b5b51423e1af95bb5519ea303aa5d6236fab728c9082bcc0e9b5ae91a extends TwigBridge\Twig\Template
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
        $context["menu"] = $this->loadTemplate("pyrocms.theme.accelerant::macros/menu.twig", "theme::partials/menu", 1);
        // line 2
        echo "
<aside id=\"menu\" class=\"scrollbar\">

    <ul>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "sections", array()), "root", array(), "method"), "visible", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            echo "            ";
            echo $context["menu"]->getsection($this->getAttribute($this->getAttribute(($context["template"] ?? null), "cp", array()), "sections", array()), $context["section"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>

</aside>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/menu";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"pyrocms.theme.accelerant::macros/menu.twig\" as menu %}

<aside id=\"menu\" class=\"scrollbar\">

    <ul>
        {% for section in template.cp.sections.root().visible() %}
            {{ menu.section(template.cp.sections, section) }}
        {% endfor %}
    </ul>

</aside>
", "theme::partials/menu", "");
    }
}
