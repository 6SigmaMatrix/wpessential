<?php

namespace WPEssential\Plugins\Builders\Elementor\Utility;


class Categories
{
	public static function constructor ( $elements_manager )
	{
		$categories = self::set_names();
		foreach ( $categories as $key => $name ) {
			$elements_manager->add_category( $key, $name );
		}
	}

	/**
	 * Set Categories list.
	 * Retrieve Categories name.
	 *
	 * @return array Categories name.
	 * @access static|protected
	 * @static | @protected
	 */

	protected static function set_names ()
	{
		return apply_filters(
			'wpe/elementor/categories',
			[
				'wpessential' => [
					'title' => __( 'WPEssential', 'plugin-name' ),
					'icon'  => 'wpe-icons wpe',
				]
			]
		);
	}
}
