<?php

/* streams::form/partials/tabs */
class __TwigTemplate_526ed190da90e58d6c34a9757c64a8780f8fe649745e522fdf0db298f2018697 extends TwigBridge\Twig\Template
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
        echo "<ul class=\"nav nav-sections ";
        echo ((($context["stacked"] ?? null)) ? ("nav-stacked") : (""));
        echo "\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["slug"] => $context["tab"]) {
            // line 4
            echo "            <li class=\"nav-item ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""));
            echo "\">
                <a href=\"#tab-";
            // line 5
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "\" data-toggle=\"tab\" class=\"nav-link\">
                    ";
            // line 6
            echo (($this->getAttribute($context["tab"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["tab"], "icon", array())))) : (""));
            echo "
                    ";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["tab"], "title", array()))), "html", null, true);
            echo "
                </a>
            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 12
        echo "</ul>

<div class=\"card-block\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["section"] ?? null), "tabs", array()));
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
        foreach ($context['_seq'] as $context["slug"] => $context["tab"]) {
            // line 16
            echo "        <div class=\"tab-pane ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""));
            echo "\" id=\"tab-";
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "\">
            ";
            // line 17
            if ($this->getAttribute($context["tab"], "view", array())) {
                // line 18
                echo "                ";
                $this->loadTemplate($this->getAttribute($context["tab"], "view", array()), "streams::form/partials/tabs", 18)->display($context);
                // line 19
                echo "            ";
            } elseif ($this->getAttribute($context["tab"], "html", array())) {
                // line 20
                echo "                ";
                echo $this->getAttribute($context["tab"], "html", array());
                echo "
            ";
            } elseif ($this->getAttribute(            // line 21
$context["tab"], "rows", array())) {
                // line 22
                echo "                ";
                $this->loadTemplate("streams::form/partials/rows", "streams::form/partials/tabs", 22)->display(array_merge($context, array("rows" => $this->getAttribute($context["tab"], "rows", array()))));
                // line 23
                echo "            ";
            } else {
                // line 24
                echo "                ";
                if (twig_test_empty($this->getAttribute($context["tab"], "fields", array()))) {
                    // line 25
                    echo "                    <div class=\"form-group\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::message.no_fields_available")), "html", null, true);
                    echo "
                    </div>
                ";
                } else {
                    // line 29
                    echo "
                    ";
                    // line 30
                    $this->loadTemplate("streams::form/partials/fields", "streams::form/partials/tabs", 30)->display(array_merge($context, array("fields" => $this->getAttribute($context["tab"], "fields", array()))));
                    // line 31
                    echo "
                ";
                }
                // line 33
                echo "            ";
            }
            // line 34
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "streams::form/partials/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 36,  152 => 34,  149 => 33,  145 => 31,  143 => 30,  140 => 29,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  122 => 22,  120 => 21,  115 => 20,  112 => 19,  109 => 18,  107 => 17,  100 => 16,  83 => 15,  78 => 12,  75 => 11,  57 => 7,  53 => 6,  49 => 5,  44 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav nav-sections {{ stacked ? 'nav-stacked' }}\">
    {% spaceless %}
        {% for slug, tab in tabs %}
            <li class=\"nav-item {{ loop.first ? ' active' }}\">
                <a href=\"#tab-{{ slug }}\" data-toggle=\"tab\" class=\"nav-link\">
                    {{ tab.icon ? icon(tab.icon) }}
                    {{ trans(tab.title) }}
                </a>
            </li>
        {% endfor %}
    {% endspaceless %}
</ul>

<div class=\"card-block\">
    {% for slug, tab in section.tabs %}
        <div class=\"tab-pane {{ loop.first ? ' active' }}\" id=\"tab-{{ slug }}\">
            {% if tab.view %}
                {% include tab.view %}
            {% elseif tab.html %}
                {{ tab.html|raw }}
            {% elseif tab.rows %}
                {% include \"streams::form/partials/rows\" with {\"rows\": tab.rows} %}
            {% else %}
                {% if tab.fields is empty %}
                    <div class=\"form-group\">
                        {{ trans(\"streams::message.no_fields_available\") }}
                    </div>
                {% else %}

                    {% include \"streams::form/partials/fields\" with {\"fields\": tab.fields} %}

                {% endif %}
            {% endif %}
        </div>
    {% endfor %}
</div>
", "streams::form/partials/tabs", "");
    }
}
