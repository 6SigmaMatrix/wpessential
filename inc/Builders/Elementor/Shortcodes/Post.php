<?php

namespace WPEssential\Builders\Elementor\Shortcodes;

use WPEssential\Builders\Elementor\Utility\Base;

class Post extends Base
{
	/**
	 * Get widget title.
	 *
	 * Retrieve icon widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title ()
	{
		return __( 'Post', 'wpessential' );
	}

	/**
	 * Set widget icon.
	 * Retrieve widget icon.
	 *
	 * @return string Widget icon.
	 * @access protected
	 */
	protected function set_widget_icon ()
	{
		return 'post';
	}

	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget icon.
	 * @access protected
	 * @since 1.0.0
	 * @protected
	 */
	protected function set_keywords ()
	{
		return [ 'post' ];
	}

	/**
	 * Register icon widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls ()
	{
		$this->start_controls_section(
			'section_1',
			[
				'label' => __( 'Post', 'wpessential' )
			]
		);

		$args = $this->number( 'count', [
			'label' => __( 'Post', 'wpessential' )
		] );
		$this->add_control( $args[ 'id' ], $args[ 'args' ] );

		$this->end_controls_section();
	}

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render ()
	{
		$settings = wpe_collect( $this->get_settings_for_display() );
		echo do_shortcode( "[WPE_Post count='{$settings->get('wpe_st_number_count')}']" );
	}
}
