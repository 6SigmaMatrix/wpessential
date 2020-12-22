<?php

namespace WPEssential\Plugins\Utility;

final class PageTemplates
{
	protected static string $plugin_slug;

	protected static array $templates = [];

	public static function constructor ()
	{
		// Add a filter to the wp 4.7 version attributes metabox
		add_filter( 'theme_page_templates', [ __CLASS__, 'add_template' ] );

		// Add a filter to the save post to inject out template into the page cache
		add_filter( 'wp_insert_post_data', [ __CLASS__, 'register_templates' ] );

		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter( 'template_include', [ __CLASS__, 'view_template' ] );

		// Add your templates to this array.
		self::$templates = [];

		self::$templates = apply_filters( 'wpe/register/page_attributes/templates', self::$templates );
	}

	/**
	 * add_template
	 *
	 * @param mixed $posts_templates
	 *
	 * @return void
	 */
	public static function add_template ( $posts_templates )
	{
		$posts_templates = array_merge( $posts_templates, self::$templates );

		return $posts_templates;
	}

	/**
	 * view_template
	 *
	 * @param mixed $template
	 *
	 * @return void
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

		$files = apply_filters( 'wpe/register/page_attributes/templates/view', [] );
		$files = array_filter( $files );
		if ( $files && is_array( $files ) ) {
			foreach ( $files as $file ) {
				$file = $file . get_post_meta( $post->ID, '_wp_page_template', true );
				if ( file_exists( $file ) ) {
					return $file;
				} else {
					echo $file;
				}
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
}

