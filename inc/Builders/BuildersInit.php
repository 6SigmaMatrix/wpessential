<?php

namespace WPEssential\Plugins\Builders;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\Elementor\ElementorInit;
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
	}
}
