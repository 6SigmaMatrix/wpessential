<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

return [
	'tab_id'       => 'color_scheme_settings',
	'tab_title'    => __( 'Color Scheme', 'wpessential' ),
	'tab_desc'     => __( 'Example description of the panel.', 'wpessential' ),
	'tab_icon'     => 'fas fa-palette',
	'is_child'     => false,
	'tab_priority' => 10,
	'tab_fields'   => [
		[
			'id'       => 'theme_color',
			'type'     => 'wpe-color',
			'heading'  => __( 'Theme Color', 'wpessential' ),
			'desc'     => __( 'Select the theme color scheme.', 'wpessential' ),
			'defined'  => '#000',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
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
			'id'       => 'link_color',
			'type'     => 'wpe-link-color',
			'heading'  => __( 'Anchor Color', 'wpessential' ),
			'desc'     => __( 'Select the theme anchors color scheme.', 'wpessential' ),
			'defined'  => [
				'active'  => '#000',
				'hover'   => '#fff',
				'regular' => '#e2e2e2',
			],
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'active'  => 'yes',
				'hover'   => 'yes',
				'regular' => 'yes',
			]
		],
		[
			'id'       => 'paragraph_color',
			'type'     => 'wpe-color',
			'heading'  => __( 'Paragraph Color', 'wpessential' ),
			'desc'     => __( 'Select the theme paragraph color scheme.', 'wpessential' ),
			'defined'  => '#000',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
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
	],
];
