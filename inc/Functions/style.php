<?php

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'wpe_style_unites' ) ) {
	/**
	 * Style unites.
	 * px:pixels (1px = 1/96th of 1in).
	 * em:Relative to the font-size of the element (2em means 2 times the size of the current font).
	 * ex:Relative to the x-height of the current font (rarely used).
	 * ch:Relative to width of the "0" (zero).
	 * rem:Relative to font-size of the root element.
	 * vm:Relative to 1% of the width of the viewport*.
	 * vh:Relative to 1% of the height of the viewport*.
	 * vmin:Relative to 1% of viewport's* smaller dimension.
	 * vmax:Relative to 1% of viewport's* larger dimension.
	 * %:Relative to the parent element.
	 * cm:centimeters.
	 * mm:millimeters.
	 * in:inches (1in = 96px = 2.54cm).
	 * pt:points (1pt = 1/72 of 1in).
	 * pc:picas (1pc = 12 pt).
	 *
	 * @return array
	 */
	function wpe_style_unites ()
	{
		return apply_filters(
			'wpe/style/unites',
			[
				'px'   => __( 'PX', 'wpessential' ),
				'em'   => __( 'EM', 'wpessential' ),
				'ex'   => __( 'EX', 'wpessential' ),
				'ch'   => __( 'CH', 'wpessential' ),
				'rem'  => __( 'REM', 'wpessential' ),
				'vw'   => __( 'VW', 'wpessential' ),
				'vh'   => __( 'VH', 'wpessential' ),
				'vmin' => __( 'VMIN', 'wpessential' ),
				'vmax' => __( 'VMAX', 'wpessential' ),
				'%'    => __( '%', 'wpessential' ),
				'cm'   => __( 'CM', 'wpessential' ),
				'mm'   => __( 'MM', 'wpessential' ),
				'in'   => __( 'IN', 'wpessential' ),
				'pt'   => __( 'PT', 'wpessential' ),
				'pc'   => __( 'PC', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_transtion_time_unites' ) ) {
	/**
	 * Transtion time unite.
	 * ms:milliseconds.
	 * s:seconds.
	 *
	 * @return array
	 */
	function wpe_transtion_time_unites ()
	{
		return apply_filters( 'wpe/transtion/time/unites', [ 'ms', 's' ] );
	}
}

if ( ! function_exists( 'wpe_border_style' ) ) {
	/**
	 * Border styles.
	 *
	 * @return array
	 */
	function wpe_border_style ()
	{
		return apply_filters(
			'wpe/border/styles',
			[
				''       => __( 'None', 'wpessential' ),
				'solid'  => __( 'Solid', 'wpessential' ),
				'double' => __( 'Double', 'wpessential' ),
				'dotted' => __( 'Dotted', 'wpessential' ),
				'dashed' => __( 'Dashed', 'wpessential' ),
				'groove' => __( 'Groove', 'wpessential' ),
				'ridge'  => __( 'Ridge', 'wpessential' ),
				'inset'  => __( 'Inset', 'wpessential' ),
				'outset' => __( 'Outset', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_generate_css' ) ) {
	/**
	 * Print|Generate CSS.
	 *
	 * @param string $selector The CSS selector.
	 * @param string $style    The CSS style.
	 * @param string $value    The CSS value.
	 * @param string $prefix   The CSS prefix.
	 * @param string $suffix   The CSS suffix.
	 * @param bool   $echo     Echo the styles.
	 *
	 * @return string|void
	 */
	function wpe_generate_css ( string $selector, string $style, string $value, $prefix = '', $suffix = '', $echo = true )
	{
		$return = '';
		/*
		 * Bail early if we have no $selector elements or properties and $value.
		 */
		if ( ! $value || ! $selector ) {
			return;
		}
		$return = sprintf( '%s { %s: %s; }', $selector, $style, $prefix . $value . $suffix );
		if ( $echo ) {
			echo $return;
		}
		return $return;
	}
}

if ( ! function_exists( 'wpe_font_weights' ) ) {
	/**
	 * Font Weights styles.
	 *
	 * @return array
	 */
	function wpe_font_weights ()
	{
		return apply_filters(
			'wpe/font/weights',
			[
				''       => __( 'Default', 'wpessential' ),
				'100'    => __( '100', 'wpessential' ),
				'200'    => __( '200', 'wpessential' ),
				'300'    => __( '300', 'wpessential' ),
				'400'    => __( '400', 'wpessential' ),
				'500'    => __( '500', 'wpessential' ),
				'600'    => __( '600', 'wpessential' ),
				'700'    => __( '700', 'wpessential' ),
				'800'    => __( '800', 'wpessential' ),
				'900'    => __( '900', 'wpessential' ),
				'normal' => __( 'Normal', 'wpessential' ),
				'bold'   => __( 'Bold', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_font_variant_capitals' ) ) {
	/**
	 * Font Variant capitals styles.
	 *
	 * @return array
	 */
	function wpe_font_variant_capitals ()
	{
		return apply_filters(
			'wpe/font/variant/caps',
			[
				'normal'          => __( 'Normal Capitals', 'wpessential' ),
				'small-caps'      => __( 'Small Capitals', 'wpessential' ),
				'all-small-caps'  => __( 'All Small Capitals', 'wpessential' ),
				'petite-caps'     => __( 'Petite Capitals', 'wpessential' ),
				'all-petite-caps' => __( 'All Petite Capitals', 'wpessential' ),
				'unicase'         => __( 'Unicase Capitals', 'wpessential' ),
				'titling-caps'    => __( 'Titling Capitals', 'wpessential' ),
				'initial'         => __( 'Initial Capitals', 'wpessential' ),
				'inherit'         => __( 'Inherit Capitals', 'wpessential' ),
				'unset'           => __( 'Unset Capitals', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_font_kerning' ) ) {
	/**
	 * Font kerning styles.
	 *
	 * @return array
	 */
	function wpe_font_kerning ()
	{
		return apply_filters(
			'wpe/font/kerning',
			[
				'normal' => __( 'Normal Capitals', 'wpessential' ),
				'auto'   => __( 'Auto', 'wpessential' ),
				'none'   => __( 'None', 'wpessential' ),
			]
		);
	}
}
