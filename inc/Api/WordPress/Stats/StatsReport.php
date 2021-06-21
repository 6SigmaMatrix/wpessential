<?php

namespace WPEssential\Plugins\Api\WordPress\Stats;

use WPEssential\Plugins\Api\WordPress\Base;

abstract class StatsReport extends Base
{
	static $report;

	public static function constructor ()
	{
		self::$report = self::$base . 'stats/';
	}
}
