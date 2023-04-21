<?php

namespace CoffeeCodeChallenge\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register widgets and sidebars.
 */
class ContentTypesServiceProvider implements ServiceProviderInterface {
	/**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		// Nothing to register.
	}

	/**
	 * {@inheritDoc}
	 */
	public function bootstrap( $container ) {
		add_action( 'init', [$this, 'registerPostTypes'] );
		add_action( 'init', [$this, 'registerTaxonomies'] );
	}

	/**
	 * Register post types.
	 *
	 * @return void
	 */
	public function registerPostTypes() {
		// phpcs:disable
		/*
		register_post_type(
			'coffee_code_challenge_custom_post_type',
			array(
				'labels'              => array(
					'name'               => __( 'Custom Types', 'coffee_code_challenge' ),
					'singular_name'      => __( 'Custom Type', 'coffee_code_challenge' ),
					'add_new'            => __( 'Add New', 'coffee_code_challenge' ),
					'add_new_item'       => __( 'Add new Custom Type', 'coffee_code_challenge' ),
					'view_item'          => __( 'View Custom Type', 'coffee_code_challenge' ),
					'edit_item'          => __( 'Edit Custom Type', 'coffee_code_challenge' ),
					'new_item'           => __( 'New Custom Type', 'coffee_code_challenge' ),
					'search_items'       => __( 'Search Custom Types', 'coffee_code_challenge' ),
					'not_found'          => __( 'No custom types found', 'coffee_code_challenge' ),
					'not_found_in_trash' => __( 'No custom types found in trash', 'coffee_code_challenge' ),
				),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-admin-post',
				'supports'            => array( 'title', 'editor', 'page-attributes' ),
				'rewrite'             => array(
					'slug'       => 'custom-post-type',
					'with_front' => false,
				),
			)
		);
		*/
		// phpcs:enable
	}

	/**
	 * Register taxonomies.
	 *
	 * @return void
	 */
	public function registerTaxonomies() {
		// phpcs:disable
		/*
		register_taxonomy(
			'coffee_code_challenge_custom_taxonomy',
			array( 'post_type' ),
			array(
				'labels'            => array(
					'name'              => __( 'Custom Taxonomies', 'coffee_code_challenge' ),
					'singular_name'     => __( 'Custom Taxonomy', 'coffee_code_challenge' ),
					'search_items'      => __( 'Search Custom Taxonomies', 'coffee_code_challenge' ),
					'all_items'         => __( 'All Custom Taxonomies', 'coffee_code_challenge' ),
					'parent_item'       => __( 'Parent Custom Taxonomy', 'coffee_code_challenge' ),
					'parent_item_colon' => __( 'Parent Custom Taxonomy:', 'coffee_code_challenge' ),
					'view_item'         => __( 'View Custom Taxonomy', 'coffee_code_challenge' ),
					'edit_item'         => __( 'Edit Custom Taxonomy', 'coffee_code_challenge' ),
					'update_item'       => __( 'Update Custom Taxonomy', 'coffee_code_challenge' ),
					'add_new_item'      => __( 'Add New Custom Taxonomy', 'coffee_code_challenge' ),
					'new_item_name'     => __( 'New Custom Taxonomy Name', 'coffee_code_challenge' ),
					'menu_name'         => __( 'Custom Taxonomies', 'coffee_code_challenge' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'custom-taxonomy' ),
			)
		);
		*/
		// phpcs:enable
	}
}
