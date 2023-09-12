<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Admin\Settings;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class ExtraFileSupport
{
	public static function constructor ()
	{
		add_filter( 'upload_mimes', [ __CLASS__, 'files' ] );
	}


	/**
	 * Add SVG support
	 *
	 * @since  2.0
	 */
	public static function files ( $mimes )
	{
		if ( Settings::get_value( 'svg_support' ) === 'allow' ) {
			$mimes[ 'svg' ]  = 'image/svg+xml';
			$mimes[ 'svgz' ] = 'image/svg+xml';
		}
		return $mimes;
	}
}
