<?php

namespace WPEssential\Plugins\Theme;

final class Setup
{
	private static $theme_space;

	public static function constructor ()
	{
		add_action(
			'wpe_setup_theme',
			function ()
			{
				add_action(
					'after_setup_theme',
					function ()
					{
						self::constants();
						add_action( 'wp_body_open', 'wpe_header_template', 10 );
						self::theme_clases();
						self::attach_actions();
						self::register();
						add_action( 'wp_footer', 'wpe_footer_template', 0 );
					},
					2000
				);
			},
			1000
		);
	}

	public static function constants ()
	{
		$theme_info        = wpe_theme_info();
		self::$theme_space = $theme_info->NameSpace;
		$theme_constant    = apply_filters( 'wpe/theme/constants', [
			"{$theme_info->UcwordsNameHyphen}_T_VER"      => $theme_info->Version,
			"{$theme_info->UcwordsNameHyphen}_T_DIR"      => get_template_directory() . '/',
			"{$theme_info->UcwordsNameHyphen}_T_FILE_DIR" => get_theme_file_path() . '/',
			"{$theme_info->UcwordsNameHyphen}_T_URI"      => get_template_directory_uri() . '/',
			"{$theme_info->UcwordsNameHyphen}_T_FILE_URI" => get_theme_file_uri() . '/'
		] );

		$theme_constant = apply_filters( 'wpe/theme_constant', $theme_constant );

		$theme_constant = array_filter( $theme_constant );
		if ( $theme_constant && is_array( $theme_constant ) ) {
			foreach ( $theme_constant as $constant => $key ) {
				wpe_maybe_define_constant( $constant, $key );
			}
		}
	}

	public static function theme_clases ()
	{
		$theme_space  = self::$theme_space;
		$theme_loader = "\\WPEssential\\Theme\\$theme_space\\Loader";
		if ( class_exists( $theme_loader ) ) {
			$theme_loader::constructor();
		}
	}

	public static function register ()
	{
		do_action( 'wpe_before_theme_setup' );
	}

	public static function attach_actions ()
	{
		$action_list = apply_filters( 'wpe/theme/after_setup/hooks', [
			'Support'       => [ 'callback' => [ 'WPEssential\Plugins\Theme\Support', 'constructor' ], 'priority' => 10 ],
			'Images'        => [ 'callback' => [ 'WPEssential\Plugins\Theme\Images', 'constructor' ], 'priority' => 20 ],
			'Sidebars'      => [ 'callback' => [ 'WPEssential\Plugins\Theme\Sidebars', 'constructor' ], 'priority' => 30 ],
			'Editor'        => [ 'callback' => [ 'WPEssential\Plugins\Theme\Editor', 'constructor' ], 'priority' => 40 ],
			'Menus'         => [ 'callback' => [ 'WPEssential\Plugins\Theme\Menus', 'constructor' ], 'priority' => 50 ],
			'Tgm'           => [ 'callback' => [ 'WPEssential\Plugins\Utility\Tgm', 'constructor' ], 'priority' => 60 ],
			'OptionsPannel' => [ 'callback' => [ 'WPEssential\Plugins\Utility\OptionsPannel', 'constructor' ], 'priority' => 70 ],
			'Widgets'       => [ 'callback' => [ 'WPEssential\Plugins\Theme\Widgets', 'constructor' ], 'priority' => 80 ]
		] );

		$action_list = array_filter( $action_list );
		if ( ! empty( $action_list ) && $action_list ) {
			foreach ( $action_list as $key => $action ) {
				if ( ! wpe_array_get( $action, 'callback' ) && ! wpe_array_get( $action, 'priority' ) ) {
					wp_die( __( "(wpe/theme/after_setup/hooks) => {$key} have no callback or priority", 'wpessential' ) );
				}
				add_action( 'wpe_before_theme_setup', wpe_array_get( $action, 'callback' ), wpe_array_get( $action, 'priority' ) );
			}
		}
	}
}
