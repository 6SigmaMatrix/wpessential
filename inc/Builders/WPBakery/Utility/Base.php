<?php

namespace WPEssential\Plugins\Builders\WPBakery\Utility;

use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Helper\GetShortcodeBase;
use WPEssential\Plugins\Implement\Shortcodes;

abstract class Base
{
	use GetShortcodeBase;

	public  $controls         = [];
	public  $settingsOnCreate = true;
	public  $adminEnqueueJs   = '';
	public  $adminEnqueueCss  = '';
	public  $JsView           = '';
	private $skin_opt         = [];

	public function __construct ()
	{
		if ( ! ( $this instanceof Shortcodes ) ) {
			wp_die( __( 'WPBakery element ' . $this->get_name() . ' has not interface.', 'wpessential' ) );
		}

		$this->shortcode();

	}

	public function shortcode ()
	{
		$this->_register_controls();
		$this->_register_skins();
		$this->skin_controls();
		$this->controls = apply_filters( "wpe/wpbakery/shortcodes_atts/{$this->get_base_name()}", $this->controls );
		vc_map(
			[
				'name'                    => $this->get_name(),
				'base'                    => $this->get_base_name(),
				'description'             => $this->get_desc(),
				'class'                   => implode( ' ', $this->get_classes() ),
				'category'                => ucwords( $this->get_category() ),
				'icon'                    => $this->get_icon(),
				'js_view'                 => $this->JsView,
				'show_settings_on_create' => $this->settingsOnCreate,
				'admin_enqueue_js'        => $this->adminEnqueueJs,
				'admin_enqueue_css'       => $this->adminEnqueueCss,
				'params'                  => $this->controls,
			]
		);
	}

	public function _register_controls ()
	{
	}

	public function skin_controls ()
	{
		$opt            = Select::make( __( 'Skin', 'wpessential' ) )
								->key( 'style' )
								->options( $this->skin_opt )
								->default( '0' )
								->toArray();
		$this->controls = wp_parse_args( $this->controls, [ $opt ] );
	}

	/**
	 * Set element show settings on create.
	 * Retrieve Set it to false if content element’s settings page shouldn’t open automatically after adding
	 * it to the stage.
	 *
	 * @param bool $callback
	 * @return Base Element show settings on create.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function settingsOnCreate ( bool $callback )
	{
		$this->settingsOnCreate = $callback;

		return $this;
	}

	/**
	 * Set element admin enqueue js.
	 * Retrieve Absolute url to javascript file, this js will be loaded in the js_composer
	 * edit mode (it allows you to add more functionality to your shortcode in js_composer edit mode)
	 *
	 * @param mixed $callback
	 * @return string|array Element admin enqueue js.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function adminEnqueueJs ( $callback )
	{
		$this->adminEnqueueJs = $callback;

		return $this;
	}

	/**
	 * Set element admin enqueue css.
	 * Retrieve Absolute url to css file if you need to add custom css for element
	 * block in js_composer constructor mode
	 *
	 * @param mixed $callback
	 * @return string|array Element admin enqueue css.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function adminEnqueueCss ( $callback )
	{
		$this->adminEnqueueCss = $callback;

		return $this;
	}

	/**
	 * Set element js view.
	 * Retrieve Set custom backbone.js view controller for this content element.
	 *
	 * @param string $callback
	 * @return string Element js view.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function JsView ( string $callback )
	{
		$this->JsView = $callback;

		return $this;
	}

	public function add_control ( $args )
	{
		$this->controls[] = $args;
	}

	public function add_skin ( $object )
	{
		$this->skin_opt[ $object->get_id() ] = $object->get_title();
	}
}
