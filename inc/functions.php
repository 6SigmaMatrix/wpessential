<?php
/**
 * Retrive the values from given array|object.
 *
 * @return array|string|bool|object
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_get' ) ) {
	function wpe_get ( $var, $key, $def = null )
	{
		if ( is_object( $var ) ) {
			$var = (array) $var;
		}
		return \WPEssential\Utility\WPEssentialArray::get( $var, $key, $def );
	}

}

/**
 * Retrive|Find the file location in themes and plugins.
 *
 * @return string
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_template_url' ) ) {
	function wpe_template_url ( $path )
	{
		$find_in_theme = apply_filters( 'wpe/template_url', get_theme_file_path( $path ) );
		if ( file_exists( $find_in_theme ) ) {
			return $find_in_theme;
		}
		$find_in_theme = WPE_DIR . "/{$path}";
		if ( $find_in_theme ) {
			return $find_in_theme;
		}
		return WP_PLUGIN_DIR . "/{$path}";
	}

}

/**
 * Attach the error in WP_Error class.
 *
 * @return string|array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_send_error' ) ) {
	function wpe_send_error ( $error )
	{
		return new \WP_Error( '', $error );
	}
}

/**
 * Retrive|Printe the given data.
 *
 * @return string|array|object|bool
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_error' ) ) {
	function wpe_error ( $data )
	{
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
		exit;
	}
}

/**
 * Set style unite.
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
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_style_unites' ) ) {
	function wpe_style_unites ()
	{
		return apply_filters( 'wpe/style/unites', [
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
		] );
	}
}

/**
 * Set transtion time unite.
 * ms:milliseconds.
 * s:seconds.
 *
 * @return array.
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_transtion_time_unites' ) ) {
	function wpe_transtion_time_unites ()
	{
		return apply_filters( 'wpe/transtion/time/unites', [ 'ms', 's' ] );
	}
}

/**
 * Retrive the heading tags.
 *
 * @return array.
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_heading_tags' ) ) {
	function wpe_heading_tags ()
	{
		return apply_filters( 'wpe/heading/tags', [
			'h1'   => 'H1',
			'h2'   => 'H2',
			'h3'   => 'H3',
			'h4'   => 'H4',
			'h5'   => 'H5',
			'h6'   => 'H6',
			'div'  => 'div',
			'span' => 'span',
			'p'    => 'p',
		] );
	}
}

/**
 * Retrive the border styles.
 *
 * @return array.
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_border_style' ) ) {
	function wpe_border_style ()
	{
		return apply_filters( 'wpe/border/styles', [
			''       => __( 'None', 'tci-uet' ),
			'solid'  => __( 'Solid', 'tci-uet' ),
			'double' => __( 'Double', 'tci-uet' ),
			'dotted' => __( 'Dotted', 'tci-uet' ),
			'dashed' => __( 'Dashed', 'tci-uet' ),
			'groove' => __( 'Groove', 'tci-uet' ),
			'ridge'  => __( 'Ridge', 'tci-uet' ),
			'inset'  => __( 'Inset', 'tci-uet' ),
			'outset' => __( 'Outset', 'tci-uet' ),
		] );
	}
}
