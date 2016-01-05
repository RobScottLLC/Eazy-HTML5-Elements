<?php 
/**
 * Plugin Name: Eazy HTML5 Elements
 * Version:     1.0
 * Plugin URI:  http://robjscott.com/wordpress/plugins
 * Description: This plugin creates HTML5 elements based off of the W3 HTML5 spec.
 * Author:      Rob Scott, LLC
 * Author URI:  http://robjscott.com/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'EZ_HTML5_ELEMENTS_PATH', plugin_dir_path(__FILE__) );
define( 'EZ_HTML5_ELEMENTS_FILE_PATH', __FILE__ );
define( 'EZ_HTML5_ELEMENTS_URL', str_replace('index.php','',plugins_url( 'index.php', __FILE__ )));

//Add Shortcode
function eazy_html() { 
include_once(EZ_HTML5_ELEMENTS_PATH . 'eazy_html5_elements_html.php');
}
add_shortcode( 'eazyhtml', 'eazy_html' );

//ADD JS
add_action( 'wp_enqueue_scripts', 'eazy_html5_js' );
function eazy_html5_js() {
    wp_enqueue_script(
        'eazy-html5', // name your script so that you can attach other scripts and de-register, etc.
        EZ_HTML5_ELEMENTS_URL  . '/resources/js/eazy-html5.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

//Add CSS
function eazy_html5_css() {
	wp_enqueue_style( 'eazy-html5-css', EZ_HTML5_ELEMENTS_URL .   '/resources/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'eazy_html5_css' );

?>