<?php

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Api\WordPress\Stats;

if ( ! function_exists( 'wpe_wp_stats_api_array' ) ) {
	/**
	 * Return the WordPress api in array forum.
	 *
	 * @param string $software Enter the software name to get data from wordpress.org (mysql, php, wordpress).
	 *
	 * @return array
	 */
	function wpe_wp_stats_api_array ( $software = 'wordpress' )
	{
		$stats = Stats::make()->type( $software )->toArray();
		if ( ! empty( $stats ) ) {
			return array_keys( $stats );
		}
		return [];
	}
}

if ( ! function_exists( 'wpe_wp_stats_api_json' ) ) {
	/**
	 * Return the WordPress api in json forum.
	 *
	 * @param string $software Enter the software name to get data from wordpress.org (mysql, php, wordpress).
	 *
	 * @return object
	 */
	function wpe_wp_stats_api_json ( $software = 'wordpress' )
	{
		$stats = Stats::make()->type( $software )->toArray();
		if ( ! empty( $stats ) ) {
			return (object) array_keys( $stats );
		}
		return (object) [];
	}
}

if ( ! function_exists( 'wpe_wp_php_stats_api_array' ) ) {
	/**
	 * Return the PHP stats.
	 *
	 * @return array
	 */
	function wpe_wp_php_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'php' );
	}
}

if ( ! function_exists( 'wpe_wp_php_stats_api_json' ) ) {
	/**
	 * Return the PHP stats.
	 *
	 * @return object
	 */
	function wpe_wp_php_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'php' );
	}
}

if ( ! function_exists( 'wpe_wp_mysql_stats_api_array' ) ) {
	/**
	 * Return the MYSQL stats.
	 *
	 * @return array
	 */
	function wpe_wp_mysql_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'mysql' );
	}
}

if ( ! function_exists( 'wpe_wp_mysql_stats_api_json' ) ) {
	/**
	 * Return the MYSQL stats.
	 *
	 * @return object
	 */
	function wpe_wp_mysql_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'mysql' );
	}
}

if ( ! function_exists( 'wpe_wp_lang_stats_api_array' ) ) {
	/**
	 * Return the Language stats.
	 *
	 * @return array
	 */
	function wpe_wp_lang_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'local' );
	}
}

if ( ! function_exists( 'wpe_wp_lang_stats_api_json' ) ) {
	/**
	 * Return the Language stats.
	 *
	 * @return object
	 */
	function wpe_wp_lang_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'local' );
	}
}
