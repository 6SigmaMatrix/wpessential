<?php

namespace WPEssential\Plugins\Builders\WordPress\Utility;

use WPEssential\Plugins\Implement\ShortcodeInit;

final class WordPress implements ShortcodeInit
{
	public static function constructor ()
	{
		PageTemplates::constructor();
		self::registry_widget();
	}

	public static function registry_widget ( $list = '' )
	{
		//global $shortcode_tags;
		$list = apply_filters( 'wpe/wordpress/shortcodes', [
			'Post'    => '\\WPEssential\\Plugins\\Builders\\WordPress\\Shortcodes\\Post',
			'Heading' => '\\WPEssential\\Plugins\\Builders\\WordPress\\Shortcodes\\Heading',
		] );
		$list = array_filter( $list );
		if ( ! $list ) {
			return;
		}
		foreach ( $list as $class ) {
			new $class();
		}
	}
}
