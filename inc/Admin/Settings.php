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
		if ( \is_array( $options ) && \count( $options ) >= 1 ) {
			global $wpe_options;
			foreach ( $options as $k => $fields ) {
				$y = 0;
				foreach ( $fields[ 'fields' ] as $field ) {
					$key                                   = wpe_array_get( $field, 'id' );
					$value                                 = wpe_array_get( $wpe_options, $key );
					self::$opt_array[ $key ]               = $value;
					$fields[ 'fields' ][ $y ][ 'defined' ] = $value;
					$y ++;
				}
				$options[ $k ] = $fields;
			}
		}

		self::set_values();
		//ksort( $options );
		sort( $options );
		return $options;
	}

	public static function set_values ()
	{
		global $wpe_options;
		$options = wp_parse_args( self::$opt_array, $wpe_options );
		update_option( 'wpe_settings', $options );
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

	public static function save_values ( $options )
	{
		global $wpe_options;
		return update_option( 'wpe_settings', wp_parse_args( $options, $wpe_options ) );
	}
}
