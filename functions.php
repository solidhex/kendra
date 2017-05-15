<?php

/**
 * General Theme Features
 */


add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

/**
 * Custom Image Sizes
 */

add_image_size( 'xlarge', 1440, 834, true );
add_image_size( 'large', 1440, 724, true );
add_image_size( 'medium', 791, 507, true );
add_image_size( 'small', 393, 273, true );

/**
 * Custom home page header
 */

$header_defaults = array(
	'height' 		=>	834,
	'flex-height' 	=> true,
	'width' 		=> 1440,
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
	wp_enqueue_script(	'site', get_template_directory_uri() . '/assets/js/min/site-min.js', array('jquery'), false, true	);
	wp_enqueue_script(	'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array('jquery'), false, true );
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

/**
 * Get Attached Images Plugin
 */

function get_attached_images( $args = null )
{
	
	/**
	 * Define the array of defaults
	 */
	
	$defaults = array(
		'pageID' => false,
		'size' => 'thumbnail',
		'single' => false,
		'prepend' => '<figure>',
		'append' => '</figure>',
		'orderby' => 'date',
		'order' => 'DESC',
		'echo' => true
	);
	
	$args = wp_parse_args( $args, $defaults );
	
	extract( $args, EXTR_SKIP );
	
	$output = "";

	// first check if we've passed in a specific page ID
	if ($pageID != FALSE) {
		$id = $pageID;
	} else {
		global $post;
		$id = $post->ID;
	}
	
	// now, retrieve all the images
	$images = get_children(array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby ));

	// set the counter to prevent undefined variable warning
	$i = 0;
	
	if ($images) {
		if ($echo) {
			foreach ($images as $image) {
				$i++;

				if ($image->post_excerpt) {
					$caption = '<figcaption>' . $image->post_excerpt . '</figcaption>'; 
				} else {
					$caption = '';
				}
			
				$output .= $prepend . wp_get_attachment_image($image->ID, $size) . $caption . $append;
			
				if ($single == TRUE && $i == 1)  break;
			}

			return $output;
		} else {
			return $images;
		}
	} else {
		return false;
	}
}

?>