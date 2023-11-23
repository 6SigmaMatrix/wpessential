<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Builders\WordPress\Utility\Base;

class Button extends Base implements Shortcodes
{
	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function register_controls () {
    }

	/**
	 * Render widget output on the frontend.a
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @return string|void
	 * @since  1.0.0
	 * @access public
	 */
	public function rendering ()
	{
		$atts = $this->atts;
		$atts = wpe_gen_attr_data( $atts, true );

		if ( empty( $atts ) ) {
			return __( "Please add the shortcode attributes to run the output of [{$this->get_base_name()}].", 'wpessential' );
		}

		$style = wpe_array_get( $atts, 'style', '1' );

		ob_start();
		include_once wpe_template_load( 'wpessential/button-style', '1', false );
		return ob_get_clean();
	}
}
