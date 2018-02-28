<?php
/*
 * Plugin Name:          Magnific Popup WordPress Plugin
 * Plugin URI:           https://github.com/dmpinder/magnific-popup-wordpress-mu-plugin
 * Description:          A WordPress plugin which installs Magnific Popup
 * Author:               Dmitry Semenov, Darren Pinder, Ralph Morris
 * Version:              1.0.0
 * Author URI:           https://github.com/dmpinder
 * GitHub Plugin URI:    https://github.com/dmpinder/magnific-popup-wordpress-mu-plugin
 * GitHub Branch:        master
 */

add_action( 'wp_enqueue_scripts', 'register_magnific_popup_scripts' );

/**
 * Function called to enqueue css / js files.
 */
function register_magnific_popup_scripts() {
	wp_enqueue_style( 'magnific_popup_css', plugin_dir_url( __FILE__ ) . 'css/magnific-popup.min.css', '', '1.1.0', '' );
	wp_enqueue_script( 'magnific_popup_js', plugin_dir_url( __FILE__ ) . 'js/jquery.magnific-popup.min.js', array( 'jquery' ), '1.1.0', true );
	wp_enqueue_script( 'magnific_popup_popup_settings', plugin_dir_url( __FILE__ ) . 'js/popup-settings.js', array( 'magnific_popup_js' ), '1.1.0', true );
}

