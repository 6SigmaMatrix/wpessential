<?php

namespace WPEssential\Plugins;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Admin\AdminInit;
use WPEssential\Plugins\Libraries\TermDescriptionEditor\TermDescriptionEditor;
use WPEssential\Plugins\Requesting\RequestingInit;
use WPEssential\Plugins\Theme\Setup;
use WPEssential\Plugins\Utility\BuildersInit;
use WPEssential\Plugins\Utility\DupplicatePost;
use WPEssential\Plugins\Utility\Editor;
use WPEssential\Plugins\Utility\Enqueue;
use WPEssential\Plugins\Utility\PageTemplates;
use WPEssential\Plugins\Utility\RegisterAssets;
use WPEssential\Plugins\Utility\RegisterPostStatus;
use WPEssential\Plugins\Utility\RestApi;
use WPEssential\Plugins\Utility\ScriptLoader;
use WPEssential\Plugins\Utility\Tgm;

final class Loader
{
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
	 *
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
		add_action( 'init', [ __CLASS__, 'init' ], 1000 );
		add_action( 'admin_init', [ __CLASS__, 'admin_init' ], 1000 );
		add_action( 'wp_loaded', [ __CLASS__, 'wp_loaded' ], 1000 );
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

	public static function autoload ()
	{
		$theme_info = wpe_theme_info();
		$psr        = [];

		if ( $theme_info->Parent ) {
			$psr[ "WPEssential\\Theme\\{$theme_info->Parent->NameSpace}\\" ] = get_parent_theme_file_path() . '/inc/';
		}
		$psr[ "WPEssential\\Theme\\{$theme_info->NameSpace}\\" ] = get_stylesheet_directory() . '/inc/';

		$class_loader = require WPE_DIR . 'vendor/autoload.php';

		foreach ( $psr as $prefix => $paths ) {
			$class_loader->addPsr4( $prefix, $paths );
		}
	}

	public static function start ()
	{
		RestApi::constructor();
		RegisterAssets::constructor();
		Enqueue::constructor();
		AdminInit::constructor();
		RequestingInit::constructor();
		ScriptLoader::constructor();
		Setup::constructor();
		DupplicatePost::constructor();
		Editor::constructor();
		if ( true === WPE_TGM ) {
			Tgm::constructor();
		}
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

	public static function init ()
	{
		do_action( 'wpessential_init' );
		load_plugin_textdomain( 'wpessential', false, WPE_DIR . '/language' );
		RegisterPostStatus::constructor();
		BuildersInit::constructor();
		PageTemplates::constructor();
	}

	public static function admin_init ()
	{
		do_action( 'wpessential_admin_init' );
	}

	public static function wp_loaded ()
	{
		do_action( 'wpessential_loaded' );
		TermDescriptionEditor::constructor();
	}
}

Loader::constructor();
