<?php

/* newsletter/editor.html */
class __TwigTemplate_e4be41e06f4eeafb9a5226a3800acabfd181e8a042a1ad1e37b58e0e35b0d669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "newsletter/editor.html", 1);
        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
            'after_css' => array($this, 'block_after_css'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_templates($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_tools_generic", "newsletter/templates/blocks/base/toolsGeneric.hbs");
        // line 7
        echo "
  ";
        // line 8
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_block", "newsletter/templates/blocks/automatedLatestContent/block.hbs");
        // line 11
        echo "
  ";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_widget", "newsletter/templates/blocks/automatedLatestContent/widget.hbs");
        // line 15
        echo "
  ";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_settings", "newsletter/templates/blocks/automatedLatestContent/settings.hbs");
        // line 19
        echo "
  ";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_block", "newsletter/templates/blocks/automatedLatestContentLayout/block.hbs");
        // line 23
        echo "
  ";
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_widget", "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs");
        // line 27
        echo "
  ";
        // line 28
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_settings", "newsletter/templates/blocks/automatedLatestContentLayout/settings.hbs");
        // line 31
        echo "
  ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_block", "newsletter/templates/blocks/button/block.hbs");
        // line 35
        echo "
  ";
        // line 36
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_widget", "newsletter/templates/blocks/button/widget.hbs");
        // line 39
        echo "
  ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_button_settings", "newsletter/templates/blocks/button/settings.hbs");
        // line 43
        echo "
  ";
        // line 44
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block", "newsletter/templates/blocks/container/block.hbs");
        // line 47
        echo "
  ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_block_empty", "newsletter/templates/blocks/container/emptyBlock.hbs");
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_one_column_widget", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget.hbs");
        // line 59
        echo "
  ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_12_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs");
        // line 63
        echo "
  ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_21_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget21.hbs");
        // line 67
        echo "
  ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_three_column_widget", "newsletter/templates/blocks/container/threeColumnLayoutWidget.hbs");
        // line 71
        echo "
  ";
        // line 72
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_settings", "newsletter/templates/blocks/container/settings.hbs");
        // line 75
        echo "
  ";
        // line 76
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_container_column_settings", "newsletter/templates/blocks/container/columnSettings.hbs");
        // line 79
        echo "
  ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_block", "newsletter/templates/blocks/divider/block.hbs");
        // line 83
        echo "
  ";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_widget", "newsletter/templates/blocks/divider/widget.hbs");
        // line 87
        echo "
  ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_divider_settings", "newsletter/templates/blocks/divider/settings.hbs");
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_block", "newsletter/templates/blocks/footer/block.hbs");
        // line 95
        echo "
  ";
        // line 96
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_widget", "newsletter/templates/blocks/footer/widget.hbs");
        // line 99
        echo "
  ";
        // line 100
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_footer_settings", "newsletter/templates/blocks/footer/settings.hbs");
        // line 103
        echo "
  ";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_block", "newsletter/templates/blocks/header/block.hbs");
        // line 107
        echo "
  ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_widget", "newsletter/templates/blocks/header/widget.hbs");
        // line 111
        echo "
  ";
        // line 112
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_header_settings", "newsletter/templates/blocks/header/settings.hbs");
        // line 115
        echo "
  ";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_block", "newsletter/templates/blocks/image/block.hbs");
        // line 119
        echo "
  ";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_widget", "newsletter/templates/blocks/image/widget.hbs");
        // line 123
        echo "
  ";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_image_settings", "newsletter/templates/blocks/image/settings.hbs");
        // line 127
        echo "
  ";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_block", "newsletter/templates/blocks/posts/block.hbs");
        // line 131
        echo "
  ";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_widget", "newsletter/templates/blocks/posts/widget.hbs");
        // line 135
        echo "
  ";
        // line 136
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings", "newsletter/templates/blocks/posts/settings.hbs");
        // line 139
        echo "
  ";
        // line 140
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_display_options", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
        // line 143
        echo "
  ";
        // line 144
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection", "newsletter/templates/blocks/posts/settingsSelection.hbs");
        // line 147
        echo "
  ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection_empty", "newsletter/templates/blocks/posts/settingsSelectionEmpty.hbs");
        // line 151
        echo "
  ";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_single_post", "newsletter/templates/blocks/posts/settingsSinglePost.hbs");
        // line 155
        echo "
  ";
        // line 156
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block", "newsletter/templates/blocks/social/block.hbs");
        // line 159
        echo "
  ";
        // line 160
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_block_icon", "newsletter/templates/blocks/social/blockIcon.hbs");
        // line 163
        echo "
  ";
        // line 164
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_widget", "newsletter/templates/blocks/social/widget.hbs");
        // line 167
        echo "
  ";
        // line 168
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings", "newsletter/templates/blocks/social/settings.hbs");
        // line 171
        echo "
  ";
        // line 172
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon", "newsletter/templates/blocks/social/settingsIcon.hbs");
        // line 175
        echo "
  ";
        // line 176
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon_selector", "newsletter/templates/blocks/social/settingsIconSelector.hbs");
        // line 179
        echo "
  ";
        // line 180
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_styles", "newsletter/templates/blocks/social/settingsStyles.hbs");
        // line 183
        echo "
  ";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_block", "newsletter/templates/blocks/spacer/block.hbs");
        // line 187
        echo "
  ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_widget", "newsletter/templates/blocks/spacer/widget.hbs");
        // line 191
        echo "
  ";
        // line 192
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_spacer_settings", "newsletter/templates/blocks/spacer/settings.hbs");
        // line 195
        echo "
  ";
        // line 196
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_block", "newsletter/templates/blocks/text/block.hbs");
        // line 199
        echo "
  ";
        // line 200
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_widget", "newsletter/templates/blocks/text/widget.hbs");
        // line 203
        echo "
  ";
        // line 204
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_text_settings", "newsletter/templates/blocks/text/settings.hbs");
        // line 207
        echo "
  ";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_heading", "newsletter/templates/components/heading.hbs");
        // line 211
        echo "
  ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_save", "newsletter/templates/components/save.hbs");
        // line 215
        echo "
  ";
        // line 216
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_styles", "newsletter/templates/components/styles.hbs");
        // line 219
        echo "
  ";
        // line 220
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_newsletter_preview", "newsletter/templates/components/newsletterPreview.hbs");
        // line 223
        echo "
  ";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar", "newsletter/templates/components/sidebar/sidebar.hbs");
        // line 227
        echo "
  ";
        // line 228
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_content", "newsletter/templates/components/sidebar/content.hbs");
        // line 231
        echo "
  ";
        // line 232
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_layout", "newsletter/templates/components/sidebar/layout.hbs");
        // line 235
        echo "
  ";
        // line 236
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_preview", "newsletter/templates/components/sidebar/preview.hbs");
        // line 239
        echo "
  ";
        // line 240
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_styles", "newsletter/templates/components/sidebar/styles.hbs");
        // line 243
        echo "
";
    }

    // line 246
    public function block_content($context, array $blocks = array())
    {
        // line 247
        echo "<!-- Hidden heading for notices to appear under -->
<h1 style=\"display:none\">";
        // line 248
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Editor");
        echo "</h1>
<div id=\"mailpoet_editor\">
  <div id=\"mailpoet_editor_breadcrumb\" class=\"mailpoet_breadcrumbs\"></div>
  <div id=\"mailpoet_editor_top\"></div>
  <div id=\"mailpoet_editor_heading\"></div>
  <div class=\"clearfix\"></div>
  <div id=\"mailpoet_editor_main_wrapper\">
    <div id=\"mailpoet_editor_styles\"></div>
    <div id=\"mailpoet_editor_content_container\">
      <div class=\"mailpoet_newsletter_wrapper\">
        <div id=\"mailpoet_editor_content\"></div>
      </div>
    </div>
    <div id=\"mailpoet_editor_sidebar\"></div>
    <div class=\"clear\"></div>
  </div>
  <div id=\"mailpoet_editor_bottom\"></div>

  <div class=\"mailpoet_layer_overlay\" style=\"display:none;\"></div>

  <div id=\"wp-link-backdrop\" style=\"display: none\"></div>
  <div
    id=\"wp-link-wrap\"
    class=\"wp-core-ui search-panel-visible\"
    style=\"display: none\"
  >
  <form id=\"wp-link\" tabindex=\"-1\">
    ";
        // line 275
        echo wp_nonce_field("internal-linking", "_ajax_linking_nonce", false);
        echo "
    <div id=\"link-modal-title\">
      ";
        // line 277
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Insert/edit link");
        echo "
      <div id=\"wp-link-close\" tabindex=\"0\"></div>
    </div>
    <div id=\"link-selector\">
      <div id=\"link-options\">
        <div>
          <label>
            <span>";
        // line 284
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Type");
        echo "</span>
            <select id=\"url-type-field\" name=\"urltype\">
              <option value=\"http://\">";
        // line 286
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link to a web page");
        echo "</option>
              <option value=\"[viewInBrowserUrl]\">";
        // line 287
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Browser version");
        echo "</option>
              <option value=\"[unsubscribeUrl]\">";
        // line 288
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubcribe page");
        echo "</option>
              <option value=\"[manageSubscriptionUrl]\">";
        // line 289
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage your subscription page");
        echo "</option>
            </select>
          </label>
        </div>
        <div id=\"link-href-field\">
          <label><span>";
        // line 294
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo "</span><input id=\"url-field\" type=\"text\" name=\"href\" /></label>
        </div>
        <div class=\"mailpoet_hidden\">
          <label><span>";
        // line 297
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Title");
        echo "</span><input id=\"link-title-field\" type=\"text\" name=\"linktitle\" /></label>
        </div>
        <div class=\"link-target mailpoet_hidden\">
          <label><span>&nbsp;</span><input type=\"checkbox\" id=\"link-target-checkbox\" /> ";
        // line 300
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open link in a new window/tab");
        echo "</label>
        </div>
      </div>
      <div id=\"search-panel\">
        <div class=\"link-search-wrapper\">
          <label>
            <span class=\"search-label\">";
        // line 306
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Search your content");
        echo "</span>
            <input type=\"search\" id=\"search-field\" class=\"link-search-field\" autocomplete=\"off\" />
            <span class=\"spinner\"></span>
          </label>
        </div>
        <div id=\"search-results\" class=\"query-results\">
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
        <div id=\"most-recent-results\" class=\"query-results\">
          <div class=\"query-notice\"><em>";
        // line 318
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No search term specified. Showing recent items.");
        echo "</em></div>
          <ul></ul>
          <div class=\"river-waiting\">
            <span class=\"spinner\"></span>
          </div>
        </div>
      </div>
    </div>
    <div class=\"submitbox\">
      <div id=\"wp-link-update\">
        <input type=\"submit\" value=\"";
        // line 328
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add Link");
        echo "\" class=\"button button-primary\" id=\"wp-link-submit\" name=\"wp-link-submit\">
      </div>
      <div id=\"wp-link-cancel\">
        <a class=\"submitdelete deletion\" href=\"#\">";
        // line 331
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Cancel");
        echo "</a>
      </div>
    </div>
  </form>
</div>
";
    }

    // line 338
    public function block_translations($context, array $blocks = array())
    {
        // line 339
        echo "  ";
        $context["helpTooltipSendPreview"] = twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues. <br><br>A MailPoet logo will appear in the footer of all emails sent with the free version of MailPoet."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js");
        // line 342
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("failedToFetchAvailablePosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch available posts"), "failedToFetchRenderedPosts" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Failed to fetch rendered posts"), "shortcodesWindowTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select a shortcode"), "unsubscribeLinkMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails must include an \"Unsubscribe\" link. Add a footer widget to your email to continue."), "automatedLatestContentMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add an \"Automated Latest Content\" widget to the email from the right sidebar."), "newsletterPreviewEmailMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter an email address to send the preview newsletter to."), "newsletterPreviewSent" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your test email has been sent!"), "templateNameMissing" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please add a template name"), "helpTooltipSendPreview" =>         // line 351
($context["helpTooltipSendPreview"] ?? null), "helpTooltipDesignerSubjectLine" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("You can add MailPoet shortcodes here. For example, you can add your subscribers' first names by using this shortcode: [subscriber:firstname | default:reader]. Simply copy and paste the shortcode into the field."), "helpTooltipDesignerPreheader" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This optional text will appear in your subscribers' inboxes, beside the subject line. Write something enticing!"), "helpTooltipDesignerFullWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("This option eliminates padding around the image. It only works if the image is larger than the column size."), "helpTooltipDesignerIdealWidth" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use images with widths of at least 1,000 pixels to ensure sharp display on high density screens, like mobile devices."), "templateSaved" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has been saved."), "templateSaveFailed" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template has not been saved, please try again"), "categoriesAndTags" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories & tags"), "noPostsToDisplay" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There is no content to display."), "previewShouldOpenInNewTab" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your preview should open in a new tab. Please ensure your browser is not blocking popups from this page."), "newsletterPreview" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter Preview"), "newsletterBodyIsCorrupted" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Contents of this newsletter are corrupted and may be lost, you may need to add new content to this newsletter, or create a new one. If possible, please contact us and report this issue."), "saving" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Saving..."), "unsavedChangesWillBeLost" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("There are unsaved changes which will be lost if you leave this page."), "selectColor" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Select", "select color"), "cancelColorSelection" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Cancel", "cancel color selection"), "newsletterIsPaused" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email sending has been paused."), "tutorialVideoTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Before you start, this is how you drag and drop in MailPoet"), "selectType" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select type"), "events" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Events"), "conditions" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Conditions", "Configuration options for automatic email events"), "template" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Template"), "designer" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Designer"), "send" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send")));
        // line 375
        echo "
";
    }

    // line 378
    public function block_after_css($context, array $blocks = array())
    {
        // line 379
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("newsletter_editor.css");
        // line 381
        echo "
";
    }

    // line 384
    public function block_after_javascript($context, array $blocks = array())
    {
        // line 385
        echo "  ";
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/tinymce/tinymce.min.js", "lib/tinymce/jquery.tinymce.min.js", "lib/mailpoet_shortcodes/plugin.js", "lib/wplink/plugin.js", "newsletter_editor.js");
        // line 391
        echo "

  ";
        // line 393
        echo do_action("mailpoet_newsletter_editor_after_javascript");
        echo "

  <script type=\"text/javascript\">
    function renderWithFont(node) {
      if (!node.element) return node.text;
      var \$wrapper = jQuery('<span></span>');
      \$wrapper.css({'font-family': Handlebars.helpers.fontWithFallback(node.element.value)});
      \$wrapper.text(node.text);
      return \$wrapper;
    }
    function fontsSelect(selector) {
      jQuery(selector).select2({
        minimumResultsForSearch: Infinity,
        templateSelection: renderWithFont,
        templateResult: renderWithFont
      });
    }

    var templates = {
      styles: Handlebars.compile(
        jQuery('#newsletter_editor_template_styles').html()
      ),
      save: Handlebars.compile(
        jQuery('#newsletter_editor_template_save').html()
      ),
      heading: Handlebars.compile(
        jQuery('#newsletter_editor_template_heading').html()
      ),

      sidebar: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar').html()
      ),
      sidebarContent: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_content').html()
      ),
      sidebarLayout: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_layout').html()
      ),
      sidebarStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_styles').html()
      ),
      sidebarPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_preview').html()
      ),
      newsletterPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_newsletter_preview').html()
      ),

      genericBlockTools: Handlebars.compile(
        jQuery('#newsletter_editor_template_tools_generic').html()
      ),

      containerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block').html()
      ),
      containerEmpty: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block_empty').html()
      ),
      oneColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_one_column_widget').html()
      ),
      twoColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_widget').html()
      ),
      twoColumn12LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_12_widget').html()
      ),
      twoColumn21LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_21_widget').html()
      ),
      threeColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_three_column_widget').html()
      ),
      containerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_settings').html()
      ),
      containerBlockColumnSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_column_settings').html()
      ),

      buttonBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_block').html()
      ),
      buttonInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_widget').html()
      ),
      buttonBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_settings').html()
      ),

      dividerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_block').html()
      ),
      dividerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_widget').html()
      ),
      dividerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_settings').html()
      ),

      footerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_block').html()
      ),
      footerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_widget').html()
      ),
      footerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_settings').html()
      ),

      headerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_block').html()
      ),
      headerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_widget').html()
      ),
      headerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_settings').html()
      ),

      imageBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_block').html()
      ),
      imageInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_widget').html()
      ),
      imageBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_settings').html()
      ),

      socialBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block').html()
      ),
      socialIconBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block_icon').html()
      ),
      socialInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_widget').html()
      ),
      socialBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings').html()
      ),
      socialSettingsIconSelector: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon_selector').html()
      ),
      socialSettingsIcon: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon').html()
      ),
      socialSettingsStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_styles').html()
      ),

      spacerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_block').html()
      ),
      spacerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_widget').html()
      ),
      spacerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_settings').html()
      ),

      automatedLatestContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_block').html()
      ),
      automatedLatestContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_widget').html()
      ),
      automatedLatestContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_settings').html()
      ),

      automatedLatestContentLayoutBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_block').html()
      ),
      automatedLatestContentLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_widget').html()
      ),
      automatedLatestContentLayoutBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_settings').html()
      ),

      postsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_block').html()
      ),
      postsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_widget').html()
      ),
      postsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings').html()
      ),
      postSelectionPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection').html()
      ),
      emptyPostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection_empty').html()
      ),
      singlePostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_single_post').html()
      ),
      displayOptionsPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_display_options').html()
      ),

      textBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_block').html()
      ),
      textInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_widget').html()
      ),
      textBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_settings').html()
      )
    };

    var config = {
      availableStyles: {
        textSizes: [
          '9px', '10px', '11px', '12px', '13px', '14px', '15px', '16px',
          '17px', '18px', '19px', '20px', '21px', '22px', '23px', '24px'
        ],
        headingSizes: [
          '10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px',
          '26px', '30px', '36px', '40px'
        ],
        fonts: {
          standard: [
            'Arial',
            'Comic Sans MS',
            'Courier New',
            'Georgia',
            'Lucida',
            'Tahoma',
            'Times New Roman',
            'Trebuchet MS',
            'Verdana'
          ],
          custom: [
            'Arvo',
            'Lato',
            'Lora',
            'Merriweather',
            'Merriweather Sans',
            'Noticia Text',
            'Open Sans',
            'Playfair Display',
            'Roboto',
            'Source Sans Pro',
            'Oswald',
            'Raleway',
            'Permanent Marker',
            'Pacifico',
          ]
        },
        socialIconSets: {
          'default': {
            'custom': '";
        // line 649
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 651
        echo "',
            'facebook': '";
        // line 652
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 654
        echo "',
            'twitter': '";
        // line 655
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 657
        echo "',
            'google-plus': '";
        // line 658
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Google-Plus.png");
        // line 660
        echo "',
            'youtube': '";
        // line 661
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Youtube.png");
        // line 663
        echo "',
            'website': '";
        // line 664
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Website.png");
        // line 666
        echo "',
            'email': '";
        // line 667
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Email.png");
        // line 669
        echo "',
            'instagram': '";
        // line 670
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Instagram.png");
        // line 672
        echo "',
            'pinterest': '";
        // line 673
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Pinterest.png");
        // line 675
        echo "',
            'linkedin': '";
        // line 676
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/LinkedIn.png");
        // line 678
        echo "'
          },
          'grey': {
            'custom': '";
        // line 681
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 683
        echo "',
            'facebook': '";
        // line 684
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Facebook.png");
        // line 686
        echo "',
            'twitter': '";
        // line 687
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Twitter.png");
        // line 689
        echo "',
            'google-plus': '";
        // line 690
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Google-Plus.png");
        // line 692
        echo "',
            'youtube': '";
        // line 693
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Youtube.png");
        // line 695
        echo "',
            'website': '";
        // line 696
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Website.png");
        // line 698
        echo "',
            'email': '";
        // line 699
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Email.png");
        // line 701
        echo "',
            'instagram': '";
        // line 702
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Instagram.png");
        // line 704
        echo "',
            'pinterest': '";
        // line 705
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/Pinterest.png");
        // line 707
        echo "',
            'linkedin': '";
        // line 708
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/02-grey/LinkedIn.png");
        // line 710
        echo "',
          },
          'circles': {
            'custom': '";
        // line 713
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 715
        echo "',
            'facebook': '";
        // line 716
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Facebook.png");
        // line 718
        echo "',
            'twitter': '";
        // line 719
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Twitter.png");
        // line 721
        echo "',
            'google-plus': '";
        // line 722
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Google-Plus.png");
        // line 724
        echo "',
            'youtube': '";
        // line 725
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Youtube.png");
        // line 727
        echo "',
            'website': '";
        // line 728
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Website.png");
        // line 730
        echo "',
            'email': '";
        // line 731
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Email.png");
        // line 733
        echo "',
            'instagram': '";
        // line 734
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Instagram.png");
        // line 736
        echo "',
            'pinterest': '";
        // line 737
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/Pinterest.png");
        // line 739
        echo "',
            'linkedin': '";
        // line 740
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/03-circles/LinkedIn.png");
        // line 742
        echo "',
          },
          'full-flat-roundrect': {
            'custom': '";
        // line 745
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 747
        echo "',
            'facebook': '";
        // line 748
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Facebook.png");
        // line 750
        echo "',
            'twitter': '";
        // line 751
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Twitter.png");
        // line 753
        echo "',
            'google-plus': '";
        // line 754
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Google-Plus.png");
        // line 756
        echo "',
            'youtube': '";
        // line 757
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Youtube.png");
        // line 759
        echo "',
            'website': '";
        // line 760
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Website.png");
        // line 762
        echo "',
            'email': '";
        // line 763
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Email.png");
        // line 765
        echo "',
            'instagram': '";
        // line 766
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Instagram.png");
        // line 768
        echo "',
            'pinterest': '";
        // line 769
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Pinterest.png");
        // line 771
        echo "',
            'linkedin': '";
        // line 772
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/LinkedIn.png");
        // line 774
        echo "',
          },
          'full-gradient-square': {
            'custom': '";
        // line 777
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 779
        echo "',
            'facebook': '";
        // line 780
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Facebook.png");
        // line 782
        echo "',
            'twitter': '";
        // line 783
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Twitter.png");
        // line 785
        echo "',
            'google-plus': '";
        // line 786
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Google-Plus.png");
        // line 788
        echo "',
            'youtube': '";
        // line 789
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Youtube.png");
        // line 791
        echo "',
            'website': '";
        // line 792
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Website.png");
        // line 794
        echo "',
            'email': '";
        // line 795
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Email.png");
        // line 797
        echo "',
            'instagram': '";
        // line 798
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Instagram.png");
        // line 800
        echo "',
            'pinterest': '";
        // line 801
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Pinterest.png");
        // line 803
        echo "',
            'linkedin': '";
        // line 804
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/LinkedIn.png");
        // line 806
        echo "',
          },
          'full-symbol-color': {
            'custom': '";
        // line 809
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 811
        echo "',
            'facebook': '";
        // line 812
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Facebook.png");
        // line 814
        echo "',
            'twitter': '";
        // line 815
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Twitter.png");
        // line 817
        echo "',
            'google-plus': '";
        // line 818
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Google-Plus.png");
        // line 820
        echo "',
            'youtube': '";
        // line 821
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Youtube.png");
        // line 823
        echo "',
            'website': '";
        // line 824
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Website.png");
        // line 826
        echo "',
            'email': '";
        // line 827
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Email.png");
        // line 829
        echo "',
            'instagram': '";
        // line 830
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Instagram.png");
        // line 832
        echo "',
            'pinterest': '";
        // line 833
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Pinterest.png");
        // line 835
        echo "',
            'linkedin': '";
        // line 836
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/LinkedIn.png");
        // line 838
        echo "',
          },
          'full-symbol-black': {
            'custom': '";
        // line 841
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 843
        echo "',
            'facebook': '";
        // line 844
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Facebook.png");
        // line 846
        echo "',
            'twitter': '";
        // line 847
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Twitter.png");
        // line 849
        echo "',
            'google-plus': '";
        // line 850
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Google-Plus.png");
        // line 852
        echo "',
            'youtube': '";
        // line 853
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Youtube.png");
        // line 855
        echo "',
            'website': '";
        // line 856
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Website.png");
        // line 858
        echo "',
            'email': '";
        // line 859
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Email.png");
        // line 861
        echo "',
            'instagram': '";
        // line 862
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Instagram.png");
        // line 864
        echo "',
            'pinterest': '";
        // line 865
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Pinterest.png");
        // line 867
        echo "',
            'linkedin': '";
        // line 868
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/LinkedIn.png");
        // line 870
        echo "',
          },
          'full-symbol-grey': {
            'custom': '";
        // line 873
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 875
        echo "',
            'facebook': '";
        // line 876
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Facebook.png");
        // line 878
        echo "',
            'twitter': '";
        // line 879
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Twitter.png");
        // line 881
        echo "',
            'google-plus': '";
        // line 882
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Google-Plus.png");
        // line 884
        echo "',
            'youtube': '";
        // line 885
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Youtube.png");
        // line 887
        echo "',
            'website': '";
        // line 888
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Website.png");
        // line 890
        echo "',
            'email': '";
        // line 891
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Email.png");
        // line 893
        echo "',
            'instagram': '";
        // line 894
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Instagram.png");
        // line 896
        echo "',
            'pinterest': '";
        // line 897
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Pinterest.png");
        // line 899
        echo "',
            'linkedin': '";
        // line 900
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/LinkedIn.png");
        // line 902
        echo "',
          },
          'line-roundrect': {
            'custom': '";
        // line 905
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 907
        echo "',
            'facebook': '";
        // line 908
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Facebook.png");
        // line 910
        echo "',
            'twitter': '";
        // line 911
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Twitter.png");
        // line 913
        echo "',
            'google-plus': '";
        // line 914
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Google-Plus.png");
        // line 916
        echo "',
            'youtube': '";
        // line 917
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Youtube.png");
        // line 919
        echo "',
            'website': '";
        // line 920
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Website.png");
        // line 922
        echo "',
            'email': '";
        // line 923
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Email.png");
        // line 925
        echo "',
            'instagram': '";
        // line 926
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Instagram.png");
        // line 928
        echo "',
            'pinterest': '";
        // line 929
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Pinterest.png");
        // line 931
        echo "',
            'linkedin': '";
        // line 932
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/LinkedIn.png");
        // line 934
        echo "',
          },
          'line-square': {
            'custom': '";
        // line 937
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 939
        echo "',
            'facebook': '";
        // line 940
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Facebook.png");
        // line 942
        echo "',
            'twitter': '";
        // line 943
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Twitter.png");
        // line 945
        echo "',
            'google-plus': '";
        // line 946
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Google-Plus.png");
        // line 948
        echo "',
            'youtube': '";
        // line 949
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Youtube.png");
        // line 951
        echo "',
            'website': '";
        // line 952
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Website.png");
        // line 954
        echo "',
            'email': '";
        // line 955
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Email.png");
        // line 957
        echo "',
            'instagram': '";
        // line 958
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Instagram.png");
        // line 960
        echo "',
            'pinterest': '";
        // line 961
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/Pinterest.png");
        // line 963
        echo "',
            'linkedin': '";
        // line 964
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/10-line-square/LinkedIn.png");
        // line 966
        echo "',
          },
        },
        dividers: [
          'hidden',
          'dotted',
          'dashed',
          'solid',
          'double',
          'groove',
          'ridge'
        ]
      },
      socialIcons: {
        'facebook': {
          title: 'Facebook',
          linkFieldName: '";
        // line 982
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.facebook.com',
        },
        'twitter': {
          title: 'Twitter',
          linkFieldName: '";
        // line 987
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.twitter.com',
        },
        'google-plus': {
          title: 'Google Plus',
          linkFieldName: '";
        // line 992
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://plus.google.com',
        },
        'youtube': {
          title: 'Youtube',
          linkFieldName: '";
        // line 997
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.youtube.com',
        },
        'website': {
          title: '";
        // line 1001
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Website"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1002
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'email': {
          title: '";
        // line 1006
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1007
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'instagram': {
          title: 'Instagram',
          linkFieldName: '";
        // line 1012
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://instagram.com',
        },
        'pinterest': {
          title: 'Pinterest',
          linkFieldName: '";
        // line 1017
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.pinterest.com',
        },
        'linkedin': {
          title: 'LinkedIn',
          linkFieldName: '";
        // line 1022
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.linkedin.com',
        },
        'custom': {
          title: '";
        // line 1026
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1027
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
      },
      blockDefaults: {
        automatedLatestContent: {
          amount: '5',
          withLayout: false,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1044
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1046
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1048
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1050
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContent.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContent.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        automatedLatestContentLayout: {
          amount: '5',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1099
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1101
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1103
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1105
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContentLayout.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContentLayout.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        button: {
          text: '";
        // line 1143
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Button"), "js"), "html", null, true);
        echo "',
          url: '',
          styles: {
            block: {
              backgroundColor: '#2ea1cd',
              borderColor: '#0074a2',
              borderWidth: '1px',
              borderRadius: '5px',
              borderStyle: 'solid',
              width: '180px',
              lineHeight: '40px',
              fontColor: '#ffffff',
              fontFamily: 'Verdana',
              fontSize: '18px',
              fontWeight: 'normal',
              textAlign: 'center',
            },
          },
        },
        container: {
          image: {
            src: null,
            display: 'scale',
          },
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
          },
        },
        divider: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              padding: '13px',
              borderStyle: 'solid',
              borderWidth: '3px',
              borderColor: '#aaaaaa',
            },
          },
        },
        footer: {
          text: '<p><a href=\"[link:subscription_unsubscribe_url]\">";
        // line 1185
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe");
        echo "</a> | <a href=\"[link:subscription_manage_url]\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage subscription");
        echo "</a><br />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Add your postal address here!");
        echo "</p>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'none',
            },
          },
        },
        image: {
          link: '',
          src: '',
          alt: '";
        // line 1205
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("An image of..."), "js"), "html", null, true);
        echo "',
          fullWidth: false,
          width: '281px',
          height: '190px',
          styles: {
            block: {
              textAlign: 'center',
            },
          },
        },
        posts: {
          amount: '10',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          postStatus: 'publish', // 'draft'|'pending'|'private'|'publish'|'future'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1228
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1230
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1232
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1234
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        social: {
          iconSet: 'default',
          styles: {
            block: {
              textAlign: 'center'
            }
          },
          icons: [
          {
            type: 'socialIcon',
            iconType: 'facebook',
            link: 'http://www.facebook.com',
            image: '";
        // line 1283
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 1285
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1288
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Facebook"), "js"), "html", null, true);
        echo "',
          },
          {
            type: 'socialIcon',
            iconType: 'twitter',
            link: 'http://www.twitter.com',
            image: '";
        // line 1294
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 1296
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1299
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Twitter"), "js"), "html", null, true);
        echo "',
          },
          ],
        },
        spacer: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              height: '40px',
            },
          },
        },
        text: {
          text: '";
        // line 1312
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Edit this to insert text."), "js"), "html", null, true);
        echo "',
        },
        header: {
          text: '";
        // line 1315
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Display problems?"), "js"), "html", null, true);
        echo "&nbsp;' +
            '<a href=\"[link:newsletter_view_in_browser_url]\">";
        // line 1316
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open this email in your web browser.");
        echo "</a>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'underline',
            },
          },
        },
      },
      shortcodes: ";
        // line 1334
        echo json_encode(($context["shortcodes"] ?? null));
        echo ",
      sidepanelWidth: '331px',
      newsletterPreview: {
        width: '1024px',
        height: '768px',
        previewTypeLocalStorageKey: 'newsletter_editor.preview_type'
      },
      validation: {
        validateUnsubscribeLinkPresent: ";
        // line 1342
        echo ((($context["mss_active"] ?? null)) ? ("true") : ("false"));
        echo ",
      },
      urls: {
        send: '";
        // line 1345
        echo admin_url(("admin.php?page=mailpoet-newsletters#/send/" . intval($this->env->getExtension('MailPoet\Twig\Functions')->params("id"))));
        echo "',
        imageMissing: '";
        // line 1346
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("newsletter_editor/image-missing.svg");
        // line 1348
        echo "',
      },
      dragDemoUrl: '";
        // line 1350
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("newsletter-editor/editor-drag-demo.20181121-1440.mp4");
        echo "',
      currentUserId: '";
        // line 1351
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_wp_user"] ?? null), "wp_user_id", array()), "html", null, true);
        echo "',
      dragDemoUrlSettings: '";
        // line 1352
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), ("user_seen_editor_tutorial" . $this->getAttribute(($context["current_wp_user"] ?? null), "wp_user_id", array())), array(), "array"), "html", null, true);
        echo "',
      installedAt: '";
        // line 1353
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "installed_at", array(), "array"), "html", null, true);
        echo "',
    };
    wp.hooks.doAction('mailpoet_newsletters_editor_initialize', config);

  </script>
";
    }

    public function getTemplateName()
    {
        return "newsletter/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1805 => 1353,  1801 => 1352,  1797 => 1351,  1793 => 1350,  1789 => 1348,  1787 => 1346,  1783 => 1345,  1777 => 1342,  1766 => 1334,  1745 => 1316,  1741 => 1315,  1735 => 1312,  1719 => 1299,  1714 => 1296,  1712 => 1294,  1703 => 1288,  1698 => 1285,  1696 => 1283,  1644 => 1234,  1639 => 1232,  1634 => 1230,  1629 => 1228,  1603 => 1205,  1576 => 1185,  1531 => 1143,  1490 => 1105,  1485 => 1103,  1480 => 1101,  1475 => 1099,  1423 => 1050,  1418 => 1048,  1413 => 1046,  1408 => 1044,  1388 => 1027,  1384 => 1026,  1377 => 1022,  1369 => 1017,  1361 => 1012,  1353 => 1007,  1349 => 1006,  1342 => 1002,  1338 => 1001,  1331 => 997,  1323 => 992,  1315 => 987,  1307 => 982,  1289 => 966,  1287 => 964,  1284 => 963,  1282 => 961,  1279 => 960,  1277 => 958,  1274 => 957,  1272 => 955,  1269 => 954,  1267 => 952,  1264 => 951,  1262 => 949,  1259 => 948,  1257 => 946,  1254 => 945,  1252 => 943,  1249 => 942,  1247 => 940,  1244 => 939,  1242 => 937,  1237 => 934,  1235 => 932,  1232 => 931,  1230 => 929,  1227 => 928,  1225 => 926,  1222 => 925,  1220 => 923,  1217 => 922,  1215 => 920,  1212 => 919,  1210 => 917,  1207 => 916,  1205 => 914,  1202 => 913,  1200 => 911,  1197 => 910,  1195 => 908,  1192 => 907,  1190 => 905,  1185 => 902,  1183 => 900,  1180 => 899,  1178 => 897,  1175 => 896,  1173 => 894,  1170 => 893,  1168 => 891,  1165 => 890,  1163 => 888,  1160 => 887,  1158 => 885,  1155 => 884,  1153 => 882,  1150 => 881,  1148 => 879,  1145 => 878,  1143 => 876,  1140 => 875,  1138 => 873,  1133 => 870,  1131 => 868,  1128 => 867,  1126 => 865,  1123 => 864,  1121 => 862,  1118 => 861,  1116 => 859,  1113 => 858,  1111 => 856,  1108 => 855,  1106 => 853,  1103 => 852,  1101 => 850,  1098 => 849,  1096 => 847,  1093 => 846,  1091 => 844,  1088 => 843,  1086 => 841,  1081 => 838,  1079 => 836,  1076 => 835,  1074 => 833,  1071 => 832,  1069 => 830,  1066 => 829,  1064 => 827,  1061 => 826,  1059 => 824,  1056 => 823,  1054 => 821,  1051 => 820,  1049 => 818,  1046 => 817,  1044 => 815,  1041 => 814,  1039 => 812,  1036 => 811,  1034 => 809,  1029 => 806,  1027 => 804,  1024 => 803,  1022 => 801,  1019 => 800,  1017 => 798,  1014 => 797,  1012 => 795,  1009 => 794,  1007 => 792,  1004 => 791,  1002 => 789,  999 => 788,  997 => 786,  994 => 785,  992 => 783,  989 => 782,  987 => 780,  984 => 779,  982 => 777,  977 => 774,  975 => 772,  972 => 771,  970 => 769,  967 => 768,  965 => 766,  962 => 765,  960 => 763,  957 => 762,  955 => 760,  952 => 759,  950 => 757,  947 => 756,  945 => 754,  942 => 753,  940 => 751,  937 => 750,  935 => 748,  932 => 747,  930 => 745,  925 => 742,  923 => 740,  920 => 739,  918 => 737,  915 => 736,  913 => 734,  910 => 733,  908 => 731,  905 => 730,  903 => 728,  900 => 727,  898 => 725,  895 => 724,  893 => 722,  890 => 721,  888 => 719,  885 => 718,  883 => 716,  880 => 715,  878 => 713,  873 => 710,  871 => 708,  868 => 707,  866 => 705,  863 => 704,  861 => 702,  858 => 701,  856 => 699,  853 => 698,  851 => 696,  848 => 695,  846 => 693,  843 => 692,  841 => 690,  838 => 689,  836 => 687,  833 => 686,  831 => 684,  828 => 683,  826 => 681,  821 => 678,  819 => 676,  816 => 675,  814 => 673,  811 => 672,  809 => 670,  806 => 669,  804 => 667,  801 => 666,  799 => 664,  796 => 663,  794 => 661,  791 => 660,  789 => 658,  786 => 657,  784 => 655,  781 => 654,  779 => 652,  776 => 651,  774 => 649,  515 => 393,  511 => 391,  508 => 385,  505 => 384,  500 => 381,  497 => 379,  494 => 378,  489 => 375,  487 => 351,  485 => 342,  482 => 339,  479 => 338,  469 => 331,  463 => 328,  450 => 318,  435 => 306,  426 => 300,  420 => 297,  414 => 294,  406 => 289,  402 => 288,  398 => 287,  394 => 286,  389 => 284,  379 => 277,  374 => 275,  344 => 248,  341 => 247,  338 => 246,  333 => 243,  331 => 240,  328 => 239,  326 => 236,  323 => 235,  321 => 232,  318 => 231,  316 => 228,  313 => 227,  311 => 224,  308 => 223,  306 => 220,  303 => 219,  301 => 216,  298 => 215,  296 => 212,  293 => 211,  291 => 208,  288 => 207,  286 => 204,  283 => 203,  281 => 200,  278 => 199,  276 => 196,  273 => 195,  271 => 192,  268 => 191,  266 => 188,  263 => 187,  261 => 184,  258 => 183,  256 => 180,  253 => 179,  251 => 176,  248 => 175,  246 => 172,  243 => 171,  241 => 168,  238 => 167,  236 => 164,  233 => 163,  231 => 160,  228 => 159,  226 => 156,  223 => 155,  221 => 152,  218 => 151,  216 => 148,  213 => 147,  211 => 144,  208 => 143,  206 => 140,  203 => 139,  201 => 136,  198 => 135,  196 => 132,  193 => 131,  191 => 128,  188 => 127,  186 => 124,  183 => 123,  181 => 120,  178 => 119,  176 => 116,  173 => 115,  171 => 112,  168 => 111,  166 => 108,  163 => 107,  161 => 104,  158 => 103,  156 => 100,  153 => 99,  151 => 96,  148 => 95,  146 => 92,  143 => 91,  141 => 88,  138 => 87,  136 => 84,  133 => 83,  131 => 80,  128 => 79,  126 => 76,  123 => 75,  121 => 72,  118 => 71,  116 => 68,  113 => 67,  111 => 64,  108 => 63,  106 => 60,  103 => 59,  101 => 56,  98 => 55,  96 => 52,  93 => 51,  91 => 48,  88 => 47,  86 => 44,  83 => 43,  81 => 40,  78 => 39,  76 => 36,  73 => 35,  71 => 32,  68 => 31,  66 => 28,  63 => 27,  61 => 24,  58 => 23,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  43 => 11,  41 => 8,  38 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/editor.html", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\editor.html");
    }
}
