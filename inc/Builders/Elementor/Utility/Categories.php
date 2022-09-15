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
				'wpessential'        => [
					'title' => __( 'WPEssential', 'wpessential' ),
					'icon'  => 'wpe-icons wpe',
				],
				'wpessential-wc'     => [
					'title' => __( 'WPEssential WC', 'wpessential' ),
					'icon'  => 'wpe-icons wpe',
				],
				'wpessential-form'   => [
					'title' => __( 'WPEssential Form', 'wpessential' ),
					'icon'  => 'wpe-icons wpe',
				],
				'wpessential-slider' => [
					'title' => __( 'WPEssential Slider', 'wpessential' ),
					'icon'  => 'wpe-icons wpe',
				]
			]
		);
	}
}
