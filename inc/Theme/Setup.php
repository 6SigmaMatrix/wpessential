<?php

namespace WPEssential\Plugins\Theme;

use WPEssential\Plugins\Utility\OptionsPannel;
use WPEssential\Plugins\Utility\Tgm;

final class Setup
{
	public static function constructor ()
	{
		add_action( 'wpe_setup_theme', function ()
		{
			self::header();
			self::footer();
			add_action( 'after_setup_theme', [ __CLASS__, 'regiter' ], 2000 );
		}, 1000 );

		add_action( 'wpe_setup_theme', function ()
		{

		}, 100 );
	}

	public static function constatns ()
	{
		$theme_info  = wp_get_theme();
		$theme_name  = str_replace( [ ' ', '-' ], '_', $theme_info->get( 'Name' ) );
		$theme_space = str_replace( [ ' ', '_', '-' ], '', $theme_name );

		$theme_constant = apply_filters( 'wpe/theme/constants', [
			"{$theme_name}_T_VER"      => $theme_info->get( 'Version' ),
			"{$theme_name}_T_DIR"      => get_template_directory() . '/',
			"{$theme_name}_T_FILE_DIR" => get_theme_file_path() . '/',
			"{$theme_name}_T_URI"      => get_template_directory_uri() . '/',
			"{$theme_name}_T_FILE_URI" => get_theme_file_uri() . '/'
		] );

		$theme_constant = array_filter( $theme_constant );
		if ( $theme_constant && is_array( $theme_constant ) ) {
			foreach ( $theme_constant as $constant => $key ) {
				defined( $constant ) || define( $constant, $key );
			}
		}

		$theme_loader = "\\WPEssential\\Theme\\$theme_space\\Loader";
		if ( class_exists( $theme_loader ) ) {
			$theme_loader::constructor();
		}
	}

	public static function regiter ()
	{
		do_action( 'wpe_before_theme_setup' );
		Support::constructor();
		Images::constructor();
		Sidebars::constructor();
		Widget::constructor();
		Editor::constructor();
		Menus::constructor();
		self::constatns();
		Tgm::constructor();
		OptionsPannel::constructor();
	}

	public static function header ()
	{
		add_action( 'wpe_header', [ __CLASS__, 'header_logo_callback' ], 10 );
		add_action( 'wpe_header', [ __CLASS__, 'header_menu_callback' ], 20 );
		add_action( 'wp_body_open', [ __CLASS__, 'header_callback' ], 10 );
	}

	public static function header_logo_callback ()
	{
		require_once wpe_template_load( 'templates/header/branding/logo.php' );
	}

	public static function header_menu_callback ()
	{
		require_once wpe_template_load( 'templates/header/branding/menu.php' );
	}

	public static function header_callback ()
	{
		require_once wpe_template_load( 'templates/header/header.php' );
	}

	public static function footer ()
	{
		add_action( 'wpe_footer', [ __CLASS__, 'footer_menu_callback' ], 10 );
		add_action( 'wpe_footer', [ __CLASS__, 'footer_copyright_callback' ], 20 );
		add_action( 'wp_footer', [ __CLASS__, 'footer_callback' ], 0 );
	}

	public static function footer_callback ()
	{
		require_once wpe_template_load( 'templates/footer/footer.php' );
	}

	public static function footer_menu_callback ()
	{
		require_once wpe_template_load( 'templates/footer/branding/menu.php' );
	}

	public static function footer_copyright_callback ()
	{
		require_once wpe_template_load( 'templates/footer/branding/copyright.php' );
	}
}
