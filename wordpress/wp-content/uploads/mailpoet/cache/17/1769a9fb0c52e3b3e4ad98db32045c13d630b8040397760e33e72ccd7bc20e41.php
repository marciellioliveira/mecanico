<?php

/* settings/basics.html */
class __TwigTemplate_274c7712cf4029476e9f792f92f35bf1457c9842305490e431cec035dd63ff9f extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <tr>
      <th scope=\"row\">
        <label for=\"settings[from_name]\">
          ";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Default sender");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will be selected by default for each new email.");
        echo "
        </p>
      </th>
      <td>
        <div id=\"settings_sender_container\"></div>
      </td>
    </tr>
    <!-- email addresses receiving notifications -->
    <tr style=\"display:none\">
      <th scope=\"row\">
        <label for=\"settings[notification_email]\">
          ";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email notifications");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 23
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will receive notifications (separate each address with a comma).");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[notification_email]\"
            name=\"notification[address]\"
            value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"notification@mydomain.com\"
            class=\"regular-text\" />
        </p>
        <p>
          <label for=\"settings[notification_on_subscribe]\">
            <input type=\"checkbox\" id=\"settings[notification_on_subscribe]\"
            name=\"notification[on_subscribe]\"
            value=\"1\"
            ";
        // line 40
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "on_subscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 41
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone subscribes");
        echo "
          </label>
        </p>
        <p>
          <label for=\"settings[notification_on_unsubscribe]\">
            <input type=\"checkbox\"
            id=\"settings[notification_on_unsubscribe]\"
            name=\"notification[on_unsubscribe]\"
            value=\"1\"
            ";
        // line 50
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "notification", array()), "on_unsubscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 51
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone unsubscribes");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- ability to subscribe in comments -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_comment]\">
          ";
        // line 60
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in comments");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors that comment on a post can subscribe to your list via a checkbox.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            data-toggle=\"mailpoet_subscribe_on_comment\"
            type=\"checkbox\"
            value=\"1\"
            id=\"settings[subscribe_on_comment]\"
            name=\"subscribe[on_comment][enabled]\"
            ";
        // line 74
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        // line 75
        echo "          />
        </p>
        <div id=\"mailpoet_subscribe_on_comment\">
          <p>
            <input
              type=\"text\"
              id=\"settings[subscribe_on_comment_label]\"
              name=\"subscribe[on_comment][label]\"
              class=\"regular-text\"
              ";
        // line 84
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "label", array())) {
            // line 85
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "label", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 87
            echo "                value=\"";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
            echo "\"
              ";
        }
        // line 89
        echo "            />
          </p>
          <p>
            <label>";
        // line 92
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
        echo "</label>
          </p>
          <p>
            <select
              id=\"mailpoet_subscribe_on_comment_segments\"
              name=\"subscribe[on_comment][segments][]\"
              data-placeholder=\"";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
        echo "\"
              multiple
            >
              ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 102
            echo "                <option
                  value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                  ";
            // line 104
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_comment", array()), "segments", array()))) {
                // line 105
                echo "                    selected=\"selected\"
                  ";
            }
            // line 107
            echo "                >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "            </select>
          </p>
        </div>
      </td>
    </tr>
    <!-- ability to subscribe when registering -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_register]\">
          ";
        // line 118
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in registration form");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 121
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Allow users who register as a WordPress user on your website to subscribe to a MailPoet list (in addition to the \"WordPress Users\" list).");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 125
        if (($this->getAttribute(($context["flags"] ?? null), "registration_enabled", array()) == true)) {
            // line 126
            echo "          <p>
            <input
              data-toggle=\"mailpoet_subscribe_in_form\"
              type=\"checkbox\"
              value=\"1\"
              id=\"settings[subscribe_on_register]\"
              name=\"subscribe[on_register][enabled]\"
              ";
            // line 133
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "enabled", array())) {
                // line 134
                echo "                checked=\"checked\"
              ";
            }
            // line 136
            echo "            />
          </p>

          <div id=\"mailpoet_subscribe_in_form\">
            <p>
              <input
                type=\"text\"
                id=\"settings[subscribe_on_register_label]\"
                name=\"subscribe[on_register][label]\"
                class=\"regular-text\"
                ";
            // line 146
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "label", array())) {
                // line 147
                echo "                  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "label", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 149
                echo "                  value=\"";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
                echo "\"
                ";
            }
            // line 151
            echo "              />
            </p>
            <p>
              <label>";
            // line 154
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
            echo "</label>
            </p>
            <p>
              <select
                id=\"mailpoet_subscribe_on_register_segments\"
                name=\"subscribe[on_register][segments][]\"
                data-placeholder=\"";
            // line 160
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
            echo "\"
                multiple
              >
                ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 164
                echo "                  <option
                    value=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
                echo "\"
                    ";
                // line 166
                if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscribe", array()), "on_register", array()), "segments", array()))) {
                    // line 167
                    echo "                      selected=\"selected\"
                    ";
                }
                // line 169
                echo "                  >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
                echo ")</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "              </select>
            </p>
          </div>
        ";
        } else {
            // line 175
            echo "          <p>
            <em>";
            // line 176
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Registration is disabled on this site.");
            echo "</em>
          </p>
        ";
        }
        // line 179
        echo "      </td>
    </tr>
    <!-- edit subscription-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_manage_page\">
          ";
        // line 185
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage Subscription page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 188
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Manage your subscription\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 190
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Subscription page, simply paste this shortcode on to a WordPress page: [mailpoet_manage_subscription]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_manage_page\"
            name=\"subscription[pages][manage]\"
          >
            ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 201
            echo "              <option
                value=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 203
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "manage", array());
            echo "\"
                ";
            // line 204
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "pages", array()), "manage", array()))) {
                // line 205
                echo "                  selected=\"selected\"
                ";
            }
            // line 207
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 213
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
            data-automation-id=\"preview_manage_subscription_page_link\"
          >";
        // line 215
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
        <p>
          <label>";
        // line 218
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers can choose from these lists:");
        echo "</label>
        </p>
        <p>
          <select
            id=\"mailpoet_subscription_edit_segments\"
            name=\"subscription[segments][]\"
            data-placeholder=\"";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 228
            echo "              <option
                value=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                ";
            // line 230
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "segments", array()))) {
                // line 231
                echo "                  selected=\"selected\"
                ";
            }
            // line 233
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- unsubscribe-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 243
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 246
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Unsubscribe\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 248
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Unsubscribe page, simply paste this shortcode on to a WordPress page: [mailpoet_manage text=\"Manage your subscription\"]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_unsubscribe_page\"
            name=\"subscription[pages][unsubscribe]\"
          >
            ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 259
            echo "              <option
                value=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 261
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "unsubscribe", array());
            echo "\"
                ";
            // line 262
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscription", array()), "pages", array()), "unsubscribe", array()))) {
                // line 263
                echo "                  selected=\"selected\"
                ";
            }
            // line 265
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 271
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
            data-automation-id=\"unsubscribe_page_preview_link\"
          >";
        // line 273
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </td>
    </tr>

    <!-- Stats notifications -->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 282
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Stats notifications", "name of a setting to automatically send statistics (newsletter open rate, click rate, etc) by email");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 285
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter the email address that should receive your newsletter’s stats 24 hours after it has been sent.");
        echo "
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"stats_notifications[enabled]\"
              value=\"1\"
              ";
        // line 293
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "stats_notifications", array()), "enabled", array())) {
            // line 294
            echo "                checked
              ";
        }
        // line 296
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"stats_notifications[enabled]\"
              value=\"\"
              ";
        // line 304
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "stats_notifications", array()), "enabled", array())) {
            // line 305
            echo "                checked
              ";
        }
        // line 307
        echo "            >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
          <br>
          <input type=\"email\"
            id=\"stats_notifications[address]\"
            name=\"stats_notifications[address]\"
            value=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "stats_notifications", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"me@mydomain.com\" >
          <br>
          <div id=\"settings_stats_notifications_error\" class=\"mailpoet_error_item mailpoet_error\">
            ";
        // line 317
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the email address.");
        echo "
          </div>

    <!-- New subscriber emails notifications -->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 324
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("New subscriber notifications");
        echo " <span id=\"new_subscriber_announcement\" class=\"new_subscriber_announcement\" />
        </label>
        <p class=\"description\">
          ";
        // line 327
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enter the email address that should receive notifications when someone subscribes.");
        echo "
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"subscriber_email_notification[enabled]\"
              value=\"1\"
            ";
        // line 335
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "enabled", array())) {
            // line 336
            echo "            checked
            ";
        }
        // line 338
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"subscriber_email_notification[enabled]\"
              value=\"\"
            ";
        // line 346
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "enabled", array())) {
            // line 347
            echo "            checked
            ";
        }
        // line 349
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
          <br>
          <input type=\"email\"
                 id=\"subscriber_email_notification[address]\"
                 name=\"subscriber_email_notification[address]\"
                 value=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "subscriber_email_notification", array()), "address", array()), "html", null, true);
        echo "\"
                 placeholder=\"me@mydomain.com\" />
          <br>
        <div id=\"settings_subscriber_email_notification_error\" class=\"mailpoet_error_item mailpoet_error\">
          ";
        // line 359
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the email address.");
        echo "
        </div>

    <!-- shortcode: archive page  -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 366
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Archive page shortcode");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 369
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a page to display a list of past newsletters.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_archives\"
            value=\"[mailpoet_archive]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_archives_list\"
            data-shortcode=\"mailpoet_archive\"
            data-output=\"mailpoet_shortcode_archives\"
            data-placeholder=\"";
        // line 388
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 392
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- shortcode: total number of subscribers -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 402
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shortcode to display total number of subscribers");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 405
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a post or page to display the total number of confirmed subscribers.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_subscribers\"
            value=\"[mailpoet_subscribers_count]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_subscribers_count\"
            data-shortcode=\"mailpoet_subscribers_count\"
            data-output=\"mailpoet_shortcode_subscribers\"
            data-placeholder=\"";
        // line 424
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["segments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 428
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- gdpr compliant  -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 438
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Be GDPR compliant");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 441
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to comply with European law in regards to data privacy if you have European subscribers. Rest assured, it’s easy!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            href=\"https://beta.docs.mailpoet.com/article/246-guide-to-conform-to-gdpr\"
            title=\"";
        // line 448
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read our guide");
        echo "\"
            target=\"_blank\"
          >";
        // line 450
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Read our guide");
        echo "</a>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    // on dom loaded
    \$(function() {
      // select2 instances
      \$('#mailpoet_subscribe_on_comment_segments').select2();
      \$('#mailpoet_subscribe_on_register_segments').select2();
      \$('#mailpoet_subscription_edit_segments').select2();
      \$('#mailpoet_shortcode_archives_list').select2();
      \$('#mailpoet_shortcode_subscribers_count').select2();
      // fix lengthy placeholder from being cut off by select 2
      \$('.select2-search__field').each(function() {
        \$(this).css('width', (\$(this).attr('placeholder').length * 0.75) + 'em');
      });

      // shortcodes
      \$('#mailpoet_shortcode_archives_list, #mailpoet_shortcode_subscribers_count')
      .on('change', function() {
        var shortcode = \$(this).data('shortcode'),
          values = \$(this).val() || [];

        if (values.length > 0) {
          shortcode += ' segments=\"';
          shortcode += values.join(',');
          shortcode += '\"';
        }

        \$('#' + \$(this).data('output'))
          .val('[' + shortcode + ']');
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/basics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 450,  821 => 448,  811 => 441,  805 => 438,  795 => 430,  782 => 428,  778 => 427,  772 => 424,  750 => 405,  744 => 402,  734 => 394,  721 => 392,  717 => 391,  711 => 388,  689 => 369,  683 => 366,  673 => 359,  666 => 355,  656 => 349,  652 => 347,  650 => 346,  638 => 338,  634 => 336,  632 => 335,  621 => 327,  615 => 324,  605 => 317,  598 => 313,  588 => 307,  584 => 305,  582 => 304,  570 => 296,  566 => 294,  564 => 293,  553 => 285,  547 => 282,  535 => 273,  530 => 271,  524 => 267,  515 => 265,  511 => 263,  509 => 262,  505 => 261,  501 => 260,  498 => 259,  494 => 258,  481 => 248,  476 => 246,  470 => 243,  460 => 235,  449 => 233,  445 => 231,  443 => 230,  439 => 229,  436 => 228,  432 => 227,  426 => 224,  417 => 218,  411 => 215,  406 => 213,  400 => 209,  391 => 207,  387 => 205,  385 => 204,  381 => 203,  377 => 202,  374 => 201,  370 => 200,  357 => 190,  352 => 188,  346 => 185,  338 => 179,  332 => 176,  329 => 175,  323 => 171,  312 => 169,  308 => 167,  306 => 166,  302 => 165,  299 => 164,  295 => 163,  289 => 160,  280 => 154,  275 => 151,  269 => 149,  263 => 147,  261 => 146,  249 => 136,  245 => 134,  243 => 133,  234 => 126,  232 => 125,  225 => 121,  219 => 118,  208 => 109,  197 => 107,  193 => 105,  191 => 104,  187 => 103,  184 => 102,  180 => 101,  174 => 98,  165 => 92,  160 => 89,  154 => 87,  148 => 85,  146 => 84,  135 => 75,  131 => 74,  117 => 63,  111 => 60,  99 => 51,  93 => 50,  81 => 41,  75 => 40,  63 => 31,  52 => 23,  46 => 20,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/basics.html", "C:\\xampp\\htdocs\\www\\mecanico\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\basics.html");
    }
}
