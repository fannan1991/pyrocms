<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/form/partials/wrapper.twig */
class __TwigTemplate_78ccf36335c70b4c8be382d1012d3fafba1a57733cb86c1081fe884b46deeaf4 extends TwigBridge\Twig\Template
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
        echo "<div
        ";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field_type"] ?? null), "locale", array())) ? (("lang=" . $this->getAttribute(($context["field_type"] ?? null), "locale", array()))) : ("")), "html", null, true);
        echo "
        class=\"
            form-group
            ";
        // line 5
        echo (($this->getAttribute(($context["form"] ?? null), "hasErrors", array(), "method")) ? ((($this->getAttribute(($context["form"] ?? null), "hasError", array(0 => $this->getAttribute(($context["field_type"] ?? null), "input_name", array())), "method")) ? ("has-danger") : ("has-success"))) : (""));
        echo "
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "input_name", array()), "html", null, true);
        echo "-field
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_type"] ?? null), "slug", array()), "html", null, true);
        echo "-field_type
            ";
        // line 8
        echo (($this->getAttribute(($context["field_type"] ?? null), "hidden", array())) ? ("hidden") : (""));
        echo "
            \">

    ";
        // line 11
        if ((($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "object", array()), "label", array()) != false) && ($this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "config", array()), "disable_label", array()) != true))) {
            // line 12
            echo "        <label class=\"control-label\">
            ";
            // line 13
            echo $this->getAttribute($this->getAttribute(($context["field_type"] ?? null), "object", array()), "label", array());
            echo "

            ";
            // line 15
            if ($this->getAttribute(($context["field_type"] ?? null), "required", array())) {
                // line 16
                echo "                <span class=\"required\">*</span>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ($this->getAttribute(($context["field_type"] ?? null), "locale", array())) {
                // line 20
                echo "                ";
                $this->loadTemplate("streams::form/partials/translations", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/partials/wrapper.twig", 20)->display($context);
                // line 21
                echo "            ";
            }
            // line 22
            echo "        </label>
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ($this->getAttribute(($context["field_type"] ?? null), "instructions", array())) {
            // line 26
            echo "        <p class=\"text-muted\">";
            echo $this->getAttribute(($context["field_type"] ?? null), "instructions", array());
            echo "</p>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ($this->getAttribute(($context["field_type"] ?? null), "warning", array())) {
            // line 30
            echo "        <p class=\"help-block\">
            <span class=\"text-warning\">
                ";
            // line 32
            echo call_user_func_array($this->env->getFunction('icon')->getCallable(), array("warning"));
            echo "
                ";
            // line 33
            echo $this->getAttribute(($context["field_type"] ?? null), "warning", array());
            echo "
            </span>
        </p>
    ";
        }
        // line 37
        echo "
    <div>
        ";
        // line 39
        echo $this->getAttribute(($context["field_type"] ?? null), "input", array());
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/partials/wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  108 => 37,  101 => 33,  97 => 32,  93 => 30,  91 => 29,  88 => 28,  82 => 26,  80 => 25,  77 => 24,  73 => 22,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  58 => 16,  56 => 15,  51 => 13,  48 => 12,  46 => 11,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
        {{ field_type.locale ? 'lang=' ~ field_type.locale }}
        class=\"
            form-group
            {{ form.hasErrors() ? form.hasError(field_type.input_name) ? 'has-danger' : 'has-success' }}
            {{ field_type.input_name }}-field
            {{ field_type.slug }}-field_type
            {{ field_type.hidden ? 'hidden' }}
            \">

    {% if field_type.object.label != false and field_type.config.disable_label != true %}
        <label class=\"control-label\">
            {{ field_type.object.label|raw }}

            {% if field_type.required %}
                <span class=\"required\">*</span>
            {% endif %}

            {% if field_type.locale %}
                {% include \"streams::form/partials/translations\" %}
            {% endif %}
        </label>
    {% endif %}

    {% if field_type.instructions %}
        <p class=\"text-muted\">{{ field_type.instructions|raw }}</p>
    {% endif %}

    {% if field_type.warning %}
        <p class=\"help-block\">
            <span class=\"text-warning\">
                {{ icon('warning') }}
                {{ field_type.warning|raw }}
            </span>
        </p>
    {% endif %}

    <div>
        {{ field_type.input|raw }}
    </div>

</div>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/form/partials/wrapper.twig", "");
    }
}
