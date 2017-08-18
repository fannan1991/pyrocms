<?php

/* module::ajax/partials/details */
class __TwigTemplate_d06d8a2061c48c39afa30aefa3332b3d8f05f786275ad3887ab46b6270b0b371 extends TwigBridge\Twig\Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.information")), "html", null, true);
        echo "
</h3>

<dl>
    ";
        // line 6
        if ($this->getAttribute(($context["json"] ?? null), "version", array())) {
            // line 7
            echo "        <dt>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.version")), "html", null, true);
            echo "</dt>
        <dd>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["json"] ?? null), "version", array()), "html", null, true);
            echo "</dd>
    ";
        }
        // line 10
        echo "
    <dt>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.namespace")), "html", null, true);
        echo "</dt>
    <dd><pre>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["addon"] ?? null), "namespace", array()), "html", null, true);
        echo "</pre></dd>

    <dt>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::label.path")), "html", null, true);
        echo "</dt>
    <dd>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["addon"] ?? null), "appPath", array()), "html", null, true);
        echo "</dd>

    ";
        // line 17
        if (twig_in_filter($this->getAttribute(($context["addon"] ?? null), "type", array()), array(0 => "module", 1 => "extension"))) {
            // line 18
            echo "        <dt>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::field.state.name")), "html", null, true);
            echo "</dt>
        <dd>
            ";
            // line 20
            if ($this->getAttribute(($context["addon"] ?? null), "installed", array())) {
                // line 21
                echo "                <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.installed")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 23
                echo "                <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.uninstalled")), "html", null, true);
                echo "</span>
            ";
            }
            // line 25
            echo "        </dd>
        <dt>";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::field.status.name")), "html", null, true);
            echo "</dt>
        <dd>
            ";
            // line 28
            if ($this->getAttribute(($context["addon"] ?? null), "enabled", array())) {
                // line 29
                echo "                <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.enabled")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 31
                echo "                <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.disabled")), "html", null, true);
                echo "</span>
            ";
            }
            // line 33
            echo "        </dd>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if (($this->getAttribute(($context["addon"] ?? null), "type", array()) == "theme")) {
            // line 37
            echo "        <dt>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::field.state.name")), "html", null, true);
            echo "</dt>
        <dd>
            ";
            // line 39
            if ($this->getAttribute(($context["addon"] ?? null), "active", array())) {
                // line 40
                echo "                <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.active")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 42
                echo "                <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("streams::addon.inactive")), "html", null, true);
                echo "</span>
            ";
            }
            // line 44
            echo "        </dd>
    ";
        }
        // line 46
        echo "
</dl>
";
    }

    public function getTemplateName()
    {
        return "module::ajax/partials/details";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 46,  135 => 44,  129 => 42,  123 => 40,  121 => 39,  115 => 37,  113 => 36,  110 => 35,  106 => 33,  100 => 31,  94 => 29,  92 => 28,  87 => 26,  84 => 25,  78 => 23,  72 => 21,  70 => 20,  64 => 18,  62 => 17,  57 => 15,  53 => 14,  48 => 12,  44 => 11,  41 => 10,  36 => 8,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
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
    {{ trans('module::label.information') }}
</h3>

<dl>
    {% if json.version %}
        <dt>{{ trans('module::label.version') }}</dt>
        <dd>{{ json.version }}</dd>
    {% endif %}

    <dt>{{ trans('module::label.namespace') }}</dt>
    <dd><pre>{{ addon.namespace }}</pre></dd>

    <dt>{{ trans('module::label.path') }}</dt>
    <dd>{{ addon.appPath }}</dd>

    {% if addon.type in ['module', 'extension'] %}
        <dt>{{ trans('module::field.state.name') }}</dt>
        <dd>
            {% if addon.installed %}
                <span class=\"label label-success\">{{ trans('streams::addon.installed') }}</span>
            {% else %}
                <span class=\"label label-default\">{{ trans('streams::addon.uninstalled') }}</span>
            {% endif %}
        </dd>
        <dt>{{ trans('module::field.status.name') }}</dt>
        <dd>
            {% if addon.enabled %}
                <span class=\"label label-success\">{{ trans('streams::addon.enabled') }}</span>
            {% else %}
                <span class=\"label label-default\">{{ trans('streams::addon.disabled') }}</span>
            {% endif %}
        </dd>
    {% endif %}

    {% if addon.type == 'theme' %}
        <dt>{{ trans('module::field.state.name') }}</dt>
        <dd>
            {% if addon.active %}
                <span class=\"label label-success\">{{ trans('streams::addon.active') }}</span>
            {% else %}
                <span class=\"label label-success\">{{ trans('streams::addon.inactive') }}</span>
            {% endif %}
        </dd>
    {% endif %}

</dl>
", "module::ajax/partials/details", "");
    }
}
