<?php

/* theme::partials/modals */
class __TwigTemplate_487f03561a06bfb5183831e02c9176b57ec10e428da5937206ad6b5e221bb0b9 extends TwigBridge\Twig\Template
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
        echo "<div class=\"modal fade remote\" id=\"modal-small\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal-large\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal-wide\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "theme::partials/modals";
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
        return new Twig_Source("<div class=\"modal fade remote\" id=\"modal-small\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal-large\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal remote\" id=\"modal-wide\">
    <div class=\"modal-dialog modal-wide\">
        <div class=\"modal-content\">
            <div class=\"modal-loading\">
                <div class=\"active loader large\"></div>
            </div>
        </div>
    </div>
</div>
", "theme::partials/modals", "");
    }
}
