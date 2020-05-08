<?php

namespace WPEssential\Builders\KingComposer\Utility;

use WPEssential\Builders\KingComposer\Implement\ClassInit as Implement;

class KingComposer implements Implement
{
	public static function constructor ()
	{
		self::registry();
	}

	public static function registry ()
	{
		self::load_classes();
	}

	public static function load_classes ()
	{
		$elements = apply_filters( 'wpe/kingcomposer/shortcodes', [] );
		foreach ( $elements as $class_name ) {
			if ( class_exists( $class_name ) ) {
				new $class_name();
			}
		}
	}
}
