<?php

namespace Drupal\dt35\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Block.
 *
 * @Block(
 *   id = "dt_node_view_count",
 *   admin_label = @Translation("DT35 node view Count Block"),
 *   category = @Translation("A DT35 node view count Blcok"),
 * )
 */
class DTNodeViewCount extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $html = '';
    if (\Drupal::routeMatch()->getRouteName() == 'entity.node.canonical') {
      $node = \Drupal::routeMatch()->getParameter('node');
      $session = \Drupal::service('session');
      $node_view_count = $session->get('my_node_view_count.' . $node->id(), 0);
      $node_view_count++;
      $session->set('my_node_view_count.' . $node->id(), $node_view_count);

      $html = 'Node view count = ' . $node_view_count;
    }
    return [
      '#markup' => $html,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

}
