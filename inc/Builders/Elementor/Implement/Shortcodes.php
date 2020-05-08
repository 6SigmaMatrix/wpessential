<?php

namespace WPEssential\Builders\Elementor\Implement;


interface Shortcodes
{

	/**
	 * Get widget title.
	 *
	 * Retrieve icon widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title ();

	/**
	 * Set element base.
	 * Retrieve Shortcode tag. For [my_shortcode] shortcode base is my_shortcode.
	 *
	 * @return string Element base.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_base ();

	/**
	 * Set widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @access public
	 */
	public function set_widget_icon ();

	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget icon.
	 * @access public
	 * @since 1.0.0
	 * @public
	 */
	public function set_keywords ();

	/**
	 * Register icon widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function _register_controls ();

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
