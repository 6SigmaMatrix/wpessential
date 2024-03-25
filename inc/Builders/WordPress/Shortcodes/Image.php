<?php

namespace WPEssential\Plugins\Builders\WordPress\Shortcodes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Implement\Shortcodes;
use WPEssential\Plugins\Builders\WordPress\Utility\Base;

class Image extends Base implements Shortcodes
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
		$style = wpe_array_get( $this->atts, wpe_editor_key( 'style' ), '1' );
		include wpe_template_load( 'wpessential/image/style', $style, false );
	}


	/**
	 * Check if the current widget has caption
	 *
	 * @access private
	 *
	 * @return bool
	 * @since  2.3.0
	 *
	 */
	private function has_caption ()
	{
		return ( wpe_array_get( $this->atts, 'wpe_st_caption_source' ) && wpe_array_get( $this->atts, 'wpe_st_caption_source' ) !== 'none' );
	}

	/**
	 * Get the caption for current widget.
	 *
	 * @access private
	 *
	 * @return string
	 * @since  2.3.0
	 */
	private function get_caption ()
	{
		$caption = '';
		if ( wpe_array_get( $this->atts, wpe_editor_key( 'caption_source' ) ) ) {
			switch ( wpe_array_get( $this->atts, wpe_editor_key( 'caption_source' ) ) ) {
				case 'attachment':
					$caption = wp_get_attachment_caption( wpe_array_get( $this->atts, wpe_editor_key( 'image.id' ) ) );
					break;
				case 'custom':
					$caption = wpe_array_get( $this->atts, wpe_editor_key( 'caption' ) );
			}
		}
		return $caption;
	}

	/**
	 * Returns the image url from the data.
	 *
	 * @return int|array url of the image.
	 */
	private function get_image_url ()
	{
		if ( wpe_array_get( $this->atts, wpe_editor_key( 'link_to' ) ) === 'none' ) {
			return false;
		}

		switch ( wpe_array_get( $this->atts, wpe_editor_key( 'link_to' ) ) ) {
			case 'custom':
				$img = wpe_array_get( $this->atts, wpe_editor_key( 'link' ) );
				if ( ! wpe_array_get( $img, 'url' ) ) {
					return false;
				}

				return wpe_array_get( $this->atts, $img );
			default:
				return [ 'url' => wpe_array_get( $this->atts, wpe_editor_key( 'image.url' ) ) ];
		}
	}
}
