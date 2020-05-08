<?php

namespace WPEssential\Builders\Elementor\Utility;

use WPEssential\Builders\Elementor\Implement\ClassInit as Implement;

class Elementor implements Implement
{
	public static function constructor ()
	{
		add_action( 'elementor/elements/categories_registered', [ __CLASS__, 'register_category' ] );
		add_action( 'elementor/widgets/widgets_registered', [ __CLASS__, 'registry_widget' ] );
	}

	public static function registry_widget ()
	{
		$list = apply_filters( 'wpe/elementor/shortcodes', [] );
		if ( !$list ) {
			return;
		}
		foreach ( $list as $class_name ) {
			if ( class_exists( $class_name ) ) {
				\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $class_name() );
			}
		}
	}

	public static function register_category ( $elements_manager )
	{
		Categories::constructor( $elements_manager );
	}
}
