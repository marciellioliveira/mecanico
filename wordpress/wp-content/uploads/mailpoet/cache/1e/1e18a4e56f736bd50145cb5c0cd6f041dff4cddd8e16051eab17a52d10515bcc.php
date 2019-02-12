<?php

/* newsletter/templates/blocks/text/block.hbs */
class __TwigTemplate_b1bd570d7f94136d21dea7595a4fd8de942d6835e1edeb086bfddfb5c8c76c2e extends Twig_Template
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
        echo "<div class=\"mailpoet_tools\"></div>
<div
    class=\"mailpoet_content mailpoet_text_content\"
    {{#if model.styles.block.paddingTop }}style=\"padding-top:{{model.styles.block.paddingTop}};\"{{/if}}
>
    {{{ model.text }}}
</div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/text/block.hbs";
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
        return new Twig_Source("", "newsletter/templates/blocks/text/block.hbs", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\text\\block.hbs");
    }
}
