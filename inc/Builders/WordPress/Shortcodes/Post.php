<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

use WPEssential\Plugins\Builders\WordPress\Utility\Base;
use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;

class Post extends Base implements Shortcodes
{
	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function _register_controls () { }

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @return string|void
	 * @since 1.0.0
	 * @access public
	 */
	public function rendering ()
	{
		$atts = $this->atts;

		if ( empty( $atts ) ) {
			return __( "Please add the shortcode attributes to run the output of [{$this->get_base_name()}].", 'wpessential' );
		}

		$posts_per_page = 10;
		$style          = '1';

		extract( $atts );

		wp_enqueue_style( 'wpessential-blog-post' );
		wp_enqueue_style( 'wpessential-blog-post-color' );
		wp_enqueue_style( 'wpessential-blog-post-res' );

		$template = wpe_template_load( WPE_DIR . "templates/wpessential-blog-post-style-{$style}.php" );

		ob_start();
		include $template;
		return ob_get_clean();
	}
}