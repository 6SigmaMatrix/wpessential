<?php
/**
 * Plugin DB settings
 *
 * @since  1.0.0
 */
if ( ! defined( 'WPE_SETTINGS' ) ) {
	define( 'WPE_SETTINGS', 'wpe_st' );
}

/**
 * Plugin Version
 *
 * @since  1.0.00004
 */
if ( ! defined( 'WPE_VERSION' ) ) {
	if ( defined( 'WPE_DEBUG' ) && true === WPE_DEBUG || defined( 'WP_DEBUG' ) && true === WP_DEBUG ) {
		define( 'WPE_VERSION', time() );
	} else {
		define( 'WPE_VERSION', '1.0.0' );
	}
}

/**
 * WPEssential Plugin dir
 *
 * @since  1.0.0
 */
if ( ! defined( 'WPE_DIR' ) ) {
	define( 'WPE_DIR', plugin_dir_path( __FILE__ ) );
}

/**
 * WPEssential Plugin url
 *
 * @since  1.0.0
 */
if ( ! defined( 'WPE_URL' ) ) {
	define( 'WPE_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * WPEssential Plugin url
 *
 * @since  1.0.4
 */
if ( ! defined( 'WPE_NONCE' ) ) {
	define( 'WPE_NONCE', 'wpe_request_nonce' );
}
