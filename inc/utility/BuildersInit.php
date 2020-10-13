<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Builders\Beaver\Utility\Beaver;
use WPEssential\Plugins\Builders\Elementor\Utility\Elementor;
use WPEssential\Plugins\Builders\KingComposer\Utility\KingComposer;
use WPEssential\Plugins\Builders\WordPress\Utility\WordPress;
use WPEssential\Plugins\Builders\WPBakery\Utility\WPBakery;

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

		if ( did_action( 'vc_plugins_loaded' ) ) {
			WPBakery::constructor();
		}
	}
}
