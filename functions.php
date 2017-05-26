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

/**
* Adding custom image size
*/
add_action('init', 'add_image_sizes');

function add_image_sizes() {
	// lets add iphone6-landscape size 
	add_image_size( 'iphone6-landscape', 667, 375, TRUE ); // force crop true
	add_image_size( 'iphone6-portrait', 375, 667, TRUE ); // force crop true
	add_image_size( 'ipad-landscape', 1024, 768, TRUE);
	add_image_size( 'ipad-portrait', 768, 1024, TRUE);

}// end

/**
* filter function to force wordpress to add our custom srcset values
* @param array  $sources {
*     One or more arrays of source data to include in the 'srcset'.
*
*     @type type array $width {
*          @type type string $url        The URL of an image source.
*          @type type string $descriptor The descriptor type used in the image candidate string,
*                                        either 'w' or 'x'.
*          @type type int    $value      The source width, if paired with a 'w' descriptor or a
*                                        pixel density value if paired with an 'x' descriptor.
*     }
* }
* @param array  $size_array    Array of width and height values in pixels (in that order).
* @param string $image_src     The 'src' of the image.
* @param array  $image_meta    The image meta data as returned by 'wp_get_attachment_metadata()'.
* @param int    $attachment_id Image attachment ID.
* @author: Aakash Dodiya
* @website: http://www.developersq.com
*/
add_filter( 'wp_calculate_image_srcset', 'dq_add_custom_image_srcset', 10, 5 );
function dq_add_custom_image_srcset( $sources, $size_array, $image_src, $image_meta, $attachment_id ){
			
	// image base name		
	$image_basename = wp_basename( $image_meta['file'] );
	// upload directory info array
	$upload_dir_info_arr = wp_get_upload_dir();
	// base url of upload directory
	$baseurl = $upload_dir_info_arr['baseurl'];
	
	// Uploads are (or have been) in year/month sub-directories.
	if ( $image_basename !== $image_meta['file'] ) {
		$dirname = dirname( $image_meta['file'] );
		
		if ( $dirname !== '.' ) {
			$image_baseurl = trailingslashit( $baseurl ) . $dirname; 
		}
	}

	$image_baseurl = trailingslashit( $image_baseurl );
	// check whether our custom image size exists in image meta	
	if( array_key_exists('iphone6-landscape', $image_meta['sizes'] ) ){

		// add source value to create srcset
		$sources[ $image_meta['sizes']['iphone6-landscape']['width'] ] = array(
				 'url'        => $image_baseurl .  $image_meta['sizes']['iphone6-landscape']['file'],
				 'descriptor' => 'w',
				 'value'      => $image_meta['sizes']['iphone6-landscape']['width'],
		);
	}
	
	if( array_key_exists('iphone6-portrait', $image_meta['sizes'] ) ){

		// add source value to create srcset
		$sources[ $image_meta['sizes']['iphone6-portrait']['width'] ] = array(
				 'url'        => $image_baseurl .  $image_meta['sizes']['iphone6-portrait']['file'],
				 'descriptor' => 'w',
				 'value'      => $image_meta['sizes']['iphone6-portrait']['width'],
		);
	}
	
	if( array_key_exists('ipad-landscape', $image_meta['sizes'] ) ){

		// add source value to create srcset
		$sources[ $image_meta['sizes']['ipad-landscape']['width'] ] = array(
				 'url'        => $image_baseurl .  $image_meta['sizes']['ipad-landscape']['file'],
				 'descriptor' => 'w',
				 'value'      => $image_meta['sizes']['ipad-landscape']['width'],
		);
	}
	
	if( array_key_exists('ipad-portrait', $image_meta['sizes'] ) ){

		// add source value to create srcset
		$sources[ $image_meta['sizes']['ipad-portrait']['width'] ] = array(
				 'url'        => $image_baseurl .  $image_meta['sizes']['ipad-portrait']['file'],
				 'descriptor' => 'w',
				 'value'      => $image_meta['sizes']['ipad-portrait']['width'],
		);
	}
	
	//return sources with new srcset value
	return $sources;
}

?>