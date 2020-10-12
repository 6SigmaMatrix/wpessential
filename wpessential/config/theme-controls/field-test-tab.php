<?php
return [
	'tab_id'       => 'hello',
	'tab_title'    => __( 'Site Identity', 'wpessential' ),
	'tab_desc'     => __( 'Example desc of the panel.', 'wpessential' ),
	'tab_icon'     => 'fas fa-passport',
	'is_child'     => false,
	'tab_priority' => 0,
	'tab_fields'   => [
		[
			'id'       => 'text',
			'type'     => 'wpe-text',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => __( 'text', 'wpessential' ),
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder'     => __( 'Enter the text', 'wpessential' ),
				'maxlength'       => 20,
				'minlength'       => 5,
				'show-word-limit' => true,
				'clearable'       => true,
				'disabled'        => false,
				'size'            => 'small',
				'readonly'        => false,
			]
		],
		[
			'id'       => 'textarea',
			'type'     => 'wpe-textarea',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => __( 'textarea', 'wpessential' ),
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder'     => __( 'Enter the textarea', 'wpessential' ),
				'rows'            => 10,
				'maxlength'       => 20,
				'minlength'       => 5,
				'show-word-limit' => true,
				'clearable'       => true,
				'disabled'        => false,
				'size'            => 'small',
				'readonly'        => false,
				'autosize'        => [
					'minRows' => 2,
					'maxRows' => 10
				]
			]
		],
		[
			'id'       => 'url',
			'type'     => 'wpe-url',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => __( 'google.com', 'wpessential' ),
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder' => __( 'Enter the textarea', 'wpessential' ),
				'disabled'    => false,
				'size'        => 'small',
				'readonly'    => false,
			]
		],
		[
			'id'       => 'number',
			'type'     => 'wpe-number',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 40,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder'   => __( 'Enter the number', 'wpessential' ),
				'maxlength'     => 20,
				'minlength'     => 5,
				'min'           => 5,
				'max'           => 100,
				'step'          => .5,
				'step-strictly' => true,
				'disabled'      => false,
				'size'          => 'small',
				'readonly'      => false,
				'controls'      => true,
				//'controls-position' => 'right'
			]
		],
		[
			'id'       => 'numbers',
			'type'     => 'wpe-number',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 40,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder'       => __( 'Enter the number', 'wpessential' ),
				'maxlength'         => 20,
				'minlength'         => 5,
				'min'               => 5,
				'max'               => 100,
				'step'              => .5,
				'step-strictly'     => true,
				'disabled'          => false,
				'size'              => 'small',
				'readonly'          => false,
				'controls'          => true,
				'controls-position' => 'right'
			]
		],
		[
			'id'       => 'select',
			'type'     => 'wpe-select',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '3',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				'0' => __( 'WPEssential0', 'wpessential' ),
				'1' => __( 'WPEssential1', 'wpessential' ),
				'2' => __( 'WPEssential2', 'wpessential' ),
				'3' => __( 'WPEssential3', 'wpessential' ),
			],
			'settings' => [
				'placeholder'  => __( 'Enter the select', 'wpessential' ),
				'disabled'     => false,
				'size'         => 'small',
				'clearable'    => true,
				'autocomplete' => 'on',
				'filterable'   => true,
				'readonly'     => false,
			]
		],
		[
			'id'       => 'selectm',
			'type'     => 'wpe-select',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ '3', '2' ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				'0' => __( 'WPEssential0', 'wpessential' ),
				'1' => __( 'WPEssential1', 'wpessential' ),
				'2' => __( 'WPEssential2', 'wpessential' ),
				'3' => __( 'WPEssential3', 'wpessential' ),
			],
			'settings' => [
				'placeholder'     => __( 'Enter the select', 'wpessential' ),
				'disabled'        => false,
				'multiple'        => true,
				'multiple-limit'  => 2,
				'size'            => 'small',
				'reserve-keyword' => true,
				'clearable'       => true,
				'autocomplete'    => 'on',
				'filterable'      => true,
				'readonly'        => false,
			]
		],
		[
			'id'       => 'color',
			'type'     => 'wpe-color',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '#000',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'disabled'  => false,
				'size'      => 'small',
				'predefine' => [
					'#ff4500',
					'#ff8c00',
					'#ffd700',
					'#90ee90',
					'#00ced1',
					'#1e90ff',
					'#c71585',
				]
			]
		],
		[
			'id'       => 'color-a',
			'type'     => 'wpe-color',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 'rgba(255, 69, 0, 0.68)',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'disabled'   => false,
				'size'       => 'small',
				'show-alpha' => true,
				'predefine'  => [
					'rgba(255, 69, 0, 0.68)',
					'rgb(255, 120, 0)',
				]
			]
		],
		[
			'id'       => 'date',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '2020-05-17',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder' => __( 'Select Date', 'wpessential' ),
				'readonly'    => false,
				'disabled'    => false,
				'clearable'   => true,
				'size'        => 'small',
				'type'        => 'date',
				'format'      => 'yyyy-MM-dd',
				'align'       => 'center',
			]
		],
		[
			'id'       => 'datetime',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '2020-05-17 05:55:53',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder'        => __( 'Select Date Time', 'wpessential' ),
				'readonly'           => false,
				'disabled'           => false,
				'clearable'          => true,
				'size'               => 'small',
				'type'               => 'datetime',
				'format'             => 'yyyy-MM-dd HH:mm:ss',
				'align'              => 'center',
				'time-arrow-control' => true,
			]
		],
		[
			'id'       => 'year',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '2020',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder' => __( 'Select Date Time', 'wpessential' ),
				'readonly'    => false,
				'disabled'    => false,
				'clearable'   => true,
				'size'        => 'small',
				'type'        => 'year',
				'format'      => 'yyyy',
				'align'       => 'center',
			]
		],
		[
			'id'       => 'month',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '10',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder' => __( 'Select Date Time', 'wpessential' ),
				'readonly'    => false,
				'disabled'    => false,
				'clearable'   => true,
				'size'        => 'small',
				'type'        => 'month',
				'format'      => 'MM',
				'align'       => 'center',
			]
		],
		[
			'id'       => 'week',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '10',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'placeholder' => __( 'Select Date Time', 'wpessential' ),
				'readonly'    => false,
				'disabled'    => false,
				'clearable'   => true,
				'size'        => 'small',
				'type'        => 'week',
				'format'      => 'dd',
				'align'       => 'center',
			]
		],
		[
			'id'       => 'daterange',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ '2020:05:15', '2020:05:20' ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'readonly'          => false,
				'disabled'          => false,
				'clearable'         => true,
				'size'              => 'small',
				'type'              => 'daterange',
				'format'            => 'yyyy-MM-dd',
				'align'             => 'center',
				'range-separator'   => 'To',
				'start-placeholder' => 'Select Start Date',
				'end-placeholder'   => 'Select End Date',
			]
		],
		[
			'id'       => 'datetimerange',
			'type'     => 'wpe-date-time',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ '2020:05:15 05:55:53', '2020:05:20 06:55:53' ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'readonly'           => false,
				'disabled'           => false,
				'clearable'          => true,
				'size'               => 'small',
				'type'               => 'datetimerange',
				'format'             => 'yyyy-MM-dd HH:mm:ss',
				'align'              => 'center',
				'range-separator'    => 'To',
				'start-placeholder'  => 'Select Start Date',
				'end-placeholder'    => 'Select End Date',
				'time-arrow-control' => true,
			]
		],
		[
			'id'       => 'toggle',
			'type'     => 'wpe-toggle',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 'yes',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'disabled'       => false,
				'active-text'    => 'Active Text',
				'inactive-text'  => 'Inactive Text',
				'active-value'   => 'yes',
				'inactive-value' => 'no',

			]
		],
		[
			'id'       => 'toggles',
			'type'     => 'wpe-toggle',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 'yes',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'disabled'            => false,
				'active-icon-class'   => 'fas fa-bell',
				'inactive-icon-class' => 'fas fa-home',
				'active-value'        => 'yes',
				'inactive-value'      => 'no',

			]
		],
		[
			'id'       => 'slider',
			'type'     => 'wpe-slider',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 80,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'show-tooltip'        => true,
				'min'                 => -1,
				'max'                 => 100,
				'step'                => 10,
				'disabled'            => false,
				'show-steps'          => false,
				'show-input'          => false,
				'range'               => false,
				'show-input-controls' => false,
				'input-size'          => 'small',
				'vertical'            => false,
				'height'              => '200px',
			]
		],
		[
			'id'       => 'sliderSss',
			'type'     => 'wpe-slider',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 80,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'min'                 => -1,
				'max'                 => 100,
				'step'                => 10,
				'disabled'            => false,
				'show-tooltip'        => true,
				'show-steps'          => false,
				'show-input'          => true,
				'show-input-controls' => true,
				'range'               => false,
				'input-size'          => 'small',
				'vertical'            => false,
				'height'              => '200px',
			]
		],
		[
			'id'       => 'sliderS',
			'type'     => 'wpe-slider',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ 10, 80 ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'min'                 => -1,
				'max'                 => 100,
				'step'                => 10,
				'disabled'            => false,
				'show-tooltip'        => true,
				'range'               => true,
				'show-stops'          => true,
				'show-input-controls' => true,
				'input-size'          => 'small',
				'show-input'          => false,
				'vertical'            => false,
				'height'              => '200px',
			]
		],
		[
			'id'       => 'sliderSs',
			'type'     => 'wpe-slider',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ 10, 80 ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'min'                 => -1,
				'max'                 => 100,
				'step'                => 10,
				'disabled'            => false,
				'show-tooltip'        => true,
				'range'               => false,
				'show-stops'          => true,
				'show-input-controls' => true,
				'input-size'          => 'small',
				'show-input'          => false,
				'vertical'            => true,
				'height'              => '200px',
			]
		],
		[
			'id'       => 'transfer',
			'type'     => 'wpe-transfer',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [ 0, 2 ],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'filterable'         => true,
				'filter-placeholder' => __( 'WPEssential', 'wpessential' ),
				'button-texts'       => [
					__( 'WPEssential', 'wpessential' ),
					__( 'WPEssential2', 'wpessential' )
				],
			]
		],
		[
			'id'       => 'radio',
			'type'     => 'wpe-radio',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 5,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'disabled' => false,
				'border'   => false,
				'size'     => 'medium',
			]
		],
		[
			'id'       => 'radiodd',
			'type'     => 'wpe-radio',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 5,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'disabled' => false,
				'border'   => false,
				'size'     => 'medium',
				'class'    => 'wpe-radio-block'
			]
		],
		[
			'id'       => 'buttonset',
			'type'     => 'wpe-radio',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 5,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'disabled' => false,
				'border'   => true,
				'size'     => 'medium',
			]
		],
		[
			'id'       => 'buttonseddt',
			'type'     => 'wpe-radio',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 5,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'disabled' => false,
				'border'   => true,
				'size'     => 'medium',
				'class'    => 'wpe-radio-block'
			]
		],
		[
			'id'       => 'buttonsetd',
			'type'     => 'wpe-button-set',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => 5,
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				0 => __( 'WPEssential0', 'wpessential' ),
				2 => __( 'WPEssential2', 'wpessential' ),
				3 => __( 'WPEssential3', 'wpessential' ),
				4 => __( 'WPEssential4', 'wpessential' ),
				5 => __( 'WPEssential5', 'wpessential' ),
			],
			'settings' => [
				'disabled' => false,
			]
		],
		[
			'id'       => 'info1',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => false,
				'center'     => false,
				'close-text' => '',
				'show-icon'  => false,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info11',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => true,
				'center'     => false,
				'close-text' => '',
				'show-icon'  => false,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info12',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => true,
				'center'     => true,
				'close-text' => '',
				'show-icon'  => false,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info331',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => false,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info3s31',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => true,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info3s3s1',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'success',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => true,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info3ss3s1',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'warning',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => true,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info3sss3s1',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'info',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => true,
				'effect'     => 'light',
			]
		],
		[
			'id'       => 'info3sss3sa1',
			'type'     => 'wpe-info',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'settings' => [
				'type'       => 'error',
				'closable'   => true,
				'center'     => true,
				'close-text' => 'Goit',
				'show-icon'  => true,
				'effect'     => 'light',
			]
		],
		[
			'type'     => 'wpe-divider',
			'settings' => [
				'position' => 'left',
				'content'  => __( 'Site Title', 'wpessential' )
			]
		],
		[
			'type'     => 'wpe-divider',
			'settings' => [
				'position' => 'center',
				'content'  => __( 'Site Title', 'wpessential' )
			]
		],
		[
			'type'     => 'wpe-divider',
			'settings' => [
				'position' => 'right',
				'content'  => __( 'Site Title', 'wpessential' )
			]
		],
		[
			'type'    => 'wpe-section',
			'heading' => __( 'Site Title', 'wpessential' ),
			'desc'    => __( 'Enter the site title.', 'wpessential' ),
		],
		[
			'id'      => 'sidebar_layout',
			'type'    => 'wpe-image-select',
			'heading' => __( 'Site Title', 'wpessential' ),
			'desc'    => __( 'Enter the site title.', 'wpessential' ),
			'defined' => 'left',
			'help'    => __( 'WPEssential', 'wpessential' ),
			'options' => [
				'left'  => WPE_URL . '/assets/images/2cl.png',
				'full'  => WPE_URL . '/assets/images/1col.png',
				'right' => WPE_URL . '/assets/images/2cr.png',
			]
		],
		[
			'id'      => 'editor',
			'type'    => 'wpe-editor',
			'heading' => __( 'Site Title', 'wpessential' ),
			'desc'    => __( 'Enter the site title.', 'wpessential' ),
			'defined' => 'left',
			'help'    => __( 'WPEssential', 'wpessential' ),
		],
		[
			'id'      => 'title_section_bg',
			'type'    => 'wpe-media',
			'heading' => esc_html__( 'Title section background', 'wpessential' ),
			'desc'    => esc_html__( 'Upload background image for page title section', 'wpessential' ),
			'help'    => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'new'    => esc_html( 'Add Image', 'wpessential' ),
				'update' => esc_html__( 'Update Image', 'wpessential' )
			]
		],
		/*[
			'id'       => 'colorlink',
			'type'     => 'wpe-link-color',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => '#000',
			'help'     => __( 'WPEssential', 'wpessential' ),
		],*/
		/*[
			'id'       => 'buttongroup',
			'type'     => 'wpe-button-group',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => [
				0,
				2,
			],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'options'  => [
				[ 'key' => 0, 'label' => __( 'WPEssential0', 'wpessential' ) ],
				[ 'key' => 2, 'label' => __( 'WPEssential2', 'wpessential' ) ],
				[ 'key' => 3, 'label' => __( 'WPEssential3', 'wpessential' ) ],
				[ 'key' => 4, 'label' => __( 'WPEssential4', 'wpessential' ) ],
				[ 'key' => 5, 'label' => __( 'WPEssential5', 'wpessential' ) ],
			]
		],*/
	]
];
