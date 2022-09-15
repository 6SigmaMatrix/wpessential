<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

return [
	'tab_id'       => 'style_settings',
	'tab_title'    => __( 'Additional CSS', 'wpessential' ),
	'tab_desc'     => __( 'Example description of the panel.', 'wpessential' ),
	'tab_icon'     => 'fab fa-css3-alt',
	'is_child'     => false,
	'tab_priority' => 10000,
	'tab_fields'   => [
		[
			'id'       => 'code_css',
			'type'     => 'code',
			'heading'  => __( 'Additional CSS', 'wpessential' ),
			'desc'     => __( 'Add website additional css.', 'wpessential' ),
			'defined'  => '',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'mode' => 'css',
			]
		],
	]
];
