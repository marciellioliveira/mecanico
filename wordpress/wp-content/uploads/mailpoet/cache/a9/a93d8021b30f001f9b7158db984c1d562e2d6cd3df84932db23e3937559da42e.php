<?php

/* newsletter/templates/blocks/base/toolsGeneric.hbs */
class __TwigTemplate_4346f086ad0cec76b65b984e31baeaddcfaa5d3b91347f7d768694492f3be040 extends Twig_Template
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
        echo "<div class=\"mailpoet_tools_slider\">
\t{{#if tools.layerSelector}}
\t\t<a href=\"javascript:;\" class=\"mailpoet_tool mailpoet_newsletter_layer_selector mailpoet_ignore_drag\" title=\"";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Switch editing layer");
        echo "\">
    \t\t";
        // line 4
        echo twig_source($this->env, "newsletter/templates/svg/block-tools/settings.svg");
        echo "
\t\t</a>
\t{{/if}}
\t{{#if tools.settings}}
\t\t<a href=\"javascript:;\" class=\"mailpoet_tool mailpoet_edit_block mailpoet_ignore_drag\" title=\"";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit settings");
        echo "\">
\t\t\t";
        // line 9
        echo twig_source($this->env, "newsletter/templates/svg/block-tools/settings.svg");
        echo "
\t\t</a>
\t{{/if}}
\t{{#if tools.delete}}
\t\t<div class=\"mailpoet_delete_block mailpoet_ignore_drag\">
\t\t\t<a href=\"javascript:;\" class=\"mailpoet_tool mailpoet_delete_block_activate\" title=\"";
        // line 14
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete");
        echo "\">
\t\t\t\t";
        // line 15
        echo twig_source($this->env, "newsletter/templates/svg/block-tools/trash.svg");
        echo "
\t\t\t</a>
\t\t\t<a href=\"javascript:;\" class=\"mailpoet_delete_block_cancel\" title=\"";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel deletion");
        echo "\">
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "
\t\t\t</a>
\t\t\t<a href=\"javascript:;\" class=\"mailpoet_delete_block_confirm\" title=\"";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Confirm deletion");
        echo "\">
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Delete");
        echo "
\t\t\t</a>
\t\t</div>
\t{{/if}}
\t{{#if tools.duplicate}}
\t\t<a href=\"javascript:;\" class=\"mailpoet_tool mailpoet_duplicate_block\" title=\"";
        // line 26
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Duplicate");
        echo "\">
\t\t\t";
        // line 27
        echo twig_source($this->env, "newsletter/templates/svg/block-tools/duplicate.svg");
        echo "
\t\t</a>
\t{{/if}}
\t{{#if tools.move}}
\t\t<a href=\"javascript:;\" class=\"mailpoet_tool mailpoet_move_block\" title=\"";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Drag to move");
        echo "\">
  \t\t\t";
        // line 32
        echo twig_source($this->env, "newsletter/templates/svg/block-tools/move.svg");
        echo "
\t\t</a>
\t{{/if}}
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/base/toolsGeneric.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  87 => 31,  80 => 27,  76 => 26,  68 => 21,  64 => 20,  59 => 18,  55 => 17,  50 => 15,  46 => 14,  38 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/base/toolsGeneric.hbs", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\base\\toolsGeneric.hbs");
    }
}
