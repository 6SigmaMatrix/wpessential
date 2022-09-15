<?php
/**
 * Plugin DB settings
 *
 * @since  1.0.0
 */
if ( ! defined( 'WPE_SETTINGS' ) ) {
	define( 'WPE_SETTINGS', apply_filters( 'wpe/register/admin_pages/options/store_key', 'wpe_st' ) );
}

/**
 * Plugin Version
 *
 * @since  1.0.00004
 */
if ( ! defined( 'WPE_VERSION' ) ) {
	if ( ( defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) || ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) ) {
		define( 'WPE_VERSION', time() );
	} else {
		define( 'WPE_VERSION', '1.0.0.00009' );
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
 * @since  1.0.00004
 */
if ( ! defined( 'WPE_NONCE' ) ) {
	define( 'WPE_NONCE', 'wpe_request_nonce' );
}

/**
 * WPEssential Plugin url
 *
 * @since  1.0.0001
 */
if ( ! defined( 'WPE_AJAX_PREFIX' ) ) {
	define( 'WPE_AJAX_PREFIX', 'wpe' );
}

/**
 * WPEssential TGM
 *
 * @since  2.0
 */
if ( ! defined( 'WPE_TGM' ) ) {
	define( 'WPE_TGM', false );
}

/**
 * WPEssential KIRKI
 *
 * @since  2.0
 */
if ( ! defined( 'WPE_KIRKI' ) ) {
	define( 'WPE_KIRKI', false );
}
