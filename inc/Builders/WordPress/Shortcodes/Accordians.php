<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Builders\WordPress\Utility\Base;

class Accordians extends Base implements Shortcodes
{
	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function register_controls () {}

	/**
	 * Render widget output on the frontend.
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
		if ( ! empty( $atts ) ) {
			$atts = wpe_gen_attr_data( $atts, true );
		}

		$style = wpe_array_get( $atts, 'style', '1' );

		ob_start();
		include_once wpe_template_load( 'wpessential/accordians-style', '1', false );
		return ob_get_clean();
	}
}
