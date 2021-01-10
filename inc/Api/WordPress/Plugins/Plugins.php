<?php

namespace WPEssential\Plugins\Api\WordPress\Plugins;

use WPEssential\Plugins\Api\WordPress\Base;

abstract class Plugins extends Base
{
	static string $report;

	public static function constructor ()
	{
		self::$report = self::$base . 'plugins/';
	}
}
