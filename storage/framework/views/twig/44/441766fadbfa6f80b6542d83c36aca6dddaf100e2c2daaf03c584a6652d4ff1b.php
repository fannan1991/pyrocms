<?php

/* pyrocms.theme.accelerant::macros/menu.twig */
class __TwigTemplate_4dd4b4febf1dcc2a8239ae9ef9440641f0272fe9b076bfea8e7a9ef6b9c30dc8 extends TwigBridge\Twig\Template
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
        $context["menu"] = $this;
        // line 2
        echo "
";
    }

    // line 3
    public function getsection($__sections__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sections" => $__sections__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <li class=\"";
            echo (($this->getAttribute(($context["section"] ?? null), "highlighted", array())) ? ("highlighted") : (""));
            echo " ";
            echo (($this->getAttribute(($context["section"] ?? null), "active", array())) ? ("active") : (""));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? null), "class", array()), "html", null, true);
            echo "\">

        <a ";
            // line 6
            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["section"] ?? null), "attributes", array())));
            echo ">
            ";
            // line 7
            echo (($this->getAttribute(($context["section"] ?? null), "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "icon", array())))) : (""));
            echo "
            ";
            // line 8
            echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "title", array())));
            echo "

            ";
            // line 10
            if ($this->getAttribute(($context["section"] ?? null), "label", array())) {
                // line 11
                echo "                <span class=\"tag tag-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? null), "context", array()), "html", null, true);
                echo "\">
                    ";
                // line 12
                echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["section"] ?? null), "label", array())));
                echo "
                </span>
            ";
            }
            // line 15
            echo "        </a>

        ";
            // line 17
            if ($this->getAttribute(($context["section"] ?? null), "highlighted", array())) {
                // line 18
                echo "            <ul>
                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sections"] ?? null), "children", array(0 => $this->getAttribute(($context["section"] ?? null), "slug", array())), "method"), "visible", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 20
                    echo "                    ";
                    echo $this->getAttribute($this, "section", array(0 => ($context["sections"] ?? null), 1 => $context["child"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            </ul>
        ";
            }
            // line 24
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pyrocms.theme.accelerant::macros/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  97 => 22,  88 => 20,  84 => 19,  81 => 18,  79 => 17,  75 => 15,  69 => 12,  64 => 11,  62 => 10,  57 => 8,  53 => 7,  49 => 6,  39 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as menu %}

{% macro section(sections, section) %}
    <li class=\"{{ section.highlighted ? 'highlighted' }} {{ section.active ? 'active' }} {{ section.class }}\">

        <a {{ html_attributes(section.attributes) }}>
            {{ section.icon ? icon(section.icon)|raw }}
            {{ trans(section.title)|raw }}

            {% if section.label %}
                <span class=\"tag tag-{{ section.context }}\">
                    {{ trans(section.label)|raw }}
                </span>
            {% endif %}
        </a>

        {% if section.highlighted %}
            <ul>
                {% for child in sections.children(section.slug).visible() %}
                    {{ _self.section(sections, child) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}
", "pyrocms.theme.accelerant::macros/menu.twig", "");
    }
}
