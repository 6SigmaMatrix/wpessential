<?php

namespace WPEssential\Plugins\Builders\WPBakery\Controls;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Number
{

	public static function constructor ()
	{
		vc_add_shortcode_param( 'number', [ __CLASS__, 'html' ] );
	}

	public static function html ( $settings, $value )
	{
		$param_name = wpe_array_get( $settings, 'param_name' );
		$type       = wpe_array_get( $settings, 'type' );
		$min        = wpe_array_get( $settings, 'min' );
		$max        = wpe_array_get( $settings, 'max' );
		$step       = wpe_array_get( $settings, 'step' );

		/*Rander the filed HTML in Heredoc PHP format*/
		return <<<NUMBER
		<input type="number" min="$min" max="$max" step="$step" class="wpb_vc_param_value $param_name $type" name="$param_name" value="$value"/>
		NUMBER;
	}
}
