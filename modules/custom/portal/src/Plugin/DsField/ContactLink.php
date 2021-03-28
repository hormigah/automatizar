<?php

namespace Drupal\portal\Plugin\DsField;

use Drupal\ds\Plugin\DsField\DsFieldBase;
use Drupal\Core\Link;

/**
 * Plugin that renders the course request.
 *
 * @DsField(
 *   id = "contact_limk",
 *   title = @Translation("Contact link"),
 *   entity_type = "node",
 *   provider = "portal",
 *   ui_limit = {
 *    "industry|*",
 *    "solucion|*"
 *   }
 * )
 */
class ContactLink extends DsFieldBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['link'] = Link::createFromRoute('Contacta a un asesor', 'entity.node.canonical', ['node' => 1])->toRenderable();
    $build['link']['#attributes']['class'] = ['btn', 'btn-secundary'];

    return $build;
  }

}
