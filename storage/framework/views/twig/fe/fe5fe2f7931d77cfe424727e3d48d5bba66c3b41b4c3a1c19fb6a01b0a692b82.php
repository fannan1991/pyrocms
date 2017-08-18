<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/xml_feed_widget-extension/resources/views/content.twig */
class __TwigTemplate_a878642a31ef3d45f18502e5f775480b1807a836b2aeefd89c1b0c45d48053cd extends TwigBridge\Twig\Template
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
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "data", array()), "items", array()))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["widget"] ?? null), "data", array()), "items", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "
        <div class=\"media\">

            <div class=\"media-left\">
                <i class=\"fa fa-calendar fa-lg text-faded\"></i>
            </div>

            <div class=\"media-body\">

                <h3 class=\"media-heading\">
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_permalink", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "get_title", array(), "method"), "html", null, true);
                echo "
                    </a>

                    <br>

                    <small class=\"text-muted\">
                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "get_date", array(), "method"), "F j, Y"), "html", null, true);
                echo "
                    </small>
                </h3>

                ";
                // line 24
                echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["item"], "get_description", array(), "method")), "html", null, true);
                echo "

            </div>

        </div>

        ";
                // line 30
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 31
                    echo "            <hr>
        ";
                }
                // line 33
                echo "
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif (is_array($this->getAttribute($this->getAttribute(        // line 35
($context["widget"] ?? null), "data", array()), "items", array()))) {
            // line 36
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.extension.xml_feed_widget::message.empty")), "html", null, true);
            echo "</p>
";
        } else {
            // line 38
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.extension.xml_feed_widget::message.error")), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/xml_feed_widget-extension/resources/views/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  103 => 36,  101 => 35,  86 => 33,  82 => 31,  80 => 30,  71 => 24,  64 => 20,  55 => 14,  51 => 13,  39 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if widget.data.items is not empty %}
    {% for item in widget.data.items %}

        <div class=\"media\">

            <div class=\"media-left\">
                <i class=\"fa fa-calendar fa-lg text-faded\"></i>
            </div>

            <div class=\"media-body\">

                <h3 class=\"media-heading\">
                    <a href=\"{{ item.get_permalink() }}\" target=\"_blank\">
                        {{ item.get_title() }}
                    </a>

                    <br>

                    <small class=\"text-muted\">
                        {{ item.get_date()|date('F j, Y') }}
                    </small>
                </h3>

                {{ item.get_description()|striptags }}

            </div>

        </div>

        {% if not loop.last %}
            <hr>
        {% endif %}

    {% endfor %}
{% elseif is_array(widget.data.items) %}
    <p>{{ trans('anomaly.extension.xml_feed_widget::message.empty') }}</p>
{% else %}
    <p>{{ trans('anomaly.extension.xml_feed_widget::message.error') }}</p>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/xml_feed_widget-extension/resources/views/content.twig", "");
    }
}
