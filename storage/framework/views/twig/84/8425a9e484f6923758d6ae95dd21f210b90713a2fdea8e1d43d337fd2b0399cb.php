<?php

/* anomaly.module.pages::macro */
class __TwigTemplate_8ca0f50d8fc47fd4f6fc98eac6c5ba33b4c99e6c60a91f54a4ac27d0ba33e8db extends TwigBridge\Twig\Template
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
    }

    // line 1
    public function getlinks($__pages__ = null, $__collection__ = null, $__options__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pages" => $__pages__,
            "collection" => $__collection__,
            "options" => $__options__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 3
                echo "        <";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), "item_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "item_tag", array())) : ("li")), "html", null, true);
                echo " class=\"
        ";
                // line 4
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["page"], "children", array()), "isEmpty", array(), "method")) ? ("") : ((($this->getAttribute(($context["options"] ?? null), "dropdown_class", array())) ? ($this->getAttribute(($context["options"] ?? null), "dropdown_class", array())) : ("dropdown")))), "html", null, true);
                echo "
        ";
                // line 5
                echo twig_escape_filter($this->env, (($this->getAttribute($context["page"], "active", array())) ? ($this->getAttribute(($context["options"] ?? null), "get", array(0 => "active_class", 1 => "active"), "method")) : ("")), "html", null, true);
                echo "
        ";
                // line 6
                echo twig_escape_filter($this->env, (($this->getAttribute($context["page"], "current", array())) ? ($this->getAttribute(($context["options"] ?? null), "get", array(0 => "selected_class", 1 => $this->getAttribute(($context["options"] ?? null), "get", array(0 => "current_class", 1 => "selected"), "method")), "method")) : ("")), "html", null, true);
                echo "
        ";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "item_class", array()), "html", null, true);
                echo "\">

        <a
                href=\"";
                // line 10
                echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url($this->getAttribute($context["page"], "path", array()));
                echo "\"
                class=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "link_class", array()), "html", null, true);
                echo "\"
                ";
                // line 12
                echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["options"] ?? null), "get", array(0 => "link_attributes", 1 => array()), "method")));
                echo "
                ";
                // line 13
                if ($this->getAttribute($this->getAttribute($context["page"], "children", array()), "count", array(), "method")) {
                    // line 14
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["options"] ?? null), "get", array(0 => "link_attributes_dropdown", 1 => array()), "method")));
                    echo "
                ";
                }
                // line 16
                echo "        >
            ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "
        </a>

        ";
                // line 20
                if ( !$this->getAttribute($this->getAttribute($context["page"], "children", array()), "isEmpty", array(), "method")) {
                    // line 21
                    echo "            ";
                    if (((($context["depth"] ?? null) + 1) <= $this->getAttribute(($context["options"] ?? null), "get", array(0 => "depth", 1 => 999), "method"))) {
                        // line 22
                        echo "
                ";
                        // line 23
                        if ($this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle"), "method")) {
                            // line 24
                            echo "                    <";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle"), "method"), "html", null, true);
                            echo "
                    class=\"";
                            // line 25
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle_class"), "method"), "html", null, true);
                            echo "\"
                    ";
                            // line 26
                            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle_attributes", 1 => array()), "method")));
                            echo ">
                    ";
                            // line 27
                            echo $this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle_text"), "method");
                            echo "
                    </";
                            // line 28
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "get", array(0 => "dropdown_toggle"), "method"), "html", null, true);
                            echo ">
                ";
                        }
                        // line 30
                        echo "
                <";
                        // line 31
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), "child_list_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "child_list_tag", array())) : ((($this->getAttribute(($context["options"] ?? null), "list_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "list_tag", array())) : ("ul")))), "html", null, true);
                        echo " class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["options"] ?? null), "child_list_class", array()), "html", null, true);
                        echo "\">
                ";
                        // line 32
                        echo $this->getAttribute($this, "links", array(0 => $this->getAttribute($context["page"], "children", array()), 1 => ($context["collection"] ?? null), 2 => ($context["options"] ?? null), 3 => (($context["depth"] ?? null) + 1)), "method");
                        echo "
                </";
                        // line 33
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), "child_list_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "child_list_tag", array())) : ((($this->getAttribute(($context["options"] ?? null), "list_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "list_tag", array())) : ("ul")))), "html", null, true);
                        echo ">
            ";
                    }
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "        </";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), "link_tag", array())) ? ($this->getAttribute(($context["options"] ?? null), "link_tag", array())) : ("li")), "html", null, true);
                echo ">
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "anomaly.module.pages::macro";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 36,  143 => 35,  138 => 33,  134 => 32,  128 => 31,  125 => 30,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  103 => 24,  101 => 23,  98 => 22,  95 => 21,  93 => 20,  87 => 17,  84 => 16,  78 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  58 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 3,  36 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro links(pages, collection, options, depth) %}
    {% for page in pages %}
        <{{ options.item_tag ?: 'li' }} class=\"
        {{ page.children.isEmpty() ? '' : (options.dropdown_class ?: 'dropdown') }}
        {{ page.active ? options.get('active_class', 'active') }}
        {{ page.current ? options.get('selected_class', options.get('current_class', 'selected')) }}
        {{ options.item_class }}\">

        <a
                href=\"{{ url(page.path) }}\"
                class=\"{{ options.link_class }}\"
                {{ html_attributes(options.get('link_attributes', [])) }}
                {% if page.children.count() %}
                    {{ html_attributes(options.get('link_attributes_dropdown', [])) }}
                {% endif %}
        >
            {{ page.title }}
        </a>

        {% if not page.children.isEmpty() %}
            {% if depth+1 <= options.get('depth', 999) %}

                {% if options.get('dropdown_toggle') %}
                    <{{ options.get('dropdown_toggle') }}
                    class=\"{{ options.get('dropdown_toggle_class') }}\"
                    {{ html_attributes(options.get('dropdown_toggle_attributes', []))|raw }}>
                    {{ options.get('dropdown_toggle_text')|raw }}
                    </{{ options.get('dropdown_toggle') }}>
                {% endif %}

                <{{ options.child_list_tag ?: options.list_tag ?: 'ul' }} class=\"{{ options.child_list_class }}\">
                {{ _self.links(page.children, collection, options, depth+1) }}
                </{{ options.child_list_tag ?: options.list_tag ?: 'ul' }}>
            {% endif %}
        {% endif %}
        </{{ options.link_tag ?: 'li' }}>
    {% endfor %}
{% endmacro %}
", "anomaly.module.pages::macro", "");
    }
}
