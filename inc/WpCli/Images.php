<?php

namespace WPEssential\Plugins\WpCli;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Utility\FileSystem;

final class Images extends WpCli
{
	public static function constructor ()
	{
		self::$commands[ 'wpe-register-images' ] = [ __CLASS__, 'make' ];
		parent::constructor();
	}

	public static function make ( $args, $assoc_args )
	{
		$assoc_args = wp_parse_args(
			$assoc_args,
			[
				'action'     => '',
				'sub-action' => '',
				'data'       => []
			]
		);

		call_user_func( [ __CLASS__, $assoc_args[ 'action' ] ], $assoc_args[ 'data' ] );
	}

	public static function create ( $data )
	{
		self::line( sprintf( self::$stings[ "start_create" ], self::class_name() ) );

		wpe_error( self::$theme_info );
		FileSystem::constructor(
			[
				'callback' => 'put',
				'data'     => [
					'file'    => '',
					'content' => ''
				]
			]
		);
		//wpe_init_filesystem()->put_contents( $file, $contents, $mode = false );
	}
}
