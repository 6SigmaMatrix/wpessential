<?php
if ( ! function_exists( 'wpe_template_dir' ) ) {
	/**
	 * Retrieve|Find the full location in themes and plugins.
	 *
	 * @param string $path root path.
	 *
	 * @return string|WP_Error The resource or WP_Error message on failure
	 */
	function wpe_template_dir ( $path )
	{
		$find_in = apply_filters( 'wpe/template/dir', get_theme_file_path( $path ) );
		if ( is_dir( $find_in ) ) {
			return $find_in;
		}

		$find_in = $path;
		if ( is_dir( $find_in ) ) {
			return $find_in;
		}

		$find_in = WPE_DIR . $path;
		if ( is_dir( $find_in ) ) {
			return $find_in;
		}

		$error = new WP_Error(
			[
				404,
				sprintf( __( 'File %s not found' ), basename( $find_in ) ),
				$path
			]
		);
		return $error->get_error_message();
	}
}

if ( ! function_exists( 'wpe_template_load' ) ) {
	/**
	 * Retrieve|Find the file location in themes and plugins.
	 *
	 * @param string $path root path of the file.
	 *
	 * @return string|WP_Error The resource or WP_Error message on failure
	 */
	function wpe_template_load ( $path )
	{
		$find_in = apply_filters( 'wpe/template/load', get_theme_file_path( $path ) );
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = $path;
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = WPE_DIR . $path;
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$error = new WP_Error(
			[
				404,
				sprintf( __( 'File %s not found' ), basename( $find_in ) ),
				$path
			]
		);
		return $error->get_error_message();
	}
}

if ( ! function_exists( 'wpe_plugin_template_load' ) ) {
	/**
	 * Retrieve|Find the file location in plugins.
	 *
	 * @param string $path root path of the file.
	 * @param string $file file name.
	 *
	 * @return string|WP_Error The resource or WP_Error message on failure
	 */
	function wpe_plugin_template_load ( $path, $file )
	{
		$_file = "templates/{$path}/{$file}";

		$find_in = apply_filters( 'wpe/plugin/template/load', get_theme_file_path( $_file ) );
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = $_file;
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = "{$path}templates/{$file}";
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = WPE_DIR . "{$_file}";
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$error = new WP_Error(
			[
				404,
				sprintf( __( 'File %s not found' ), basename( $find_in ) ),
				$_file
			]
		);
		return $error->get_error_message();
	}
}

if ( ! function_exists( 'wpe_get_data_by_url' ) ) {
	/**
	 * Get code from file.
	 *
	 * @param string $url  URL to retrieve.
	 * @param array  $args Optional. Request arguments. Default empty array.
	 *
	 * @return string|array|WP_Error The data or WP_Error message on failure.
	 */
	function wpe_get_data_by_url ( $url, $args = [] )
	{
		$file = wp_remote_get( $url, $args );
		if ( ! is_wp_error( $file ) ) {
			return wp_remote_retrieve_body( $file );
		}

		return $file;
	}
}

if ( ! function_exists( 'wpe_post_data_by_url' ) ) {
	/**
	 * Post code via url.
	 *
	 * @param string $url  URL to retrieve.
	 * @param array  $args Optional. Request arguments. Default empty array.
	 *
	 * @return string|array|WP_Error The data or WP_Error message on failure.
	 */
	function wpe_post_data_by_url ( $url, $args = [] )
	{
		$file = wp_remote_post( $url, $args );
		if ( ! is_wp_error( $file ) ) {
			return wp_remote_retrieve_body( $file );
		}
		return $file;
	}
}
