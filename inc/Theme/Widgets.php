<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Theme;

final class Widgets
{
	public static function constructor ()
	{
		add_action( 'widgets_init', [ __CLASS__, 'init' ], 1000 );
	}

	public static function init ()
	{
		self::remove();
		self::register();
	}

	public static function register ()
	{
		$widgets = apply_filters( 'wpe/register/widgets', [] );
		$widgets = array_filter( $widgets );
		if ( $widgets ) {
			sort( $widgets );
			foreach ( $widgets as $widet ) {
				register_widget( $widet );
			}
		}
	}

	public static function remove ()
	{
		$widgets = apply_filters( 'wpe/remove/widgets', [] );
		$widgets = array_filter( $widgets );
		if ( $widgets ) {
			foreach ( $widgets as $widet ) {
				unregister_widget( $widet );
			}
		}
	}
}

