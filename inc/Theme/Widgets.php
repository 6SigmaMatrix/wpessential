<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Theme;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Widgets
{
	public static function constructor ()
	{
		add_action( 'widgets_init', [ __CLASS__, 'init' ] );
	}

	public static function init ()
	{
		self::remove();
		self::register();
	}

	public static function remove ()
	{
		$widgets = apply_filters( 'wpe/remove/widgets', [] );
		if ( ! empty( $widgets ) ) {
			foreach ( $widgets as $widet ) {
				unregister_widget( $widet );
			}
		}
	}

	public static function register ()
	{
		$widgets = apply_filters( 'wpe/register/widgets', [] );
		if ( ! empty( $widgets ) ) {
			sort( $widgets );
			foreach ( $widgets as $widet ) {
				if ( class_exists( $widet ) ) {
					register_widget( $widet );
				}
			}
		}
	}
}
