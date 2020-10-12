<?php

namespace WPEssential\Plugins\Builders\WordPress\Utility;

use WPEssential\Plugins\Implement\ShortcodeInit;

final class WordPress implements ShortcodeInit
{
	public static function constructor ()
	{
		self::registry_widget();
	}

	public static function registry_widget ()
	{
		//global $shortcode_tags;
		$list = apply_filters( 'wpe/wordpress/shortcodes', [] );
		$list = array_filter( $list );
		if ( ! $list ) {
			return;
		}
		foreach ( $list as $class ) {
			new $class();
		}
	}
}