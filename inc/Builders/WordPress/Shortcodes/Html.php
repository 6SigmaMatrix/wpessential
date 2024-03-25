<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Builders\WordPress\Utility\Base;

class Html extends Base implements Shortcodes
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
		$style = wpe_array_get( $this->atts, 'style', '1' );
		include wpe_template_load( 'wpessential/html-style', $style, false );
	}
}
