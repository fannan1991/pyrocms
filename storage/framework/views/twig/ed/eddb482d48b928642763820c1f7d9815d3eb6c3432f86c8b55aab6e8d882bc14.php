<?php

/* module::ajax/partials/authors */
class __TwigTemplate_c7206bee3de794896a303b70d01fcf3abf209aa13b06ddf5352586fb133219ed extends TwigBridge\Twig\Template
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
        echo "<h3 class=\"lead\">
    ";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.authors")), "html", null, true);
        echo "
</h3>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["json"] ?? null), "authors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 6
            echo "    <dl>
        <dt>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo " <span class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "role", array()), "html", null, true);
            echo ")</span></dt>
        <dd><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "homepage", array()), "html", null, true);
            echo "</a></dd>
        <dd>";
            // line 9
            echo call_user_func_array($this->env->getFunction('html_mailto')->getCallable(), array("mailto", $this->getAttribute($context["author"], "email", array())));
            echo "</dd>
    </dl>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "module::ajax/partials/authors";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"lead\">
    {{ trans('module::label.authors') }}
</h3>

{% for author in json.authors %}
    <dl>
        <dt>{{ author.name }} <span class=\"text-muted\">({{ author.role }})</span></dt>
        <dd><a href=\"{{ author.homepage }}\" target=\"_blank\">{{ author.homepage }}</a></dd>
        <dd>{{ html_mailto(author.email) }}</dd>
    </dl>
{% endfor %}
", "module::ajax/partials/authors", "");
    }
}
