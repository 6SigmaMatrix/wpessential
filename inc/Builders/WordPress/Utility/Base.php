<?php

namespace WPEssential\Plugins\Builders\WordPress\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Helper\ElementRender;
use WPEssential\Plugins\Helper\GetShortcodeBase;

abstract class Base
{
	use ElementRender;
	use GetShortcodeBase;

	public function __construct ()
	{
		if ( ! ( $this instanceof Shortcodes ) ) {
			wp_die( __( 'WordPress element ' . $this->get_name() . ' has not interface.', 'wpessential' ) );
		}

		add_shortcode( $this->get_base_name(), [ $this, '_wpe_output' ] );
	}

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @param      $atts
	 * @param null $content
	 * @param      $tag
	 *
	 * @return string|void
	 * @since  1.0.0
	 * @access public
	 */
	public function _wpe_output ( $atts, $content = null )
	{
		$this->atts = apply_filters( "wpe/shortcodes/{$this->get_base_name()}_atts", $atts );
		$this->atts = wpe_gen_attr_data( $this->atts, true );
		if ( empty( $this->atts ) ) {
			return __( "Please add the shortcode attributes to run the output of [{$this->get_base_name()}].", 'wpessential' );
		}
		ob_start();
		$this->rendering();
		return ob_get_clean();
	}

	public function rendering () {}
}
