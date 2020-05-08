<?php

namespace WPEssential\Builders\WordPress\Utility;

use WPEssential\Builders\WordPress\Implement\ClassInit as Implement;

class WordPress implements Implement
{
	public static function constructor ()
	{
		self::load_classes();
		self::registry();
	}

	public static function registry ()
	{
		$list = apply_filters( 'wpe/wordpress/shortcodes', [] );
		if ( !$list ) {
			return;
		}
		foreach ( $list as $tag => $function ) {
			add_shortcode( $tag, $function );
		}
	}

	public static function load_classes ()
	{
		$list = apply_filters( 'wpe/wordpress/load/shortcodes', [] );
		if ( !$list ) {
			return;
		}
		foreach ( $list as $class => $property ) {
			if ( class_exists( $class ) && method_exists( $class, $property ) ) {
				call_user_func( [ $class, $property ] );
			}
		}
	}
}
