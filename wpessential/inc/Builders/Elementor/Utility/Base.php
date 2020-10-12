<?php

namespace WPEssential\Plugins\Builders\Elementor\Utility;

use Elementor\Widget_Base;
use WPEssential\Plugins\Helper\GetShortcodeBase;
use WPEssential\Plugins\Implement\Shortcodes;

abstract class Base extends Widget_Base
{
	use GetShortcodeBase;

	public function __construct ( $data = [], $args = null )
	{
		if ( ! ( $this instanceof Shortcodes ) ) {
			wp_die( __( 'Elementor element ' . $this->get_name() . ' has not interface.', 'wpessential' ) );
		}

		parent::__construct( $data, $args );
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'shortcode' ] );

	}

	public function shortcode ()
	{
		$widget = get_class( $this );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $widget() );
	}

	/**
	 * Get current skin ID.
	 *
	 * Retrieve the ID of the current skin.
	 *
	 * @return string Current skin.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_current_skin_id ()
	{
		return $this->get_settings( 'blog_style' );
	}

	/**
	 * Start widget controls section.
	 *
	 * Used to add a new section of controls to the widget. Regular controls and
	 * skin controls.
	 *
	 * Note that when you add new controls to widgets they must be wrapped by
	 * `start_controls_section()` and `end_controls_section()`.
	 *
	 * @param string $section_id Section ID.
	 * @param array $args Section arguments Optional.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function start_controls_section ( $section_id, array $args = [] )
	{
		\Elementor\Controls_Stack::start_controls_section( $section_id, $args );

		static $is_first_section = true;

		if ( $is_first_section ) {
			$this->register_skin_control();

			$is_first_section = false;
		}
	}

	/**
	 * Register the Skin Control if the widget has skins.
	 *
	 * An internal method that is used to add a skin control to the widget.
	 * Added at the top of the controls section.
	 *
	 * @since 2.0.0
	 * @access private
	 */
	public function register_skin_control ()
	{
		$skins = $this->get_skins();
		if ( ! empty( $skins ) ) {
			$skin_options = [];

			if ( $this->_has_template_content ) {
				$skin_options[ '' ] = __( 'Default', 'elementor' );
			}

			foreach ( $skins as $skin_id => $skin ) {
				$skin_options[ $skin_id ] = $skin->get_title();
			}

			// Get the first item for default value
			$default_value = array_keys( $skin_options );
			$default_value = array_shift( $default_value );

			if ( 1 >= count( $skin_options ) ) {
				$this->add_control(
					'style',
					[
						'label'   => __( 'Skin', 'elementor' ),
						'type'    => 'hidden',
						'default' => $default_value,
					]
				);
			} else {
				$this->add_control(
					'style',
					[
						'label'   => __( 'Skin', 'elementor' ),
						'type'    => 'select',
						'default' => $default_value,
						'options' => $skin_options,
					]
				);
			}
		}
	}

	/**
	 * Add widget render attributes.
	 *
	 * Used to add attributes to the current widget wrapper HTML tag.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _add_render_attributes ()
	{
		parent::_add_render_attributes();

		$this->add_render_attribute(
			'_wrapper', 'class', [
				'elementor-widget',
				$this->get_html_wrapper_class(),
			]
		);

		$settings = $this->get_settings();

		$this->add_render_attribute( '_wrapper', 'data-widget_type', $this->get_name() . '.' . ( ! empty( $settings[ 'style' ] ) ? $settings[ 'style' ] : 'default' ) );
	}

}
