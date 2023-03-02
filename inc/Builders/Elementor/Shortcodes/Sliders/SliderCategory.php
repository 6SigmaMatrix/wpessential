<?php

namespace WPEssential\Plugins\Builders\Elementor\Shortcodes\Sliders;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\Elementor\Utility\Base;
use WPEssential\Plugins\Implement\Shortcodes;

class SliderCategory extends Base implements Shortcodes
{
	/**
	 * Set widget categories.
	 *
	 * Retrieve the list of categories the icon widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return array Widget categories.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function set_categories ()
	{
		return [ 'wpessential-slider' ];
	}

	/**
	 * Whether the reload preview is required or not.
	 *
	 * Used to determine whether the reload preview is required.
	 *
	 * @return bool Whether the reload preview is required.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function is_reload_preview_required ()
	{
		return true;
	}

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function register_controls ()
	{
	}

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function render ()
	{
	}
}
