<?php

namespace WPEssential\Plugins\Builders\WordPress\Implement;

interface Skin
{
	public function get_id ();

	public function get_title ();

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function register_control_view ( $args );
}
