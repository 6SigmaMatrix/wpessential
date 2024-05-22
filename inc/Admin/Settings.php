<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Settings
{
	private static $opt_array = [];

	public static function constructor ()
	{
		self::get_values();
	}

	public static function default ( $options )
	{
		if ( \is_array( $options ) ) {
			global $wpe_options;
			foreach ( $options as $k => $fields ) {
				foreach ( $fields[ 'fields' ] as $y => $field ) {
					$key                                   = wpe_array_get( $field, 'id' );
					$value                                 = wpe_array_get( $wpe_options, $key );
					self::$opt_array[ (string) $key ] = $value;
					$fields[ 'fields' ][ $y ][ 'defined' ] = $value;
				}
				$options[ $k ] = $fields;
			}
		}

		self::save_values( self::$opt_array );
		sort( $options );
		return $options;
	}

	public static function default_meta ( $options, $post_id = 0 )
	{
		if ( $post_id && \is_array( $options ) ) {
			foreach ( $options as $k => $fields ) {
				$y = 0;
				foreach ( $fields[ 'fields' ] as $field ) {
					$key                                   = wpe_array_get( $field, 'id' );
					$value                                 = get_post_meta( $post_id, $key, true );
					self::$opt_array[ $key ]               = $value;
					$fields[ 'fields' ][ $y ][ 'defined' ] = $value;
					$y ++;
				}
				$options[ $k ] = $fields;
			}
		}

		self::save_values( self::$opt_array, $post_id );
		sort( $options );
		return $options;
	}

	private static function get_values ()
	{
		global $wpe_options;
		$wpe_options = get_option( 'wpe_settings' );
	}

	public static function get_value ( $key )
	{
		global $wpe_options;
		return wpe_array_get( $wpe_options, WPE_SETTINGS . '_' . $key, '' );
	}

	public static function save_value ( $key, $value = '' )
	{
		global $wpe_options;
		return update_option( 'wpe_settings', wp_parse_args( [ $key => $value ], $wpe_options ) );
	}

	public static function save_values ( $options, $post_id = 0 )
	{
		if ( $post_id && \is_array( $options ) ) {
			$options = array_filter( $options );
			foreach ( $options as $meta_key => $meta_value ) {
				update_post_meta( $post_id, $meta_key, $meta_value );
			}
			return true;
		}

		global $wpe_options;
		return update_option( 'wpe_settings', wp_parse_args( $options, $wpe_options ) );
	}
}
