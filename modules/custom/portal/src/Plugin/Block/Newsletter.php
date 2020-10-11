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
        'class' => ['col-sm-6'],
      ]
    ];
    $build['row']['right'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => ['col-sm-6'],
      ]
    ];
    $build['row']['left']['title'] = [
      '#type' => 'markup',
      '#markup' => Markup::create('Suscribete al Newsletter'),
    ];
    $build['row']['right']['webform'] = [
      '#type' => 'webform',
      '#webform' => 'newsletter',
    ];

    return $build;
  }
}
