<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Widgets\Utility;

use WPEssential\Widgets\Implement\ClassInit as Implement;

final class Widgets implements Implement
{
	public static function constructor ()
	{
		self::registry();
	}

	public static function registry ()
	{
		$list = apply_filters( 'wpe/widgets', [] );
		if ( !$list ) {
			return;
		}
		foreach ( $list as $widget ) {
			register_widget( $widget );
		}
	}
}
