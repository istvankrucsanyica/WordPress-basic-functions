<?php

  /**
   * Mod Media post type
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  // Remove special chars from file name
  add_filter( 'sanitize_file_name', 'bwpf_sanitize_chars', 10 );
  function bwpf_sanitize_chars( $filename ) {
    return remove_accents( $filename );
  }

?>
