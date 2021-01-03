<?php

use WPEssential\Plugins\Api\WordPress\Stats\WordPress;

if ( ! function_exists( 'wpe_wp_api_array' ) ) {
	/**
	 * Return the wordpress api in array forum.
	 *
	 * @param string $software Enter the sorftware name to get data from wordpress.org (mysql, php, wordpress).
	 * @return array
	 */
	function wpe_wp_api_array ( $software = 'wordpress' )
	{
		$wp = wpe_wp_api_json( $software );
		$wp = ( $wp ) ? array_keys( json_decode( $wp, true ) ) : [];
		return $wp;
	}
}

if ( ! function_exists( 'wpe_wp_api_json' ) ) {
	/**
	 * Return the wordpress api in json forum.
	 *
	 * @param string $software Enter the sorftware name to get data from wordpress.org (mysql, php, wordpress).
	 * @return array
	 */
	function wpe_wp_api_json ( $software = 'wordpress' )
	{
		$wp = WordPress::constructor( $software );
		return $wp;
	}
}
