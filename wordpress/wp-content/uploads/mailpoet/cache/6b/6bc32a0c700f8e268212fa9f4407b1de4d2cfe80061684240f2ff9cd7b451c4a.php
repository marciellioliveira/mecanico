<?php

/* newsletter/templates/blocks/container/emptyBlock.hbs */
class __TwigTemplate_70ed2856c1bc3fc600497acf720066fab5a3238da4cce6d2e91d8f00174fb7bf extends Twig_Template
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
        echo "<div class=\"mailpoet_container_empty\">{{#ifCond emptyContainerMessage '!==' ''}}{{emptyContainerMessage}}{{else}}{{#if isRoot}}";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add a column block here.");
        echo "{{else}}";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add a content block here.");
        echo "{{/if}}{{/ifCond}}</div>
{{debug}}
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/container/emptyBlock.hbs";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "newsletter/templates/blocks/container/emptyBlock.hbs", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\container\\emptyBlock.hbs");
    }
}
