<?php

namespace WPEssential\Builders\KingComposer\Utility;

use WPEssential\Builders\KingComposer\Helper\Common as Traits;

abstract class Base
{
	use Traits;

	/**
	 * Set element name.
	 * Displays the shortcode name in the list of items.
	 *
	 * @return string Element name.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_name ()
	{
		return '';
	}

	/**
	 * Set element base.
	 * Retrieve Shortcode tag. For [my_shortcode] shortcode base is my_shortcode.
	 *
	 * @return string Element base.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_base ()
	{
		return substr( strrchr( __CLASS__, "\\" ), 1 );
	}

	/**
	 * Set element description.
	 * Displays additional statement.
	 *
	 * @return string Element description.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_desc ()
	{
		return '';
	}

	/**
	 * Set element category.
	 * Groups elements into a tab.
	 *
	 * @return string Element category.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_category ()
	{
		return 'WPEssential';
	}

	/**
	 * Set element icon.
	 * Class name to display as element icon.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_icon ()
	{
		return 'wpe-icon ' . $this->set_element_icon();
	}

	/**
	 * Set element icon.
	 * Class name to display as element icon.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_element_icon ()
	{
		return '';
	}

	/**
	 * Set element html template.
	 * Retrieve Path to shortcode template. This is useful if you want
	 * to reassign path of existing content elements through your plugin.
	 *
	 * @param $atts
	 * @return string Element html template.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function set_html_template ( $atts )
	{
		return '';
	}

	/**
	 * Set unique id.
	 * Retrieve the element id.
	 *
	 * @return string
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_id ()
	{
		return uniqid( 'wpessential-' );
	}

	/**
	 * Set HTML wrapper class.
	 * Retrieve the element container class. Can be used to override the
	 * container class for specific element.
	 *
	 * @return string
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_html_wrapper_class ()
	{
		return 'wpe-kingcomposer wpe-element wpe-kingcomposer-widget-' . $this->set_name() . ' element-' . $this->set_id();
	}

	/**
	 * Register element controls.
	 * Retrieve List of shortcode attributes. Array which holds your shortcode params,
	 * these params will be editable in shortcode settings page
	 *
	 * @return array Element controls.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function _register_controls ()
	{
		return [];
	}

	/**
	 * Set element admin view.
	 *
	 * @return string Element admin view.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_admin_view ()
	{
		return '';
	}

	/**
	 * Set element container.
	 * The default value is false. The container shortcode should be inserted into.
	 *
	 * @return bool Element container.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_is_container ()
	{
		return false;
	}

	/**
	 * Set element view.
	 *
	 * @return array Element view.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_views ()
	{
		return [];
	}

	/**
	 * Set element css box.
	 * The default value is false. It allows you to add CSS via editting popup.
	 *
	 * @return bool Element css box.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_css_box ()
	{
		return false;
	}

	/**
	 * Set element system only.
	 * The default value is false. The elements are used in the system only,
	 * they aren’t shown on the list of elements. For example shortcode [tab].
	 *
	 * @return bool Element system only.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_system_only ()
	{
		return false;
	}

	/**
	 * Set element nested.
	 * Allows add another elements inside your element.
	 *
	 * @return bool Element nested.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_nested ()
	{
		return false;
	}

	/**
	 * Set element accept child.
	 * Restrictive element inside nested elements.
	 *
	 * @return string Element accept child.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_accept_child ()
	{
		return '';
	}

	/**
	 * Set element except child.
	 * Restrictive element inside nested elements.
	 *
	 * @return string Element except child.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_except_child ()
	{
		return '';
	}

	/**
	 * Set element accept parent.
	 * Restrictive element inside nested elements.
	 *
	 * @return string Element accept parent.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_accept_parent ()
	{
		return '';
	}

	/**
	 * Set element except parent.
	 * Restrictive element inside nested elements.
	 *
	 * @return string Element except_parent.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_except_parent ()
	{
		return '';
	}

	/**
	 * Set element filter.
	 * PHP Function. You can use this method to filter any shortcodes before executing.
	 *
	 * @return string Element filter.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_filter ()
	{
		return str_replace( ' ', '_', strtolower( $this->set_name() ) );
	}

	/**
	 * Set element assets.
	 * Only load scripts and styles when using this element.
	 *
	 * @return array Element assets.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function set_assets ()
	{
		return [];
	}

	/**
	 * Set the data args.
	 *
	 * @return array Element data args.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	protected function args ()
	{
		return [
			'name'          => $this->set_name(),
			'description'   => $this->set_desc(),
			'category'      => $this->set_category(),
			'title'         => $this->set_name(),
			'icon'          => $this->set_icon(),
			'admin_view'    => $this->set_admin_view(),
			'views'         => $this->set_views(),
			'is_container'  => $this->set_is_container(),
			'css_box'       => $this->set_css_box(),
			'system_only'   => $this->set_system_only(),
			'nested'        => $this->set_nested(),
			'assets'        => $this->set_assets(),
			'accept_child'  => $this->set_accept_child(),
			'except_child'  => $this->set_except_child(),
			'accept_parent' => $this->set_accept_parent(),
			'except_parent' => $this->set_except_parent(),
			'filter'        => $this->set_filter(),
			'params'        => $this->_register_controls(),
		];
	}

	/**
	 * Register element constructor.
	 *
	 * @return void Element controls.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function __construct ()
	{
		global $kc;
		$kc->add_map( [ $this->set_base() => $this->args() ] );
		add_filter( "wpe/kingcomposer/shortcode/{$this->set_base()}/classes", [ $this, 'set_html_wrapper_class' ] );
		add_shortcode( $this->set_base(), [ $this, 'set_html_template' ] );
	}
}
