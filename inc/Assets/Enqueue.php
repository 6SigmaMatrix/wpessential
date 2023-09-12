<?php

namespace WPEssential\Plugins\Assets;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Admin\Settings;
use WPEssential\Plugins\Panel\Config;

final class Enqueue
{

	public static function constructor ()
	{
		add_action( 'wp_head', [ __CLASS__, 'localization' ], 0 );
		add_action( 'admin_head', [ __CLASS__, 'localization' ], 0 );
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'frontend_enqueue' ], 11 );

		add_action( 'admin_enqueue_scripts', [ __CLASS__, 'backend_enqueue' ], 1000, 1 );

		add_action( 'admin_print_scripts-toplevel_page_wpessential', [ __CLASS__, 'admin_page_enqueue' ], 1000 );
		add_action( 'admin_print_scripts-post.php', [ __CLASS__, 'admin_page_enqueue' ], 1000 );
		add_action( 'admin_print_scripts-post-new.php', [ __CLASS__, 'admin_page_enqueue' ], 1000 );

		add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'elementor_editor_after_enqueue' ], 1000 );
	}

	public static function frontend_enqueue ()
	{
		$list = [
			'font-awesome',
			'animate',
			'wpessential',
			'wpessential-blog-post',
			'wpessential-blog-post-res',
			'wpessential-blog-post-color'
		];
		$list = apply_filters( 'wpe/frontend/css', $list );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $style ) {
				wp_enqueue_style( $style );
			}
		}

		$list = [
			'jquery',
			'wpessential'
		];
		$list = apply_filters( 'wpe/frontend/js', $list );

		wp_enqueue_script( $list );
	}

	public static function backend_enqueue ( $hook )
	{
		global $post_type;
		$post_types = Settings::get_value( 'allowed_post_types' );
		$hook       = pathinfo( $hook );
		$hook       = wpe_array_get( $hook, 'filename' );
		if ( \is_array( $post_types ) && \in_array( $hook, $post_types, true ) ) {
			$list = apply_filters( 'wpe/backend/css', [] );
			$list = array_filter( $list );
			if ( $list ) {
				foreach ( $list as $style ) {
					wp_enqueue_style( $style );
				}
			}

			$list = apply_filters( 'wpe/backend/js', [] );
			wp_enqueue_script( $list );
		}
	}

	public static function admin_page_enqueue ()
	{
		$list = apply_filters( 'wpe/admin_page/css', [
			'google-font-poppins',
			'wpessential',
			'element-ui',
			'element-ui-en',
			'nprogress',
			'wpessential-admin'
		] );
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_style( $list );
		}

		$list = apply_filters( 'wpe/admin_page/js', [
			'vue',
			'vue-router',
			'vuex',
			'element-ui',
			'nprogress',
			'wpessential-admin'
		] );
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_script( $list );
		}

		self::localization( Config::init() );
	}

	public static function localization ( $extend = [] )
	{
		$localization = [
			'ajaxurl'        => admin_url( 'admin-ajax.php' ),
			'web_plug'       => WPE_URL,
			'nonce'          => wp_create_nonce( WPE_NONCE ),
			'ajaxshort'      => '/wp-admin/admin-ajax.php',
			'root'           => home_url( '/' ),
			'ajaxurl_prefix' => WPE_AJAX_PREFIX,
			'is_user_login'  => is_user_logged_in(),
			'allow_register' => get_option( 'users_can_register' ),
		];

		$localization = apply_filters( 'wpe/localization', wp_parse_args( $extend, $localization ) );
		wp_localize_script( 'jquery', 'WPEssential', $localization );
	}

	public static function elementor_editor_after_enqueue ()
	{
		$list = apply_filters(
			'wpe/elementor/editor/after/css',
			[
				'wpessential-elementor-editor',
				/*'wpessential-blog-post',
				'wpessential-blog-post-color',
				'wpessential-blog-post-res'*/
			]
		);
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_style( $list );
		}

		$list = apply_filters( 'wpe/elementor/editor/after/js', [ 'wpessential-elementor-editor' ] );
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_script( $list );
		}
	}
}
