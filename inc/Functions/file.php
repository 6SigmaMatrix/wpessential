<?php
if ( ! function_exists( 'wpe_init_filesystem' ) ) {
	/**
	 * Initialize the WP_Filesystem.
	 *
	 * @static
	 * @access public
	 * @return object WP_Filesystem
	 */
	function wpe_init_filesystem ()
	{
		$credentials = [];

		if ( ! defined( 'FS_METHOD' ) ) {
			define( 'FS_METHOD', 'direct' );
		}

		$method = defined( 'FS_METHOD' ) ? FS_METHOD : false;

		if ( 'ftpext' === $method ) {
			// If defined, set it to that, Else, set to NULL.
			$credentials[ 'hostname' ] = defined( 'FTP_HOST' ) ? preg_replace( '|\w+://|', '', FTP_HOST ) : null;
			$credentials[ 'username' ] = defined( 'FTP_USER' ) ? FTP_USER : null;
			$credentials[ 'password' ] = defined( 'FTP_PASS' ) ? FTP_PASS : null;

			// Set FTP port.
			if ( strpos( $credentials[ 'hostname' ], ':' ) && null !== $credentials[ 'hostname' ] ) {
				[ $credentials[ 'hostname' ], $credentials[ 'port' ] ] = explode( ':', $credentials[ 'hostname' ], 2 );
				if ( ! is_numeric( $credentials[ 'port' ] ) ) {
					unset( $credentials[ 'port' ] );
				}
			} else {
				unset( $credentials[ 'port' ] );
			}

			// Set connection type.
			if ( ( defined( 'FTP_SSL' ) && FTP_SSL ) && 'ftpext' === $method ) {
				$credentials[ 'connection_type' ] = 'ftps';
			} elseif ( ! array_filter( $credentials ) ) {
				$credentials[ 'connection_type' ] = null;
			} else {
				$credentials[ 'connection_type' ] = 'ftp';
			}
		}

		// The WordPress filesystem.
		global $wp_filesystem;

		if ( empty( $wp_filesystem ) ) {
			require_once wp_normalize_path( ABSPATH . '/wp-admin/includes/file.php' );
			WP_Filesystem( $credentials );
		}

		return $wp_filesystem;
	}
}

if ( ! function_exists( 'wpe_template_load' ) ) {
	/**
	 * Retrive|Find the file location in themes and plugins.
	 *
	 * @param string $path root path of the file.
	 * @return string|WP_Error The resource or WP_Error message on failure
	 */
	function wpe_template_load ( string $path )
	{
		$find_in = apply_filters( 'wpe/template/load', get_theme_file_path( $path ) );
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = $path;
		if ( file_exists( $find_in ) ) {
			return $find_in;
		}

		$find_in = WPE_DIR . "{$path}";
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
	 * Retrive|Find the file location in plugins.
	 *
	 * @param string $path root path of the file.
	 * @param string $file file name.
	 * @return string|WP_Error The resource or WP_Error message on failure
	 */
	function wpe_plugin_template_load ( string $path, string $file )
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

if ( ! function_exists( 'wpe_file_data' ) ) {
	/**
	 * Get code from file.
	 *
	 * @param string $url URL to retrieve.
	 * @param array $args Optional. Request arguments. Default empty array.
	 * @return string|array|WP_Error The data or WP_Error message on failure.
	 */
	function wpe_file_data ( string $url, array $args = [] )
	{
		$file = wp_remote_get( $url, $args );
		if ( ! is_wp_error( $file ) ) {
			return wpe_array_get( $file, 'body' );
		}
		return $file->get_error_message();
	}
}