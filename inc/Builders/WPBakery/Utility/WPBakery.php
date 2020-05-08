<?php

namespace WPEssential\Builders\WPBakery\Utility;

use WPEssential\Builders\WPBakery\Controls\Heading;
use WPEssential\Builders\WPBakery\Controls\Number;
use WPEssential\Builders\WPBakery\Implement\ClassInit as Implement;
use WPEssential\Builders\WPBakery\Shortcodes\Post;

class WPBakery implements Implement
{
	public static function constructor ()
	{
		add_action( 'vc_before_init', [ __CLASS__, 'registry' ], 9999 );
	}

	public static function registry ()
	{
		self::load_classes();
	}

	public static function load_classes ()
	{
		Number::constructor();
		Heading::constructor();

		$elements = apply_filters( 'wpe/wpbakery/shortcodes', [] );
		foreach ( $elements as $class_name ) {
			if ( class_exists( $class_name ) ) {
				new $class_name();
			}
		}
	}
}
