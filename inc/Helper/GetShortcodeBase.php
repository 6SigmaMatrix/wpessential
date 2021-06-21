<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Helper;

trait GetShortcodeBase
{
	use SetShortcodeBase;

	/**
	 * Set widget name.
	 * Retrieve widget name.
	 *
	 * @return string Widget name.
	 * @access public
	 * @public
	 */
	public function get_base_name ()
	{
		return "Wpessential_" . $this->set_name();
	}

	/**
	 * Get widget name.
	 * Retrieve widget name.
	 *
	 * @return string Widget name.
	 * @access public
	 * @public
	 */
	public function get_name ()
	{
		return $this->set_name();
	}

	/**
	 * Get widget title.
	 * Retrieve widget title.
	 *
	 * @return string Widget title.
	 * @since  1.0.0
	 * @access public
	 */
	public function get_title ()
	{
		return $this->set_title();
	}

	/**
	 * Get widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @access public
	 * @public
	 */
	public function get_icon ()
	{
		return "wpe-icon {$this->set_widget_icon()}";
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the icon widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories ()
	{
		return $this->set_categories();
	}

	/**
	 * Get widget category.
	 *
	 * Retrieve the list of category the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return string Widget category.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_category ()
	{
		return $this->set_category();
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @return array Widget keywords.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_keywords ()
	{
		return wp_parse_args( $this->set_keywords(), [ 'wpessential' ] );
	}

	/**
	 * Get widget description.
	 *
	 * Retrieve the description of the widget.
	 *
	 * @return array Widget description.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_desc ()
	{
		return $this->set_desc();
	}

	/**
	 * Get widget classes.
	 *
	 * Retrieve the classes of the widget.
	 *
	 * @return array Widget classes.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_classes ()
	{
		return wp_parse_args( $this->set_classes(), [ 'wpessential' ] );
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @return array Widget keywords.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function _register_skins ()
	{
		$this->set_skins();
	}

	/**
	 * Get HTML wrapper class.
	 * Retrieve the widget container class. Can be used to override the
	 * container class for specific widgets.
	 *
	 * @return string
	 * @access public
	 * @public
	 */
	public function get_html_wrapper_class ()
	{
		return $this->set_html_wrapper_class();
	}
}
