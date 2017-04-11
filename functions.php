<?php

/**
 * Remove Admin bar when Logged In
 */

add_filter('show_admin_bar', '__return_false');

/**
 * Remove WP Meta Generator
 */

remove_action('wp_head', 'wp_generator');

/**
 * Theme stylesheets and scripts
 */

function working_scripts()
{
	// Theme stylesheets.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/screen.css' );
}

add_action( 'wp_enqueue_scripts', 'working_scripts' );

?>