<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class PageTemplates
{
	protected static $plugin_slug;

	protected static $templates = [
		'wpe-wordpress.php' => 'WPE WordPress',
	];

	public static function constructor ()
	{
		// Add a filter to the wp 4.7 version attributes metabox
		add_filter( 'theme_page_templates', [ __CLASS__, 'add_template' ] );

		// Add a filter to the save post to inject out template into the page cache
		add_filter( 'wp_insert_post_data', [ __CLASS__, 'register_templates' ] );

		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter( 'template_include', [ __CLASS__, 'view_template' ] );
		add_filter( 'display_post_states', [ __CLASS__, 'template_status' ], 1000, 2 );
	}

	/**
	 * add_template
	 *
	 * @param mixed $posts_templates
	 *
	 * @return array
	 */
	public static function add_template ( $posts_templates )
	{
		// Add your templates to this array.
		self::$templates = apply_filters( 'wpe/register/page_attributes/templates', wp_parse_args( $posts_templates, self::$templates ) );
		return self::$templates;
	}

	/**
	 * view_template
	 *
	 * @param mixed $template
	 *
	 * @return string
	 */
	public static function view_template ( $template )
	{
		// Get global post
		global $post;

		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if ( ! isset( self::$templates[ get_post_meta( $post->ID, '_wp_page_template', true ) ] ) ) {
			return $template;
		}

		$files = apply_filters( 'wpe/register/page_attributes/templates/view', [
			wpe_template_load( 'editor-template/' . get_post_meta( $post->ID, '_wp_page_template', true ) )
		] );

		if ( ! empty( $files ) ) {
			foreach ( $files as $file ) {
				return $file;
			}
		}

		// Return template
		return $template;
	}

	/**
	 * register_templates
	 *
	 * @param mixed $atts
	 *
	 * @return void
	 */
	public static function register_templates ( $atts )
	{
		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = [];
		}

		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key, 'themes' );

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, self::$templates );

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );

		return $atts;

	}

	/**
	 * template_status
	 *
	 * @param $states
	 * @param $post
	 *
	 * @return array
	 */
	public static function template_status ( $states, $post )
	{
		$template_list = apply_filters( 'wpe/register/page_attributes/templates/status', [
			'wpe-wordpress.php' => __( 'WPE WordPress', 'wpessential' ),
		] );

		if ( ! empty( $template_list ) ) {
			foreach ( $template_list as $key => $name ) {
				switch ( get_post_type( $post->ID ) ) {
					case 'post':
					case 'page':
						$check = get_post_meta( $post->ID, '_wp_page_template', true );
						if ( $check === $key ) {
							$states[] = $name;
						}
						break;
				}
			}
		}

		return $states;
	}
}
