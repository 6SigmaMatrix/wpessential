<?php

namespace WPEssential;

use WPEssential\Builders\Beaver\Utility\Beaver;
use WPEssential\Builders\Elementor\Utility\Elementor;
use WPEssential\Builders\KingComposer\Utility\KingComposer;
use WPEssential\Builders\WordPress\Utility\WordPress;
use WPEssential\Builders\WPBakery\Utility\WPBakery;
use WPEssential\Utility\Requesting;
use WPEssential\Utility\RegisterAssets;
use WPEssential\Utility\Enqueue;
use WPEssential\Panel\Panel;

final class Loader
{
	public static function constructor ()
	{
		self::load_files();
		self::autoload();
		self::start();

		add_action( 'plugins_loaded', [ __CLASS__, 'on_plugins_loaded' ], -1 );
		add_action( 'widgets_init', [ '\\WPEssential\\Widgets\\Utility\\Widgets', 'constructor' ] );
		add_action( 'init', [ __CLASS__, 'init' ] );
	}

	/**
	 * When WP has loaded all plugins, trigger the `woocommerce_loaded` hook.
	 *
	 * This ensures `woocommerce_loaded` is called only after all other plugins
	 * are loaded, to avoid issues caused by plugin directory naming changing
	 * the load order. See #21524 for details.
	 *
	 * @since 1.0.0
	 */
	public static function on_plugins_loaded ()
	{
		do_action( 'wpessential_loaded' );
	}

	public static function autoload ()
	{
		$psr = [
			'WPEssential\\'    => WPE_DIR . '/inc/',
			'WPEssential\ER\\' => WPE_ER_DIR . '/inc/',
		];

		$class_loader = new Utility\ClassLoader;

		foreach ( $psr as $prefix => $paths ) {
			$class_loader->setPsr4( $prefix, $paths );
		}

		$class_loader->register();

	}

	public static function load_files ()
	{
		require_once WPE_DIR . '/inc/Utility/ClassLoader.php';
		require_once WPE_DIR . '/inc/functions.php';
	}

	public static function start ()
	{
		Requesting::constructor();
		RegisterAssets::constructor();
		Enqueue::constructor();
		Panel::constructor();
	}

	public static function builders_init ()
	{
		WordPress::constructor();

		if ( did_action( 'elementor/loaded' ) ) {
			Elementor::constructor();
		}

		if ( did_action( 'vc_plugins_loaded' ) ) {
			WPBakery::constructor();
		}

		if ( class_exists( 'FLBuilder' ) ) {
			Beaver::constructor();
		}

		if ( function_exists( 'kc_add_map' ) ) {
			KingComposer::constructor();
		}

	}

	public static function init ()
	{
		do_action( 'wpessential_init' );
		self::builders_init();
		load_plugin_textdomain( 'wpessential', false, WPE_DIR . '/language' );
		self::add_image_sizes();
	}

	public static function options ()
	{
		return get_option( WPE_SETTINGS, [] );
	}

	public static function options_update ( array $data )
	{
		$options = wp_parse_args( $data, self::options() );
		$boolean = (bool) update_option( WPE_SETTINGS, $options );
		if ( $boolean ) {
			return true;
		} else {
			wp_send_json_error( __( 'Data did not stored. It have an error found in data.', 'wpessential' ) );
		}
	}

	public static function add_image_sizes ()
	{
		$size = [
			'wpe/570/385' => [ 570, 385 ]
		];
		$size = apply_filters( 'wpe/images/sizing', $size );
		foreach ( $size as $name => $value ) {
			add_image_size( $name, $value[ 0 ], $value[ 1 ], true );
		}
	}
}
