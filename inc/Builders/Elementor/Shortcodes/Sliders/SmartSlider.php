<?php

namespace WPEssential\Plugins\Builders\Elementor\Shortcodes\Sliders;

use WPEssential\Plugins\Builders\Elementor\Utility\Base;
use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Implement\Shortcodes;

class SmartSlider extends Base implements Shortcodes
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
		return [ 'slider', 'smartslider', 'layer', 'smart slider' ];
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

		$opt = Select::make( __( 'Slider List', 'wpessential' ) )
					 ->options( wpe_smart_slider_table_query() )
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
		echo do_shortcode( '[smartslider3 slider="' . $settings->get( 'wpe_st_slider_list' ) . '"]' );
	}
}
