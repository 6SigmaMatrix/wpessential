<?php

namespace WPEssential\Plugins\Api\WordPress\Stats;

use WPEssential\Plugins\Api\WordPress\Base;

abstract class StatsReport extends Base
{
	static string $base = 'stats/';

	public static function constructor ()
	{
		self::$base = parent::$base . self::$base;
	}
}
