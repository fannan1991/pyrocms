<?php

/* streams::form/partials/layout */
class __TwigTemplate_673fbe2acb8ee0f487bbbe7658ebfd5846252898541652da58ccfcfc980cb1fa extends TwigBridge\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "fields", array()), "empty", array())) {
            // line 2
            echo "
    <div class=\"card\">
        <div class=\"card-block\">
            ";
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::message.no_fields_available")), "html", null, true);
            echo "
        </div>
    </div>

";
        } else {
            // line 10
            echo "
    ";
            // line 11
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "sections", array()), "empty", array(), "method")) {
                // line 12
                echo "
        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "sections", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 14
                    echo "            ";
                    if ($this->getAttribute($context["section"], "view", array())) {
                        // line 15
                        echo "                ";
                        $this->loadTemplate($this->getAttribute($context["section"], "view", array()), "streams::form/partials/layout", 15)->display($context);
                        // line 16
                        echo "            ";
                    } elseif ($this->getAttribute($context["section"], "html", array())) {
                        // line 17
                        echo "                ";
                        echo $this->getAttribute($context["section"], "html", array());
                        echo "
            ";
                    } else {
                        // line 19
                        echo "                ";
                        $this->loadTemplate("streams::form/partials/section", "streams::form/partials/layout", 19)->display($context);
                        // line 20
                        echo "            ";
                    }
                    // line 21
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "
    ";
            } else {
                // line 24
                echo "        ";
                $this->loadTemplate("streams::form/partials/default", "streams::form/partials/layout", 24)->display($context);
                // line 25
                echo "    ";
            }
            // line 26
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "streams::form/partials/layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  101 => 25,  98 => 24,  94 => 22,  80 => 21,  77 => 20,  74 => 19,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  42 => 13,  39 => 12,  37 => 11,  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.fields.empty %}

    <div class=\"card\">
        <div class=\"card-block\">
            {{ trans(\"streams::message.no_fields_available\") }}
        </div>
    </div>

{% else %}

    {% if not form.sections.empty() %}

        {% for section in form.sections %}
            {% if section.view %}
                {% include section.view %}
            {% elseif section.html %}
                {{ section.html|raw }}
            {% else %}
                {% include \"streams::form/partials/section\" %}
            {% endif %}
        {% endfor %}

    {% else %}
        {% include \"streams::form/partials/default\" %}
    {% endif %}

{% endif %}
", "streams::form/partials/layout", "");
    }
}
