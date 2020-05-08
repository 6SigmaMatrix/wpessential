<?php

namespace WPEssential\Widgets\Implement;

interface Widgets
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
	 * Set element base.
	 * Retrieve widget ID.
	 *
	 * @return string Element base.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_base ();

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
	 * @param $instance
	 * @return string Element controls.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function _register_controls ( $instance );

	/**
	 * Outputs the content for the current widget instance.
	 *
	 * @param array $args Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Archives widget instance.
	 * @return string
	 * @since 1.0.0
	 * @access public
	 * @public
	 *
	 */
	public function widget ( $args, $instance );

	/**
	 * Handles updating settings for the current widget instance.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 * @since 1.0.0
	 * @access public
	 * @public
	 *
	 */
	public function update ( $new_instance, $old_instance );

	/**
	 * Outputs the settings form for the widget.
	 *
	 * @param array $instance Current settings.
	 * @since 1.0.0
	 * @access public
	 * @public
	 *
	 */
	public function form ( $instance );
}
