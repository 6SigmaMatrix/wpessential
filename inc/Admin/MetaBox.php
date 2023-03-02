<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class MetaBox
{
	private static $post_type;
	private static $post;
	private static $controls = [];
	private static $title    = [];

	public static function constructor ()
	{
		/*add_action( 'add_meta_boxes', function ( $post_type, $post )
		{
			self::$post      = $post;
			self::$post_type = $post_type;

			add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 14 );
			add_filter( 'wpe/admin_page/js', function ( $list )
			{
				$router = array_search( 'vue-router', $list, true );
				unset( $list[ $router ] );
				sort( $list );
				return $list;
			}, 12 );
		}, 1000, 2 );*/

	}

	public static function localization ( $list )
	{
		$path  = wpe_template_dir( 'config/metabox/' );
		$files = glob( "{$path}*.php" );
		if ( $files && is_array( $files ) ) {
			foreach ( $files as $file ) {
				if ( file_exists( $file ) ) {
					$section = require $file;
					$screens = wpe_array_get( $section, 'screens' );
					foreach ( $screens as $post_type ) {
						self::$controls[ $post_type ] = wpe_array_get( $section, 'meta' );
						self::$title[ $post_type ]    = wpe_array_get( $section, 'title' );
						add_meta_box(
							wpe_array_get( $section, 'id' ),
							self::$title[ $post_type ],
							wpe_array_get( $section, 'callback' ),
							$post_type,
							wpe_array_get( $section, 'context' ),
							wpe_array_get( $section, 'priority' )
						);
					}
				}
			}
		}
		if ( wpe_array_get( self::$controls, self::$post_type ) ) {
			return wp_parse_args( [
				'meta'       => apply_filters( 'wpe/register/admin_pages/options/metabox_options/tabs', wpe_array_get( self::$controls, self::$post_type ) ),
				'theme_info' => [
					'Name' => self::$title[ self::$post_type ]
				],
			], $list );
		}
	}
}
