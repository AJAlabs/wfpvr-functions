<?php
/**
 * Plugin Name: WFPVR Functions
 * Plugin URI: https://github.com/AJAlabs/wfpvr_functions
 * Description: Custom WordPress functions.php plugin for Westchester FPV Racing.
 * Author: AJ Acevedo
 * Author URI: http://AJAlabs.com
 * Version: 0.2
 * License: GPL2
 *
 * @package wfpvr-maintenance-mode
 * @copyright Copyright (c) 2017, AJ Acevedo
 * @license GPL2+
 */


// Remove WordPress version meta generator from head
remove_action('wp_head', 'wp_generator');

// Remove Windows Live Writer meta from head
remove_action('wp_head', 'wlwmanifest_link');

// Adds Google Analytics
function wfpvr_google_analytics() { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-106251419-1', 'auto');
    ga('send', 'pageview');

  </script>
<?php }

add_action( 'wp_head', 'wfpvr_google_analytics', 10 );

?>