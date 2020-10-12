<?php

namespace WPEssential\Plugins\Builders\KingComposer\Utility;

use WPEssential\Plugins\Implement\ShortcodeInit;

class KingComposer implements ShortcodeInit
{
	public static function constructor ()
	{
		self::registry_widget();
	}

	public static function registry_widget ()
	{
		$elements = apply_filters( 'wpe/kingcomposer/shortcodes', [] );
		foreach ( $elements as $class_name ) {
			if ( class_exists( $class_name ) ) {
				new $class_name();
			}
		}
	}
}
