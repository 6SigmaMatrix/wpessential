<?php

namespace WPEssential\Builders\Elementor\Utility;

use Elementor\Widget_Base;
use WPEssential\Builders\Elementor\Helper\WPEssentialELCommonTrait as WPECTrait;

class WPEssentialELWBase extends Widget_Base
{
	use WPECTrait;

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
		return get_class( $this );
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
		return [ 'wpessential' ];
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
		$key_words = wp_parse_args( $this->set_keywords(), [ 'wpessential' ] );
		return $key_words;
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
