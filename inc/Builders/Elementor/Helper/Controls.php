<?php

namespace WPEssential\Builders\Elementor\Helper;


trait Controls
{
	/**
	 * Global arguments of the controls.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|satatic
	 */
	protected static function global ( array $new_args )
	{
		$args     = [
			'title'       => '',
			'description' => '',
			'show_label'  => true,
			'label_block' => false,
			'classes'     => 'wpe-elementor-panel',
			'separator'   => 'after',
		];
		$new_args = wp_parse_args( $new_args, $args );

		return $new_args;
	}

	/**
	 * Register the text control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function text ( $id = null, $new_args = [] )
	{
		$args = [
			'label'       => __( 'Text', 'wpessential' ),
			'type'        => 'text',
			'input_type'  => 'text',
			'dynamic'     => [
				'active' => true,
			],
			'placeholder' => __( 'Please enter your text here.', 'wpessential' ),
			'default'     => __( 'IM An Example Text', 'wpessential' ),
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_text_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/text', $new_args );
	}

	/**
	 * Register the textarea control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function textarea ( $id = null, $new_args = [] )
	{
		$args = [
			'label'       => __( 'Text', 'wpessential' ),
			'type'        => 'textarea',
			'placeholder' => __( 'Please enter your text here.', 'wpessential' ),
			'default'     => __( 'IM An Example Text', 'wpessential' ),
			'rows'        => 5,
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_textarea_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/textarea', $new_args );
	}

	/**
	 * Register the heading control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function heading ( $id = null, $new_args = [] )
	{
		$args = [
			'label' => __( 'Heading', 'wpessential' ),
			'type'  => 'heading',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_heading_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/heading', $new_args );
	}

	/**
	 * Register the divider control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function divider ( $id = null, $new_args = [] )
	{
		$args = [
			'type' => 'divider',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_divider_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/heading', $new_args );
	}

	/**
	 * Register the raw html control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function raw_html ( $id = null, $new_args = [] )
	{
		$args = [
			'type'            => 'raw_html',
			'label'           => __( 'Raw HTML', 'wpessential' ),
			'raw'             => __( 'A very important message to show in the panel.', 'plugin-name' ),
			'content_classes' => 'wpe-panel-notes',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_raw_html_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/raw_html', $new_args );
	}

	/**
	 * Register the button control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function button ( $id = null, $new_args = [] )
	{
		$args = [
			'type'        => 'button',
			'label'       => __( 'Button', 'wpessential' ),
			'button_type' => 'success',
			'event'       => '',
			'text'        => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_button_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/button', $new_args );
	}

	/**
	 * Register the number control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function number ( $id = null, $new_args = [] )
	{
		$args = [
			'type'        => 'number',
			'label'       => __( 'Number', 'wpessential' ),
			'min'         => 0,
			'max'         => 100,
			'step'        => 1,
			'default'     => 10,
			'placeholder' => __( 'Please enter the value', 'wpessential' ),
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_number_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/number', $new_args );
	}

	/**
	 * Register the wysiwyg control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function wysiwyg ( $id = null, $new_args = [] )
	{
		$args = [
			'type'        => 'wysiwyg',
			'label'       => __( 'Wysiwyg', 'wpessential' ),
			'default'     => __( 'Please enter the description here.', 'wpessential' ),
			'placeholder' => __( 'Please enter the description here.', 'wpessential' ),
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_wysiwyg_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/wysiwyg', $new_args );
	}

	/**
	 * Register the code control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function code ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'code',
			'label'   => __( 'Code', 'wpessential' ),
			'rows'    => 10,
			'default' => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_code_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/code', $new_args );
	}

	/**
	 * Register the hidden control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function hidden ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'hidden',
			'default' => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_hidden_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/hidden', $new_args );
	}

	/**
	 * Register the switcher control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function switcher ( $id = null, $new_args = [] )
	{
		$args = [
			'type'         => 'switcher',
			'label'        => __( 'Switcher', 'wpessential' ),
			'label_on'     => __( 'On', 'wpessential' ),
			'label_off'    => __( 'Off', 'wpessential' ),
			'return_value' => 'yes',
			'default'      => 'yes',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_switcher_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/switcher', $new_args );
	}

	/**
	 * Register the popover control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function popover ( $id = null, $new_args = [] )
	{
		$args = [
			'type'         => 'popover_toggle',
			'label'        => __( 'Popover', 'wpessential' ),
			'label_on'     => __( 'On', 'wpessential' ),
			'label_off'    => __( 'Off', 'wpessential' ),
			'return_value' => 'yes',
			'default'      => 'yes',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_popover_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/popover', $new_args );
	}

	/**
	 * Register the select control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'select',
			'label'   => __( 'Select', 'wpessential' ),
			'options' => [
				'opt-1' => __( 'Option 1', 'wpessential' ),
				'opt-2' => __( 'Option 2', 'wpessential' ),
				'opt-3' => __( 'Option 3', 'wpessential' ),
			],
			'default' => 'opt-3',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_select_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/select', $new_args );
	}

	/**
	 * Register the select2 control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select2 ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'select2',
			'label'   => __( 'Select 2', 'wpessential' ),
			'options' => [
				'opt-1' => __( 'Option 1', 'wpessential' ),
				'opt-2' => __( 'Option 2', 'wpessential' ),
				'opt-3' => __( 'Option 3', 'wpessential' ),
			],
			'default' => 'opt-3',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_select2_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/select2', $new_args );
	}

	/**
	 * Register the multi_select control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function multi_select ( $id = null, $new_args = [] )
	{
		$args = [
			'label'    => __( 'Multi Select', 'wpessential' ),
			'multiple' => true,
			'default'  => [ 'opt-2', 'opt-3' ],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "multi_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/multi_select', $new_args );
	}

	/**
	 * Register the choose control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function choose ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'choose',
			'label'   => __( 'Choose', 'wpessential' ),
			'toggle'  => true,
			'options' => [
				'left'   => [
					'title' => __( 'Left', 'wpessential' ),
					'icon'  => 'fa fa-align-left',
				],
				'center' => [
					'title' => __( 'Center', 'wpessential' ),
					'icon'  => 'fa fa-align-center',
				],
				'right'  => [
					'title' => __( 'Right', 'wpessential' ),
					'icon'  => 'fa fa-align-right',
				],
			],
			'default' => 'center',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_choose_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/choose', $new_args );
	}

	/**
	 * Register the color control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function color ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'color',
			'label'   => __( 'Color', 'wpessential' ),
			'alpha'   => false,
			'default' => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_color_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/color', $new_args );
	}

	/**
	 * Register the rgba color control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function rgba_color ( $id = null, $new_args = [] )
	{
		$args = [
			'label'   => __( 'RGBA Color', 'wpessential' ),
			'alpha'   => true,
			'default' => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = $this->color( "rgba_{$id}", $new_args );

		return apply_filters( 'wpe/elementor/fields/rgba', $new_args );
	}

	/**
	 * Register the select icon control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select_icon ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'icon',
			'label'   => __( 'Select Icon', 'wpessential' ),
			'default' => 'fa fa-facebook',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_select_icon_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/select_icon', $new_args );
	}

	/**
	 * Register the icons control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function icons ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'icons',
			'label'   => __( 'Icons', 'wpessential' ),
			'default' => [
				'value'   => 'fas fa-star',
				'library' => 'solid',
			],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_icons_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/icons', $new_args );
	}

	/**
	 * Register the time control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function time ( $id = null, $new_args = [] )
	{
		$args = [
			'type'           => 'date_time',
			'label'          => __( 'Time', 'wpessential' ),
			'picker_options' => [
				'enableTime:true',
				'altInput:true',
				'enableSeconds:true',
			],
			'default'        => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_time_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/time', $new_args );
	}

	/**
	 * Register the date control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function date ( $id = null, $new_args = [] )
	{
		$args = [
			'type'           => 'date_time',
			'label'          => __( 'Date', 'wpessential' ),
			'picker_options' => [
				'enableTime:false',
			],
			'default'        => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_date_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/date', $new_args );
	}

	/**
	 * Register the date time control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function date_time ( $id = null, $new_args = [] )
	{
		$args = [
			'type'           => 'date_time',
			'label'          => __( 'Date Time', 'wpessential' ),
			'picker_options' => [
				'enableTime:true',
				'enableSeconds:true',
			],
			'default'        => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_date_time_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/date_time', $new_args );
	}

	/**
	 * Register the animation control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function animation ( $id = null, $new_args = [] )
	{
		$args = [
			'type'         => 'animation',
			'label'        => __( 'Animation', 'wpessential' ),
			'prefix_class' => 'animated ',
			'default'      => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_animation_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/animation', $new_args );
	}

	/**
	 * Register the hover animation control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function hover_animation ( $id = null, $new_args = [] )
	{
		$args = [
			'type'         => 'hover_animation',
			'label'        => __( 'Hover Animation', 'wpessential' ),
			'prefix_class' => 'elementor-animation-',
			'default'      => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_hover_animation_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/hover_animation', $new_args );
	}

	/**
	 * Register the exit animation control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function exit_animation ( $id = null, $new_args = [] )
	{
		$args = [
			'type'         => 'exit_animation',
			'label'        => __( 'Exit Animation', 'wpessential' ),
			'prefix_class' => 'elementor-animation-',
			'default'      => '',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_exit_animation_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/exit_animation', $new_args );
	}

	/**
	 * Register the gallery control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function gallery ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'gallery',
			'label'   => __( 'Gallery', 'wpessential' ),
			'default' => [ '' ],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_gallery_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/gallery', $new_args );
	}

	/**
	 * Register the media control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function media ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'media',
			'label'   => __( 'Media', 'wpessential' ),
			'default' => [ 'url' => ELEMENTOR_ASSETS_URL . 'images/placeholder.png' ],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_media_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/media', $new_args );
	}

	/**
	 * Register the image dimensions control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function image_dimensions ( $id = null, $new_args = [] )
	{
		$args = [
			'type'    => 'image_dimensions',
			'label'   => __( 'Image Dimensions', 'wpessential' ),
			'default' => [
				'width'  => '',
				'height' => '',
			],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_image_dimensions_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/image_dimensions', $new_args );
	}

	/**
	 * Register the slider control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function slider ( $id = null, $new_args = [] )
	{
		$args = [
			'label'      => __( 'Slider', 'wpessential' ),
			'type'       => 'slider',
			'size_units' => wpe_transtion_time_unites(),
			'default'    => [
				[
					'unit' => 'px',
				],
			],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_slider_{$id}",
			'args' => $new_args
		];

		return apply_filters( 'wpe/elementor/fields/slider', $new_args );
	}

	/**
	 * Register the spacing control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function spacing ( $id = null, $new_args = [] )
	{
		$args = [
			'label'       => __( 'Spacing', 'wpessential' ),
			'type'        => 'dimensions',
			'size_units'  => wpe_style_unites(),
			'label_block' => true,
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_spacing_{$id}",
			'args' => $new_args
		];

		return apply_filters( "wpe/elementor/fields/spacing", $new_args );
	}

	/**
	 * Register the url control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function url ( $id = null, $new_args = [] )
	{
		$args = [
			'label' => __( 'URL', 'wpessential' ),
			'type'  => 'url',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_spacing_{$id}",
			'args' => $new_args
		];

		return apply_filters( "wpe/elementor/fields/url", $new_args );
	}

	/**
	 * Register the font control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function font ( $id = null, $new_args = [] )
	{
		$args = [
			'label' => __( 'FONT', 'wpessential' ),
			'type'  => 'font',
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		$new_args = [
			'id'   => WPE_SETTINGS . "_spacing_{$id}",
			'args' => $new_args
		];

		return apply_filters( "wpe/elementor/fields/font", $new_args );
	}

	/**
	 * Register the typography control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function typography ( $id = null, $new_args = [] )
	{
		$args = [
			'name'    => WPE_SETTINGS . "_typography_{$id}",
			'label'   => __( 'Typography', 'wpessential' ),
			'default' => [],
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		return $this->add_group_control( 'typography', $new_args );
	}

	/**
	 * Register the box shadow control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function box_shadow ( $id = null, $new_args = [] )
	{
		$args = [
			'name' => WPE_SETTINGS . "_box_shadow_{$id}",
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );
		return $this->add_group_control( 'box-shadow', $new_args );
	}
}
