<?php

namespace WPEssential\Plugins\Api\WordPress;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Stats extends WordPress
{
	/**
	 * Get the route.
	 *
	 * @var string
	 */
	protected $route = '/stats';
	/**
	 * Get the version.
	 *
	 * @var string
	 */
	protected $ver = '/1.0';
}
