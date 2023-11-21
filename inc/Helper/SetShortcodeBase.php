<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Helper;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait SetShortcodeBase
{
	public $atts;
	/**
	 * Set widget skings.
	 *
	 * @return string $skins_list name.
	 * @access public
	 * @public
	 */
	public $skins_list = [];

	/**
	 * Set widget title.
	 * Retrieve widget title.
	 *
	 * @return string Widget title.
	 * @since  1.0.0
	 * @access public
	 */
	public function set_title ()
	{
		return sprintf( __( '%s', 'wpessential' ), preg_replace( '/(?<!\ )[A-Z]/', ' $0', $this->set_name() ) );
	}

	/**
	 * Set widget name.
	 * Retrieve widget name.
	 *
	 * @return string Widget name.
	 * @access public
	 * @public
	 */
	public function set_name ()
	{
		return substr( strrchr( get_class( $this ), "\\" ), 1 );
	}

	/**
	 * Set widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @since  1.0.0
	 * @access public
	 * @public
	 */
	public function set_widget_icon ()
	{
		return 'fab fa-wikipedia-w';
	}

	/**
	 * Set widget categories.
	 *
	 * Retrieve the list of categories the icon widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return array Widget categories.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function set_categories ()
	{
		return [ 'wpessential' ];
	}

	/**
	 * Set widget category.
	 *
	 * Retrieve the list of category the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * @return string Widget category.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function set_category ()
	{
		return 'wpessential';
	}

	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget keywords.
	 * @access public
	 * @since  1.0.0
	 * @public
	 */
	public function set_keywords ()
	{
		return [ '' ];
	}

	/**
	 * Set widget description.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget description.
	 * @access public
	 * @since  1.0.0
	 * @public
	 */
	public function set_desc ()
	{
		return '';
	}

	/**
	 * Set widget classes.
	 * Retrieve widget classes.
	 *
	 * @return array Widget classes.
	 * @access public
	 * @since  1.0.0
	 * @public
	 */
	public function set_classes ()
	{
		return [];
	}

	/**
	 * @securitySet widget script dependency
	 *
	 * @return array Widget classes.
	 * @since       1.0.0
	 * @access      public
	 *
	 */
	public function set_script_depends ()
	{
		return [];
	}

	/**
	 * Set widget skins.
	 *
	 * Retrieve the list of skings the widget belongs to.
	 *
	 * @return void.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function set_skins ()
	{
		if ( is_array( $this->skins_list ) && ! empty( $this->skins_list ) ) {
			foreach ( $this->skins_list as $skin ) {
				$this->add_skin( new $skin( $this ) );
			}
		}
	}

	/**
	 * Set HTML wrapper class.
	 * Retrieve the widget container class. Can be used to override the
	 * container class for specific widgets.
	 *
	 * @return string
	 * @access public
	 * @public
	 */
	public function set_html_wrapper_class ()
	{
		return 'wpe-widget wpe-widget-' . $this->get_name() . ' wpe-widget-' . $this->get_id();
	}
}
