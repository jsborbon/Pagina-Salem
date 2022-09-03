<?php
/**
 * Plugin Name: Docus 
 * Description: Show youtube Video palylist onto any page of your wibsite.
 * Author: 		HasThemes
 * Author URI: 	https://hasthemes.com/
 * Version: 	1.0.4
 * Text Domain: docus
 * Domain Path: /languages
*/

if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly
define( 'DOCUS_PL_ROOT', __FILE__ );
define( 'DOCUS_PL_URL', plugins_url( '/', DOCUS_PL_ROOT ) );
define( 'DOCUS_PL_PATH', plugin_dir_path( DOCUS_PL_ROOT ) );
define( 'DOCUS_PLUGIN_BASE', plugin_basename( DOCUS_PL_ROOT ) );

// get setting options
function docus_get_option( $option, $default = '' ) {
    $option = get_option( $option );
    if ( !empty($option) ) {
        return $option;
    }
    return $default;
}

//Required File
require_once ( DOCUS_PL_PATH .'includes/class.docus.php' );
require_once ( DOCUS_PL_PATH .'includes/class.shortcode.php' );