<?php

namespace WPEssential\Builders\Elementor\Utility;

use Elementor\Widget_Base;
use WPEssential\Builders\Elementor\Helper\Common as Traits;

class Base extends Widget_Base
{
	use Traits;

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
	 * Set widget name.
	 * Retrieve widget name.
	 *
	 * @return string Widget name.
	 * @access public
	 * @public
	 */
	protected function set_name ()
	{
		return substr( strrchr( get_class( $this ), "\\" ), 1 );
	}

	/**
	 * Set widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_widget_icon ()
	{
		return "";
	}

	/**
	 * Set widget categories.
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
	public function set_categories ()
	{
		return [ 'wpessential' ];
	}

	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget icon.
	 * @access protected
	 * @since 1.0.0
	 * @protected
	 */
	protected function set_keywords ()
	{
		return [ '' ];
	}

	/**
	 * Get HTML wrapper class.
	 * Retrieve the widget container class. Can be used to override the
	 * container class for specific widgets.
	 *
	 * @return string
	 * @access protected
	 * @protected
	 */
	protected function get_html_wrapper_class ()
	{
		return 'wpe-elementor wpe-widget wpe-elementor-widget-' . $this->get_name() . ' widget-' . $this->get_id();
	}
}
