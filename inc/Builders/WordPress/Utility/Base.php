<?php

namespace WPEssential\Plugins\Builders\WordPress\Utility;

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Helper\GetShortcodeBase;
use WPEssential\Plugins\Loader;

abstract class Base
{
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
	 * @param $atts
	 * @param null $content
	 * @param $tag
	 * @return string|void
	 * @since 1.0.0
	 * @access public
	 */
	public function _wpe_output ( $atts, $content = null, $tag )
	{
		switch ( Loader::$editor ) {
			case 'wpbakery':
				$atts = $this->wpbakery_atts( $atts, $tag );
				break;
			default:
				$atts = $atts;
		}

		$this->atts = apply_filters( "wpe/shortcodes/{$this->get_base_name()}_atts", $atts );
		return call_user_func( [ $this, 'rendering' ] );
	}

	public function wpbakery_atts ( $atts, $tag )
	{
		return vc_map_get_attributes( $tag, $atts );
	}
}
