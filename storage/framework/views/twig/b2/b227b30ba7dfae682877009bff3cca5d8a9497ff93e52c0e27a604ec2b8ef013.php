<?php

/* D:\phpstudy\WWW\pyrocms\core/anomaly/addons-module/resources/views/ajax/install.twig */
class __TwigTemplate_57184d2272ac3395d348c83e685dbcfcd7057a175b60aada281756e67c38b038 extends TwigBridge\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("url" => ("/admin/addons/install/" . ($context["namespace"] ?? null)))));
        echo "

<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">
        ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.addons::button.install")), "html", null, true);
        echo ": ";
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array($this->getAttribute(($context["addon"] ?? null), "name", array())));
        echo "
    </h4>
</div>

<div class=\"modal-body\">

    <label class=\"control-label\">
        ";
        // line 15
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.addons::field.seed.label"));
        echo "
    </label>

    <p class=\"text-muted\">";
        // line 18
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.addons::field.seed.instructions"));
        echo "</p>

    <label>
        <input type=\"checkbox\" name=\"seed\" value=\"yes\" checked> ";
        // line 21
        echo call_user_func_array($this->env->getFunction('trans')->getCallable(), array("anomaly.module.addons::field.seed.option"));
        echo "
    </label>
</div>

<div class=\"modal-footer\">
    <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancel</button>
    <button type=\"submit\" class=\"btn btn-primary\">Install</button>
</div>

";
        // line 30
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  53 => 21,  47 => 18,  41 => 15,  29 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_open({url: \"/admin/addons/install/#{namespace}\"}) }}

<div class=\"modal-header\">
    <button class=\"close\" data-dismiss=\"modal\">
        <span>&times;</span>
    </button>
    <h4 class=\"modal-title\">
        {{ trans(\"anomaly.module.addons::button.install\") }}: {{ trans(addon.name)|raw }}
    </h4>
</div>

<div class=\"modal-body\">

    <label class=\"control-label\">
        {{ trans('anomaly.module.addons::field.seed.label')|raw }}
    </label>

    <p class=\"text-muted\">{{ trans('anomaly.module.addons::field.seed.instructions')|raw }}</p>

    <label>
        <input type=\"checkbox\" name=\"seed\" value=\"yes\" checked> {{ trans('anomaly.module.addons::field.seed.option')|raw }}
    </label>
</div>

<div class=\"modal-footer\">
    <button data-dismiss=\"modal\" class=\"btn btn-default\">Cancel</button>
    <button type=\"submit\" class=\"btn btn-primary\">Install</button>
</div>

{{ form_close() }}
", "D:\\phpstudy\\WWW\\pyrocms\\core/anomaly/addons-module/resources/views/ajax/install.twig", "");
    }
}
