<?php

namespace WPEssential\Builders\Beaver\Utility;

use WPEssential\Builders\Beaver\Controls\Hidden;
use WPEssential\Builders\Beaver\Implement\ClassInit as Implement;

class Beaver implements Implement
{
	public static function constructor ()
	{
		self::load_controls();
		self::registry();
	}

	public static function registry ()
	{
		self::load_modules();
	}

	public static function load_modules ()
	{
		$element = apply_filters( 'wpe/beaver/shortcodes', [] );
		if ( $element ) {
			foreach ( $element as $path ) {
				if ( file_exists( $path ) ) {
					include $path;
				}
			}
		}
	}

	public static function load_controls ()
	{
		Hidden::constructor();
	}
}
