<?php

namespace MailPoet\Subscribers;

use MailPoet\Config\Renderer;
use MailPoet\Models\Segment;
use MailPoet\Models\Subscriber;
use MailPoet\WP\Functions;
use MailPoet\Settings\SettingsController;

class NewSubscriberNotificationMailer {

  const SENDER_EMAIL_PREFIX = 'wordpress@';
  const SETTINGS_KEY = 'subscriber_email_notification';

  /** @var Renderer */
  private $renderer;

  /** @var \MailPoet\Mailer\Mailer */
  private $mailer;

  /** @var Functions */
  private $wordpress_functions;

  /** @var SettingsController */
  private $settings;

  /**
   * @param \MailPoet\Mailer\Mailer|null $mailer
   * @param Renderer|null $renderer
   * @param Functions|null $wordpress_functions
   */
  function __construct($mailer = null, $renderer = null, $wordpress_functions = null) {
    if($renderer) {
      $this->renderer = $renderer;
    } else {
      $caching = !WP_DEBUG;
      $debugging = WP_DEBUG;
      $this->renderer = new Renderer($caching, $debugging);
    }
    if($wordpress_functions) {
      $this->wordpress_functions = $wordpress_functions;
    } else {
      $this->wordpress_functions = new Functions();
    }
    if($mailer) {
      $this->mailer = $mailer;
    } else {
      $this->mailer = new \MailPoet\Mailer\Mailer(false, $this->constructSenderEmail());
    }
    $this->settings = new SettingsController();
  }

  /**
   * @param Subscriber $subscriber
   * @param Segment[] $segments
   *
   * @throws \Exception
   */
  function send(Subscriber $subscriber, array $segments) {
    $settings = $this->settings->get(NewSubscriberNotificationMailer::SETTINGS_KEY);
    if($this->isDisabled($settings)) {
      return;
    }
    try {
      $this->mailer->getSenderNameAndAddress($this->constructSenderEmail());
      $this->mailer->send($this->constructNewsletter($subscriber, $segments), $settings['address']);
    } catch(\Exception $e) {
      if(WP_DEBUG) {
        throw $e;
      }
    }
  }

  public static function isDisabled($settings) {
    if(!is_array($settings)) {
      return true;
    }
    if(!isset($settings['enabled'])) {
      return true;
    }
    if(!isset($settings['address'])) {
      return true;
    }
    if(empty(trim($settings['address']))) {
      return true;
    }
    return !(bool)$settings['enabled'];
  }

  private function constructSenderEmail() {
    $url_parts = parse_url($this->wordpress_functions->homeUrl());
    $site_name = strtolower($url_parts['host']);
    if(substr($site_name, 0, 4) === 'www.') {
      $site_name = substr($site_name, 4);
    }
    return [
      'address' => self::SENDER_EMAIL_PREFIX . $site_name,
      'name' => self::SENDER_EMAIL_PREFIX . $site_name,
    ];
  }

  /**
   * @param Subscriber $subscriber
   * @param Segment[] $segments
   *
   * @return array
   * @throws \Exception
   */
  private function constructNewsletter(Subscriber $subscriber, array $segments) {
    $segment_names = $this->getSegmentNames($segments);
    $context = [
      'subscriber_email' => $subscriber->get('email'),
      'segments_names' => $segment_names,
      'link_settings' => get_site_url(null, '/wp-admin/admin.php?page=mailpoet-settings'),
      'link_premium' => get_site_url(null, '/wp-admin/admin.php?page=mailpoet-premium'),
    ];
    return [
      'subject' => sprintf(__('New subscriber to %s', 'mailpoet'), $segment_names),
      'body' => [
        'html' => $this->renderer->render('emails/newSubscriberNotification.html', $context),
        'text' => $this->renderer->render('emails/newSubscriberNotification.txt', $context),
      ],
    ];
  }

  /**
   * @param Segment[] $segments
   * @return string
   */
  private function getSegmentNames($segments) {
    $names = [];
    foreach($segments as $segment) {
      $names[] = $segment->get('name');
    }
    return implode(', ', $names);
  }

}
