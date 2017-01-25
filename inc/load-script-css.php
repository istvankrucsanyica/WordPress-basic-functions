<?php

  /**
   * Load script and css files
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  add_action( 'wp_enqueue_scripts', 'bwpf_template_scripts' );
  function bwpf_template_scripts() {
    wp_enqueue_style( TEXTDOMAIN.'-bxslider', THEME_URL . '/bxslider.min.css');
    wp_enqueue_style( TEXTDOMAIN.'-style', get_stylesheet_uri() );

    wp_enqueue_script( TEXTDOMAIN.'-main', THEME_URL . '/main.min.js', array(), '', false );
  }

  // Remove version from js and css files
  add_filter( 'script_loader_src', 'bwpf_remove_script_version', 15, 1 );
  add_filter( 'style_loader_src', 'bwpf_remove_script_version', 15, 1 );
  function bwpf_remove_script_version( $src ) {
    return remove_query_arg( 'ver', $src );
  }

?>
