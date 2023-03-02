<?php

namespace WPEssential\Plugins\Api\Wpessential;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

abstract class Wpessential
{
	//protected $base_url = 'https://wpessential.org/wpe-api-json/route/';
	protected static $base_url = 'http://wpessential/wpe-api-json/route';
	/**
	 * Get the route.
	 *
	 * @var string
	 */
	protected static $route;
	/**
	 * Get the namespace.
	 *
	 * @var string
	 */
	protected static $namespace = '/wpessential';
	/**
	 * Get the params.
	 *
	 * @var array
	 */
	protected static $params;

	public static function fetch ()
	{
		return wpe_get_data_by_url( self::$base_url . self::$namespace . self::$route, self::$params );
	}

	public static function post ()
	{
		return wpe_post_data_by_url( self::$base_url . self::$namespace . self::$route, self::$params );
	}
}
