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
 *    "industry|*"
 *   }
 * )
 */
class ContactLink extends DsFieldBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $link_options = [
      'attributes' => [
        'class' => ['btn', 'btn-secundary'],
      ],
    ];

    $build = Link::createFromRoute('Contacta a un asesor', 'entity.node.canonical', ['node' => 1], $link_options)->toRenderable();

    return $build;
  }

}
