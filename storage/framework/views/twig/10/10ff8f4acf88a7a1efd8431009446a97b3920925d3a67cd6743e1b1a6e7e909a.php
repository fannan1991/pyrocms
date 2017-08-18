<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/dashboard-module/resources/views/admin/widgets/widget.twig */
class __TwigTemplate_fb01b7613383c77ae2aa3e4ed4eb0c6868c5ba1fbd6bf24d26f42e7e892926ca extends TwigBridge\Twig\Template
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
        echo "<div class=\"widget card\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["widget"] ?? null), "id", array()), "html", null, true);
        echo "\">

    <div class=\"";
        // line 3
        echo (($this->getAttribute(($context["widget"] ?? null), "sortable", array())) ? ("handle") : (""));
        echo " card-header\">
        <h5 class=\"card-title\">

            ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["widget"] ?? null), "title", array()), "html", null, true);
        echo "

            ";
        // line 8
        if ($this->getAttribute(($context["widget"] ?? null), "description", array())) {
            // line 9
            echo "
                <br>

                <small>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["widget"] ?? null), "description", array()), "html", null, true);
            echo "
                </small>
            ";
        }
        // line 16
        echo "        </h5>
    </div>

    <div class=\"card-block\">
        ";
        // line 20
        echo $this->getAttribute(($context["widget"] ?? null), "content", array());
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/widgets/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  50 => 16,  44 => 13,  38 => 9,  36 => 8,  31 => 6,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget card\" data-id=\"{{ widget.id }}\">

    <div class=\"{{ widget.sortable ? 'handle' }} card-header\">
        <h5 class=\"card-title\">

            {{ widget.title }}

            {% if widget.description %}

                <br>

                <small>
                    {{ widget.description }}
                </small>
            {% endif %}
        </h5>
    </div>

    <div class=\"card-block\">
        {{ widget.content|raw }}
    </div>

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/dashboard-module/resources/views/admin/widgets/widget.twig", "");
    }
}
