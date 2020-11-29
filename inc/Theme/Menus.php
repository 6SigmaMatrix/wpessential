<?php

namespace WPEssential\Plugins\Theme;

final class Menus
{
	public static function constructor ()
	{
		self::remove();
		self::register();
	}

	public static function register ()
	{
		$menus = apply_filters(
			'wpe/register/menu',
			[
				'primary_menu' => __( 'Primary Menu', 'wpessential' ),
				'footer_menu'  => __( 'Footer Menu', 'wpessential' ),
			]
		);

		$menus = array_filter( $menus );
		if ( $menus && is_array( $menus ) ) {
			register_nav_menus( $menus );
		}
	}

	public static function remove ()
	{
		$menus = apply_filters( 'wpe/remove/menu', [] );
		$menus = array_filter( $menus );
		if ( $menus && is_array( $menus ) ) {
			foreach ( $menus as $menu ) {
				unregister_nav_menu( $menu );
			}
		}
	}
}
