<?php

  /**
   * Basic Theme functions, add theme supports
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  // setting Theme support
  add_action( 'after_setup_theme', 'bwpf_setup' );
  function bwpf_setup() {
    load_theme_textdomain( TEXTDOMAIN, THEME_URL . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
      'search-form',
      'gallery',
      'caption'
      )
    );
  }

  // Add slug and category to the body tag
  add_filter( 'body_class', 'bwpf_add_slug_body_class' );
  function bwpf_add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
  }

  // Limit excerpt length, $length = words count
  add_filter( 'excerpt_length', 'bwpf_custom_excerpt_length', 999 );
  function bwpf_custom_excerpt_length( $length ) {
    return 40;
  }

?>
