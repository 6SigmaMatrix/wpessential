<?php

namespace WPEssential\Plugins\Admin;

final class Index
{
	public static function constructor ()
	{
		self::register();
	}

	public static function register ()
	{
		add_action( 'wpe/register/admin_pages/main_nav', function ( $list )
		{
			$menu_args = [
				apply_filters( 'wpe/register/admin_pages/index',
					[
						'page_title' => __( 'WPEssential', 'wpessential' ),
						'menu_title' => __( 'WPEssential', 'wpessential' ),
						'capability' => 'manage_options',
						'menu_slug'  => 'wpessential',
						'callback'   => [ 'WPEssential\\Plugins\\Admin\\View', 'index' ],
						'icon_url'   => '',
						'position'   => 2
					]
				)
			];

			return wp_parse_args( $list, $menu_args );
		} );

		add_action( 'wpe/register/admin_pages/submenu_nav', function ( $list )
		{
			$menu_args = [
				apply_filters( 'wpe/register/admin_pages/index',
					[
						'parent_slug' => 'wpessential',
						'page_title'  => __( 'Dashboard', 'wpessential' ),
						'menu_title'  => __( 'Dashboard', 'wpessential' ),
						'capability'  => 'manage_options',
						'menu_slug'   => 'wpessential',
						'callback'    => [ 'WPEssential\\Plugins\\Admin\\View', 'index' ],
						'position'    => 0
					]
				)
			];

			return wp_parse_args( $list, $menu_args );
		} );
	}
}
