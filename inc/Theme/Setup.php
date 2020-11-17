<?php

namespace WPEssential\Plugins\Theme;

use WPEssential\Plugins\Utility\OptionsPannel;
use WPEssential\Plugins\Utility\Tgm;

final class Setup
{
	public static function constructor ()
	{
		add_action(
			'wpe_setup_theme',
			function ()
			{
				add_action( 'wp_body_open', 'header_template', 10 );
				add_action( 'after_setup_theme', [ __CLASS__, 'register' ], 2000 );
				add_action( 'wp_footer', 'footer_template', 0 );
			},
			1000
		);
	}

	public static function constants ()
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

	public static function register ()
	{
		do_action( 'wpe_before_theme_setup' );
		Support::constructor();
		Images::constructor();
		Sidebars::constructor();
		Widget::constructor();
		Editor::constructor();
		Menus::constructor();
		self::constants();
		Tgm::constructor();
		OptionsPannel::constructor();
	}
}
