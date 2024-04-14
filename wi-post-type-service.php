<?php
/**
 * Plugin Name:     WI Post Type Service
 * Plugin URI:      https://github.com/wielgosz-info/wi-post-type-service
 * Description:     'Service' custom post type.
 * Author:          Urszula Wielgosz
 * Author URI:      https://urszula.wielgosz.info
 * Text Domain:     wi-post-type-service
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         WI\PostTypeService
 */

namespace WI\PostTypeService;

function add_service_post_type() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'wi-post-type-service' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'wi-post-type-service' ),
	);

	register_post_type( 'wi-service', array(
		'labels'                => $labels,
		'description'           => __( 'Used to describe and organize services.', 'wi-post-type-service' ),
		'public'                => true,
		'show_in_rest'          => true,
		'menu_icon'             => 'dashicons-money',
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
		'has_archive'           => true,
		'delete_with_user'      => false,
	) );
}
add_action( 'init', __NAMESPACE__ . '\add_service_post_type' );
