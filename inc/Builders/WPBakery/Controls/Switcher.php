<?php

namespace WPEssential\Plugins\Builders\WPBakery\Controls;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Switcher
{

	public function __construct ()
	{
		vc_add_shortcode_param( 'switcher', [ __CLASS__, 'fields' ] );
	}

	public static function fields ( $settings, $value )
	{

		$param_name = isset( $settings[ 'param_name' ] ) ? $settings[ 'param_name' ] : '';
		$type       = isset( $settings[ 'type' ] ) ? $settings[ 'type' ] : '';
		$min        = isset( $settings[ 'min' ] ) ? $settings[ 'min' ] : '';
		$max        = isset( $settings[ 'max' ] ) ? $settings[ 'max' ] : '';
		$step       = isset( $settings[ 'step' ] ) ? $settings[ 'step' ] : '';
		$suffix     = isset( $settings[ 'suffix' ] ) ? $settings[ 'suffix' ] : '';
		$class      = isset( $settings[ 'class' ] ) ? $settings[ 'class' ] : '';
		$output     = '<input type="number" min="' . $min . '" max="' . $max . '" step="' . $step . '" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="' . $value . '" style="max-width:100px; margin-right: 10px;" />' . $suffix;
		return $output;
	}

}
