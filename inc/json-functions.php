<?php

  /**
   * Disable JSON API
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  add_filter( 'json_enabled', '__return_false' );
  add_filter( 'json_jsonp_enabled', '__return_false' );

?>
