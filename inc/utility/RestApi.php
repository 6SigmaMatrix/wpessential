<?php

namespace WPEssential\Plugins\Utility;

final class RestApi
{
	public static function constructor ()
	{
		add_filter( 'rest_url_prefix', [ __CLASS__, 'change_base' ], 20 );
		add_action( 'rest_api_init', [ __CLASS__, 'register_routes' ], 20 );
		add_filter( 'rest_endpoints', [ __CLASS__, 'remove_routs' ], 20 );
	}

	public static function register_routes ()
	{
		$routes = apply_filters(
			'wpe/register/routes',
			[
				[
					'namespace' => '',
					'route'     => '',
					'arguments' => [
						'methods'  => '',
						'callback' => [ '', '' ],
						'args'     => [],
					]
				]
			]
		);
		$routes = array_map( 'array_filter', $routes );
		$routes = array_filter( $routes );
		if ( $routes && is_array( $routes ) && ! empty( $routes ) ) {
			foreach ( $routes as $route ) {
				register_rest_route(
					wpe_array_get( $routes, 'namespace' ),
					wpe_array_get( $routes, 'route' ),
					wpe_array_get( $routes, 'arguments' ),
				);
			}
		}
	}

	public static function change_base ( $slug )
	{
		return 'wpe-api-json/route';
	}

	public static function remove_routs ( $endpoints )
	{
		$routes = apply_filters( 'wpe/remove/routes', [] );
		if ( $routes && is_array( $routes ) && ! empty( $routes ) ) {
			foreach ( $routes as $route ) {
				if ( wpe_array_get( $endpoints, $route ) ) {
					unset( $endpoints[ $route ] );
				}
			}
		}

		$endpoints;
	}
}
