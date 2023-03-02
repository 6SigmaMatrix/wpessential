<?php

namespace WPEssential\Plugins\Builders\WPBakery\Controls;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Select
{
	public static function constructor ()
	{
		vc_add_shortcode_param( 'select', [ __CLASS__, 'html' ] );
	}

	public static function html ( $settings, $value )
	{
		$param_name = wpe_array_get( $settings, 'param_name' );
		$type       = wpe_array_get( $settings, 'type' );
		$options    = wpe_array_get( $settings, 'options' );
		/*Rander the filed HTML in Heredoc PHP format*/
		$options_output = '';
		foreach ( $options as $key => $val ) {
			$selected       = ( $key == $value ) ? 'selected' : '';
			$options_output .= '<option value="' . $key . '" ' . $selected . '>' . $val . '</option>';
		}
		return <<<SELECT
		<select name="$param_name" class="wpb_vc_param_value wpb-input wpb-select $param_name $type">$options_output</select>
		SELECT;
	}
}
