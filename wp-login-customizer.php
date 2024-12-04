<?php

/**
 * Plugin Name: WP Login Page Customizer
 * Description: This Plugin will customized Logo, Text Color, and Background Color
 * Author:Vivek Saini
 * Plugin URI:https://example.com/wp-login-page-customizer
 * Author URI:https://ithinkservices.com
 * Version: 1.0
 */

 if(!defined("ABSPATH")){
    exit;
 }

 add_action( "admin_menu", "wlc_add_submenu");

 function wlc_add_submenu(){
    add_submenu_page( "options-general.php", "WP Login Page Customizer", "WP Login Page Customizer", "manage_options", "wp-login-page-customizer", "wlc_handle_login_settings_layout");
 }

//  Create Login Page Customizer Layout
function wlc_handle_login_settings_layout(){

}