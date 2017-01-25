<?php

  /**
   * YOAST plugin mod
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

   /* YOAST remove comment */
  if ( defined( 'WPSEO_VERSION' )) {
    add_action( 'get_header', function() {
      ob_start( function ( $o ) {
        return preg_replace('/\n?<.*?yoast.*?>/mi','',$o);
      });
    });
    add_action( 'wp_head', function() {
      ob_end_flush();
    }, 999 );
  }


?>
