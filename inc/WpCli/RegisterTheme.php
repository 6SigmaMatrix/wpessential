<?php

namespace WPEssential\Plugins\WpCli;

use WPEssential\Plugins\Utility\FileSystem;

final class RegisterTheme extends WpCli
{
	public static function constructor ()
	{
		self::$commands[ 'wpe-register-theme' ] = [ __CLASS__, 'make' ];
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

	public static function create ( $data = [] )
	{
		self::line( sprintf( self::$stings[ "start_create" ], self::class_name() ) );

		$code_generate = FileSystem::constructor(
			[
				'callback' => [
					'method' => 'get',
					'data'   => [
						'file' => WPE_DIR . '/functions.php'
					]
				]
			]
		);

		$code = FileSystem::constructor(
			[
				'callback' => [
					'method' => 'get',
					'data'   => [
						'file' => get_template_directory() . '/functions.php'
					]
				]
			]
		);

		self::line( sprintf( self::$stings[ 'edit_create' ], self::class_name() ) );

		FileSystem::constructor(
			[
				'callback' => [
					'method' => 'put',
					'data'   => [
						'file'    => get_template_directory() . '/functions.php',
						'content' => $code
					]
				]
			]
		);


		self::line( sprintf( self::$stings[ 'end_create' ], self::class_name() ) );
	}
}
