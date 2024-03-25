<?php

namespace WPEssential\Plugins\Builders;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\WordPressInit;

final class BuildersInit
{
	public static function constructor ()
	{
		self::builders();
	}

	private static function builders ()
	{
		WordPressInit::constructor();
		$editor_list = apply_filters( 'wpe/editors/init', [] );
		if ( ! empty( $editor_list ) ) {
			foreach ( $editor_list as $editor => $callback ) {
				$editor::$callback();
			}
		}
	}
}
