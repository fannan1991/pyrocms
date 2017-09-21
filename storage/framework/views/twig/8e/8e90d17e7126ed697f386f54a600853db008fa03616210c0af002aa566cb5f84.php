<?php

/* module::admin/upload/partials/body */
class __TwigTemplate_21920fb23855407ca12329253dd4c64246a1d351fe471cb2ca048505a7825090 extends TwigBridge\Twig\Template
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
        echo "<div class=\"card\">
    <div class=\"card-block\">

        <div class=\"dropzone\"
             data-folder=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["folder"] ?? null), "id", array()), "html", null, true);
        echo "\"
             data-icon=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('icon')->getCallable(), array("upload")));
        echo "\"
             data-max-size=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('max_upload_size')->getCallable(), array()), "html", null, true);
        echo "\"
             data-message=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::message.upload")), "html", null, true);
        echo "\"
             data-loading=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::message.loading")), "html", null, true);
        echo "\"
             data-uploading=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::message.uploading")), "html", null, true);
        echo "\"
             data-overwrite=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), array("module::message.overwrite")), "html", null, true);
        echo "\"
             data-max-parallel=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('setting_value')->getCallable(), array("anomaly.module.files::max_parallel_uploads", 3)), "html", null, true);
        echo "\"
             data-allowed=\"";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "value", array())) ? (("." . twig_join_filter($this->getAttribute($this->getAttribute(($context["folder"] ?? null), "allowed_types", array()), "value", array()), ",."))) : ("")), "html", null, true);
        echo "\"></div>

        <div class=\"uploads\"></div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "module::admin/upload/partials/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card\">
    <div class=\"card-block\">

        <div class=\"dropzone\"
             data-folder=\"{{ folder.id }}\"
             data-icon=\"{{ icon('upload')|escape }}\"
             data-max-size=\"{{ max_upload_size() }}\"
             data-message=\"{{ trans('module::message.upload') }}\"
             data-loading=\"{{ trans('module::message.loading') }}\"
             data-uploading=\"{{ trans('module::message.uploading') }}\"
             data-overwrite=\"{{ trans('module::message.overwrite') }}\"
             data-max-parallel=\"{{ setting_value('anomaly.module.files::max_parallel_uploads', 3) }}\"
             data-allowed=\"{{ folder.allowed_types.value ? '.' ~ folder.allowed_types.value|join(',.') }}\"></div>

        <div class=\"uploads\"></div>

    </div>
</div>
", "module::admin/upload/partials/body", "");
    }
}
