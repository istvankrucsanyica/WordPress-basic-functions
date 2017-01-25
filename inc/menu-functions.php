<?php

  /**
   * Navigation
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  // Register custom menus
  add_action( 'init', 'bwpf_register_custom_menu' );
  function bwpf_register_custom_menu() {
    register_nav_menus(
      array(
        'fomenu' => __( 'Fejlec menu', TEXTDOMAIN )
      )
    );
  }

  // Add class to first and last menu item
  add_filter( 'wp_nav_menu', 'bwpf_add_first_and_last' );
  function bwpf_add_first_and_last( $output ) {
    $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
    $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
    return $output;
  }

?>
