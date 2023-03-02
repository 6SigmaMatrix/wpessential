<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final  class FileSystem
{
	private static $args;

	public static function constructor ( $args = [] )
	{
		self::$args = wp_parse_args(
			$args,
			[
				'fs_method'   => defined( 'FS_METHOD' ) ? FS_METHOD : 'direct',
				'credentials' => [
					'hostname' => defined( 'FTP_HOST' ) ? preg_replace( '|\w+://|', '', FTP_HOST ) : null,
					'username' => defined( 'FTP_USER' ) ? FTP_USER : null,
					'password' => defined( 'FTP_PASS' ) ? FTP_PASS : null
				],
				'callback'    => [
					'method' => '',
					'data'   => [
						'file'    => '',
						'content' => '',
						'mode'    => false
					]
				]
			]
		);
		return call_user_func( [ __CLASS__, self::$args[ 'callback' ][ 'method' ] ], self::$args[ 'callback' ][ 'data' ] );
	}

	public static function put ( $args )
	{
		return self::init()->put_contents( $args[ 'file' ], $args[ 'content' ], $args[ 'mode' ] = false );
	}

	/**
	 * Initialize the WP_Filesystem.
	 *
	 * @static
	 * @access public
	 * @return object WP_Filesystem
	 */
	public static function init ()
	{
		self::ftp();
		// The WordPress filesystem.
		global $wp_filesystem;

		if ( empty( $wp_filesystem ) ) {
			require_once wp_normalize_path( ABSPATH . '/wp-admin/includes/file.php' );
			WP_Filesystem( self::$args[ 'credentials' ] );
		}

		return $wp_filesystem;
	}

	public static function ftp ()
	{
		$method = self::$args[ 'fs_method' ];
		if ( 'ftpext' === self::$args[ 'fs_method' ] ) {
			// If defined, set it to that, Else, set to NULL.
			$credentials = self::$args[ 'credentials' ];

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
	}

	public static function get ( $args )
	{
		return self::init()->get_contents( $args[ 'file' ] );
	}
}
