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
		$atts = wpe_gen_attr_data( $atts, true );

		if ( empty( $atts ) ) {
			return __( "Please add the shortcode attributes to run the output of [{$this->get_base_name()}].", 'wpessential' );
		}

		$style          = '1';

		extract( $atts );

		wp_enqueue_style( 'wpessential-blog-post' );
		wp_enqueue_style( 'wpessential-blog-post-color' );
		wp_enqueue_style( 'wpessential-blog-post-res' );

		$file_path = apply_filters( "wpe/shortcodes/wpessential_blog_post/template", WPE_DIR );
		$template  = wpe_template_load( "{$file_path}templates/wpessential-blog-post-style-{$style}.php" );

		ob_start();
		include $template;
		return ob_get_clean();
	}
}
