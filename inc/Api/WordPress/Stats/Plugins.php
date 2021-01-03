<?php

namespace WPEssential\Plugins\Api\WordPress\Stats;

final class Plugins extends StatsReport
{
	protected static string $sub_branch = 'plugin/1.0/';

	public static function constructor ( string $slug = 'wpessential', string $type = 'plugin', string $days = '', $callback = '' )
	{
		parent::constructor();
		parent::$base = parent::$base . self::$sub_branch;

		return call_user_func( [ __CLASS__, $type ], $slug, $days, $callback );
	}

	public static function plugin ( $slug )
	{
		$content = wp_remote_get( parent::$base . $slug );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}

	public static function downloads ( $slug, $days, $callback )
	{
		$link = parent::$base . "downloads.php?";
		if ( $days ) {
			$link = $link . "slug={$slug}";
		}

		if ( $days ) {
			$link = $link . "&callback={$callback}";
		}

		$content = wp_remote_get( parent::$branch . $link );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}
}
