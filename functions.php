<?php

// LOAD PHP
include("dashboard_customizer.php");
// include("post_types.php");

// LOAD CSS
function theme_styles() {
	wp_register_style('child-theme', get_stylesheet_directory_uri() . '/style.css');

	wp_enqueue_style('child-theme');
	
}

// LOAD JS
function theme_scripts() {
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery'), false, true);
	
	wp_enqueue_script('scripts');
	
}

// CHECK FOR THEME OR DASHBOARD
if ( ! is_admin() ) {
     add_action( 'wp_enqueue_scripts', 'theme_scripts' );
     add_action( 'wp_enqueue_scripts', 'theme_styles' );
} else {

}