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
		return "wpe-icon {$this->get_widget_icon()}";
	}

	/**
	 * Get widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @access protected
	 * @protected
	 */
	protected function get_widget_icon ()
	{
		return "";
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
