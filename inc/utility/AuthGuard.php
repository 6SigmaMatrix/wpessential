<?php

namespace WPEssential\Plugins\Utility;

class AuthGuard
{
	public static function authorized ( array $data, $secure_cookie = '' )
	{
		$response = wp_signon( $data, $secure_cookie );
		if ( is_wp_error( $response ) ) {
			wp_send_json_error( $response->get_error_messages() );
		}

		wp_send_json_success( __( 'Info Authorized', 'wpessential' ) );
	}

	public static function registrar ()
	{

	}
}
