<?php
/*
Plugin Name: StoreFront better menu button for mobile layout
Plugin URI: https://bogaczek.com
Description: This plugin removes the most overcomplicated and bloated menu button I've ever seen from header (on mobile devices), and replaces it with a simple nice and clean hamburger–icon from Font Awesome 5. For WooCommerce StoreFront theme only.
Version: 0.7
Author: Black Sun
Author URI: https://bogaczek.com
Text Domain: storefront-better-menu-button
*/
defined('ABSPATH') or die();

// Enqueuing basic styles for plugin
function dexter_storefront_menu_button() {
	wp_enqueue_style( 'dexter-storefront-menu-button-style', plugins_url( 'assets/css/style.css', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'dexter_storefront_menu_button', 666 );

// Removing hardcoded „Menu” from button
add_filter( 'storefront_menu_toggle_text', 'dexter_storefront_menu_toggle_text' );
function dexter_storefront_menu_toggle_text( $text ) {
	$text = __( '&#8203;' ); //ZERO–WIDTH SPACE
	return $text;
}
?>