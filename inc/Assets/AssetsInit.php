<?php

namespace WPEssential\Plugins\Assets;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class AssetsInit
{
	public static function constructor ()
	{
		self::run();
	}

	private static function run ()
	{
		Tgm::constructor();
		RegisterAssets::constructor();
		ScriptLoader::constructor();
		Enqueue::constructor();
	}
}
