<?php
/**
 * Template Name: Full Featured Image
 *
 * @author Andy Walz
 * @package Karibu Loo
 * @subpackage Cimbura
 */

/** Add the featured image section */
add_action( 'genesis_after_header', 'full_featured_image' );
function full_featured_image() {
  if ( is_singular( array( 'post', 'page' ) ) && has_post_thumbnail() ){
    echo '<div id="full-image">';
    echo get_the_post_thumbnail($thumbnail->ID, 'header');
    echo '</div>';
  }
}

genesis();
