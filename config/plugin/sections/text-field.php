<?php
return [
	'id'         => 'text_field',
	'title'      => __( 'Text', 'wpessential' ),
	'desc'       => __( 'Text fields examples.', 'wpessential' ),
	'note'       => [
		'title'   => __( 'Text', 'wpessential' ),
		'icon'    => 'el-icon-warning',
		'content' => __( 'Text fields examples.', 'wpessential' )
	],
	'icon'       => 'el-icon-location',
	'image_icon' => 'el-icon-location',
	//'priority'   => 0,
	'fields'     => 'text_field',
	'children'   => [
		[
			'id'         => 'tab_1_1',
			'title'      => __( 'Tab 1 1', 'wpessential' ),
			'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
			'note'       => [
				'title'   => __( 'Tab', 'wpessential' ),
				'icon'    => 'el-icon-warning',
				'content' => __( 'Example desc of the panel.', 'wpessential' )
			],
			'icon'       => 'el-icon-location',
			'image_icon' => 'el-icon-location',
			//'priority'   => 0,
			'fields'     => 'tab_1_1',
		],
		[
			'id'         => 'tab_1_2',
			'title'      => __( 'Tab 1 2', 'wpessential' ),
			'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
			'note'       => [
				'title'   => __( 'Tab', 'wpessential' ),
				'icon'    => 'el-icon-warning',
				'content' => __( 'Example desc of the panel.', 'wpessential' )
			],
			'icon'       => 'el-icon-location',
			'image_icon' => 'el-icon-location',
			//'priority'   => 0,
			'fields'     => 'tab_1_2',
		]
	]
];
