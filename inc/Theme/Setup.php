<?php

namespace WPEssential\Plugins\Theme;

final class Setup
{
	public static function constructor ()
	{
		self::constatns();
		add_action( 'after_setup_theme', [ __CLASS__, 'regiter' ], 2000 );
		add_action( 'wpe/header', [ __CLASS__, 'header_callback' ], 10 );
		add_action( 'wp_body_open', [ __CLASS__, 'header_callback' ], 10 );
		add_action( 'wpe/footer', [ __CLASS__, 'footer_callback' ], 0 );
		add_action( 'wp_footer', [ __CLASS__, 'footer_callback' ], 0 );
	}

	public static function constatns ()
	{
		$theme_info = wp_get_theme();
		$theme_name = str_replace( [ ' ', '-' ], '_', $theme_info->get( 'Name' ) );

		defined( "{$theme_name}_T_VER" ) || define( "{$theme_name}_T_VER", $theme_info->get( 'Version' ) );
		defined( "{$theme_name}_T_DIR" ) || define( "{$theme_name}_T_DIR", get_template_directory() . '/' );
		defined( "{$theme_name}_T_URI" ) || define( "{$theme_name}_T_URI", get_template_directory_uri() . '/' );
		defined( "{$theme_name}_T_FILE_DIR" ) || define( "{$theme_name}_T_FILE_DIR", get_theme_file_path() . '/' );
		defined( "{$theme_name}_T_FILE_URI" ) || define( "{$theme_name}_T_FILE_URI", get_theme_file_uri() . '/' );
	}

	public static function regiter ()
	{
		do_action( 'wpe/after/theme/setup' );
		Support::constructor();
		Images::constructor();
		Sidebars::constructor();
		Widget::constructor();
		Editor::constructor();
		Menus::constructor();
	}

	public static function header_callback ()
	{
		require_once wpe_template_load( 'templates/header/header.php' );
	}

	public static function footer_callback ()
	{
		require_once wpe_template_load( 'templates/footer/footer.php' );
	}
}
