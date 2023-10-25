<?php

namespace Drupal\dt35\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Block.
 *
 * @Block(
 *   id = "dt_custom_block",
 *   admin_label = @Translation("DT35 Custom Block"),
 *   category = @Translation("A DT35 Custom Blcok"),
 * )
 */
class DTCustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    /**
     * @var Drupal\Core\Datetime\DateFormatter
     */
    $dateFormatter = \Drupal::service('date.formatter');

    $time = time();
    $html = '<h4>Current Time</h4><ul>';
    $html .= '<li>Indian Standard Time - ' . $dateFormatter->format($time, 'long', '', 'Asia/Kolkata') . '</li>';
    $html .= '<li>Eastern Standard Time - ' . $dateFormatter->format($time, 'long', '', 'America/New_York') . '</li>';
    $html .= '<li>Central Standard Time - ' . $dateFormatter->format($time, 'long', '', 'America/Chicago') . '</li>';
    $html .= '</ul>';
    return [
      '#markup' => $html,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
