<?php

namespace Drupal\verisure_inline_funnel\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Shows the Verisure inline funnel js application.
 *
 * @Block(
 *   id = "verisure_inline_funnel",
 *   admin_label = @Translation("danmark-testen")
 * )
 */
class VerisureInlineFunnelBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => '<div id="funnel"></div>',
      '#attached' => [
        'library' => 'adaptdk/verisure-inline-funnel'
      ],
    ];
  }
}
