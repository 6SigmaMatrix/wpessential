<?php

namespace WPEssential\Builders\Elementor\Helper;

use Elementor\Utils;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;

trait WPEssentialELControlsTrait
{
	protected static array  $default     = [];
	protected static string $description = '';
	protected static string $title       = '';
	protected static bool   $show_label  = true;
	protected static bool   $label_block = false;
	protected static string $classes     = 'wpe-elementor-panel';
	protected static string $separator   = 'after';
	protected static bool   $responsive  = true;

	/**
	 * Register the text control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function text ( $id = null, $args = [] )
	{
		self::$default = [
			'label'       => __( 'Text', 'wpessential' ),
			'type'        => Controls_Manager::TEXT,
			'description' => self::$description,
			'title'       => self::$title,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'input_type'  => 'text',
			'classes'     => self::$classes,
			'dynamic'     => [
				'active' => true,
			],
			'placeholder' => __( 'Please enter your text here.', 'wpessential' ),
			'default'     => __( 'IM An Example Text', 'wpessential' ),
			'separator'   => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_text_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/text', $opt );
	}

	/**
	 * Register the textarea control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function textarea ( $id = null, $args = [] )
	{
		self::$default = [
			'label'       => __( 'Text', 'wpessential' ),
			'type'        => Controls_Manager::TEXTAREA,
			'description' => self::$description,
			'title'       => self::$title,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'placeholder' => __( 'Please enter your text here.', 'wpessential' ),
			'default'     => __( 'IM An Example Text', 'wpessential' ),
			'separator'   => self::$separator,
			'rows'        => 5,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_textarea_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/textarea', $opt );
	}

	/**
	 * Register the heading control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function heading ( $id = null, $args = [] )
	{

		self::$default = [
			'label'       => __( 'Heading', 'wpessential' ),
			'type'        => Controls_Manager::HEADING,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_heading_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/heading', $opt );
	}

	/**
	 * Register the divider control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function divider ( $id = null, $args = [] )
	{

		self::$default = [
			'type'      => Controls_Manager::DIVIDER,
			'classes'   => self::$classes,
			'separator' => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_divider_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/heading', $opt );
	}

	/**
	 * Register the raw html control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function raw_html ( $id = null, $args = [] )
	{

		self::$default = [
			'type'            => Controls_Manager::RAW_HTML,
			'label'           => __( 'Raw HTML', 'wpessential' ),
			'raw'             => __( 'A very important message to show in the panel.', 'plugin-name' ),
			'content_classes' => 'wpe-panel-notes',
			'show_label'      => self::$show_label,
			'label_block'     => self::$label_block,
			'classes'         => self::$classes,
			'separator'       => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_raw_html_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/raw_html', $opt );
	}

	/**
	 * Register the button control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function button ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::BUTTON,
			'label'       => __( 'Button', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'button_type' => 'success',
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'event'       => '',
			'text'        => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_button_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/button', $opt );
	}

	/**
	 * Register the number control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function number ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::NUMBER,
			'label'       => __( 'Number', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'min'         => 0,
			'max'         => 100,
			'step'        => 1,
			'default'     => 10,
			'placeholder' => __( 'Please enter the value', 'wpessential' ),
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_number_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/number', $opt );
	}

	/**
	 * Register the wysiwyg control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function wysiwyg ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::WYSIWYG,
			'label'       => __( 'Wysiwyg', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => __( 'Please enter the description here.', 'wpessential' ),
			'placeholder' => __( 'Please enter the description here.', 'wpessential' ),
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_wysiwyg_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/wysiwyg', $opt );
	}

	/**
	 * Register the code control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function code ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::CODE,
			'label'       => __( 'Code', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'rows'        => 10,
			'default'     => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_code_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/code', $opt );
	}

	/**
	 * Register the hidden control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function hidden ( $id = null, $args = [] )
	{

		self::$default = [
			'type'    => Controls_Manager::HIDDEN,
			'classes' => self::$classes,
			'default' => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_hidden_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/hidden', $opt );
	}

	/**
	 * Register the switcher control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function switcher ( $id = null, $args = [] )
	{

		self::$default = [
			'type'         => Controls_Manager::SWITCHER,
			'label'        => __( 'Switcher', 'wpessential' ),
			'title'        => self::$title,
			'description'  => self::$description,
			'show_label'   => self::$show_label,
			'label_block'  => self::$label_block,
			'label_on'     => __( 'On', 'wpessential' ),
			'label_off'    => __( 'Off', 'wpessential' ),
			'return_value' => 'yes',
			'classes'      => self::$classes,
			'separator'    => self::$separator,
			'default'      => 'yes',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_switcher_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/switcher', $opt );
	}

	/**
	 * Register the popover control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function popover ( $id = null, $args = [] )
	{

		self::$default = [
			'type'         => Controls_Manager::POPOVER_TOGGLE,
			'label'        => __( 'Popover', 'wpessential' ),
			'title'        => self::$title,
			'description'  => self::$description,
			'show_label'   => self::$show_label,
			'label_block'  => self::$label_block,
			'label_on'     => __( 'On', 'wpessential' ),
			'label_off'    => __( 'Off', 'wpessential' ),
			'return_value' => 'yes',
			'classes'      => self::$classes,
			'separator'    => self::$separator,
			'default'      => 'yes',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_popover_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/popover', $opt );
	}

	/**
	 * Register the select control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select ( $id = null, $args = [] )
	{
		self::$default = [
			'type'        => Controls_Manager::SELECT,
			'label'       => __( 'Select', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'options'     => [
				'opt-1' => __( 'Option 1', 'wpessential' ),
				'opt-2' => __( 'Option 2', 'wpessential' ),
				'opt-3' => __( 'Option 3', 'wpessential' ),
			],
			'default'     => 'opt-3',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_select_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/select', $opt );
	}

	/**
	 * Register the select2 control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select2 ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::SELECT2,
			'label'       => __( 'Select 2', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'options'     => [
				'opt-1' => __( 'Option 1', 'wpessential' ),
				'opt-2' => __( 'Option 2', 'wpessential' ),
				'opt-3' => __( 'Option 3', 'wpessential' ),
			],
			'default'     => 'opt-3',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_select2_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/select2', $opt );
	}

	/**
	 * Register the multi_select control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function multi_select ( $id = null, $args = [] )
	{

		self::$default = [
			'label'    => __( 'Multi Select', 'wpessential' ),
			'multiple' => true,
			'default'  => [ 'opt-2', 'opt-3' ],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->select2( "multi_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/multi_select', $opt );
	}

	/**
	 * Register the choose control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function choose ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::CHOOSE,
			'label'       => __( 'Choose', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'toggle'      => true,
			'separator'   => self::$separator,
			'options'     => [
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
			'default'     => 'center',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_choose_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/choose', $opt );
	}

	/**
	 * Register the color control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function color ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::COLOR,
			'label'       => __( 'Color', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'alpha'       => false,
			'default'     => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_color_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/color', $opt );
	}

	/**
	 * Register the rgba color control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function rgba_color ( $id = null, $args = [] )
	{

		self::$default = [
			'label'   => __( 'RGBA Color', 'wpessential' ),
			'alpha'   => true,
			'default' => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->color( "rgba_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/rgba', $opt );
	}

	/**
	 * Register the select icon control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function select_icon ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::ICON,
			'label'       => __( 'Select Icon', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => 'fa fa-facebook',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_select_icon_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/select_icon', $opt );
	}

	/**
	 * Register the icons control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function icons ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::ICONS,
			'label'       => __( 'Icons', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => [
				'value'   => 'fas fa-star',
				'library' => 'solid',
			],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_icons_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/icons', $opt );
	}

	/**
	 * Register the time control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function time ( $id = null, $args = [] )
	{

		self::$default = [
			'type'           => Controls_Manager::DATE_TIME,
			'label'          => __( 'Time', 'wpessential' ),
			'title'          => self::$title,
			'description'    => self::$description,
			'show_label'     => self::$show_label,
			'label_block'    => self::$label_block,
			'classes'        => self::$classes,
			'separator'      => self::$separator,
			'picker_options' => [
				'enableTime:true',
				'altInput:true',
				'enableSeconds:true',
			],
			'default'        => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_time_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/time', $opt );
	}

	/**
	 * Register the date control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function date ( $id = null, $args = [] )
	{

		self::$default = [
			'type'           => Controls_Manager::DATE_TIME,
			'label'          => __( 'Date', 'wpessential' ),
			'title'          => self::$title,
			'description'    => self::$description,
			'show_label'     => self::$show_label,
			'label_block'    => self::$label_block,
			'classes'        => self::$classes,
			'separator'      => self::$separator,
			'picker_options' => [
				'enableTime:false',
			],
			'default'        => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_date_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/date', $opt );
	}

	/**
	 * Register the date time control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function date_time ( $id = null, $args = [] )
	{

		self::$default = [
			'type'           => Controls_Manager::DATE_TIME,
			'label'          => __( 'Date Time', 'wpessential' ),
			'title'          => self::$title,
			'description'    => self::$description,
			'show_label'     => self::$show_label,
			'label_block'    => self::$label_block,
			'classes'        => self::$classes,
			'separator'      => self::$separator,
			'picker_options' => [
				'enableTime:true',
				'enableSeconds:true',
			],
			'default'        => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_date_time_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/date_time', $opt );
	}

	/**
	 * Register the animation control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function animation ( $id = null, $args = [] )
	{

		self::$default = [
			'type'         => Controls_Manager::ANIMATION,
			'label'        => __( 'Animation', 'wpessential' ),
			'title'        => self::$title,
			'description'  => self::$description,
			'show_label'   => self::$show_label,
			'label_block'  => self::$label_block,
			'classes'      => self::$classes,
			'separator'    => self::$separator,
			'prefix_class' => 'animated ',
			'default'      => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_animation_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/animation', $opt );
	}

	/**
	 * Register the hover animation control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function hover_animation ( $id = null, $args = [] )
	{

		self::$default = [
			'type'         => Controls_Manager::HOVER_ANIMATION,
			'label'        => __( 'Hover Animation', 'wpessential' ),
			'title'        => self::$title,
			'description'  => self::$description,
			'show_label'   => self::$show_label,
			'label_block'  => self::$label_block,
			'classes'      => self::$classes,
			'separator'    => self::$separator,
			'prefix_class' => 'elementor-animation-',
			'default'      => '',
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_hover_animation_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/hover_animation', $opt );
	}

	/**
	 * Register the gallery control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function gallery ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::GALLERY,
			'label'       => __( 'Gallery', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => [ '' ],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_gallery_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/gallery', $opt );
	}

	/**
	 * Register the media control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function media ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::MEDIA,
			'label'       => __( 'Media', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => [ 'url' => Utils::get_placeholder_image_src() ],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_media_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/media', $opt );
	}

	/**
	 * Register the image dimensions control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function image_dimensions ( $id = null, $args = [] )
	{

		self::$default = [
			'type'        => Controls_Manager::IMAGE_DIMENSIONS,
			'label'       => __( 'Image Dimensions', 'wpessential' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => [
				'width'  => '',
				'height' => '',
			],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_image_dimensions_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/image_dimensions', $opt );
	}

	/**
	 * Register the slider control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected
	 * @protected
	 */
	protected function slider ( $id = null, $args = [] )
	{

		if ( !empty( $args[ 'type' ] ) ) {
			$type = $args[ 'type' ];
			unset( $args[ 'type' ] );
		} else {
			$type = '';
		}

		self::$default = [
			'label'       => __( 'Slider', 'wpessential' ),
			'type'        => Controls_Manager::SLIDER,
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'size_units'  => self::DIMENSIONS_UNITE,
			'default'     => [
				[
					'unit' => 'px',
				],
			],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_control( WPE_SETTINGS . "_slider_{$id}", $args );

		return apply_filters( 'wpe/elementor/fields/slider', $opt );
	}

	/**
	 * Register the spacing control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  0.0.1
	 * @access protected
	 * @protected
	 */
	protected function spacing ( $id = null, $args = [] )
	{
		self::$default = [
			'label'       => __( 'Spacing', 'tci-uet' ),
			'type'        => Controls_Manager::DIMENSIONS,
			'size_units'  => wpe_style_unites(),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => true,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_responsive_control( WPE_SETTINGS . "_spacing_{$id}", $args );

		return apply_filters( "wpe/elementor/fields/spacing", $opt );
	}

	/**
	 * Register the typography control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  0.0.1
	 * @access protected
	 * @protected
	 */
	protected function typography ( $id = null, $args = [] )
	{

		self::$default = [
			'name'        => WPE_SETTINGS . "_typography_{$id}",
			'label'       => __( 'Typography', 'tci-uet' ),
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
			'default'     => [],
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_group_control( Group_Control_Typography::get_type(), $args );

		return apply_filters( 'wpe/elementor/fields/typography', $opt );
	}

	/**
	 * Register the box shadow control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $args are used to parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  0.0.1
	 * @access protected
	 * @protected
	 */
	protected function box_shadow ( $id = null, $args = [], $style = [] )
	{
		self::$default = [
			'name'        => TCI_UET_SETTINGS . "_box_shadow_{$id}",
			'title'       => self::$title,
			'description' => self::$description,
			'show_label'  => self::$show_label,
			'label_block' => self::$label_block,
			'classes'     => self::$classes,
			'separator'   => self::$separator,
		];

		$args = wp_parse_args( $args, self::$default );

		$opt = $this->add_group_control( Group_Control_Box_Shadow::get_type(), $args );

		return apply_filters( 'wpe/elementor/fields/box_shadow', $opt );
	}
}
