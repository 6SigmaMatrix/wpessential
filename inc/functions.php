<?php

use WPEssential\Plugins\Utility\MetaBoxInit;
use WPEssential\Plugins\Libraries\Collection;
use WPEssential\Plugins\Libraries\Arr;
use WPEssential\Plugins\Helper\Help;

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
 * Retrive|Find the file location in themes and plugins.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_template_load' ) ) {
	function wpe_template_load ( $path )
	{
		$find_in = apply_filters( 'wpe/template/load', get_theme_file_path( $path ) );
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = $path;
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = WPE_DIR . "{$path}";
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = $path;
		if ( ! file_exists( $find_in ) ) {
			echo '<h1>' . basename( $find_in ) . ' not found.</h1>';
		}
	}
}

/**
 * Retrive|Find the dir in themes and plugins.
 *
 * @return string
 * @since  1.0.0
 */
/*if ( ! function_exists( 'wpe_template_dir' ) ) {
	function wpe_template_dir ( $path )
	{
		$dir = apply_filters( 'wpe/template/dir', get_template_directory() . "/{$path}" );
		if ( is_dir( $dir ) ) {
			return $dir;
		}
		$dir = WPE_DIR . "/{$path}";
		if ( is_dir( $dir ) ) {
			return $dir;
		}
		if ( is_dir( $dir ) ) {
			return $dir;
		}
	}
}*/

/**
 * Retrive the file location in plugins.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_plugin_template_load' ) ) {
	function wpe_plugin_template_load ( $path )
	{
		$find_in_theme = WPE_DIR . "{$path}";
		if ( file_exists( $find_in_theme ) ) {
			return $find_in_theme;
		}

		if ( file_exists( $path ) ) {
			return $path;
		}

		if ( is_dir( $path ) ) {
			return $path;
		}
	}
}

/**
 * Retrive the plugin directory.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_plugin_template_dir' ) ) {
	function wpe_plugin_template_dir ( $path )
	{
		$dir = WPE_DIR . "{$path}";
		if ( is_dir( $dir ) ) {
			return $dir;
		}
	}
}

/**
 * Attach the error in WP_Error class.
 *
 * @return string|array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_send_error' ) ) {
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
if ( ! function_exists( 'wpe_error' ) ) {
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
if ( ! function_exists( 'wpe_style_unites' ) ) {
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
if ( ! function_exists( 'wpe_transtion_time_unites' ) ) {
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
if ( ! function_exists( 'wpe_heading_tags' ) ) {
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
if ( ! function_exists( 'wpe_border_style' ) ) {
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

/**
 * Retrive the button type.
 *
 * @return array.
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_button_type' ) ) {
	function wpe_button_type ()
	{
		return apply_filters( 'wpe/button/type', [
			''        => __( 'Default', 'wpessential' ),
			'info'    => __( 'Info', 'wpessential' ),
			'success' => __( 'Success', 'wpessential' ),
			'warning' => __( 'Warning', 'wpessential' ),
			'danger'  => __( 'Danger', 'wpessential' ),
		] );
	}
}


/**
 * Retrive the button size.
 *
 * @return array.
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_button_size' ) ) {
	function wpe_button_size ()
	{
		return apply_filters( 'wpe/button/size', [
			'xs' => __( 'Extra Small', 'wpessential' ),
			'sm' => __( 'Small', 'wpessential' ),
			'md' => __( 'Medium', 'wpessential' ),
			'lg' => __( 'Large', 'wpessential' ),
			'xl' => __( 'Extra Large', 'wpessential' ),
		] );
	}
}

/**
 * Get image id by url.
 *
 * @return string|array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_image_id_by_url' ) ) {
	function wpe_get_image_id_by_url ( $link )
	{
		return Help::get_image_id( $link );
	}
}

/**
 * Returns an array of the attachment's properties.
 *
 * @return string|array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_image_from_url' ) ) {
	function wpe_get_image_from_url ( $link )
	{
		return Help::get_image_from_url( $link );
	}
}

/**
 * Get code from file.
 *
 * @return string|array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_file_data' ) ) {
	function wpe_file_data ( $link )
	{
		$file = wp_remote_get( $link );
		if ( ! is_wp_error( $file ) ) {
			return wpe_array_get( $file, 'body' );
		}
	}
}

/**
 * Get an array of posts.
 *
 * @param array $args Define arguments for the get_posts function.
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_post' ) ) {
	function wpe_get_post ( $args )
	{
		return Help::get_posts( $args );
	}
}

/**
 * Get an array of post types.
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_post_types' ) ) {
	function wpe_get_post_types ()
	{
		return Help::get_post_types();
	}
}

/**
 * Get an array of publicly-querable taxonomies
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_taxonomies' ) ) {
	function wpe_get_taxonomies ()
	{
		return Help::get_taxonomies();
	}
}

/**
 * Get an array of terms
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_terms' ) ) {
	function wpe_get_terms ( $args )
	{
		return Help::get_terms_list( $args );
	}
}

/**
 * Get an array of publicly-querable advanced taxonomies
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_taxonomies_advanced' ) ) {
	function wpe_get_taxonomies_advanced ( $args = [], $output = 'names', $operator = 'and' )
	{
		return Help::get_taxonomies_advanced( $args, $output, $operator );
	}
}

/**
 * Get the archive title.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_page_title' ) ) {
	function wpe_get_page_title ( bool $include_context = true )
	{
		return Help::get_page_title( $include_context );
	}
}

/**
 * Get the archive title.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_the_archive_url' ) ) {
	function wpe_get_the_archive_url ()
	{
		return Help::get_the_archive_url();
	}
}

/**
 * Get an array of current user meta keys.
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_get_user_meta_keys' ) ) {
	function wpe_get_user_meta_keys ()
	{
		return Help::get_user_meta_keys();
	}
}

/**
 * Get an description by cutting.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_trim_words' ) ) {
	function wpe_trim_words ( $desc, $lenght = 55, $indecator = '' )
	{
		if ( ! $lenght ) {
			$lenght = 55;
		}
		return Help::trim_words( $desc, $lenght, $indecator );
	}
}

/**
 * Get an description by cutting.
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_trim_char' ) ) {
	function wpe_trim_char ( $desc, $lenght = 55, $indecator = '' )
	{
		if ( ! $lenght ) {
			$lenght = 55;
		}
		return Help::trim_char( $desc, $lenght, $indecator );
	}
}

/**
 * Ajax request check
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_ajax_authorized' ) ) {
	function wpe_ajax_authorized ()
	{
		$checked = check_ajax_referer( 'wpe_request_nonce', 'security' );
		if ( ! $checked ) {
			wp_send_json_error( __( 'Ajax authorization is invalide.', 'wpessential' ) );
		}
	}
}

/**
 * Register post type
 *
 * @param string $name Define the post type name.
 * @param array $args Define arguments for the post type.
 * @return void
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_register_post_type' ) ) {
	function wpe_register_post_type ( $name, $args )
	{
		$name = "wpe_{$name}";
		$args = apply_filters( "wpe/post_type/{$name}/args", $args );
		register_post_type( $name, $args );
	}
}

/**
 * Register taxonomy
 *
 * @param string $name Define the taxonomy name.
 * @param string $post_type Define the post type name.
 * @param array $args Define arguments for the taxonomy.
 * @return void
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_register_taxonomy' ) ) {
	function wpe_register_taxonomy ( $name, $post_type, $args )
	{
		$name = "wpe_{$name}";
		$args = apply_filters( "wpe/taxonomy/{$name}/args", $args );
		register_taxonomy( $name, $post_type, $args );
	}
}

/**
 * Register metabox
 *
 * @param array $args Define arguments for the metabox.
 * @return void
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_metabox' ) ) {
	function wpe_metabox ( $args )
	{
		$id = wpe_array_get( $args, 'id' );
		if ( $id ) {
			MetaBoxInit::$config[ $id ] = $args;
		}

		return MetaBoxInit::$config;
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

/**
 * Array Attr Generate
 *
 * @param array $args Define arguments for the reduce.
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_gen_attr' ) ) {
	function wpe_gen_attr ( $args )
	{
		$build_atts = '';
		$args       = wpe_collect( $args )->filter();
		foreach ( $args as $key => $value ) {
			$value      = ( is_array( $value ) ) ? urlencode( json_encode( $value ) ) : $value;
			$build_atts .= ' ' . $key . '="' . $value . '"';
		}

		return $build_atts;
	}
}

/**
 * Create editor field key
 *
 * @param string $key
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_editor_key' ) ) {
	function wpe_editor_key ( $key )
	{
		return WPE_SETTINGS . "_{$key}";
	}
}

/**
 * Check the post have query
 *
 * @return string
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_query_post' ) ) {
	function wpe_query_post ( $query )
	{
		if ( ! $query->have_posts() ) {
			echo __( 'No post found', 'wpessential' );
		}

		return $query;
	}
}

/**
 * Returns the blog post categoies
 *
 * @param string $classes
 * @param string $seprator
 * @return void
 */
if ( ! function_exists( 'wpe_the_blog_cat' ) ) {
	function wpe_the_blog_cat ( $classes = '', $seprator = ',' )
	{
		Help::the_blog_cat( $classes, $seprator );
	}
}

/**
 * Returns the author link
 *
 * @param string $classes
 * @return void
 */
if ( ! function_exists( 'wpe_the_author_link' ) ) {
	function wpe_the_author_link ( $classes = '' )
	{
		Help::the_author_link( $classes );
	}
}

/**
 * Json,Base 64 encode
 *
 * @param mixed $values
 * @return void
 */
if ( ! function_exists( 'wpe_josn_64' ) ) {
	function wpe_josn_64 ( $values )
	{
		return json_encode( $values );
	}
}

/**
 * Json encode
 *
 * @param mixed $values
 * @return void
 */
if ( ! function_exists( 'wpe_josn_encode' ) ) {
	function wpe_josn_encode ( $values )
	{
		return json_encode( $values );
	}
}

/**
 * Json decode
 *
 * @param mixed $value
 * @return void
 */
if ( ! function_exists( 'wpe_josn_decode' ) ) {
	function wpe_josn_decode ( $value, $acc = false )
	{
		return json_decode( $value, $acc );
	}
}

/**
 * base 64 encode
 *
 * @param mixed $values
 * @return void
 */
if ( ! function_exists( 'wpe_base_64_encode' ) ) {
	function wpe_base_64_encode ( $values )
	{
		return base64_encode( $values );
	}
}

/**
 * base 64 decode
 *
 * @param mixed $values
 * @return void
 */
if ( ! function_exists( 'wpe_base_64_decode' ) ) {
	function wpe_base_64_decode ( $values )
	{
		return base64_decode( $values );
	}
}
