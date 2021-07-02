<?php

namespace WPEssential\Plugins\Builders\Elementor\Shortcodes\Sliders;

use WPEssential\Plugins\Fields\Select;

class RevolutionSlider extends SliderCategory
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
		return [ 'slider', 'revolutionslider', 'layer', 'revolution slider' ];
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
					 ->options( wpe_rev_slider_table_query() )
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
		echo do_shortcode( '[rev_slider alias="' . $settings->get( 'wpe_st_slider_list' ) . '"]' );
	}
}
