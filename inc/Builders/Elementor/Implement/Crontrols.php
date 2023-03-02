<?php

namespace WPEssential\Plugins\Builders\Elementor\Implement;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

interface Crontrols
{

	public static function constructor ();

	public static function html ( $settings, $value );

}
