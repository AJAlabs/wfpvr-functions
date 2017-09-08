<?php
/**
 * Plugin Name: WFPVR Functions
 * Plugin URI: https://github.com/AJAlabs/wfpvr_functions
 * Description: Custom WordPress functions.php plugin for Westchester FPV Racing
 * Author: AJ Acevedo
 * Author URI: http://AJAlabs.com
 * Version: 0.1
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

// Adds Google Analytics to the footer
// Insert your code between the Begins and Ends block
add_action('wp_footer', 'add_google_analytics');
  function add_google_analytics() { ?>
<!-- Google Analytics: Begins-->
<!-- Google Analytics: Ends-->
<?php }

