<?php

/**
 * Plugin Name: Stoute Powered Site
 * Version: 1.0.0
 * Description: This plugin adds the extra goodies that are provided with having a Stoute powered Website.
 * Author: Stoute.co
 * Author URI: https://www.stoute.co/
 * Plugin URI: https://www.stoute.co/plugins/stoute-powered-site
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: sws_site
 */

 // Add the custom login logo
 function sws_site_logo() {
   echo '<style type="text/css">
        h1 a {background-image: url('.plugins_url( 'images/login-logo.png', __FILE__ ).') !important; }
        </style>';
 }
 add_action('login_head', 'sws_site_logo');

 // 
