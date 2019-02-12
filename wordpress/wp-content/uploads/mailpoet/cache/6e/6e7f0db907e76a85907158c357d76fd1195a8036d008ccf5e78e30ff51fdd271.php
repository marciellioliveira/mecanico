<?php

/* layout.html */
class __TwigTemplate_a5298c64c06d4dec7478986df56de9ac743935c0ea6d5a0e349207fdb1f9333e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'after_css' => array($this, 'block_after_css'),
            'translations' => array($this, 'block_translations'),
            'after_translations' => array($this, 'block_after_translations'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["sub_menu"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["sub_menu"] ?? null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 16
        $this->displayBlock('templates', $context, $blocks);
        // line 17
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

  <!-- title block -->
  ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "  <!-- content block -->
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "</div>

<!-- stylesheets -->
";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 33
        echo "

";
        // line 35
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 38
        if ($this->env->getExtension('MailPoet\Twig\Functions')->isRtl()) {
            // line 39
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('after_css', $context, $blocks);
        // line 43
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 45
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_version = \"";
        // line 47
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetVersion();
        echo "\";
  var mailpoet_locale = \"";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getTwoLettersLocale();
        echo "\";
  var mailpoet_polls_data = ";
        // line 49
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsData());
        echo ";
  var mailpoet_polls_visibility = ";
        // line 50
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsVisibility());
        echo ";
  var mailpoet_premium_version = ";
        // line 51
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetPremiumVersion());
        echo ";
  var mailpoet_analytics_enabled = ";
        // line 52
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_enabled')->getCallable(), array())), "html", null, true);
        echo ";
  var mailpoet_analytics_data = ";
        // line 53
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_data')->getCallable(), array()));
        echo ";
  var mailpoet_analytics_public_id = ";
        // line 54
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_public_id')->getCallable(), array()));
        echo ";
  var mailpoet_analytics_new_public_id = ";
        // line 55
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_public_id_new')->getCallable(), array())), "html", null, true);
        echo ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
</script>

<!-- javascripts -->
";
        // line 61
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 64
        echo "

";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("ajaxFailedErrorMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error has happened while performing a request, the server has responded with response code %d"), "senderEmailAddressWarning1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You might not reach the inbox of your subscribers if you use this email address.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Use an address like %suggested for the Sender and put %originalSender in the the <em>Reply-to</em> field below.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning3" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.")));
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('translations', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('after_translations', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor_chunk.js", "admin_vendor.js");
        // line 79
        echo "

";
        // line 81
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 85
        echo "

";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/analytics.js");
        echo "

";
        // line 89
        $context["has_valid_premium_key"] = $this->env->getExtension('MailPoet\Twig\Functions')->hasValidPremiumKey();
        // line 90
        echo "
";
        // line 91
        $context["helpscout_form_id"] = "dd918048-8d73-11e7-b5b5-0ec85169275a";
        // line 92
        if (($context["has_valid_premium_key"] ?? null)) {
            // line 93
            echo "  ";
            $context["helpscout_form_id"] = "6974b88d-8d85-11e7-b5b5-0ec85169275a";
        }
        // line 95
        echo "<script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!0,baseUrl:\"https://mailpoet3.helpscoutdocs.com/\"},contact:{enabled:!0,formId:\"";
        echo twig_escape_filter($this->env, ($context["helpscout_form_id"] ?? null), "html", null, true);
        echo "\"}};var r=e.getElementsByTagName(\"script\")[0],c=e.createElement(\"script\");c.type=\"text/javascript\",c.async=!0,c.src=\"https://djtflbt20bdde.cloudfront.net/\",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>

<script type=\"text/javascript\">
  if(window['HS'] !== undefined) {
    // HelpScout Beacon: Configuration
    HS.beacon.config({
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 103
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    HS.beacon.ready(function() {
      HS.beacon.identify(
        ";
        // line 110
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
      );
    });
  }
</script>


<script>
  // SatisMeter for tracking NPS score
  (function() { window.satismeter = window.satismeter || function() {(window.satismeter.q = window.satismeter.q || []).push(arguments);};window.satismeter.l = 1 * new Date();var script = document.createElement(\"script\");var parent = document.getElementsByTagName(\"script\")[0].parentNode;script.async = 1;script.src = \"https://app.satismeter.com/satismeter.js\";parent.appendChild(script);})();
</script>
";
        // line 121
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 16
    public function block_templates($context, array $blocks = array())
    {
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 42
    public function block_after_css($context, array $blocks = array())
    {
    }

    // line 72
    public function block_translations($context, array $blocks = array())
    {
    }

    // line 74
    public function block_after_translations($context, array $blocks = array())
    {
    }

    // line 121
    public function block_after_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 121,  272 => 74,  267 => 72,  262 => 42,  257 => 27,  252 => 25,  247 => 16,  243 => 121,  229 => 110,  219 => 103,  207 => 95,  203 => 93,  201 => 92,  199 => 91,  196 => 90,  194 => 89,  189 => 87,  185 => 85,  183 => 83,  178 => 81,  174 => 79,  172 => 76,  169 => 75,  167 => 74,  164 => 73,  162 => 72,  159 => 71,  157 => 66,  153 => 64,  151 => 61,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  114 => 48,  110 => 47,  106 => 46,  102 => 45,  98 => 43,  96 => 42,  93 => 41,  87 => 39,  85 => 38,  79 => 35,  75 => 33,  73 => 31,  68 => 28,  66 => 27,  63 => 26,  61 => 25,  51 => 17,  49 => 16,  42 => 11,  33 => 5,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\layout.html");
    }
}
