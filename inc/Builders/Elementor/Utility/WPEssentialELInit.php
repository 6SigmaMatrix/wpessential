<?php

namespace WPEssential\Builders\Elementor\Utility;

use Elementor\Plugin;

class WPEssentialELInit
{
	public static function constructor ()
	{
		add_action( 'elementor/elements/categories_registered', [ __CLASS__, 'register_category' ] );
		add_action( 'elementor/widgets/widgets_registered', [ __CLASS__, 'registry_widget' ] );
	}

	public static function registry_widget ()
	{
		$list = apply_filters(
			'wpe/elementor/shortcodes',
			[
				'\WPEssential\Builders\Elementor\Shortcodes\WPEssentialELPost'
			]
		);
		if ( !$list ) {
			return;
		}
		foreach ( $list as $shortcode ) {
			Plugin::instance()->widgets_manager->register_widget_type( new $shortcode() );
		}
	}

	public static function register_category ( $elements_manager )
	{
		WPEssentialELCategory::constructor( $elements_manager );
	}
}
