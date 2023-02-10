<?php

namespace WPEssential\Plugins\Theme;

final class Setup
{
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
						add_action( 'wp_head', function ()
						{
							?>
							<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--X-UA-Compatible is a document mode meta tag that allows web authors to choose what version of Internet Explorer the page should be rendered as-->
							<meta name="generator" content="WPEssential <?php echo WPE_VERSION; ?>"/>
							<meta name="HandheldFriendly" content="True"><!--Include this tag in the head element of every page. This tells your M-Business Sync Server that you have optimized your page for being viewed on a mobile device. Without it, tables, JavaScript and certain image tags will be dropped when the page is downloaded.--->
							<?php
						} );
						add_action( 'wp_body_open', 'wpe_header_template', 10 );
						self::theme_clases();
						self::setup_actions();
						do_action( 'wpe_before_theme_setup' );
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
		$theme_info = wpe_theme_info();

		$theme_constant = [];
		if ( $theme_info->Parent ) {
			$theme_constant = [
				"{$theme_info->Parent->UcwordsNameHyphen}_T_DIR" => get_parent_theme_file_path() . '/',
				"{$theme_info->Parent->UcwordsNameHyphen}_T_URI" => get_parent_theme_file_uri() . '/',
				"{$theme_info->Parent->UcwordsNameHyphen}_T_VER" => $theme_info->Version,
			];
		}

		$theme_constant = wp_parse_args( [
			"{$theme_info->UcwordsNameHyphen}_T_VER" => $theme_info->Version,
			"{$theme_info->UcwordsNameHyphen}_T_DIR" => get_stylesheet_directory() . '/',
			"{$theme_info->UcwordsNameHyphen}_T_URI" => get_stylesheet_directory_uri() . '/',
		], $theme_constant );

		$theme_constant = array_filter( apply_filters( 'wpe/theme_constant', $theme_constant ) );
		if ( ! empty( $theme_constant ) ) {
			foreach ( $theme_constant as $constant => $key ) {
				wpe_maybe_define_constant( $constant, $key );
			}
		}

	}

	public static function theme_clases ()
	{
		$theme_info = wpe_theme_info();
		if ( $theme_info->Parent ) {
			$theme_loader = "\\WPEssential\\Theme\\{$theme_info->Parent->NameSpace}\\Loader";
			if ( class_exists( $theme_loader ) ) {
				$theme_loader::constructor();
			}
		}
		$theme_loader = "\\WPEssential\\Theme\\{$theme_info->NameSpace}\\Loader";
		if ( class_exists( $theme_loader ) ) {
			$theme_loader::constructor();
		}
	}

	public static function setup_actions ()
	{
		$action_list = apply_filters( 'wpe/theme/after_setup/hooks', [
			'Support'       => [ 'callback' => [ 'WPEssential\Plugins\Theme\Support', 'constructor' ], 'priority' => 10 ],
			'Sidebars'      => [ 'callback' => [ 'WPEssential\Plugins\Theme\Sidebars', 'constructor' ], 'priority' => 20 ],
			'Widgets'       => [ 'callback' => [ 'WPEssential\Plugins\Theme\Widgets', 'constructor' ], 'priority' => 30 ],
			'Images'        => [ 'callback' => [ 'WPEssential\Plugins\Theme\Images', 'constructor' ], 'priority' => 40 ],
			'Menus'         => [ 'callback' => [ 'WPEssential\Plugins\Theme\Menus', 'constructor' ], 'priority' => 50 ],
			'Tgm'           => [ 'callback' => [ 'WPEssential\Plugins\Utility\Tgm', 'constructor' ], 'priority' => 60 ],
			'OptionsPannel' => [ 'callback' => [ 'WPEssential\Plugins\Utility\OptionsPannel', 'constructor' ], 'priority' => 70 ],
		] );

		if ( ! empty( $action_list ) ) {
			foreach ( $action_list as $key => $action ) {
				if ( ! wpe_array_get( $action, 'callback' ) && ! wpe_array_get( $action, 'priority' ) ) {
					wp_die( __( "(wpe/theme/after_setup/hooks) => {$key} have no callback or priority", 'wpessential' ) );
				}
				add_action( 'wpe_before_theme_setup', wpe_array_get( $action, 'callback' ), wpe_array_get( $action, 'priority' ) );
			}
		}
	}
}
