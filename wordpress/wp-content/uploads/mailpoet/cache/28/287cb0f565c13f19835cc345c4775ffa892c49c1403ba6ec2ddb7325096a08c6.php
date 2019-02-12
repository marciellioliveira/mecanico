<?php

/* newsletter/templates/components/newsletterPreview.hbs */
class __TwigTemplate_3ef802bf7ea8a8f879eb303137fdfbc98cb690634fb3d64385ccb6c1d9b442ad extends Twig_Template
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
        echo "<div class=\"mailpoet_browser_preview_toggle\">
  <label>
    <input type=\"radio\" name=\"mailpoet_browser_preview_type\" class=\"mailpoet_browser_preview_type\" value=\"desktop\" {{#ifCond previewType '!=' 'mobile'}}CHECKED{{/ifCond}} />";
        // line 3
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Desktop", "Desktop browser preview mode");
        echo "
  </label>
  <label>
    <input type=\"radio\" name=\"mailpoet_browser_preview_type\" class=\"mailpoet_browser_preview_type\" value=\"mobile\" {{#ifCond previewType '==' 'mobile'}}CHECKED{{/ifCond}} />";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Mobile", "Mobile browser preview mode");
        echo "
  </label>
</div>
<div class=\"mailpoet_browser_preview_container {{#ifCond previewType '==' 'mobile'}}mailpoet_browser_preview_container_mobile{{else}}mailpoet_browser_preview_container_desktop{{/ifCond}}\">
  <div class=\"mailpoet_browser_preview_border\">
    <iframe class=\"mailpoet_browser_preview_iframe\" src=\"{{ previewUrl }}\" width=\"{{ width }}\" height=\"{{ height }}\"></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/newsletterPreview.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/newsletterPreview.hbs", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\newsletterPreview.hbs");
    }
}
