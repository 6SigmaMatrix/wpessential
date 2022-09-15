<?php

namespace WPEssential\Plugins\Api\Wpessential;

use WPEssential\Plugins\Admin\License;

final class Auth extends Wpessential
{
	public static function constructor ()
	{
		$prefix = WPE_AJAX_PREFIX;
		add_action( "wp_ajax_{$prefix}_authorize", [ __CLASS__, 'login' ] );
		add_action( "wp_ajax_nopriv_{$prefix}_authorize", [ __CLASS__, 'login' ] );

		add_action( "wp_ajax_{$prefix}_reg_user", [ __CLASS__, 'register' ] );
		add_action( "wp_ajax_nopriv_{$prefix}_reg_user", [ __CLASS__, 'register' ] );
	}

	public static function login ()
	{
		wpe_ajax_authorized();

		$form = wpe_array_get( $_POST, 'form' );
		if ( ! array_key_exists( 'user', $form ) || ! array_key_exists( 'pass', $form ) ) {
			wp_send_json_error( __( 'Please check your provided info. Either username or password is not found.', 'wpessential' ), 406 );
		}

		self::$route = '/user_auth';

		self::$params = [ 'body' => $form ];
		$data         = self::fetch();
		$data         = wpe_josn_decode( $data, true );

		if ( wpe_array_get( $data, 'token' ) ) {
			$data = License::store_token( $data );
			wp_send_json_success( $data );
		}

		wp_send_json_error( wpe_array_get( $data, 'message' ), wpe_array_get( $data, 'data.status' ) );
	}

	public static function authorized_token ( $token, $return = true )
	{
		if ( ! array_key_exists( 'token', $token ) && ! $return ) {
			wp_send_json_error( __( 'Please check your provided token information.', 'wpessential' ), 401 );
		}

		self::$route = '/token_verify';

		self::$params = [
			'headers' => [
				'Authorization' => 'Bearer ' . wpe_array_get( $token, 'token' ),
			]
		];
		$data         = self::fetch();
		if ( ! $return ) {
			wp_send_json_success( [ 'user' => $data ] );
		}

		return wp_json_encode( [ 'user' => $data ] );
	}

	public static function register ()
	{
		wpe_ajax_authorized();

		$form = wpe_array_get( $_POST, 'form' );
		if ( ! array_key_exists( 'user', $form ) || ! array_key_exists( 'pass', $form ) || ! array_key_exists( 'email', $form ) ) {
			wp_send_json_error( __( 'Please check your provided info. Either username, email or password is not found.', 'wpessential' ), 401 );
		}

		self::$route  = '/user_register';
		self::$params = [
			'body' => $form
		];
		$data         = self::post();
		$data         = wpe_josn_decode( $data, true );
		if ( wpe_array_get( $data, 'message' ) ) {
			wp_send_json_error( wpe_array_get( $data, 'message' ), wpe_array_get( $data, 'data.status' ) );
		}

		wp_send_json_success( $data );
	}
}
