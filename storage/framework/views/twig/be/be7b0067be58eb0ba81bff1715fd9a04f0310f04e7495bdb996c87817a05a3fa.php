<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/table/ajax/views.twig */
class __TwigTemplate_3f18e3d87d8f997deed59dc52703a07832b66d4c88421a344f8f59bcc4f5841e extends TwigBridge\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["table"] ?? null), "views", array()), "empty", array(), "method")) {
            // line 2
            echo "    <nav class=\"navbar navbar-light\">
        <div class=\"nav navbar-nav\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? null), "views", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
                // line 5
                echo "                <a
                        class=\"ajax nav-item nav-link ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["view"], "class", array()), "html", null, true);
                echo " ";
                echo (($this->getAttribute($context["view"], "isActive", array(), "method")) ? ("active") : (""));
                echo "\"
                        ";
                // line 7
                echo call_user_func_array($this->env->getFunction('html_attributes')->getCallable(), array("attributes", $this->getAttribute($context["view"], "attributes", array())));
                echo ">
                    ";
                // line 8
                echo (($this->getAttribute($context["view"], "icon", array())) ? (call_user_func_array($this->env->getFunction('icon')->getCallable(), array($this->getAttribute($context["view"], "icon", array())))) : (""));
                echo "
                    ";
                // line 9
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute($context["view"], "getText", array(), "method"))), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/views.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  46 => 9,  42 => 8,  38 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not table.views.empty() %}
    <nav class=\"navbar navbar-light\">
        <div class=\"nav navbar-nav\">
            {% for view in table.views %}
                <a
                        class=\"ajax nav-item nav-link {{ view.class }} {{ view.isActive() ? 'active' }}\"
                        {{ html_attributes(view.attributes) }}>
                    {{ view.icon ? icon(view.icon)|raw }}
                    {{ trans(view.getText()) }}
                </a>
            {% endfor %}
        </div>
    </nav>
{% endif %}
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/table/ajax/views.twig", "");
    }
}
