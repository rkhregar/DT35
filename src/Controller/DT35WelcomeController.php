<?php

namespace Drupal\dt35\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dt35\Service\DT35Service;

/**
 * {@inheritDoc}
 */
class DT35WelcomeController extends ControllerBase {

  /**
   * {@inheritDoc}
   */
  public function welcomeBasic() {
    $message = DT35Service::messageBasedOnTime();
    return [
      '#markup' => 'Hello World! ' . $message,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  /**
   * {@inheritDoc}
   */
  public function welcomeWithName($name) {
    $message = DT35Service::messageBasedOnTime();
    return [
      '#markup' => 'Hello ' . $name . '! ' . $message,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
