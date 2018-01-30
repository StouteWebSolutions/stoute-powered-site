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
        h1 a {background-image: url('.plugins_url( 'images/login-logo.png', __FILE__ ).') !important; width: 320px !important; height: 130px !important; background-size: auto !important;}
        </style>';
 }
 add_action('login_head', 'sws_site_logo');
 
 // Add a custom link to the new logo image on the admin page.
 function sws_site_loginlogo_url($url) {
   return 'https://www.stoute.co';
 }
 add_filter( 'login_headerurl', 'sws_site_loginlogo_url' );

 // Add the Support Ticket Widget to the Admin Dashboard
 add_action('wp_dashboard_setup', 'sws_site_dashboard_widgets');
 function sws_site_dashboard_widgets() {
   global $wp_meta_boxes;
   wp_add_dashboard_widget('sws_site_contact_widget', 'Website Support', 'sws_site_dashboard_contact');
 }
 function sws_site_dashboard_contact() {
   // Widget Content Here
   echo '<p>Welcome to your site! Need help? Contact your Stoute.co team <a href="mailto:support@stoute.co">here</a>. </p>';
 }
