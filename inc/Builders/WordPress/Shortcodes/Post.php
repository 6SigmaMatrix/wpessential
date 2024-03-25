<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Builders\WordPress\Utility\Base;

class Post extends Base implements Shortcodes
{
	/**
	 * Register widget controls.
	 *
	 * This method adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since  1.0.0
	 * @access public
	 */
	public function register_controls ()
	{
		// TODO: Add code to register widget controls here.
	}

	/**
	 * Render widget output on the frontend.
	 *
	 * This function generates the final HTML output for the widget on the frontend.
	 *
	 * @return string The rendered widget output.
	 */
	public function rendering ()
	{
		$style = wpe_array_get( $this->atts, 'style', '1' );
		// Include template file based on style attribute
		include wpe_template_load( 'wpessential-blog-post/style', $style, false );
	}
}
