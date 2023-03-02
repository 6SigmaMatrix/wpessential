<?php
/*
 * Copyright (c) 2021. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Builders\Helper\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Fields\FontFamily;
use WPEssential\Plugins\Fields\Slider;

trait CTypography
{
	public function typography ( $key = '' )
	{
		$this->common_key = $key;

		return [
			$this->font_family(),
			$this->font_size()
		];
	}

	public function font_family ()
	{
		return FontFamily::make( __( 'Family' ), "common_{$this->common_key}_font_family" );
		//->selectors( $this->selector );
	}

	public function font_size ()
	{
		return Slider::make( __( 'Size' ), "common_{$this->common_key}_font_size" )
					 ->sizeUnit( [ 'px', 'em', 'rem', 'vw' ] )
					 ->range( [
						 'px' => [
							 'min' => 1,
							 'max' => 200,
						 ],
						 'vw' => [
							 'min'  => 0.1,
							 'max'  => 10,
							 'step' => 0.1,
						 ],
					 ] )
					 ->responsive( true );
		//->selectors( $this->selector );
	}
}
