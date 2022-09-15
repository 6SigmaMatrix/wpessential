<?php

namespace WPEssential\Plugins\Requesting;

class AuthGuard
{
	public static function constructor ()
	{
		add_action( 'wp_ajax_auth', [ __CLASS__, 'login' ] );
		add_action( 'wp_ajax_nopriv_auth', [ __CLASS__, 'login' ] );
	}

	public static function login ()
	{
		wpe_ajax_authorized();

		$data                    = [];
		$data[ 'user_login' ]    = sanitize_text_field( wpe_array_get( $_POST, 'user_login' ) );
		$data[ 'user_password' ] = sanitize_text_field( wpe_array_get( $_POST, 'user_password' ) );
		self::authorized( $data );
	}

	private static function authorized ( $data, $secure_cookie = '' )
	{
		$response = wp_signon( $data, $secure_cookie );
		if ( is_wp_error( $response ) ) {
			wp_send_json_error( $response->get_error_messages() );
		}

		wp_send_json_success( __( 'Info Authorized', 'wpessential' ) );
	}

	public static function register ()
	{

	}
}
