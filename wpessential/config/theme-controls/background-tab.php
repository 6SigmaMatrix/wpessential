<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

return [
	'tab_id'       => 'box_settings',
	'tab_title'    => __( 'Background', 'wpessential' ),
	'tab_desc'     => __( 'Example description of the panel.', 'wpessential' ),
	'tab_icon'     => 'fas fa-box-open',
	'is_child'     => false,
	'tab_priority' => 20,
	'tab_fields'   => [
		[
			'id'       => 'background',
			'type'     => 'wpe-background',
			'heading'  => __( 'Background Image', 'wpessential' ),
			'desc'     => __( 'Select or upload the theme website background image.', 'wpessential' ),
			'defined'  => [
				'image'      => 'http://wpe/wp-content/uploads/2020/04/5.jpg',
				'attachment' => 'scroll',
				'position_x' => 'left',
				'position_y' => 'top',
				'preset'     => 'custom',
				'repeat'     => 'repeat',
				'size'       => 'cover'
			],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'new'    => __( 'Select Background Image', 'wpessential' ),
				'update' => __( 'Update Background Image', 'wpessential' ),
			]
		]
	],
];
