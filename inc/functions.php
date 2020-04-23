<?php

use WPEssential\Utility\WPEssentialCollection;
use WPEssential\Utility\WPEssentialArr;

/**
 * Create a collection from the given value.
 *
 * @param mixed $value
 * @return WPEssentialCollection
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_collect' ) ) {
	function wpe_collect ( $value = null )
	{
		return new WPEssentialCollection( $value );
	}
}

/**
 * Assign high numeric IDs to a config item to force appending.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'append_config' ) ) {
	function append_config ( array $array )
	{
		$start = 9999;

		foreach ( $array as $key => $value ) {
			if ( is_numeric( $key ) ) {
				$start++;

				$array[ $start ] = WPEssentialArr::pull( $array, $key );
			}
		}

		return $array;
	}
}

/**
 * Add an element to an array using "dot" notation if it doesn't exist.
 *
 * @param array $array
 * @param string $key
 * @param mixed $value
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_add' ) ) {
	function wpe_array_add ( $array, $key, $value )
	{
		return WPEssentialArr::add( $array, $key, $value );
	}
}

/**
 * Collapse an array of arrays into a single array.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_collapse' ) ) {
	function wpe_array_collapse ( $array )
	{
		return WPEssentialArr::collapse( $array );
	}
}

/**
 * Divide an array into two arrays. One with keys and the other with values.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_divide' ) ) {
	function wpe_array_divide ( $array )
	{
		return WPEssentialArr::divide( $array );
	}
}

/**
 * Flatten a multi-dimensional associative array with dots.
 *
 * @param array $array
 * @param string $prepend
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_dot' ) ) {
	function wpe_array_dot ( $array, $prepend = '' )
	{
		return WPEssentialArr::dot( $array, $prepend );
	}
}

/**
 * Get all of the given array except for a specified array of keys.
 *
 * @param array $array
 * @param array|string $keys
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_except' ) ) {
	function wpe_array_except ( $array, $keys )
	{
		return WPEssentialArr::except( $array, $keys );
	}
}

/**
 * Return the first element in an array passing a given truth test.
 *
 * @param array $array
 * @param callable|null $callback
 * @param mixed $default
 * @return mixed
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_first' ) ) {
	function wpe_array_first ( $array, callable $callback = null, $default = null )
	{
		return WPEssentialArr::first( $array, $callback, $default );
	}
}

/**
 * Flatten a multi-dimensional array into a single level.
 *
 * @param array $array
 * @param int $depth
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_flatten' ) ) {
	function wpe_array_flatten ( $array, $depth = INF )
	{
		return WPEssentialArr::flatten( $array, $depth );
	}
}

/**
 * Remove one or many array items from a given array using "dot" notation.
 *
 * @param array $array
 * @param array|string $keys
 * @return void
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_forget' ) ) {
	function wpe_array_forget ( &$array, $keys )
	{
		return WPEssentialArr::forget( $array, $keys );
	}
}

/**
 * Get an item from an array using "dot" notation.
 *
 * @param \ArrayAccess|array $array
 * @param string $key
 * @param mixed $default
 * @return mixed
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_get' ) ) {
	function wpe_array_get ( $array, $key, $default = null )
	{
		return WPEssentialArr::get( $array, $key, $default );
	}
}

/**
 * Check if an item or items exist in an array using "dot" notation.
 *
 * @param \ArrayAccess|array $array
 * @param string|array $keys
 * @return bool
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_has' ) ) {
	function wpe_array_has ( $array, $keys )
	{
		return WPEssentialArr::has( $array, $keys );
	}
}

/**
 * Return the last element in an array passing a given truth test.
 *
 * @param array $array
 * @param callable|null $callback
 * @param mixed $default
 * @return mixed
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_last' ) ) {
	function wpe_array_last ( $array, callable $callback = null, $default = null )
	{
		return WPEssentialArr::last( $array, $callback, $default );
	}
}

/**
 * Get a subset of the items from the given array.
 *
 * @param array $array
 * @param array|string $keys
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_only' ) ) {
	function wpe_array_only ( $array, $keys )
	{
		return WPEssentialArr::only( $array, $keys );
	}
}

/**
 * Pluck an array of values from an array.
 *
 * @param array $array
 * @param string|array $value
 * @param string|array|null $key
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_pluck' ) ) {
	function wpe_array_pluck ( $array, $value, $key = null )
	{
		return WPEssentialArr::pluck( $array, $value, $key );
	}
}

/**
 * Push an item onto the beginning of an array.
 *
 * @param array $array
 * @param mixed $value
 * @param mixed $key
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_prepend' ) ) {
	function wpe_array_prepend ( $array, $value, $key = null )
	{
		return WPEssentialArr::prepend( $array, $value, $key );
	}
}

/**
 * Get a value from the array, and remove it.
 *
 * @param array $array
 * @param string $key
 * @param mixed $default
 * @return mixed
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_pull' ) ) {
	function wpe_array_pull ( &$array, $key, $default = null )
	{
		return WPEssentialArr::pull( $array, $key, $default );
	}
}

/**
 * Get a random value from an array.
 *
 * @param array $array
 * @param int|null $num
 * @return mixed
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_random' ) ) {
	function wpe_array_random ( $array, $num = null )
	{
		return WPEssentialArr::random( $array, $num );
	}
}

/**
 * Set an array item to a given value using "dot" notation.
 *
 * If no key is given to the method, the entire array will be replaced.
 *
 * @param array $array
 * @param string $key
 * @param mixed $value
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_set' ) ) {
	function wpe_array_set ( &$array, $key, $value )
	{
		return WPEssentialArr::set( $array, $key, $value );
	}
}

/**
 * Sort the array by the given callback or attribute name.
 *
 * @param array $array
 * @param callable|string|null $callback
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_sort' ) ) {
	function wpe_array_sort ( $array, $callback = null )
	{
		return WPEssentialArr::sort( $array, $callback );
	}
}

/**
 * Recursively sort an array by keys and values.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_sort_recursive' ) ) {
	function wpe_array_sort_recursive ( $array )
	{
		return WPEssentialArr::sortRecursive( $array );
	}
}

/**
 * Filter the array using the given callback.
 *
 * @param array $array
 * @param callable $callback
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_where' ) ) {
	function wpe_array_where ( $array, callable $callback )
	{
		return WPEssentialArr::where( $array, $callback );
	}
}

/**
 * If the given value is not an array, wrap it in one.
 *
 * @param mixed $value
 * @return array
 * @since  1.0.0
 */
if ( !function_exists( 'wpe_array_wrap' ) ) {
	function wpe_array_wrap ( $value )
	{
		return WPEssentialArr::wrap( $value );
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
