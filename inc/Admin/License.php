<?php

namespace WPEssential\Plugins\Admin;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

final class License
{
	private static function get_info ()
	{
		return get_option( 'wpe_auth_settings' );
	}

	public static function remove_info ()
	{
		return delete_option( 'wpe_auth_settings' );
	}

	private static function set_info ( $key, $value )
	{
		$options = self::get_info();
		$options = wp_parse_args( [
			$key => $value
		], $options );

		update_option( 'wpe_auth_settings', $options );

		return $options[ $key ];
	}

	public static function token ()
	{
		return wpe_array_get( self::get_info(), 'token' );
	}

	public static function get_secret_key ()
	{
		$exist = wpe_array_get( self::get_info(), 'secret_key' );
		if ( $exist ) {
			return $exist;
		}

		return self::set_secret_key();
	}

	private static function set_secret_key ()
	{
		$options = self::get_info();
		$key     = wpe_base_64_encode( rawurlencode( wpe_josn_encode( uniqid( 'wpe-reset-secret-key-' ) ) ) );
		$options = wp_parse_args( [ 'secret_key' => $key ], $options );
		update_option( 'wpe_auth_settings', $options );

		return $options;
	}

	public static function generate_token ( $user )
	{

		$secret_key = self::get_secret_key();

		if ( ! $secret_key ) {
			wp_send_json_error( 'WPEssential secret key is not configure properly, please contact the admin.', 401 );
		}

		$issuedAt  = time();
		$notBefore = apply_filters( 'wpe/rest/auth/not_before', $issuedAt, $issuedAt );
		$expire    = apply_filters( 'wpe/rest/auth/expire', $issuedAt + ( DAY_IN_SECONDS * 7 ), $issuedAt );
		$token     = [
			'iss'  => get_bloginfo( 'url' ),
			'iat'  => $issuedAt,
			'nbf'  => $notBefore,
			'exp'  => $expire,
			'data' => [
				'user' => [
					'id' => $user->data->ID,
				],
			],
		];

		/** Let the user modify the token data before the sign. */
		return JWT::encode( apply_filters( 'wpe/rest/auth/before_sign', $token, $user ), $secret_key, 'HS256' );
	}

	public static function explore_token ( $token )
	{
		$secret_key = self::get_secret_key();
		return JWT::decode( $token, new Key( $secret_key, 'HS256' ) );
	}

	public static function store_token ( $value )
	{
		return self::set_info( 'token', $value );
	}
}
