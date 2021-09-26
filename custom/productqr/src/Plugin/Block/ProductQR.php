<?php

namespace Drupal\productqr\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Displays product purchase url as QR Code.
 *
 * @Block(
 *   id = "product_qr_block",
 *   admin_label = @Translation("Scan here on your mobile"),
 * )
 */
class ProductQR extends BlockBase {
  
  /**
   * disable block cache 
   * @return int
   */
  public function getCacheMaxAge() {
    return 0;
  }   
  
  /**
   * {@inheritdoc}
   */  
  public function build() {
    global $base_url;
	$node = \Drupal::routeMatch()->getParameter('node');	
	$nid = $node->id();

    return [
      '#markup' => '<img width=200 height=200 src="'.$base_url.'/sites/default/files/prod_'.$nid.'_qr.png">',
    ];
  }

}