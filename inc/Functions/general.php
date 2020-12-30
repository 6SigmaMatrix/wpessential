<?php
if ( ! function_exists( 'wpe_maybe_define_constant' ) ) {
	/**
	 * Define a constant if it is not already defined.
	 *
	 * @param string $name Constant name.
	 * @param mixed $value Value.
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
	 * Retrive|Printe the given data.
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
	 * Retrive the description, base of words cutting.
	 *
	 * @param string $desc desicription.
	 * @param int $lenght lenght to cut.
	 * @param string $indecator add the indecator to present the description is cut from there.
	 * @return string
	 */
	function wpe_trim_words ( string $desc, $lenght = 55, $indecator = '' )
	{
		return wp_trim_words( $desc, $lenght, $indecator );
	}
}

if ( ! function_exists( 'wpe_trim_char' ) ) {

	/**
	 * Retrive the description, base of charactor cutting.
	 *
	 * @param string $desc desicription.
	 * @param int $lenght lenght to cut.
	 * @param string $indecator add the indecator to present the description is cut from there.
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
	 * @param bool $acc Define argument for accoiative array
	 * @return string
	 */
	function wpe_gen_attr_data ( array $args, $acc = false )
	{
		$build_atts = [];
		$args       = wpe_collect( $args )->filter();
		foreach ( $args as $key => $value ) {
			$value              = ( strpos( $value, '%2' ) ) ? wpe_josn_decode( wpe_url_decode( $value ), $acc ) : $value;
			$build_atts[ $key ] = $value;
		}

		return $build_atts;
	}
}

if ( ! function_exists( 'wpe_gen_attr' ) ) {
	/**
	 * Array Attr Generate
	 *
	 * @param array $args Define arguments for the reduce.
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
	 * @return void
	 */
	function wpe_josn_encode ( $values )
	{
		return json_encode( $values );
	}
}

if ( ! function_exists( 'wpe_josn_decode' ) ) {
	/**
	 * Json decode
	 *
	 * @param mixed $value
	 * @param bool $acc return the associative array
	 * @return array
	 */
	function wpe_josn_decode ( $value, $acc = false )
	{
		return json_decode( $value, $acc );
	}
}

if ( ! function_exists( 'wpe_base_64_encode' ) ) {
	/**
	 * base 64 encode
	 *
	 * @param mixed $values
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
		$ucwords_name    = ucwords( $name );
		$strtoupper_name = strtoupper( $name );
		$theme_info      = (object) [
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
			'LowerNameHyphen'   => str_replace( [ ' ', '-' ], '_', $lower_name ),
			'LowerNameDash'     => str_replace( [ ' ', '_' ], '-', $lower_name ),
			'UcwordsNameHyphen' => str_replace( [ ' ', '-' ], '_', $ucwords_name ),
			'UcwordsNameDash'   => str_replace( [ ' ', '_' ], '-', $ucwords_name ),
			'UpperNameHyphen'   => str_replace( [ ' ', '-' ], '_', $strtoupper_name ),
			'UpperNameDash'     => str_replace( [ ' ', '_' ], '-', $strtoupper_name ),
			'NameSpace'         => str_replace( [ ' ', '_', '-' ], '', $name ),
		];
		return apply_filters( 'wpe/theme_info', $theme_info );
	}
}

if ( ! function_exists( 'wpe_compare_values' ) ) {
	/**
	 * Compares the 2 values given the condition
	 *
	 * @param mixed $value1 The 1st value in the comparison.
	 * @param mixed $value2 The 2nd value in the comparison.
	 * @param string $operator The operator we'll use for the comparison.
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
		return $value1 == $value2;
	}
}