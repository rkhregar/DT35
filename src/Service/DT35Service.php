<?php

namespace Drupal\dt35\Service;

/**
 * {@inheritDoc}
 */
class DT35Service {

  /**
   * {@inheritDoc}
   */
  public static function messageBasedOnTime() : string {
    $config = \Drupal::config('dt35.settings');
    $message = 'Good Morning';
    $time = intval(date('Hi'));
    if ($time >= 600 && $time < 1200) {
      $message = $config->get('morning_msg') ?? 'Good Morning';
    }
    if ($time > 1200 && $time <= 1600) {
      $message = $config->get('noon_msg') ?? 'Good Afternoon';
    }
    if ($time > 1600 && $time <= 2100) {
      $message = $config->get('evening_msg') ?? 'Good Evening';
    }
    if ($time > 2100 && $time < 2359 || $time >= 0 && $time < 600) {
      $message = $config->get('night_msg') ?? 'Good Night';
    }
    return $message;
  }

}
