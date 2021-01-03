<?php

namespace WPEssential\Plugins\Api\WordPress\Stats;

use WPEssential\Plugins\Utility\Cache;

final class WordPress extends StatsReport
{
	public static function constructor ( $software = 'wordpress' )
	{
		parent::constructor();
		$_software = "{$software}/";
		return call_user_func( [ __CLASS__, $software ], $_software );
	}

	public static function wordpress ( $software )
	{
		$prefix    = Cache::get_cache_prefix( 'wordpres-api' );
		$cache_key = $prefix . 'wp_ver_list';

		$content = wp_cache_get( $cache_key, 'wordpres-api' );
		if ( $content ) {
			return $content;
		}

		$content = wp_remote_get( self::$report . $software . '1.0/' );
		$content = wpe_array_get( $content, 'body' );

		wp_cache_set( $cache_key, $content, 'wordpres-api' );

		return $content;
	}

	public static function php ( $software )
	{
		$prefix    = Cache::get_cache_prefix( 'wordpres-api' );
		$cache_key = $prefix . 'php_ver_list';

		$content = wp_cache_get( $cache_key, 'wordpres-api' );
		if ( $content ) {
			return $content;
		}

		$content = wp_remote_get( parent::$report . $software . '1.0/' );
		$content = wpe_array_get( $content, 'body' );
		wp_cache_set( $cache_key, $content, 'wordpres-api' );

		return $content;
	}

	public static function mysql ( $software )
	{
		$prefix    = Cache::get_cache_prefix( 'wordpres-api' );
		$cache_key = $prefix . 'mysql_ver_list';

		$content = wp_cache_get( $cache_key, 'wordpres-api' );
		if ( $content ) {
			return $content;
		}

		$content = wp_remote_get( parent::$base . $software . '1.0/' );
		$content = wpe_array_get( $content, 'body' );

		wp_cache_set( $cache_key, $content, 'wordpres-api' );

		return $content;
	}
}
