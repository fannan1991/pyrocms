<?php

/* anomaly.field_type.file::upload/partials/template */
class __TwigTemplate_09aad46f25b4b1978d7a8657cc5ac1426632a569c4451a0c576d5f12ab0f21fa extends TwigBridge\Twig\Template
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
        echo "<div class=\"template hidden\">

    <div class=\"upload\">

        <small data-dz-name></small>

        <progress class=\"progress\" data-dz-uploadprogress value=\"0\" max=\"100\">0%</progress>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "anomaly.field_type.file::upload/partials/template";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"template hidden\">

    <div class=\"upload\">

        <small data-dz-name></small>

        <progress class=\"progress\" data-dz-uploadprogress value=\"0\" max=\"100\">0%</progress>

    </div>

</div>
", "anomaly.field_type.file::upload/partials/template", "");
    }
}
