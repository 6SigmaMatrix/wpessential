<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Builders\Elementor\Utility\Elementor;
use WPEssential\Plugins\Builders\WordPress\Utility\WordPress;

final class BuildersInit
{
	public static function constructor ()
	{
		self::builders();
	}

	private static function builders ()
	{
		WordPress::constructor();

		if ( did_action( 'elementor/loaded' ) ) {
			Elementor::constructor();
		}
	}
}
