<?php

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Api\WordPress\Stats;

if ( ! function_exists( 'wpe_wp_stats_api_array' ) ) {
	/**
	 * Return the WordPress api in array forum.
	 *
	 * @param string $software Enter the software name to get data from wordpress.org (mysql, php, wordpress).
	 *
	 * @return array
	 */
	function wpe_wp_stats_api_array ( $software = 'wordpress' )
	{
		$stats = Stats::make()->type( $software )->toArray();
		if ( ! empty( $stats ) ) {
			return array_keys( $stats );
		}
		return [];
	}
}

if ( ! function_exists( 'wpe_wp_stats_api_json' ) ) {
	/**
	 * Return the WordPress api in json forum.
	 *
	 * @param string $software Enter the software name to get data from wordpress.org (mysql, php, wordpress).
	 *
	 * @return object
	 */
	function wpe_wp_stats_api_json ( $software = 'wordpress' )
	{
		$stats = Stats::make()->type( $software )->toArray();
		if ( ! empty( $stats ) ) {
			return (object) array_keys( $stats );
		}
		return (object) [];
	}
}

if ( ! function_exists( 'wpe_wp_php_stats_api_array' ) ) {
	/**
	 * Return the PHP stats.
	 *
	 * @return array
	 */
	function wpe_wp_php_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'php' );
	}
}

if ( ! function_exists( 'wpe_wp_php_stats_api_json' ) ) {
	/**
	 * Return the PHP stats.
	 *
	 * @return object
	 */
	function wpe_wp_php_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'php' );
	}
}

if ( ! function_exists( 'wpe_wp_mysql_stats_api_array' ) ) {
	/**
	 * Return the MYSQL stats.
	 *
	 * @return array
	 */
	function wpe_wp_mysql_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'mysql' );
	}
}

if ( ! function_exists( 'wpe_wp_mysql_stats_api_json' ) ) {
	/**
	 * Return the MYSQL stats.
	 *
	 * @return object
	 */
	function wpe_wp_mysql_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'mysql' );
	}
}

if ( ! function_exists( 'wpe_wp_lang_stats_api_array' ) ) {
	/**
	 * Return the Language stats.
	 *
	 * @return array
	 */
	function wpe_wp_lang_stats_api_array ()
	{
		return wpe_wp_stats_api_array( 'local' );
	}
}

if ( ! function_exists( 'wpe_wp_lang_stats_api_json' ) ) {
	/**
	 * Return the Language stats.
	 *
	 * @return object
	 */
	function wpe_wp_lang_stats_api_json ()
	{
		return wpe_wp_stats_api_json( 'local' );
	}
}

if ( ! function_exists( 'wpe_get_ip' ) ) {
	/**
	 * Get the user IP address.
	 *  Code based on the:
	 *    - WordPress method \WP_Community_Events::get_unsafe_client_ip
	 *    - Cloudflare documentation https://support.cloudflare.com/hc/en-us/articles/206776727
	 *
	 * @return string
	 */
	function wpe_get_ip ()
	{

		$ip = '127.0.0.1';

		$address_headers = [
			'HTTP_TRUE_CLIENT_IP',
			'HTTP_CF_CONNECTING_IP',
			'HTTP_X_REAL_IP',
			'HTTP_CLIENT_IP',
			'HTTP_X_FORWARDED_FOR',
			'HTTP_X_FORWARDED',
			'HTTP_X_CLUSTER_CLIENT_IP',
			'HTTP_FORWARDED_FOR',
			'HTTP_FORWARDED',
			'REMOTE_ADDR',
		];

		foreach ( $address_headers as $header ) {
			if ( empty( $_SERVER[ $header ] ) ) {
				continue;
			}

			/*
			 * HTTP_X_FORWARDED_FOR can contain a chain of comma-separated addresses, with or without spaces.
			 * The first address is the original client. It can't be trusted for authenticity,
			 * but we don't need to for this purpose.
			 */

			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
			$address_chain = explode( ',', wp_unslash( $_SERVER[ $header ] ) );
			$ip            = filter_var( trim( wpe_array_get( $address_chain, '0' ) ), FILTER_VALIDATE_IP );

			break;
		}

		return filter_var( apply_filters( 'wpe_get_ip', $ip ), FILTER_VALIDATE_IP );
	}
}

if ( ! function_exists( 'wpe_get_user_location_info' ) ) {
	/**
	 * Get the user location information.
	 *
	 * @return array
	 * @since 2.0
	 */
	function wpe_get_user_location_info ( $return_field = '' )
	{
		$ip       = wpe_get_ip();
		$url      = "http://ip-api.com/json/{$ip}?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query";
		$response = wp_remote_get( $url );

		if ( \is_array( $response ) ) {
			$response_body = wpe_josn_decode( $response[ 'body' ], true );
			if ( $return_field && wpe_array_get( $response_body, $return_field ) ) {
				return wpe_array_get( $response_body, $return_field );
			}

			return $response_body;
		}

		return [];
	}
}
