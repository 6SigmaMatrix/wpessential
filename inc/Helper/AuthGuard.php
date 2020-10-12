<?php

namespace WPEssential\Plugins\Helper;

trait AuthGuard
{
	public static function authorized ( array $data )
	{
		$response = wp_signon( $data, false );
		if ( is_wp_error( $response ) ) {
			wp_send_json_error( $response->get_error_messages() );
		}

		wp_send_json_success( __( 'Info Authorized', 'wpessential' ) );
	}

	public static function registrar ()
	{

	}
}
