<?php
/*
 * Copyright (c) 2021. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Api\WordPress\Plugins;

final class PluginInfo extends Plugins
{
	protected static string $sub_branch = '1.0/';

	public static function constructor ( string $slug = 'wpessential', string $type = 'in_array' )
	{
		parent::constructor();
		self::$report = parent::$base . self::$sub_branch;

		return call_user_func( [ __CLASS__, $type ], $slug );
	}

	public static function json ( $slug )
	{
		$content = wp_remote_get( parent::$base . $slug . '.json' );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}

	public static function in_array ( $slug )
	{
		$content = wp_remote_get( parent::$branch . $slug );
		$content = maybe_unserialize( wpe_array_get( $content, 'body' ) );
		return $content;
	}
}
