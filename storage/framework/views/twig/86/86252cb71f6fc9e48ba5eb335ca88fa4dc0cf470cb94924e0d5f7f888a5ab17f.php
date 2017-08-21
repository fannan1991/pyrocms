<?php

/* streams::tree/macro */
class __TwigTemplate_439bffbaa3bc2177779eea4a1ae7c5665049025fecaf08971fc10d40d666852c extends TwigBridge\Twig\Template
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
    public function gettree($__items__ = null, $__tree__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "tree" => $__tree__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "        <li data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">
            <div class=\"card\">

                ";
                // line 6
                if ($this->getAttribute($this->getAttribute(($context["tree"] ?? null), "options", array()), "get", array(0 => "sortable", 1 => true), "method")) {
                    // line 7
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("bars", "handle btn btn-xs"));
                    echo "
                ";
                }
                // line 9
                echo "
                ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "segments", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                    // line 11
                    echo "                    ";
                    if ($this->getAttribute($context["segment"], "value", array())) {
                        // line 12
                        echo "                        <span class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "class", array()), "html", null, true);
                        echo "\" ";
                        echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["segment"], "attributes", array())));
                        echo ">
                        ";
                        // line 13
                        echo $this->getAttribute($context["segment"], "value", array());
                        echo "
                    </span>
                    ";
                    }
                    // line 16
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
                <div class=\"buttons\">
                    ";
                // line 19
                echo call_user_func_array($this->env->getFunction('buttons')->getCallable(), array($this->getAttribute($context["item"], "buttons", array())));
                echo "
                </div>

            </div>

            <ul>
                ";
                // line 25
                echo $this->getAttribute($this, "tree", array(0 => $this->getAttribute($this->getAttribute(($context["tree"] ?? null), "items", array()), "children", array(0 => $context["item"]), "method"), 1 => ($context["tree"] ?? null)), "method");
                echo "
            </ul>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
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
        return "streams::tree/macro";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  87 => 19,  83 => 17,  77 => 16,  71 => 13,  64 => 12,  61 => 11,  57 => 10,  54 => 9,  48 => 7,  46 => 6,  39 => 3,  34 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro tree(items, tree) %}
    {% for item in items %}
        <li data-id=\"{{ item.id }}\">
            <div class=\"card\">

                {% if tree.options.get('sortable', true) %}
                    {{ icon('bars', 'handle btn btn-xs') }}
                {% endif %}

                {% for segment in item.segments %}
                    {% if segment.value %}
                        <span class=\"{{ segment.class }}\" {{ html_attributes(segment.attributes) }}>
                        {{ segment.value|raw }}
                    </span>
                    {% endif %}
                {% endfor %}

                <div class=\"buttons\">
                    {{ buttons(item.buttons) }}
                </div>

            </div>

            <ul>
                {{ _self.tree(tree.items.children(item), tree) }}
            </ul>
        </li>
    {% endfor %}
{% endmacro %}
", "streams::tree/macro", "");
    }
}
