<?php

namespace WPEssential\Plugins\Fields;

use function defined;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class CTypography extends Field
{
	public function __construct ( string $key = '', string $selector = '' )
	{
		$this->common_key = $key;
	}

	public function typography ()
	{
		return [
			$this->font_family(),
			$this->font_size(),
			$this->font_kerning(),
			$this->font_variant_cps(),
			$this->font_weight(),
		];
	}

	public function font_family ()
	{
		return FontFamily::make( __( 'Family' ), "common_{$this->common_key}_font_family" );
		//->selectors( $this->selector );
	}

	public static function make ( ...$arguments )
	{
		return new static( ...$arguments );
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

	public function font_kerning ()
	{
		return Select::make( __( 'Kerning' ), "common_{$this->common_key}_font_kerning" )
		             ->options( wpe_font_kerning() );
		//->selectors( $this->selector );
	}

	public function font_variant_cps ()
	{
		return Select::make( __( 'Variant Capitals' ), "common_{$this->common_key}_font_variant_cap" )
		             ->options( wpe_font_variant_capitals() );
		//->selectors( $this->selector );
	}

	public function font_weight ()
	{
		return Select::make( __( 'Weight' ), "common_{$this->common_key}_font_weight" )
		             ->options( wpe_font_weights() );
		//->selectors( $this->selector );
	}
}
