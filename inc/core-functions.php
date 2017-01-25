<?php

  /**
   * Core functions, mod WP core
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  // Disable WP core update for some users
  if ( !current_user_can( 'update_plugins' ) ) {
    add_action( 'init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', 'return null;' ) );
  }

  // Disable Automatic Update Email Notification
  add_filter( 'auto_core_update_send_email', 'bwpf_stop_auto_update_emails', 10, 4 );
  function bwpf_stop_update_emails( $send, $type, $core_update, $result ) {
    if ( ! empty( $type ) && $type == 'success' ) {
      return false;
    }
    return true;
  }


?>
