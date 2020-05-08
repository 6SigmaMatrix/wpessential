<?php

namespace WPEssential\Builders\WPBakery\Utility;

use WPEssential\Builders\WPBakery\Helper\Common as Traits;

abstract class Base
{
	use Traits;

	/**
	 * Set element name.
	 * Retrieve name of your shortcode for human reading inside element list.
	 *
	 * @return string Element name.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_name ()
	{
		return '';
	}

	/**
	 * Set element base.
	 * Retrieve Shortcode tag. For [my_shortcode] shortcode base is my_shortcode.
	 *
	 * @return string Element base.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_base ()
	{
		return substr( strrchr( __CLASS__, "\\" ), 1 );
	}

	/**
	 * Set element description.
	 * Retrieve Short description of your element, it will be visible in “Add element” window.
	 *
	 * @return string Element description.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_desc ()
	{
		return '';
	}

	/**
	 * Set element class.
	 * Retrieve CSS class which will be added to the shortcode’s content element in the page edit screen in
	 * WPBakery Page Builder backend edit mode.
	 *
	 * @return string Element class.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_class ()
	{
		return 'wpe-wpbakery';
	}

	/**
	 * Set element show settings on create.
	 * Retrieve Set it to false if content element’s settings page shouldn’t open automatically after adding
	 * it to the stage.
	 *
	 * @return bool Element show settings on create.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_settings_on_create ()
	{
		return true;
	}

	/**
	 * Set element weight.
	 * Retrieve Content elements with greater weight will be rendered first in “Content Elements” grid
	 * (Available from WPBakery Page Builder 3.7 version).
	 *
	 * @return bool Element weight.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_weight ()
	{
		return 0;
	}

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
	public function set_category ()
	{
		return 'WPEssential';
	}

	/**
	 * Set element group.
	 * Retrieve Group your params in groups, they will be divided in tabs in the edit element
	 * window (Available from WPBakery Page Builder 4.1)
	 *
	 * @return string Element group.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_group ()
	{
		return '';
	}

	/**
	 * Set element admin enqueue js.
	 * Retrieve Absolute url to javascript file, this js will be loaded in the js_composer
	 * edit mode (it allows you to add more functionality to your shortcode in js_composer edit mode)
	 *
	 * @return string|array Element admin enqueue js.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_admin_enqueue_js ()
	{
		return '';
	}

	/**
	 * Set element admin enqueue css.
	 * Retrieve Absolute url to css file if you need to add custom css for element
	 * block in js_composer constructor mode
	 *
	 * @return string|array Element admin enqueue css.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_admin_enqueue_css ()
	{
		return '';
	}

	/**
	 * Set element front enqueue js.
	 * Retrieve Absolute url to javascript file (useful for storing your custom backbone.js views),
	 * this js will be loaded in the js_composer frontend edit mode (it allows you to add more
	 * functionality to your shortcode in js_composer frontend edit mode).
	 * (Available from WPBakery Page Builder 4.2.2)
	 *
	 * @return string|array Element front enqueue js.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_front_enqueue_js ()
	{
		return '';
	}

	/**
	 * Set element front enqueue css.
	 * Retrieve Absolute url to css file if you need to load custom css file in the
	 * frontend editing mode. (Available from WPBakery Page Builder 4.2.2)
	 *
	 * @return string|array Element front enqueue css.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_front_enqueue_css ()
	{
		return '';
	}

	/**
	 * Set element icon.
	 * Retrieve URL or CSS class with icon image.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_icon ()
	{
		return 'wpe-icon ' . $this->set_element_icon();
	}

	/**
	 * Set element icon.
	 * Retrieve element icon.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_element_icon ()
	{
		return '';
	}

	/**
	 * Set element custom markup.
	 * Retrieve Custom html markup for representing shortcode in visual composer editor.
	 *
	 * @return string Element custom markup.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_custom_markup ()
	{
		return '';
	}

	/**
	 * Set element js view.
	 * Retrieve Set custom backbone.js view controller for this content element.
	 *
	 * @return string Element js view.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_js_view ()
	{
		return '';
	}

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
	public function set_html_template ()
	{
		return '';
	}

	/**
	 * Set element deprecated.
	 * Retrieve Enter version number from which content element will be deprecated.
	 * It will be moved to the “Deprecated” tab in “Add element” window and
	 * notification message will be shown on elements edit page.
	 * To hide element from “Add element” all together
	 * use ‘content_element’=>false (Available from WPBakery Page Builder 4.5)
	 *
	 * @return string Element deprecated.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_deprecated ()
	{
		return '';
	}

	/**
	 * Set element content element.
	 * Retrieve If set to false, content element will be hidden from “Add element” window.
	 * It is handy to use this param in pair with ‘deprecated’ param (Available from WPBakery Page Builder 4.5)
	 *
	 * @return bool Element content element.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_content_element ()
	{
		return true;
	}

	/**
	 * Set unique id.
	 * Retrieve the element id.
	 *
	 * @return string
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_id ()
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
		return 'wpe-wpbakery wpe-element wpe-wpbakery-widget-' . $this->set_name() . ' element-' . $this->set_id();
	}

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
	public function _register_controls ()
	{
		return [];
	}

	/**
	 * Set the data args.
	 *
	 * @return array Element data args.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function args ()
	{
		return [
			'name'                    => $this->set_name(),
			'base'                    => $this->set_base(),
			'description'             => $this->set_desc(),
			'class'                   => $this->set_class(),
			'show_settings_on_create' => $this->set_settings_on_create(),
			'weight'                  => (int) $this->set_weight(),
			'category'                => $this->set_category(),
			'group'                   => $this->set_group(),
			'admin_enqueue_js'        => $this->set_admin_enqueue_js(),
			'admin_enqueue_css'       => $this->set_admin_enqueue_css(),
			'front_enqueue_js'        => $this->set_front_enqueue_js(),
			'front_enqueue_css'       => $this->set_front_enqueue_css(),
			'icon'                    => $this->set_icon(),
			'custom_markup'           => $this->set_custom_markup(),
			'js_view'                 => $this->set_js_view(),
			'html_template'           => $this->set_html_template(),
			//'deprecated'              => $this->set_deprecated(),
			'content_element'         => $this->set_content_element(),
			'params'                  => $this->_register_controls(),
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
		vc_lean_map( $this->set_base(), [ $this, 'args' ] );
	}
}
