<?php

namespace Drupal\DT35\Service;

/**
 * {@inheritDoc}
 */
class DT35Service {

  /**
   * {@inheritDoc}
   */
  public static function messageBasedOnTime() : string {
    $message = 'Good Morning';
    $time = intval(date('Hi'));
    if ($time >= 600 && $time < 1200) {
      $message = 'Good Morning';
    }
    if ($time > 1200 && $time <= 1600) {
      $message = 'Good Afternoon';
    }
    if ($time > 1600 && $time <= 2100) {
      $message = 'Good Evening';
    }
    if ($time > 2100 && $time < 2359 || $time >= 0 && $time < 600) {
      $message = 'Good Night';
    }
    return $message;
  }

}
