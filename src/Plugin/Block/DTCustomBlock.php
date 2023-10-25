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

    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
