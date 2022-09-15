<?php
if ( ! function_exists( 'wpe_ajax_authorized' ) ) {
	/**
	 * check or verify the ajax call
	 *
	 */
	function wpe_ajax_authorized ()
	{
		$checked = check_ajax_referer( WPE_NONCE, 'nonce' );
		if ( ! $checked ) {
			wp_send_json_error(
				[
					'title'   => __( 'Error.', 'wpessential' ),
					'message' => __( 'Ajax authorization is invalid.', 'wpessential' )
				],
				401
			);
		}
	}
}

if ( ! function_exists( 'wpe_maybe_define_constant' ) ) {
	/**
	 * Define a constant if it is not already defined.
	 *
	 * @param string $name  Constant name.
	 * @param mixed  $value Value.
	 */
	function wpe_maybe_define_constant ( $name, $value )
	{
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}
}

if ( ! function_exists( 'wpe_error' ) ) {
	/**
	 * Retrieve|Printe the given data.
	 *
	 * @return string|array|object|bool
	 */
	function wpe_error ( $data )
	{
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
		exit;
	}
}

if ( ! function_exists( 'wpe_metabox' ) ) {
	/**
	 * Register metabox
	 *
	 * @param array $args Define arguments for the metabox.
	 *
	 * @return void
	 */
	function wpe_metabox ( $args )
	{
		$id = wpe_array_get( $args, 'id' );
		if ( $id ) {
			\WPEssential\Plugins\Utility\MetaBoxInitMetaBoxInit::$config[ $id ] = $args;
		}

		return \WPEssential\Plugins\Utility\MetaBoxInitMetaBoxInit::$config;
	}
}

if ( ! function_exists( 'wpe_trim_words' ) ) {
	/**
	 * Retrieve the description, base of words cutting.
	 *
	 * @param string $desc      desicription.
	 * @param int    $lenght    lenght to cut.
	 * @param string $indecator add the indecator to present the description is cut from there.
	 *
	 * @return string
	 */
	function wpe_trim_words ( string $desc, $lenght = 55, $indecator = '' )
	{
		return wp_trim_words( $desc, $lenght, $indecator );
	}
}

if ( ! function_exists( 'wpe_trim_char' ) ) {

	/**
	 * Retrieve the description, base of charactor cutting.
	 *
	 * @param string $desc      desicription.
	 * @param int    $lenght    lenght to cut.
	 * @param string $indecator add the indecator to present the description is cut from there.
	 *
	 * @return string
	 */
	function wpe_trim_char ( $desc, $lenght = 55, $indecator = '' )
	{
		$desc = wp_strip_all_tags( $desc );
		return substr( $desc, 0, $lenght ) . $indecator;
	}
}

if ( ! function_exists( 'wpe_gen_attr_data' ) ) {
	/**
	 * Array Attr Generate Data
	 *
	 * @param array $args Define arguments for the re-produce.
	 * @param bool  $acc  Define argument for accoiative array
	 *
	 * @return string
	 */
	function wpe_gen_attr_data ( $args = [], $acc = false )
	{
		$build_atts = [];
		$args       = wpe_collect( $args )->filter()->toArray();
		if ( is_array( $args ) && ! empty( $args ) ) {
			foreach ( $args as $key => $value ) {
				$value              = ( strpos( $value, '%2' ) ) ? wpe_josn_decode( wpe_url_decode( $value ), $acc ) : $value;
				$build_atts[ $key ] = $value;
			}
		}

		return $build_atts;
	}
}

if ( ! function_exists( 'wpe_gen_attr' ) ) {
	/**
	 * Array Attr Generate
	 *
	 * @param array $args Define arguments for the reduce.
	 *
	 * @return string
	 */
	function wpe_gen_attr ( $args )
	{
		$build_atts = '';
		$args       = wpe_collect( $args )->filter();
		foreach ( $args as $key => $value ) {
			$value      = ( is_array( $value ) ) ? wpe_url_encode( wpe_josn_encode( $value ) ) : $value;
			$build_atts .= ' ' . $key . '="' . $value . '"';
		}

		return $build_atts;
	}
}

if ( ! function_exists( 'wpe_editor_key' ) ) {
	/**
	 * Create editor field key
	 *
	 * @param string $key
	 *
	 * @return string
	 */
	function wpe_editor_key ( $key )
	{
		return WPE_SETTINGS . "_{$key}";
	}
}

if ( ! function_exists( 'wpe_query_post' ) ) {
	/**
	 * Check the post have query
	 *
	 * @return string
	 */
	function wpe_query_post ( $query )
	{
		if ( ! $query->have_posts() ) {
			echo __( 'No post found', 'wpessential' );
		}

		return $query;
	}
}

if ( ! function_exists( 'wpe_josn_encode' ) ) {
	/**
	 * Json encode
	 *
	 * @param mixed $values
	 * @param int   $depth User specified recursion depth
	 *
	 * @return void
	 */
	function wpe_josn_encode ( $values, $flag = 0, $depth = 510 )
	{
		return json_encode( $values, $flag = 0, $depth = 510 );
	}
}

if ( ! function_exists( 'wpe_josn_decode' ) ) {
	/**
	 * Json decode
	 *
	 * @param mixed $value
	 * @param bool  $acc   The associative array
	 * @param int   $depth User specified recursion depth
	 *
	 * @return array
	 */
	function wpe_josn_decode ( $value, $acc = false, $depth = 512 )
	{
		return json_decode( $value, $acc, $depth );
	}
}

if ( ! function_exists( 'wpe_base_64_encode' ) ) {
	/**
	 * base 64 encode
	 *
	 * @param mixed $values
	 *
	 * @return string
	 */
	function wpe_base_64_encode ( $values )
	{
		return base64_encode( $values );
	}
}

if ( ! function_exists( 'wpe_base_64_decode' ) ) {
	/**
	 * base 64 decode
	 *
	 * @param mixed $values
	 *
	 * @return void
	 */
	function wpe_base_64_decode ( $values )
	{
		return base64_decode( $values );
	}
}

if ( ! function_exists( 'wpe_url_encode' ) ) {
	/**
	 * url encode
	 *
	 * @param mixed $values
	 *
	 * @return void
	 */
	function wpe_url_encode ( $values )
	{
		return urlencode( $values );
	}
}

if ( ! function_exists( 'wpe_url_decode' ) ) {
	/**
	 * url decode
	 *
	 * @param mixed $values
	 *
	 * @return void
	 */
	function wpe_url_decode ( $values )
	{
		return urldecode( $values );
	}
}

if ( ! function_exists( 'wpe_unique_id' ) ) {
	/**
	 * unique id
	 *
	 * @param string $prefix
	 *
	 * @return string
	 */
	function wpe_unique_id ( $prefix = 'wpe-' )
	{
		static $id_counter = 0;
		if ( function_exists( 'wp_unique_id' ) ) {
			return wp_unique_id( $prefix );
		}
		return $prefix . ++ $id_counter;
	}
}

if ( ! function_exists( 'wpe_theme_info' ) ) {
	/**
	 * theme info
	 *
	 * @return object
	 */
	function wpe_theme_info ()
	{
		$theme_info      = wp_get_theme();
		$name            = $theme_info->get( 'Name' );
		$lower_name      = strtolower( $name );
		$ucwords_name    = ucwords( $lower_name );
		$strtoupper_name = strtoupper( $lower_name );
		$theme_info      = [
			'Name'              => $name,
			'ThemeURI'          => $theme_info->get( 'ThemeURI' ),
			'Description'       => $theme_info->get( 'Description' ),
			'Author'            => $theme_info->get( 'Author' ),
			'AuthorURI'         => $theme_info->get( 'AuthorURI' ),
			'Version'           => $theme_info->get( 'Version' ),
			'Template'          => $theme_info->get( 'Template' ),
			'Status'            => $theme_info->get( 'Status' ),
			'Tags'              => $theme_info->get( 'Tags' ),
			'TextDomain'        => $theme_info->get( 'TextDomain' ),
			'DomainPath'        => $theme_info->get( 'DomainPath' ),
			'RequiresWP'        => $theme_info->get( 'RequiresWP' ),
			'RequiresPHP'       => $theme_info->get( 'RequiresPHP' ),
			'LowerNameHyphen'   => wpe_replace_in_underscore( $lower_name ),
			'LowerNameDash'     => wpe_replace_in_underscore( $lower_name ),
			'UcwordsNameHyphen' => wpe_replace_in_underscore( $ucwords_name ),
			'UcwordsNameDash'   => wpe_replace_in_underscore( $ucwords_name ),
			'UpperNameHyphen'   => wpe_replace_in_underscore( $strtoupper_name ),
			'UpperNameDash'     => wpe_replace_in_underscore( $strtoupper_name ),
			'NameSpace'         => wpe_replace_in_nospace( $ucwords_name ),
			'Parent'            => []
		];

		$template = $theme_info[ 'Template' ] ?? '';
		if ( $template ) {
			$name            = wpe_replace_in_space( $template );
			$lower_name      = strtolower( $name );
			$ucwords_name    = ucwords( $lower_name );
			$strtoupper_name = strtoupper( $lower_name );
			$parent_theme    = apply_filters( 'wpe/theme_info/parent', [
				'Parent' => (object) array_filter( [
					'Name'              => $ucwords_name,
					'LowerNameHyphen'   => wpe_replace_in_underscore( $lower_name ),
					'LowerNameDash'     => wpe_replace_in_underscore( $lower_name ),
					'UcwordsNameHyphen' => wpe_replace_in_underscore( $ucwords_name ),
					'UcwordsNameDash'   => wpe_replace_in_underscore( $ucwords_name ),
					'UpperNameHyphen'   => wpe_replace_in_underscore( $strtoupper_name ),
					'UpperNameDash'     => wpe_replace_in_underscore( $strtoupper_name ),
					'NameSpace'         => wpe_replace_in_nospace( $ucwords_name ),
				] )
			] );
			$theme_info      = wp_parse_args( $parent_theme, apply_filters( 'wpe/theme_info/child', $theme_info ) );
		}

		return apply_filters( 'wpe/theme_info', (object) $theme_info );
	}
}

if ( ! function_exists( 'wpe_replace_in_underscore' ) ) {
	/**
	 * Replace space and hyphen with underscore
	 *
	 * @param string $sting The data in replace.
	 *
	 * @return string
	 */
	function wpe_replace_in_underscore ( $sting )
	{
		return apply_filters( 'wpe/get/replace_in_underscore', str_replace( [ ' ', '-', '|' ], '_', $sting ) );
	}
}

if ( ! function_exists( 'wpe_replace_in_space' ) ) {
	/**
	 * Replace underscore, hyphen, pipe sign with empty space
	 *
	 * @param string $sting The data in replace.
	 *
	 * @return string
	 */
	function wpe_replace_in_space ( $sting )
	{
		return apply_filters( 'wpe/get/replace_in_space', str_replace( [ '-', '-', '|' ], ' ', $sting ) );
	}
}

if ( ! function_exists( 'wpe_replace_in_nospace' ) ) {
	/**
	 * Replace underscore, hyphen, pipe sign, empty space with nospace
	 *
	 * @param string $sting The data in replace.
	 *
	 * @return string
	 */
	function wpe_replace_in_nospace ( $sting )
	{
		return apply_filters( 'wpe/get/replace_in_space', str_replace( [ '-', '-', '|', ' ' ], '', $sting ) );
	}
}

if ( ! function_exists( 'wpe_compare_values' ) ) {
	/**
	 * Compares the 2 values given the condition
	 *
	 * @param mixed  $value1   The 1st value in the comparison.
	 * @param mixed  $value2   The 2nd value in the comparison.
	 * @param string $operator The operator we'll use for the comparison.
	 *
	 * @return boolean whether The comparison has succeded (true) or failed (false).
	 */
	function wpe_compare_values ( $value1, $value2, $operator )
	{
		if ( '===' === $operator ) {
			return $value1 === $value2;
		}
		if ( '!==' === $operator ) {
			return $value1 !== $value2;
		}
		if ( ( '!=' === $operator || 'not equal' === $operator ) ) {
			return $value1 != $value2;
		}
		if ( ( '>=' === $operator || 'greater or equal' === $operator || 'equal or greater' === $operator ) ) {
			return $value2 >= $value1;
		}
		if ( ( '<=' === $operator || 'smaller or equal' === $operator || 'equal or smaller' === $operator ) ) {
			return $value2 <= $value1;
		}
		if ( ( '>' === $operator || 'greater' === $operator ) ) {
			return $value2 > $value1;
		}
		if ( ( '<' === $operator || 'smaller' === $operator ) ) {
			return $value2 < $value1;
		}
		if ( 'contains' === $operator || 'in' === $operator ) {
			if ( is_array( $value1 ) && is_array( $value2 ) ) {
				foreach ( $value2 as $val ) {
					if ( in_array( $val, $value1 ) ) {
						return true;
					}
				}
				return false;
			}
			if ( is_array( $value1 ) && ! is_array( $value2 ) ) {
				return in_array( $value2, $value1 );
			}
			if ( is_array( $value2 ) && ! is_array( $value1 ) ) {
				return in_array( $value1, $value2 );
			}
			return ( false !== strrpos( $value1, $value2 ) || false !== strpos( $value2, $value1 ) );
		}
		if ( 'does not contain' === $operator || 'not in' === $operator ) {
			return wpe_compare_values( $value1, $value2, $operator );
		}
		return $value1 === $value2;
	}
}

if ( ! function_exists( 'wpe_fa5_social_array' ) ) {
	/**
	 * wpe font awesome 5 social array
	 *
	 * @return array
	 */
	function wpe_fa5_social_array ()
	{
		$prefix    = WPEssential\Plugins\Utility\Cache::get_cache_prefix( 'fa5-social-profile' );
		$cache_key = $prefix . 'fa5_social_profile';

		$content = wp_cache_get( $cache_key, 'fa5-social-profile' );
		if ( $content ) {
			return $content;
		}
		$url     = WPE_URL . 'assets/json/fa5-social-profile.min.json';
		$content = wpe_get_data_by_url( $url );
		if ( is_wp_error( $content ) ) {
			wp_die( $content->get_error_message(), $content->get_error_code(), [ 'url' => $url ] );
		}
		$content = wpe_josn_decode( $content, true );
		wp_cache_set( $cache_key, $content, 'fa5-social-profile' );

		return $content;
	}
}

if ( ! function_exists( 'wpe_get_images_sizes' ) ) {
	/**
	 * Retrieve the array of register image sizes.
	 *
	 * @param bool $empty get list first item as empty
	 *
	 * @return array
	 */
	function wpe_get_images_sizes ( $empty = false )
	{
		global $_wp_additional_image_sizes;

		$items = [];

		// Properly format the array.
		if ( $empty ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $_wp_additional_image_sizes ) {
			foreach ( $_wp_additional_image_sizes as $name => $item ) {
				$items[ $name ] = 'Width: ' . $item[ 'width' ] . ' Height:' . $item[ 'height' ];
			}
		} else {
			$items[ 'no' ] = __( 'No Image Size Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/image_sizes', $items );
	}
}

if ( ! function_exists( 'wpe_get_menus_location' ) ) {
	/**
	 * Retrieve the array of register menus location.
	 *
	 * @param bool $empty get list first item as empty
	 *
	 * @return array
	 */
	function wpe_get_menus_location ( $empty = false )
	{
		global $_wp_registered_nav_menus;

		$items = [];

		// Properly format the array.
		if ( $empty ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $_wp_registered_nav_menus ) {
			$items = wp_parse_args( $items, $_wp_registered_nav_menus );
		} else {
			$items[ 'no' ] = __( 'No Image Size Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/image_sizes', $items );
	}
}

if ( ! function_exists( 'wpe_get_roles' ) ) {
	/**
	 * Retrieve the array of register user roles.
	 *
	 * @param bool $empty get list first item as empty
	 *
	 * @return array
	 */
	function wpe_get_roles ( $empty = false )
	{
		global $wp_roles;

		$items = [];

		// Properly format the array.
		if ( $empty ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $wp_roles ) {
			$items = wp_parse_args( $items, $wp_roles->role_names );
		} else {
			$items[ 'no' ] = __( 'No User Role Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/image_sizes', $items );
	}
}

if ( ! function_exists( 'wpe_get_capabilities' ) ) {
	/**
	 * Retrieve the array of register user roles capabilities.
	 *
	 * @param bool $empty get list first item as empty
	 *
	 * @return array
	 */
	function wpe_get_capabilities ( $empty = false )
	{
		global $wp_roles;

		$items = [];

		// Properly format the array.
		if ( $empty ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $wp_roles ) {
			foreach ( $wp_roles->role_objects as $item ) {
				foreach ( $item->capabilities as $k => $v ) {
					$items[ $k ] = $v ? sprintf( '%s: %s', $k, __( 'Allowed', 'wpessential' ) ) : sprintf( '%s: %s', $k, __( 'Denied', 'wpessential' ) );
				}
			}
		} else {
			$items[ 'no' ] = __( 'No User Role Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/image_sizes', $items );
	}
}

if ( ! function_exists( 'wpe_get_sidebar' ) ) {
	/**
	 * Retrieve the array of sidebar list.
	 *
	 * @param bool $empty get list first item as empty
	 *
	 * @return array
	 */
	function wpe_get_sidebar ( $empty = false )
	{
		global $wp_registered_sidebars;

		$items = [];

		// Properly format the array.
		if ( $empty ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $wp_registered_sidebars ) {
			foreach ( $wp_registered_sidebars as $id => $sidebar ) {
				$items[ $id ] = $sidebar[ 'name' ];
			}
		} else {
			$items[ 'no' ] = __( 'No Sidebar Found', 'wpessential' );
		}

		$items = apply_filters( 'wpe/get/sidebars', $items );

		return $items;
	}
}
