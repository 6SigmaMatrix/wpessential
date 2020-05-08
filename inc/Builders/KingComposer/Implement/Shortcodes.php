<?php

namespace WPEssential\Builders\KingComposer\Implement;


interface Shortcodes
{

	/**
	 * Set element name.
	 * Retrieve name of your shortcode for human reading inside element list.
	 *
	 * @return string Element name.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_name ();

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
	 * Set element description.
	 * Retrieve Short description of your element, it will be visible in “Add element” window.
	 *
	 * @return string Element description.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_desc ();

	/**
	 * Set element category.
	 * Retrieve Category which best suites to describe the functionality of this shortcode. Default
	 * categories: Content, Social, Structure. You can add your own category, simply enter new category
	 * title here.
	 *
	 * @return string Element category.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_category ();

	/**
	 * Set element icon.
	 * Retrieve element icon.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_element_icon ();

	/**
	 * Set element html template.
	 * Retrieve Path to shortcode template. This is useful if you want
	 * to reassign path of existing content elements through your plugin.
	 *
	 * @return string Element html template.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_html_template ();

	/**
	 * Register element controls.
	 * Retrieve List of shortcode attributes. Array which holds your shortcode params,
	 * these params will be editable in shortcode settings page
	 *
	 * @return array Element controls.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function _register_controls ();
}
