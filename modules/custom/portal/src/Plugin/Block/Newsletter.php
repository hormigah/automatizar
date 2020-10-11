<?php

namespace Drupal\portal\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;

/**
 * Provides a block with the newsletter form.
 *
 * @Block(
 *   id = "newsletter_form",
 *   admin_label = @Translation("Newsletter form"),
 * )
 */
class Newsletter extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['row'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['row'],
      ]
    ];
    $build['row']['left'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['col-sm-5','newsletter-left'],
      ]
    ];
    $build['row']['right'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['col-sm-7'],
      ]
    ];
    $build['row']['left']['title'] = [
      '#type' => 'markup',
      '#markup' => Markup::create('<h2 class="block-title">Suscribete al Newsletter</h2><div class="seperater"></div>'),
    ];
    $build['row']['left']['description'] = [
      '#type' => 'markup',
      '#markup' => Markup::create('<div class="newsletter-description">Entérate de las nuevas tendencias en relación con las soluciones de automatización de procesos industriales en Colombia.</div>'),
    ];
    $build['row']['right']['webform'] = [
      '#type' => 'webform',
      '#webform' => 'newsletter',
    ];

    return $build;
  }
}
