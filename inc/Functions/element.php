<?php
if ( ! function_exists( 'wpe_heading_tags' ) ) {
	/**
	 * Heading tags.
	 *
	 * @return array.
	 */
	function wpe_heading_tags ()
	{
		return apply_filters(
			'wpe/heading/tags',
			[
				'h1'   => 'H1',
				'h2'   => 'H2',
				'h3'   => 'H3',
				'h4'   => 'H4',
				'h5'   => 'H5',
				'h6'   => 'H6',
				'div'  => 'div',
				'span' => 'span',
				'p'    => 'p',
			]
		);
	}
}

if ( ! function_exists( 'wpe_info_type' ) ) {
	/**
	 * Info type.
	 *
	 * @return array
	 */
	function wpe_info_type ()
	{
		return apply_filters(
			'wpe/info/type',
			[
				''        => __( 'Default', 'wpessential' ),
				'info'    => __( 'Info', 'wpessential' ),
				'success' => __( 'Success', 'wpessential' ),
				'warning' => __( 'Warning', 'wpessential' ),
				'danger'  => __( 'Danger', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_element_size' ) ) {
	/**
	 * Element size.
	 *
	 * @return array
	 */
	function wpe_element_size ()
	{
		return apply_filters(
			'wpe/size',
			[
				'xs'  => __( 'Extra Small', 'wpessential' ),
				'sm'  => __( 'Small', 'wpessential' ),
				'md'  => __( 'Medium', 'wpessential' ),
				'lg'  => __( 'Large', 'wpessential' ),
				'xl'  => __( 'Extra Large', 'wpessential' ),
				'xxl' => __( 'Extra Extra Large', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_blend_mode' ) ) {
	/**
	 * Element blend mode.
	 *
	 * @return array
	 */
	function wpe_blend_mode ()
	{
		return apply_filters(
			'wpe/blend_mode',
			[
				''            => __( 'Normal', 'wpessential' ),
				'multiply'    => 'Multiply',
				'screen'      => 'Screen',
				'overlay'     => 'Overlay',
				'darken'      => 'Darken',
				'lighten'     => 'Lighten',
				'color-dodge' => 'Color Dodge',
				'saturation'  => 'Saturation',
				'color'       => 'Color',
				'difference'  => 'Difference',
				'exclusion'   => 'Exclusion',
				'hue'         => 'Hue',
				'luminosity'  => 'Luminosity',
			]
		);
	}
}

if ( ! function_exists( 'wpe_allowed_html' ) ) {
	/**
	 * Element allowed html.
	 *
	 * @return array
	 */
	function wpe_allowed_html ()
	{
		global $allowed_post_tags;
		$allowed_atts                    = [
			'align'      => [],
			'class'      => [],
			'id'         => [],
			'dir'        => [],
			'lang'       => [],
			'style'      => [],
			'xml:lang'   => [],
			'src'        => [],
			'alt'        => [],
			'href'       => [],
			'rel'        => [],
			'rev'        => [],
			'target'     => [],
			'novalidate' => [],
			'type'       => [],
			'value'      => [],
			'name'       => [],
			'tabindex'   => [],
			'action'     => [],
			'method'     => [],
			'for'        => [],
			'width'      => [],
			'height'     => [],
			'data'       => [],
			'title'      => [],
		];
		$allowed_post_tags[ 'form' ]     = $allowed_atts;
		$allowed_post_tags[ 'label' ]    = $allowed_atts;
		$allowed_post_tags[ 'input' ]    = $allowed_atts;
		$allowed_post_tags[ 'textarea' ] = $allowed_atts;
		$allowed_post_tags[ 'iframe' ]   = $allowed_atts;
		$allowed_post_tags[ 'script' ]   = $allowed_atts;
		$allowed_post_tags[ 'style' ]    = $allowed_atts;
		$allowed_post_tags[ 'strong' ]   = $allowed_atts;
		$allowed_post_tags[ 'small' ]    = $allowed_atts;
		$allowed_post_tags[ 'table' ]    = $allowed_atts;
		$allowed_post_tags[ 'span' ]     = $allowed_atts;
		$allowed_post_tags[ 'abbr' ]     = $allowed_atts;
		$allowed_post_tags[ 'code' ]     = $allowed_atts;
		$allowed_post_tags[ 'pre' ]      = $allowed_atts;
		$allowed_post_tags[ 'div' ]      = $allowed_atts;
		$allowed_post_tags[ 'img' ]      = $allowed_atts;
		$allowed_post_tags[ 'h1' ]       = $allowed_atts;
		$allowed_post_tags[ 'h2' ]       = $allowed_atts;
		$allowed_post_tags[ 'h3' ]       = $allowed_atts;
		$allowed_post_tags[ 'h4' ]       = $allowed_atts;
		$allowed_post_tags[ 'h5' ]       = $allowed_atts;
		$allowed_post_tags[ 'h6' ]       = $allowed_atts;
		$allowed_post_tags[ 'ol' ]       = $allowed_atts;
		$allowed_post_tags[ 'ul' ]       = $allowed_atts;
		$allowed_post_tags[ 'li' ]       = $allowed_atts;
		$allowed_post_tags[ 'em' ]       = $allowed_atts;
		$allowed_post_tags[ 'hr' ]       = $allowed_atts;
		$allowed_post_tags[ 'br' ]       = $allowed_atts;
		$allowed_post_tags[ 'tr' ]       = $allowed_atts;
		$allowed_post_tags[ 'td' ]       = $allowed_atts;
		$allowed_post_tags[ 'p' ]        = $allowed_atts;
		$allowed_post_tags[ 'a' ]        = $allowed_atts;
		$allowed_post_tags[ 'b' ]        = $allowed_atts;
		$allowed_post_tags[ 'i' ]        = $allowed_atts;

		return $allowed_post_tags;
	}
}
