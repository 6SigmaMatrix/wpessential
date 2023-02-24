<?php

namespace WPEssential\Plugins\Admin;

class Settings
{
	private static $opt_array = [];

	public static function constructor ()
	{
		add_filter( 'wpe/register/admin_pages/options/theme_options/fields', [ __CLASS__, 'default' ] );
	}

	public static function default ( $options )
	{
		if ( is_array( $options ) && count( $options ) >= 1 ) {
			$x = 0;
			foreach ( $options as $fields ) {
				$y = 0;
				foreach ( $fields[ 'fields' ] as $field ) {
					$key                                   = wpe_array_get( $field, 'id' );
					$value                                 = wpe_array_get( self::get_values(), $key );
					self::$opt_array[ $key ]               = $value;
					$fields[ 'fields' ][ $y ][ 'defined' ] = $value;
					$y ++;
				}
				$options[ $x ] = $fields;
				$x ++;
			}
		}

		self::set_values();

		return $options;
	}

	public static function set_values ()
	{
		$options = self::get_values();
		$options = wp_parse_args( self::$opt_array, $options );
		update_option( 'wpe_settings', $options );
	}

	public static function get_values ()
	{
		return get_option( 'wpe_settings' );
	}

	public static function get_value ( $key )
	{
		return wpe_array_get( self::get_values(), $key, '' );
	}

	public static function save_value ( $key, $value = '' )
	{
		return update_option( 'wpe_settings', wp_parse_args( [ $key => $value ], self::get_values() ) );
	}

	public static function save_values ( $options )
	{
		return update_option( 'wpe_settings', wp_parse_args( $options, self::get_values() ) );
	}
}
