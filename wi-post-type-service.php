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
 * @package         WI\PostType\Service
 */

namespace WI\PostType\Service;

/**
 * Registers a custom post type 'wi-service'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_service_post_type() : void {
	$labels = [
		'name' => _x( 'Services', 'Post Type General Name', 'wi-post-type-service' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'wi-post-type-service' ),
		'menu_name' => __( 'Services', 'wi-post-type-service' ),
		'name_admin_bar' => __( 'Services', 'wi-post-type-service' ),
		'archives' => __( 'Services Archives', 'wi-post-type-service' ),
		'attributes' => __( 'Services Attributes', 'wi-post-type-service' ),
		'parent_item_colon' => __( 'Parent Service:', 'wi-post-type-service' ),
		'all_items' => __( 'All Services', 'wi-post-type-service' ),
		'add_new_item' => __( 'Add New Service', 'wi-post-type-service' ),
		'add_new' => __( 'Add New', 'wi-post-type-service' ),
		'new_item' => __( 'New Service', 'wi-post-type-service' ),
		'edit_item' => __( 'Edit Service', 'wi-post-type-service' ),
		'update_item' => __( 'Update Service', 'wi-post-type-service' ),
		'view_item' => __( 'View Service', 'wi-post-type-service' ),
		'view_items' => __( 'View Services', 'wi-post-type-service' ),
		'search_items' => __( 'Search Services', 'wi-post-type-service' ),
		'not_found' => __( 'Service Not Found', 'wi-post-type-service' ),
		'not_found_in_trash' => __( 'Service Not Found in Trash', 'wi-post-type-service' ),
		'featured_image' => __( 'Featured Image', 'wi-post-type-service' ),
		'set_featured_image' => __( 'Set Featured Image', 'wi-post-type-service' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'wi-post-type-service' ),
		'use_featured_image' => __( 'Use as Featured Image', 'wi-post-type-service' ),
		'insert_into_item' => __( 'Insert into Service', 'wi-post-type-service' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'wi-post-type-service' ),
		'items_list' => __( 'Services List', 'wi-post-type-service' ),
		'items_list_navigation' => __( 'Services List Navigation', 'wi-post-type-service' ),
		'filter_items_list' => __( 'Filter Services List', 'wi-post-type-service' ),
	];
	$labels = apply_filters( 'wi-service-labels', $labels );

	$args = [
		'label' => __( 'Service', 'wi-post-type-service' ),
		'description' => __( 'Used to describe and organise services..', 'wi-post-type-service' ),
		'labels' => $labels,
		'supports' => [
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'custom-fields',
		],
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-money',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'can_export' => true,
		'capability_type' => 'post',
		'show_in_rest' => true,
	];
	$args = apply_filters( 'wi-service-args', $args );

	register_post_type( 'wi-service', $args );
}
add_action( 'init', __NAMESPACE__ . '\add_service_post_type' );
