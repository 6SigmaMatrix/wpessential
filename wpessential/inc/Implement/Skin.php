<?php

namespace WPEssential\Plugins\Implement;

interface Skin
{
	public function get_id ();

	public function get_title ();

	public function _register_controls_actions ();

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function register_control_view ( $object, $args );

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function render ();
}
