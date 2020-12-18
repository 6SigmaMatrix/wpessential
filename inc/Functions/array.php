<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

use WPEssential\Plugins\Libraries\Arr;
use WPEssential\Plugins\Libraries\Collection;

/**
 * Create a collection from the given value.
 *
 * @param mixed $value
 * @return Collection
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_collect' ) ) {
	function wpe_collect ( $value = null )
	{
		return new Collection( $value );
	}
}

/**
 * Assign high numeric IDs to a config item to force appending.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'append_config' ) ) {
	function append_config ( array $array )
	{
		$start = 9999;

		foreach ( $array as $key => $value ) {
			if ( is_numeric( $key ) ) {
				$start ++;

				$array[ $start ] = Arr::pull( $array, $key );
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
if ( ! function_exists( 'wpe_array_add' ) ) {
	function wpe_array_add ( $array, $key, $value )
	{
		return Arr::add( $array, $key, $value );
	}
}

/**
 * Collapse an array of arrays into a single array.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_array_collapse' ) ) {
	function wpe_array_collapse ( $array )
	{
		return Arr::collapse( $array );
	}
}

/**
 * Divide an array into two arrays. One with keys and the other with values.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_array_divide' ) ) {
	function wpe_array_divide ( $array )
	{
		return Arr::divide( $array );
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
if ( ! function_exists( 'wpe_array_dot' ) ) {
	function wpe_array_dot ( $array, $prepend = '' )
	{
		return Arr::dot( $array, $prepend );
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
if ( ! function_exists( 'wpe_array_except' ) ) {
	function wpe_array_except ( $array, $keys )
	{
		return Arr::except( $array, $keys );
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
if ( ! function_exists( 'wpe_array_first' ) ) {
	function wpe_array_first ( $array, callable $callback = null, $default = null )
	{
		return Arr::first( $array, $callback, $default );
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
if ( ! function_exists( 'wpe_array_flatten' ) ) {
	function wpe_array_flatten ( $array, $depth = INF )
	{
		return Arr::flatten( $array, $depth );
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
if ( ! function_exists( 'wpe_array_forget' ) ) {
	function wpe_array_forget ( &$array, $keys )
	{
		return Arr::forget( $array, $keys );
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
if ( ! function_exists( 'wpe_array_get' ) ) {
	function wpe_array_get ( $array, $key, $default = null )
	{
		return Arr::get( $array, $key, $default );
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
if ( ! function_exists( 'wpe_array_has' ) ) {
	function wpe_array_has ( $array, $keys )
	{
		return Arr::has( $array, $keys );
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
if ( ! function_exists( 'wpe_array_last' ) ) {
	function wpe_array_last ( $array, callable $callback = null, $default = null )
	{
		return Arr::last( $array, $callback, $default );
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
if ( ! function_exists( 'wpe_array_only' ) ) {
	function wpe_array_only ( $array, $keys )
	{
		return Arr::only( $array, $keys );
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
if ( ! function_exists( 'wpe_array_pluck' ) ) {
	function wpe_array_pluck ( $array, $value, $key = null )
	{
		return Arr::pluck( $array, $value, $key );
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
if ( ! function_exists( 'wpe_array_prepend' ) ) {
	function wpe_array_prepend ( $array, $value, $key = null )
	{
		return Arr::prepend( $array, $value, $key );
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
if ( ! function_exists( 'wpe_array_pull' ) ) {
	function wpe_array_pull ( &$array, $key, $default = null )
	{
		return Arr::pull( $array, $key, $default );
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
if ( ! function_exists( 'wpe_array_random' ) ) {
	function wpe_array_random ( $array, $num = null )
	{
		return Arr::random( $array, $num );
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
if ( ! function_exists( 'wpe_array_set' ) ) {
	function wpe_array_set ( &$array, $key, $value )
	{
		return Arr::set( $array, $key, $value );
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
if ( ! function_exists( 'wpe_array_sort' ) ) {
	function wpe_array_sort ( $array, $callback = null )
	{
		return Arr::sort( $array, $callback );
	}
}

/**
 * Recursively sort an array by keys and values.
 *
 * @param array $array
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_array_sort_recursive' ) ) {
	function wpe_array_sort_recursive ( $array )
	{
		return Arr::sortRecursive( $array );
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
if ( ! function_exists( 'wpe_array_where' ) ) {
	function wpe_array_where ( $array, callable $callback )
	{
		return Arr::where( $array, $callback );
	}
}

/**
 * If the given value is not an array, wrap it in one.
 *
 * @param mixed $value
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_array_wrap' ) ) {
	function wpe_array_wrap ( $value )
	{
		return Arr::wrap( $value );
	}
}

/**
 * Return the default value of the given value.
 *
 * @param mixed $value
 * @return mixed
 */
if ( ! function_exists( 'wpe_value' ) ) {
	function wpe_value ( $value )
	{
		return $value instanceof Closure ? $value() : $value;
	}
}

/**
 * Get an item from an array or object using "dot" notation.
 *
 * @param mixed $target
 * @param string|array|int $key
 * @param mixed $default
 * @return mixed
 */
if ( ! function_exists( 'wpe_data_get' ) ) {
	function wpe_data_get ( $target, $key, $default = null )
	{
		if ( is_null( $key ) ) {
			return $target;
		}

		$key = is_array( $key ) ? $key : explode( '.', $key );

		while ( ! is_null( $segment = array_shift( $key ) ) ) {
			if ( $segment === '*' ) {
				if ( $target instanceof Collection ) {
					$target = $target->all();
				} elseif ( ! is_array( $target ) ) {
					return value( $default );
				}

				$result = [];

				foreach ( $target as $item ) {
					$result[] = data_get( $item, $key );
				}

				return in_array( '*', $key ) ? Arr::collapse( $result ) : $result;
			}

			if ( Arr::accessible( $target ) && Arr::exists( $target, $segment ) ) {
				$target = $target[ $segment ];
			} elseif ( is_object( $target ) && isset( $target->{$segment} ) ) {
				$target = $target->{$segment};
			} else {
				return value( $default );
			}
		}

		return $target;
	}
}

/**
 * Array Reduce
 *
 * @param array $args Define arguments for the reduce.
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_array_reduce' ) ) {
	function wpe_array_reduce ( $args )
	{
		$return = [];
		foreach ( $args as $val ) {
			$return[] = ( is_array( $val ) ) ? wpe_array_reduce( $val ) : $val;
		}

		return implode( ',', $return );
	}
}