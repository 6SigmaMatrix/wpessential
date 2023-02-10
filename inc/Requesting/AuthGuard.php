<?php

namespace WPEssential\Plugins\Requesting;

class AuthGuard
{
	public static function constructor ()
	{
		add_action( 'wp_ajax_auth', [ __CLASS__, 'login' ] );
		add_action( 'wp_ajax_nopriv_auth', [ __CLASS__, 'login' ] );

		add_action( 'wp_ajax_auth_reg', [ __CLASS__, 'register' ] );
		add_action( 'wp_ajax_nopriv_auth_reg', [ __CLASS__, 'register' ] );

		add_action( 'wp_ajax_auth_forgot', [ __CLASS__, 'forgot' ] );
		add_action( 'wp_ajax_nopriv_auth_forgot', [ __CLASS__, 'forgot' ] );
	}

	public static function login ()
	{
		wpe_ajax_authorized();

		$form                    = wpe_array_get( $_POST, 'form' );
		$data                    = [];
		$data[ 'user_login' ]    = sanitize_text_field( wpe_array_get( $form, 'user_login' ) );
		$data[ 'user_password' ] = sanitize_text_field( wpe_array_get( $form, 'user_password' ) );
		$data[ 'remember' ]      = sanitize_text_field( wpe_array_get( $form, 'remember' ) );

		$response = wp_signon( $data );
		if ( is_wp_error( $response ) ) {
			wp_send_json_error( $response->get_error_messages(), 401 );
		}

		wp_send_json_success( __( 'Info Authorized', 'wpessential' ) );
	}

	public static function register ()
	{
		wpe_ajax_authorized();

		$form       = wpe_array_get( $_POST, 'form' );
		$user_login = sanitize_text_field( wpe_array_get( $form, 'user_login' ) );
		$user_email = sanitize_email( wpe_array_get( $form, 'user_email' ) );
		$user       = register_new_user( $user_login, $user_email );
		if ( ! is_wp_error( $user ) ) {
			$redirect_to = wpe_array_get( $form, 'redirect_to', 'wp-login.php?checkemail=registered' );
			wp_send_json_success( $redirect_to );
		}

		wp_send_json_error( $user->get_error_message(), 401 );
	}

	public static function forgot ()
	{
		wpe_ajax_authorized();

		$form       = wpe_array_get( $_POST, 'form' );
		$user_email = sanitize_email( wpe_array_get( $form, 'user_email' ) );
		$errors     = retrieve_password( $user_email );

		if ( ! is_wp_error( $errors ) ) {
			$redirect_to = wpe_array_get( $form, 'redirect_to', 'wp-login.php?checkemail=confirm' );
			wp_send_json_success( $redirect_to );
		}

		wp_send_json_error( $errors->get_error_message(), 401 );
	}
}
