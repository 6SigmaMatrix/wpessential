<?php

namespace WPEssential\Plugins\Theme;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Menus
{
	public static function constructor ()
	{
		self::remove();
		self::register();
	}

	public static function remove ()
	{
		$menus = apply_filters( 'wpe/remove/menu', [] );
		if ( ! empty( $menus ) ) {
			foreach ( $menus as $menu ) {
				unregister_nav_menu( $menu );
			}
		}
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

		if ( ! empty( $menus ) ) {
			register_nav_menus( $menus );
		}
	}
}
