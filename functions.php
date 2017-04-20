<?php

/**
 * General Theme Features
 */


add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

/**
 * Custom home page header
 */

$header_defaults = array(
	'height' 		=>	800,
	'flex-height' 	=> true,
	'width' 		=> 1200,
	'flex-width' 	=> true,
	'default-image' => get_template_directory_uri() . '/assets/img/home-hero.jpg'
);


add_theme_support( 'custom-header', $header_defaults );


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

function kendra_scripts()
{
	// Theme stylesheets.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/screen.css' );
	
	// Theme JS
	wp_enqueue_script('site', get_template_directory_uri() . '/assets/js/site.js', array('jquery'), false, true);
}

add_action( 'wp_enqueue_scripts', 'kendra_scripts' );

/**
 * Add social media to user profile
 */

function add_user_social_media_options($profile_fields)
{
	$profile_fields['instagram'] = 'Instagram';

	return $profile_fields;

}

add_filter( 'user_contactmethods', 'add_user_social_media_options' );



?>