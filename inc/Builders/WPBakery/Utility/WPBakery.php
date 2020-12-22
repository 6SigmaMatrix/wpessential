<?php

namespace WPEssential\Plugins\Builders\WPBakery\Utility;

use WPEssential\Plugins\Builders\WPBakery\Controls\Heading;
use WPEssential\Plugins\Builders\WPBakery\Controls\Number;
use WPEssential\Plugins\Builders\WPBakery\Controls\Select;
use WPEssential\Plugins\Implement\ShortcodeInit;
use WPEssential\Plugins\Loader;

final class WPBakery implements ShortcodeInit
{
	public static function constructor ()
	{
		PageTemplates::constructor();
		Number::constructor();
		Heading::constructor();
		Select::constructor();
		self::registry_widget();
	}

	public static function registry_widget ()
	{
		Loader::editor( 'wpbakery' );
		$elements = apply_filters( 'wpe/wpbakery/shortcodes', [] );
		foreach ( $elements as $class_name ) {
			if ( class_exists( $class_name ) ) {
				new $class_name();
			}
		}
	}
}
