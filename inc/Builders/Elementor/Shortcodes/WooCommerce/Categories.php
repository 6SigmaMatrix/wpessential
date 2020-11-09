<?php

namespace WPEssential\Plugins\Builders\Elementor\Shortcodes\WooCommerce;

use WPEssential\Plugins\Builders\Elementor\Utility\Base;
use WPEssential\Plugins\Fields\RawHtml;
use WPEssential\Plugins\Implement\Shortcodes;

class Categories extends Base implements Shortcodes
{
	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget icon.
	 * @access public
	 * @since 1.0.0
	 * @public
	 */
	public function set_keywords ()
	{
		return [ 'categories', 'woocommerce categories', 'woocommerce' ];
	}

	/**
	 * Whether the reload preview is required or not.
	 *
	 * Used to determine whether the reload preview is required.
	 *
	 * @return bool Whether the reload preview is required.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function is_reload_preview_required ()
	{
		return true;
	}

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function _register_controls ()
	{
		$this->start_controls_section(
			'section_1',
			[
				'label' => __( 'Shortcode', 'wpessential' )
			]
		);

		$opt = RawHtml::make( __( 'WooCommerce', 'wpessential' ) )
					  ->data( __( 'There is no option found.', 'wpessential' ), )
					  ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$this->end_controls_section();

	}

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function render ()
	{
		$settings = $this->get_settings_for_display();
		/*$settings[ 'wpe_st_post_info_data_list' ] = urlencode( json_encode( $settings[ 'wpe_st_post_info_data_list' ] ) );
		$settings[ 'wpe_st_post_button_icon' ]    = urlencode( json_encode( $settings[ 'wpe_st_post_button_icon' ] ) );*/
		//wpe_error( $settings );
		$settings = wpe_collect( $settings );
		echo do_shortcode( "[product_categories]" );
	}
}
