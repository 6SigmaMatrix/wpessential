<?php

namespace WPEssential\Plugins\Builders\Fields;

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use function defined;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Typography extends Field
{

	public function __construct ( string $key = '', string $selector = '' )
	{
		parent::__construct( $key, $selector );
		$this->common_key = $key;
	}

	public function typography ()
	{
		return [
			$this->color(),
			$this->family(),
			$this->size(),
			$this->weight(),
			$this->kerning(),
			$this->variant_cps(),
			$this->transform(),
			$this->decoration(),
			$this->line_height(),
			$this->letter_spacing(),
			$this->word_spacing(),
			$this->text_stroke(),
			$this->text_stroke_color(),
			$this->text_shadow(),
			$this->blend_mode(),
		];
	}

	public function color ()
	{
		return Color::make( __( 'Text Color' ), "common_{$this->common_key}_font_color" )
		            ->global( [ 'default' => Global_Colors::COLOR_PRIMARY ] )
		            ->wrap_selectors( [ $this->selector => 'color: {{VALUE}}' ] );
	}

	public function family ()
	{
		return FontFamily::make( __( 'Family' ), "common_{$this->common_key}_font_family" )
		                 ->global( [ 'default' => Global_Typography::TYPOGRAPHY_PRIMARY ] )
		                 ->wrap_selectors( [ $this->selector => 'font-family: "{{VALUE}}" Sans-serif;' ] )
		                 ->label_block( true );
	}

	public static function make ( ...$arguments )
	{
		return new static( ...$arguments );
	}

	public function size ()
	{
		return Slider::make( __( 'Size' ), "common_{$this->common_key}_font_size" )
		             ->size_unit( array_keys( wpe_style_unites() ) )
		             ->range( [
			             'px' => [
				             'min' => 1,
			             ],
			             'vw' => [
				             'min' => 0.1
			             ],
		             ] )
		             ->wrap_selectors( [ $this->selector => 'font-size: {{SIZE}}{{UNIT}}' ] )
		             ->responsive( true );
	}

	public function kerning ()
	{
		return Select::make( __( 'Kerning' ), "common_{$this->common_key}_font_kerning" )
		             ->options( wpe_font_kerning() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'font-kerning: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function variant_cps ()
	{
		return Select::make( __( 'Variant Capitals' ), "common_{$this->common_key}_font_variant_cap" )
		             ->options( wpe_font_variant_capitals() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'font-variant: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function weight ()
	{
		return Select::make( __( 'Weight' ), "common_{$this->common_key}_font_weight" )
		             ->options( wpe_font_weights() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'font-weight: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function transform ()
	{
		return Select::make( __( 'Transform' ), "common_{$this->common_key}_font_cases" )
		             ->options( wpe_font_cases() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'text-transform: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function style ()
	{
		return Select::make( __( 'Style' ), "common_{$this->common_key}_font_style" )
		             ->options( wpe_font_style() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'font-style: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function decoration ()
	{
		return Select::make( __( 'Decoration' ), "common_{$this->common_key}_font_decoration" )
		             ->options( wpe_font_decoration() )
		             ->responsive( true )
		             ->wrap_selectors( [ $this->selector => 'text-decoration: {{VALUE}}' ] )
		             ->label_block( true );
	}

	public function line_height ()
	{
		return Slider::make( __( 'Line Height' ), "common_{$this->common_key}_font_line_height" )
		             ->size_unit( array_keys( wpe_style_unites() ) )
		             ->range( [
			             'px' => [
				             'min' => 1,
			             ],
			             'vw' => [
				             'min' => 0.1
			             ],
		             ] )
		             ->wrap_selectors( [ $this->selector => 'line-height: {{SIZE}}{{UNIT}}' ] )
		             ->responsive( true );
	}

	public function letter_spacing ()
	{
		return Slider::make( __( 'Letter Spacing' ), "common_{$this->common_key}_font_letter_spacing" )
		             ->size_unit( array_keys( wpe_style_unites() ) )
		             ->range( [
			             'px' => [
				             'min' => 1,
			             ],
			             'vw' => [
				             'min' => 0.1
			             ],
		             ] )
		             ->wrap_selectors( [ $this->selector => 'letter-spacing: {{SIZE}}{{UNIT}}' ] )
		             ->responsive( true );
	}


	public function word_spacing ()
	{
		return Slider::make( __( 'Word Spacing' ), "common_{$this->common_key}_font_word_spacing" )
		             ->size_unit( array_keys( wpe_style_unites() ) )
		             ->range( [
			             'px' => [
				             'min' => 1,
			             ],
			             'vw' => [
				             'min' => 0.1
			             ],
		             ] )
		             ->wrap_selectors( [ $this->selector => 'word-spacing: {{SIZE}}{{UNIT}}' ] )
		             ->responsive( true );
	}

	public function text_stroke ()
	{
		return Slider::make( __( 'Text Stroke' ), "common_{$this->common_key}_font_text_stroke" )
		             ->size_unit( array_keys( wpe_style_unites() ) )
		             ->wrap_selectors( [ $this->selector => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}}; stroke-width: {{SIZE}}{{UNIT}};' ] )
		             ->responsive( true );
	}

	public function text_stroke_color ()
	{
		return Color::make( __( 'Text Stroke Color' ), "common_{$this->common_key}_font_text_stroke_color" )
		            ->global( [ 'default' => Global_Colors::COLOR_PRIMARY ] )
		            ->wrap_selectors( [ $this->selector => '-webkit-text-stroke-color: {{VALUE}}; stroke: {{VALUE}};' ] );
	}

	public function text_shadow ()
	{
		return TextShadow::make( __( 'Text Shadow' ), "common_{$this->common_key}_font_shadow" )
		                 ->wrap_selectors( [ $this->selector => 'text-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{COLOR}};' ] );
	}

	public function blend_mode ()
	{
		return Select::make( __( 'Blend Mode', 'wpessential' ), "common_{$this->common_key}_font_blend_mode" )
		             ->options( wpe_blend_mode() )
		             ->label_block( true )
		             ->wrap_selectors( [ $this->selector => 'mix-blend-mode: {{VALUE}}' ] )
		             ->responsive( true );
	}
}
