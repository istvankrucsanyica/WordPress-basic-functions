<?php

  /**
   * Base functions for admin mofódification
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  // Revrite WP admin footer text
  if ( !empty( DEVELOPER_NAME ) ) {
    add_filter( 'admin_footer_text', 'bwpf_remove_footer_admin' );
    function bwpf_remove_footer_admin() {
      echo '&copy; '.date('Y').' '.DEVELOPER_NAME;
    }
  }

  // remove WP logo from admin bar header
  add_action( 'wp_before_admin_bar_render', 'bwpf_admin_bar_remove', 999 );
  function bwpf_admin_bar_remove() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
  }

  // If Administrator - Show WP version in footer
  add_action( 'admin_menu', 'bwpf_clear_admin_dashboard_footer_right' );
  function bwpf_clear_admin_dashboard_footer_right() {
    if ( ! current_user_can( 'update_core' ) ) {
      remove_filter( 'update_footer', 'core_update_footer' );
    }
  }

?>
