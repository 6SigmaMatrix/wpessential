<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Loader;

final class ThemeOptionsInit
{
	private static array $options_list = [
		'additional_css_tab' => 'additional-css-tab.php',
		'background_tab'     => 'background-tab.php',
		'color_scheme_tab'   => 'color-scheme-tab.php',
		'field_test_tab'     => 'field-test-tab.php',
		'site_identity_tab'  => 'site-identity-tab.php',
	];

	private static function theme_options ()
	{
		$data = Loader::options();
		$data = wpe_array_get( $data, 'theme_options' );
		if ( !$data ) {
			return [];
		}
		return $data;
	}

	public static function options ()
	{
		wpe_ajax_authorized();

		$options_files = apply_filters( 'wpe/theme/options/list', self::$options_list );
		$options       = [];
		foreach ( $options_files as $file_k => $file_v ) {
			$file = apply_filters( "wpe/theme/options/{$file_k}", wpe_plugin_template_load( "config/theme-controls/{$file_v}" ) );
			if ( file_exists( $file ) ) {
				$options[] = require_once $file;
			}
		}

		$list[ 'theme_options' ] = $options;
		$list[ 'saved_options' ] = self::theme_options();
		wp_send_json_success( $list );
	}

	public static function save ()
	{
		wpe_ajax_authorized();

		$data_get                = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		$data                    = Loader::options();
		$data[ 'theme_options' ] = wpe_array_get( $data_get, 'save_options' );
		$data                    = Loader::options_update( $data );
		if ( $data ) {
			wp_send_json_success( __( 'Data has been saved.', 'wpessential' ) );
		}
		wp_send_json_error( __( 'Data did not stored. It have an error, found in data.', 'wpessential' ) );
	}
}

