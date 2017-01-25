<?php

  /**
   * Editor functions
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  if ( USE_EDITOR_STYLE == TRUE ) {

    add_action( 'after_setup_theme', 'bwpf_add_editor_styles' );
    function bwpf_add_editor_styles() {
      add_editor_style( 'editor-style.css' );
    }

  }

?>
