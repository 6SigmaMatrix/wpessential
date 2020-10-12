<?php

namespace WPEssential\Plugins\Builders\WPBakery\Controls;

class Heading
{

	public static function constructor ()
	{
		vc_add_shortcode_param( 'heading', [ __CLASS__, 'html' ] );
	}

	public static function html ( $settings, $value )
	{

		$param_name = wpe_array_get( $settings, 'param_name' );
		$type       = wpe_array_get( $settings, 'type' );
		$data       = wpe_array_get( $settings, 'data' );
		$tag        = wpe_array_get( $settings, 'tag' );

		/*Rander the filed HTML in Heredoc PHP format*/
		return <<<NUMBER
		<$tag class="wpb_vc_param_value $param_name $type">$data</$tag>
		NUMBER;
	}

}
