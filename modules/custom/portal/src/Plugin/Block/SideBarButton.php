<?php

namespace Drupal\portal\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "sidebar_button",
 *   admin_label = @Translation("Sidebar button"),
 * )
 */
class SideBarButton extends BlockBase {
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    $content = [];
    $content['button'] = [
      '#type' => 'html_tag',
      '#tag' => 'button',
      '#value' => '<span class="sr-only">' . $this->t('Toggle navigation') . '</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>',
      '#attributes' => [
        'class' => ['sidebar-toggle','navbar-toggle'],
        'id' => 'sidebar-button',
      ],
      '#attached' => [
        'library' => ['portal/sidebar'],
      ],
    ];
    
    return $content;
  }
}