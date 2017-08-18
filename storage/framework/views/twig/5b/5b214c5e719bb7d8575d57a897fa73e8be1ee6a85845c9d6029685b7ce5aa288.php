<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/buttons/buttons.twig */
class __TwigTemplate_b6277a981f6833c9d091efee2557dea4082675023d27fb8c153730a9b00615df extends TwigBridge\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            if ((twig_test_empty($this->getAttribute($context["button"], "dropdown", array())) &&  !$this->getAttribute($context["button"], "parent", array()))) {
                // line 5
                echo "
        ";
                // line 7
                echo "        ";
                if ( !$this->getAttribute($this->getAttribute($context["button"], "attributes", array()), "name", array())) {
                    // line 8
                    echo "            <a class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "size", array()), "html", null, true);
                    echo " btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "type", array()), "html", null, true);
                    echo " ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
                    echo "\" ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["button"], "attributes", array())));
                    echo ">
                ";
                    // line 9
                    echo (($this->getAttribute($context["button"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["button"], "icon", array())))) : (""));
                    echo "
                ";
                    // line 10
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["button"], "text", array())));
                    echo "
            </a>
        ";
                }
                // line 13
                echo "
        ";
                // line 15
                echo "        ";
                if ($this->getAttribute($this->getAttribute($context["button"], "attributes", array()), "name", array())) {
                    // line 16
                    echo "            <button class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "size", array()), "html", null, true);
                    echo " btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "type", array()), "html", null, true);
                    echo " ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
                    echo "\" ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["button"], "attributes", array())));
                    echo ">
                ";
                    // line 17
                    echo (($this->getAttribute($context["button"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["button"], "icon", array())))) : (""));
                    echo "
                ";
                    // line 18
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["button"], "text", array())));
                    echo "
            </button>
        ";
                }
                // line 21
                echo "
    ";
            }
            // line 23
            echo "
    ";
            // line 25
            echo "    ";
            if ($this->getAttribute($context["button"], "dropdown", array())) {
                // line 26
                echo "        <div class=\"btn-group\">

            ";
                // line 28
                if ($this->getAttribute($this->getAttribute($context["button"], "attributes", array()), "href", array())) {
                    // line 29
                    echo "                <a class=\"btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "size", array()), "html", null, true);
                    echo " btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "type", array()), "html", null, true);
                    echo " ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
                    echo "\" ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["button"], "attributes", array())));
                    echo ">
                    ";
                    // line 30
                    echo (($this->getAttribute($context["button"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["button"], "icon", array())))) : (""));
                    echo "
                    ";
                    // line 31
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["button"], "text", array())));
                    echo "
                </a>

                <a class=\"dropdown-toggle-split btn btn-";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "size", array()), "html", null, true);
                    echo " btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "type", array()), "html", null, true);
                    echo " ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo "\"
                   data-toggle=\"dropdown\" ";
                    // line 35
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo ">
                    ";
                    // line 36
                    echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("fa fa-caret-down"));
                    echo "
                </a>
            ";
                } else {
                    // line 39
                    echo "                <a class=\"dropdown-toggle btn btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "size", array()), "html", null, true);
                    echo " btn-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "type", array()), "html", null, true);
                    echo " ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", array()), "html", null, true);
                    echo "\" ";
                    echo (($this->getAttribute($context["button"], "disabled", array())) ? ("disabled") : (""));
                    echo " data-toggle=\"dropdown\" ";
                    echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["button"], "attributes", array())));
                    echo ">
                    ";
                    // line 40
                    echo (($this->getAttribute($context["button"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["button"], "icon", array())))) : (""));
                    echo "
                    ";
                    // line 41
                    echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["button"], "text", array())));
                    echo "
                </a>
            ";
                }
                // line 44
                echo "
            ";
                // line 46
                echo "            <ul class=\"dropdown-menu dropdown-menu-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "position", array()), "html", null, true);
                echo "\">
                ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "dropdown", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 48
                    echo "                    ";
                    if ($this->getAttribute($context["button"], "text", array())) {
                        // line 49
                        echo "                        <li>

                            ";
                        // line 52
                        echo "                            ";
                        if ( !$this->getAttribute($this->getAttribute($context["link"], "attributes", array()), "name", array())) {
                            // line 53
                            echo "                                <a class=\"dropdown-item\" ";
                            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["link"], "attributes", array())));
                            echo ">
                                    ";
                            // line 54
                            echo (($this->getAttribute($context["link"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["link"], "icon", array())))) : (""));
                            echo "
                                    ";
                            // line 55
                            echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["link"], "text", array())));
                            echo "
                                </a>
                            ";
                        }
                        // line 58
                        echo "
                            ";
                        // line 60
                        echo "                            ";
                        if ($this->getAttribute($this->getAttribute($context["link"], "attributes", array()), "name", array())) {
                            // line 61
                            echo "                                <button class=\"dropdown-item\" ";
                            echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["link"], "attributes", array())));
                            echo ">
                                    ";
                            // line 62
                            echo (($this->getAttribute($context["link"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["link"], "icon", array())))) : (""));
                            echo "
                                    ";
                            // line 63
                            echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["link"], "text", array())));
                            echo "
                                </button>
                            ";
                        }
                        // line 66
                        echo "
                        </li>
                    ";
                    } else {
                        // line 69
                        echo "                        <li class=\"dropdown-divider\">
                            <hr>
                        </li>
                    ";
                    }
                    // line 73
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            </ul>
        </div>
    ";
            }
            // line 77
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/buttons/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 77,  250 => 74,  244 => 73,  238 => 69,  233 => 66,  227 => 63,  223 => 62,  218 => 61,  215 => 60,  212 => 58,  206 => 55,  202 => 54,  197 => 53,  194 => 52,  190 => 49,  187 => 48,  183 => 47,  178 => 46,  175 => 44,  169 => 41,  165 => 40,  150 => 39,  144 => 36,  140 => 35,  132 => 34,  126 => 31,  122 => 30,  107 => 29,  105 => 28,  101 => 26,  98 => 25,  95 => 23,  91 => 21,  85 => 18,  81 => 17,  66 => 16,  63 => 15,  60 => 13,  54 => 10,  50 => 9,  35 => 8,  32 => 7,  29 => 5,  26 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for button in buttons %}

    {# Render normal buttons. #}
    {% if button.dropdown is empty and not button.parent %}

        {# Render normal buttons as an anchor #}
        {% if not button.attributes.name %}
            <a class=\"btn btn-{{ button.size }} btn-{{ button.type }} {{ button.disabled ? 'disabled' }} {{ button.class }}\" {{ button.disabled ? 'disabled' }} {{ html_attributes(button.attributes) }}>
                {{ button.icon ? icon(button.icon)|raw }}
                {{ trans(button.text)|raw }}
            </a>
        {% endif %}

        {# Render normal buttons as a button #}
        {% if button.attributes.name %}
            <button class=\"btn btn-{{ button.size }} btn-{{ button.type }} {{ button.disabled ? 'disabled' }} {{ button.class }}\" {{ button.disabled ? 'disabled' }} {{ html_attributes(button.attributes) }}>
                {{ button.icon ? icon(button.icon)|raw }}
                {{ trans(button.text)|raw }}
            </button>
        {% endif %}

    {% endif %}

    {# Render dropdown type buttons. #}
    {% if button.dropdown %}
        <div class=\"btn-group\">

            {% if button.attributes.href %}
                <a class=\"btn btn-{{ button.size }} btn-{{ button.type }} {{ button.disabled ? 'disabled' }} {{ button.class }}\" {{ button.disabled ? 'disabled' }} {{ html_attributes(button.attributes) }}>
                    {{ button.icon ? icon(button.icon)|raw }}
                    {{ trans(button.text)|raw }}
                </a>

                <a class=\"dropdown-toggle-split btn btn-{{ button.size }} btn-{{ button.type }} {{ button.disabled ? 'disabled' }}\"
                   data-toggle=\"dropdown\" {{ button.disabled ? 'disabled' }}>
                    {{ icon('fa fa-caret-down') }}
                </a>
            {% else %}
                <a class=\"dropdown-toggle btn btn-{{ button.size }} btn-{{ button.type }} {{ button.disabled ? 'disabled' }} {{ button.class }}\" {{ button.disabled ? 'disabled' }} data-toggle=\"dropdown\" {{ html_attributes(button.attributes) }}>
                    {{ button.icon ? icon(button.icon)|raw }}
                    {{ trans(button.text)|raw }}
                </a>
            {% endif %}

            {# Render the actual dropdown links #}
            <ul class=\"dropdown-menu dropdown-menu-{{ button.position }}\">
                {% for link in button.dropdown %}
                    {% if button.text %}
                        <li>

                            {# Render normal buttons as an anchor #}
                            {% if not link.attributes.name %}
                                <a class=\"dropdown-item\" {{ html_attributes(link.attributes) }}>
                                    {{ link.icon ? icon(link.icon)|raw }}
                                    {{ trans(link.text)|raw }}
                                </a>
                            {% endif %}

                            {# Render normal buttons as a button #}
                            {% if link.attributes.name %}
                                <button class=\"dropdown-item\" {{ html_attributes(link.attributes) }}>
                                    {{ link.icon ? icon(link.icon)|raw }}
                                    {{ trans(link.text)|raw }}
                                </button>
                            {% endif %}

                        </li>
                    {% else %}
                        <li class=\"dropdown-divider\">
                            <hr>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>
    {% endif %}

{% endfor %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/buttons/buttons.twig", "");
    }
}
