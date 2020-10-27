<?php

namespace WPEssential\Plugins\Builders\Elementor\Utility;


class Tabs
{
	public static function constructor ()
	{
		$categories = self::set_names();
		foreach ( $categories as $key => $name ) {
			\Elementor\Controls_Manager::add_tab( $key, $name );
		}
	}

	/**
	 * Set Tabs list.
	 * Retrieve Tabs name.
	 *
	 * @return array Tabs name.
	 * @access static|protected
	 * @static | @protected
	 */

	protected static function set_names ()
	{
		return apply_filters(
			'wpe/elementor/tabs',
			[
				'loop' => __( 'Loop', 'wpessential' )
			]
		);
	}
}
