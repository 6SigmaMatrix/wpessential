<?php

namespace WPEssential\Plugins\Api\WordPress;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Themes extends WordPress
{
	/**
	 * Get the route.
	 *
	 * @var string
	 */
	protected $route = '/themes';
	/**
	 * Get the version.
	 *
	 * @var string
	 */
	protected $ver = '/1.0';
	/**
	 * Get the type like info or update-check.
	 *
	 * @var string
	 */
	protected $type = '/info';
	/**
	 * Get the params.
	 *
	 * @var array
	 */
	protected $params = [ 'action' => 'query_themes' ];
}
