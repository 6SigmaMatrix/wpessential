<?php

namespace WPEssential\Plugins;

use WPEssential\Plugins\Admin\Admin;

final class Loader
{
	private static $theme_info;
	/**
	 * The set the editor for shortcodes page builders.
	 *
	 * @var string
	 */
	public static $editor;

	/**
	 * Set the callback to be used for determining the editor type for shortcodes page builders.
	 *
	 * @param $callback
	 * @return void
	 */
	public static function editor ( $callback )
	{
		self::$editor = $callback;
	}

	public static function constructor ()
	{
		self::load_files();
		self::autoload();
		self::start();

		add_action( 'plugins_loaded', [ __CLASS__, 'on_plugins_loaded' ], - 1 );
		add_action( 'plugins_loaded', [ __CLASS__, 'autoload' ], 100 );
		add_action( 'init', [ __CLASS__, 'init' ], 1000 );
		add_action( 'admin_init', [ __CLASS__, 'admin_init' ], 1000 );
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
		$theme_info = wpe_theme_info();
		$psr        = [
			"WPEssential\\Theme\\{$theme_info->NameSpace}\\" => get_template_directory() . '/inc/',
		];

		$class_loader = require WPE_DIR . 'vendor/autoload.php';

		foreach ( $psr as $prefix => $paths ) {
			$class_loader->addPsr4( $prefix, $paths );
		}

	}

	public static function load_files ()
	{
		require_once WPE_DIR . 'inc/Functions/api.php';
		require_once WPE_DIR . 'inc/Functions/general.php';
		require_once WPE_DIR . 'inc/Functions/file.php';
		require_once WPE_DIR . 'inc/Functions/image.php';
		require_once WPE_DIR . 'inc/Functions/post.php';
		require_once WPE_DIR . 'inc/Functions/query.php';
		require_once WPE_DIR . 'inc/Functions/template.php';
		require_once WPE_DIR . 'inc/Functions/style.php';
		require_once WPE_DIR . 'inc/Functions/element.php';
		require_once WPE_DIR . 'inc/Functions/array.php';
	}

	public static function init ()
	{
		do_action( 'wpessential_init' );
		load_plugin_textdomain( 'wpessential', false, WPE_DIR . '/language' );
		Utility\RegisterPostStatus::constructor();
		Utility\BuildersInit::constructor();
		Utility\PageTemplates::constructor();
	}

	public static function admin_init ()
	{
		do_action( 'wpe_admin_init' );
	}

	public static function start ()
	{
		//Admin::constructor();
		Utility\Requesting::constructor();
		Utility\RegisterAssets::constructor();
		Utility\Enqueue::constructor();
		Utility\ScriptLoader::constructor();
		Theme\Setup::constructor();
		//Utility\RestApi::constructor();
	}

	public static function options ()
	{
		return get_option( WPE_SETTINGS, [] );
	}

	public static function options_update ( array $data )
	{
		$options = wp_parse_args( $data, self::options() );
		$boolean = update_option( WPE_SETTINGS, $options );
		return $boolean;
	}
}
