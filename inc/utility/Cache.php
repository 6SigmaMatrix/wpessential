<?php

namespace WPEssential\Plugins\Utility;

/**
 * Object Cache API
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Object_Cache
 *
 * @package WordPress
 * @subpackage Cache
 */
final class Cache
{
	/**
	 * Get prefix for use with wp_cache_set. Allows all cache in a group to be invalidated at once.
	 *
	 * @param string $group Group of cache to get.
	 * @return string
	 */
	public static function get_cache_prefix ( $group )
	{
		// Get cache key - uses cache key wpe_cache_prefix to invalidate when needed.
		$key    = "wpe_{$group}_cache_prefix";
		$prefix = wp_cache_get( $key, $group );

		if ( false === $prefix ) {
			$prefix = microtime();
			wp_cache_set( $key, $prefix, $group );
		}

		return 'wpe_cache_' . $prefix . '_';
	}

	/**
	 * Increment group cache prefix (invalidates cache).
	 *
	 * @param string $group Group of cache to clear.
	 */
	public static function incr_cache_prefix ( $group )
	{
		self::invalidate_cache_group( $group );
	}

	/**
	 * Invalidate cache group.
	 *
	 * @param string $group Group of cache to clear.
	 * @since 3.9.0
	 */
	public static function invalidate_cache_group ( $group )
	{
		wp_cache_set( 'wpe_' . $group . '_cache_prefix', microtime(), $group );
	}

}