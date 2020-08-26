<?php

namespace Drupal\portal\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\Render\Markup;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "user_icon",
 *   admin_label = @Translation("User Icon"),
 * )
 */
class UserIcon extends BlockBase {
  
  /**
   * {@inheritdoc}
   */
  public function build() {
    $content = [];
    
    $url = Url::fromRoute('user.page');
    $link_text = Markup::create('<i class="fa fa-user">‌‌</i>');
    $project_link = Link::fromTextAndUrl($link_text, $url);
    $content['link'] = $project_link->toRenderable();
    
    return $content;
  }
}