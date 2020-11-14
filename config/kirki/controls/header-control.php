<?php
return [
	[
		'id'          => 'header_control_1',
		'type'        => 'background',
		'settings'    => 'header_control_1',
		'label'       => esc_html__( 'Background Control', 'wpessential' ),
		'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'wpessential' ),
		'section'     => 'header_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body',
			],
		],
	],
	[
		'id'          => 'header_control_2',
		'type'        => 'background',
		'settings'    => 'header_control_2',
		'label'       => esc_html__( 'Background Control', 'wpessential' ),
		'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'wpessential' ),
		'section'     => 'header_section',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => 'body',
			],
		],
	]
];
