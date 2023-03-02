<?php

namespace WPEssential\Plugins\WpCli;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WP_CLI;

abstract class WpCli extends WP_CLI
{
	public static $stings = [
		'start_create' => 'WPE start the creation of %s register module...',
		'edit_create'  => 'WPE editing the file of %s register module...',
		'end_create'   => 'WPE close the file %s...'
	];

	protected static $commands   = [];
	protected static $theme_info = [];

	public static function constructor ()
	{
		self::$theme_info = wpe_theme_info();
		self::run();
	}

	public static function run ()
	{
		$commands = apply_filters( 'wpe/cli/register/commands', array_filter( self::$commands ) );
		if ( ! empty( $commands ) && is_array( $commands ) ) {
			foreach ( $commands as $name => $callback ) {
				self::add_command( $name, $callback );
			}
		}
	}

	public static function class_name ()
	{
		return basename( get_class() );
	}
}
