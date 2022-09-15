<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Admin\License;

final class RestApi
{
	public static function constructor ()
	{
		add_filter( 'rest_url_prefix', [ __CLASS__, 'change_base' ], 1000 );
		add_action( 'rest_api_init', [ __CLASS__, 'register_routes' ], 100 );
		add_filter( 'rest_endpoints', [ __CLASS__, 'remove_routs' ], 100 );
	}

	public static function register_routes ()
	{
		$routes = apply_filters(
			'wpe/register/routes',
			[
				[
					'namespace' => 'wpessential',
					'route'     => '/user_register',
					'arguments' => [
						'methods'             => \WP_REST_Server::CREATABLE,
						'callback'            => [ __CLASS__, 'user_register' ],
						'permission_callback' => '__return_true'
					],
				],
				[
					'namespace' => 'wpessential',
					'route'     => '/user_auth',
					'arguments' => [
						'methods'             => \WP_REST_Server::READABLE,
						'callback'            => [ __CLASS__, 'user_auth' ],
						'permission_callback' => '__return_true'
					],
				],
				[
					'namespace' => 'wpessential',
					'route'     => '/token_verify',
					'arguments' => [
						'methods'             => \WP_REST_Server::READABLE,
						'callback'            => [ __CLASS__, 'token_verify' ],
						'permission_callback' => '__return_true'
					],
				]
			]
		);
		$routes = array_filter( $routes );
		if ( $routes && is_array( $routes ) && ! empty( $routes ) ) {
			foreach ( $routes as $route ) {
				$namespace = wpe_array_get( $route, 'namespace' );
				if ( $namespace ) {
					register_rest_route(
						$namespace,
						wpe_array_get( $route, 'route' ),
						wpe_array_get( $route, 'arguments' ),
					);
				}
			}
		}


		//self::add_cors_support();
	}

	public static function user_register ( $args )
	{
		$user = $args->get_param( 'user' );
		if ( ! $user ) {
			return new \WP_Error(
				'wpe_auth_user_error',
				__( 'Please provide us the username.', 'wpessential' ),
				[
					'status' => 406
				]
			);
		}

		$email = $args->get_param( 'email' );
		if ( ! $email ) {
			return new \WP_Error(
				'wpe_auth_user_email_error',
				__( 'Please provide us the email address.', 'wpessential' ),
				[
					'status' => 406
				]
			);
		}

		$password = $args->get_param( 'pass' );
		if ( ! $password ) {
			return new \WP_Error(
				'wpe_auth_user_password_error',
				__( 'Please provide us the user pass code.', 'wpessential' ),
				[
					'status' => 406
				]
			);
		}

		$user = wp_create_user( $user, $password, $email );
		if ( is_wp_error( $user ) ) {
			return new \WP_Error(
				'wpe_auth_user_password_error',
				sprintf( __( '%s', 'wpessential' ), $user->get_error_message() ),
				[
					'status' => 400
				]
			);
		}

		return __( 'Thank you for your registration. Please login to your account.', 'wpessential' );
	}

	public static function user_auth ( $args )
	{
		$user = $args->get_param( 'user' );
		if ( ! $user ) {
			return new \WP_Error(
				'wpe_auth_user_error',
				__( 'Please provide us the login user.', 'wpessential' ),
				[
					'status' => 406
				]
			);
		}

		$password = $args->get_param( 'pass' );
		if ( ! $password ) {
			return new \WP_Error(
				'wpe_auth_user_password_error',
				__( 'Please provide us the user pass code.', 'wpessential' ),
				[
					'status' => 406
				]
			);
		}

		$user = wp_authenticate( $user, $password );
		if ( is_wp_error( $user ) ) {
			return new \WP_Error(
				'wpe_auth_user_login_error',
				sprintf( __( '%s', 'wpessential' ), $user->get_error_message() ),
				[
					'status' => 406,
				]
			);
		}

		/** The token is signed, now create the object with no sensible user data to the client*/
		$data = [
			'token'             => License::generate_token( $user ),
			'user_email'        => $user->data->user_email,
			'user_nicename'     => $user->data->user_nicename,
			'user_display_name' => $user->data->display_name
		];

		return apply_filters( 'wpe/rest/auth/token_before_dispatch', $data );
	}

	/**
	 * Middleware to try to authenticate the user according to the
	 * token send.
	 *
	 * @param  (int|bool) $user Logged User ID
	 *
	 * @return mixed (int|bool)
	 */
	public static function token_verify ()
	{
		$rest_api_slug = rest_get_url_prefix();
		$valid_api_uri = strpos( $_SERVER[ 'REQUEST_URI' ], $rest_api_slug );

		if ( ! $valid_api_uri ) {
			return new \WP_Error(
				'wpe_token_url_error',
				__( 'Requested URL is not valid', 'wpessential' ),
				[
					'status' => 404,
				]
			);
		}

		$token = self::validate_token( false );
		if ( is_wp_error( $token ) ) {
			return $token;
		}
		/** Everything is ok, return the user ID stored in the token*/
		return $token->data->user->id;
	}


	/**
	 * Main validation function, this function try to get the Autentication
	 * headers and decoded.
	 *
	 * @param bool $output
	 *
	 */
	public static function validate_token ( $output = true )
	{
		/*
		 * Looking for the HTTP_AUTHORIZATION header, if not present just
		 * return the user.
		 */
		$auth = wpe_array_get( $_SERVER, 'HTTP_AUTHORIZATION', false );

		/* Double check for different auth header string (server dependent) */
		if ( ! $auth ) {
			$auth = wpe_array_get( $_SERVER, 'REDIRECT_HTTP_AUTHORIZATION', false );
		}

		if ( ! $auth ) {
			return new \WP_Error(
				'wpe_auth_header_error',
				__( 'Authorization header not found.', 'wpessential' ),
				[
					'status' => 401,
				]
			);
		}

		/*
		 * The HTTP_AUTHORIZATION is present verify the format
		 * if the format is wrong return the user.
		 */
		[ $token ] = sscanf( $auth, 'Bearer %s' );
		if ( ! $token ) {
			return new \WP_Error(
				'wpe_auth_header_error',
				__( 'Authorization header malformed.', 'wpessential' ),
				[
					'status' => 403,
				]
			);
		}

		/** Get the Secret Key */
		$secret_key = License::get_secret_key();
		if ( ! $secret_key ) {
			return new \WP_Error(
				'wpe_auth_header_error',
				__( 'Security auth is not configurated properly, please contact the admin.', 'wpessential' ),
				[
					'status' => 401,
				]
			);
		}

		/** Try to decode the token */
		try {
			$token = License::explore_token( $token );
			/** The Token is decoded now validate the iss */
			if ( $token->iss != get_bloginfo( 'url' ) ) {
				/** The iss do not match, return error */
				return new \WP_Error(
					'wpe_auth_iss_error',
					__( 'The ISS do not match with this server.', 'wpessential' ),
					[
						'status' => 401,
					]
				);
			}
			/** So far so good, validate the user id in the token */
			if ( ! isset( $token->data->user->id ) ) {
				/** No user id in the token, abort!! */
				return new \WP_Error(
					'wpe_auth_iss_error',
					__( 'User ID not found in the token.', 'wpessential' ),
					[
						'status' => 401,
					]
				);
			}
			/** Everything looks good return the decoded token if the $output is false */
			if ( ! $output ) {
				return $token;
			}
			/** If the output is true return an answer to the request to show it */
			return [
				'code' => 'wpe_auth_valid_token',
				'data' => [
					'status' => 200,
				],
			];
		}
		catch ( \Exception $e ) {
			/** Something is wrong trying to decode the token, send back the error */
			return new \WP_Error(
				'wpe_auth_exception',
				sprintf( __( '%s', 'wpessential' ), $e->getMessage() ),
				[
					'status' => 403,
				]
			);
		}
	}

	/**
	 * Set the REST API prefix wp-json to wpe-api-json/route.
	 *
	 * @param $slug
	 *
	 * @return string
	 */
	public static function change_base ( $slug )
	{
		return apply_filters( 'wpe/register/routes/prefix', 'wpe-api-json/route' );
	}

	public static function remove_routs ( $endpoints )
	{
		$routes = apply_filters( 'wpe/remove/routes', [] );
		if ( is_array( $routes ) && ! empty( $routes ) ) {
			foreach ( $routes as $route ) {
				if ( wpe_array_get( $endpoints, $route ) ) {
					unset( $endpoints[ $route ] );
				}
			}
		}

		return $endpoints;
	}

	/**
	 * Add CORs suppot to the request.
	 */
	private static function add_cors_support ()
	{
		$headers = apply_filters( 'wpe/rest/auth/cors_allow_headers', 'Access-Control-Allow-Headers, Content-Type, Authorization' );
		header( sprintf( 'Access-Control-Allow-Headers: %s', $headers ) );
	}
}

/*add_action( 'rest_api_init', function ()
{
	register_rest_route(
		'myplugin/v1',
		'/author/(?P<id>\d+)',
		[
			'methods'             => 'GET',
			'callback'            => 'my_awesome_func',
			'args'                => [
				'id' => [
					'validate_callback' => 'is_numeric'
				],
			],
			'permission_callback' => function ()
			{
				return current_user_can( 'edit_others_posts' );
			}
		]
	);
} );*/
