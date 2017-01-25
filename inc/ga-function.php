<?php

  /**
   * Add the Google Analytics code on the header section
   *
   * @author Istvan Krucsanyica <https://github.com/istvankrucsanyica>
   * @copyright (c) 2017, GPLv2
   * @package BaseWPFunctions
   * @version 1.0
   * @since 1.0
   */

  if ( !empty( GA_CODE ) ) {
    add_action('wp_head', 'bfpf_add_google_analytics', 999);
    function bfpf_add_google_analytics() {
      echo "<script>";
      echo " (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');";
      echo "ga('create', '".GA_CODE."', 'auto');";
      echo "ga('send', 'pageview');";
      echo '</script>';
    }
  }

?>
