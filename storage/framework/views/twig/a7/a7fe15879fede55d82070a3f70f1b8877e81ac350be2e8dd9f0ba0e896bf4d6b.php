<?php

/* D:\phpstudy\WWW\pyrocms\vendor\anomaly\streams-platform\src\View\Command/../../../resources/views/partials/constants.twig */
class __TwigTemplate_f5e9fd547c74f9e9904d744ef075e5e29d0fea23296103f995e07d57c493de9d extends TwigBridge\Twig\Template
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
        echo "<script type=\"text/javascript\">

    var APPLICATION_URL = \"";
        // line 3
        echo $this->env->getExtension('Anomaly\Streams\Platform\StreamsPlugin')->url();
        echo "\";
    var APPLICATION_REFERENCE = \"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('env')->getCallable(), array("APPLICATION_REFERENCE")), "html", null, true);
        echo "\";
    var APPLICATION_DOMAIN = \"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('env')->getCallable(), array("APPLICATION_DOMAIN")), "html", null, true);
        echo "\";

    var CSRF_TOKEN = \"";
        // line 7
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), array());
        echo "\";
    var APP_DEBUG = \"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("app.debug")), "html", null, true);
        echo "\";
    var APP_URL = \"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("app.url")), "html", null, true);
        echo "\";
    var REQUEST_ROOT = \"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('request_root')->getCallable(), array("root")), "html", null, true);
        echo "\";
    var REQUEST_ROOT_PATH = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(parse_url(call_user_func_array($this->env->getFunction('request_root')->getCallable(), array("root"))), "path", array()), "html", null, true);
        echo "\";
    var TIMEZONE = \"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("app.timezone")), "html", null, true);
        echo "\";
    var LOCALE = \"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config_get')->getCallable(), array("app.locale")), "html", null, true);
        echo "\";
</script>
";
    }

    public function getTemplateName()
    {
        return "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/partials/constants.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">

    var APPLICATION_URL = \"{{ url() }}\";
    var APPLICATION_REFERENCE = \"{{ env('APPLICATION_REFERENCE') }}\";
    var APPLICATION_DOMAIN = \"{{ env('APPLICATION_DOMAIN') }}\";

    var CSRF_TOKEN = \"{{ csrf_token() }}\";
    var APP_DEBUG = \"{{ config_get('app.debug') }}\";
    var APP_URL = \"{{ config_get('app.url') }}\";
    var REQUEST_ROOT = \"{{ request_root() }}\";
    var REQUEST_ROOT_PATH = \"{{ parse_url(request_root()).path }}\";
    var TIMEZONE = \"{{ config_get('app.timezone') }}\";
    var LOCALE = \"{{ config_get('app.locale') }}\";
</script>
", "D:\\phpstudy\\WWW\\pyrocms\\vendor\\anomaly\\streams-platform\\src\\View\\Command/../../../resources/views/partials/constants.twig", "");
    }
}
