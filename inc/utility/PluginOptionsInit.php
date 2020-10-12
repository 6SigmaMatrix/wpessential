<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Loader;

final class PluginOptionsInit
{
	private static array $options_list = [
		'allowed_post_types' => 'allowed-post-types.php',
	];

	private static function theme_options ()
	{
		$data = Loader::options();
		$data = wpe_array_get( $data, 'plugin_options' );
		if ( !$data ) {
			return [];
		}
		return $data;
	}

	public static function options ()
	{
		wpe_ajax_authorized();

		$options_files = apply_filters( 'wpe/plugin/options/list', self::$options_list );
		$options       = [];
		foreach ( $options_files as $file_k => $file_v ) {
			$file = apply_filters( "wpe/plugin/options/{$file_k}", wpe_plugin_template_load( "config/plugin-controls/{$file_v}" ) );

			if ( file_exists( $file ) ) {
				$options[] = require_once $file;
			}
		}

		$list[ 'plugin_options' ] = $options;
		$list[ 'saved_options' ]  = self::theme_options();
		wp_send_json_success( $list );
	}

	public static function save ()
	{
		wpe_ajax_authorized();

		$data_get                 = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		$data                     = Loader::options();
		$data[ 'plugin_options' ] = wpe_array_get( $data_get, 'save_options' );
		$data                     = Loader::options_update( $data );
		if ( $data ) {
			wp_send_json_success( __( 'Data has been saved.', 'wpessential' ) );
		}
		wp_send_json_error( __( 'Data did not stored. It have an error, found in data.', 'wpessential' ) );
	}
}

