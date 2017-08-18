<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/posts-module/resources/views/admin/posts/choose.twig */
class __TwigTemplate_37e09ac76b9fc36b1aa1ce95c08a1fa710d13aeced1d12f2a92110e84c254d5d extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::message.choose_type")), "html", null, true);
        echo "</h4>
</div>

<div class=\"modal-body\">

    ";
        // line 10
        $this->loadTemplate("streams::modals/filter", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/admin/posts/choose.twig", 10)->display($context);
        // line 11
        echo "    
    ";
        // line 12
        if ( !$this->getAttribute(($context["types"] ?? null), "isEmpty", array(), "method")) {
            // line 13
            echo "        <ul class=\"nav nav-pills nav-stacked\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 15
                echo "                <li class=\"nav-item\">
                    <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_to')->getCallable(), array("to", ("admin/posts/create?type=" . $this->getAttribute($context["type"], "id", array())))), "html", null, true);
                echo "\" class=\"nav-link\">
                        <strong>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
                echo "</strong>
                        <br>
                        <small>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true);
                echo "</small>
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </ul>
    ";
        } else {
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::message.no_results")), "html", null, true);
            echo "
    ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/admin/posts/choose.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  73 => 25,  69 => 23,  59 => 19,  54 => 17,  50 => 16,  47 => 15,  43 => 14,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">{{ trans('module::message.choose_type') }}</h4>
</div>

<div class=\"modal-body\">

    {% include \"streams::modals/filter\" %}
    
    {% if not types.isEmpty() %}
        <ul class=\"nav nav-pills nav-stacked\">
            {% for type in types %}
                <li class=\"nav-item\">
                    <a href=\"{{ url_to('admin/posts/create?type=' ~ type.id) }}\" class=\"nav-link\">
                        <strong>{{ type.name }}</strong>
                        <br>
                        <small>{{ type.description }}</small>
                    </a>
                </li>
            {% endfor %}
        </ul>
    {% else %}
        {{ trans('streams::message.no_results') }}
    {% endif %}
</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/posts-module/resources/views/admin/posts/choose.twig", "");
    }
}
