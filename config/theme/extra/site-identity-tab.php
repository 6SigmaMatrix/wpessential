<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

return [
	'tab_id'       => 'site_identity_settings',
	'tab_title'    => __( 'Site Identity', 'wpessential' ),
	'tab_desc'     => __( 'Example description of the panel.', 'wpessential' ),
	'tab_icon'     => 'fas fa-passport',
	'is_child'     => false,
	'tab_priority' => 0,
	'tab_fields'   => [
		[
			'id'       => 'site_logo',
			'type'     => 'wpe-media',
			'heading'  => __( 'Logo', 'wpessential' ),
			'desc'     => __( 'Select or upload the site logo.', 'wpessential' ),
			'defined'  => '',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'new'    => __( 'Select Logo', 'wpessential' ),
				'update' => __( 'Update Logo', 'wpessential' )
			]
		],
		[
			'id'       => 'site_title',
			'type'     => 'wpe-text',
			'heading'  => __( 'Site Title', 'wpessential' ),
			'subtitle' => __( 'Enter the site title.', 'wpessential' ),
			'desc'     => __( 'Enter the site title.', 'wpessential' ),
			'defined'  => __( 'WPEssential', 'wpessential' ),
			'help'     => __( 'WPEssential', 'wpessential' ),
		],
		[
			'id'      => 'site_tagline',
			'type'    => 'wpe-textarea',
			'heading' => __( 'Tagline', 'wpessential' ),
			'desc'    => __( 'Enter the site tagline.', 'wpessential' ),
			'defined' => __( 'Just another WordPress site framework', 'wpessential' ),
			'help'    => __( 'WPEssential', 'wpessential' ),
		],
		[
			'id'      => '',
			'type'    => 'wpe-toggle',
			'heading' => __( 'Retina logo', 'wpessential' ),
			'desc'    => __( 'Scales the logo to half its uploaded size, making it sharp on high-res screens.', 'wpessential' ),
			'defined' => 'no',
			'help'    => __( 'WPEssential', 'wpessential' ),
		],
		[
			'id'       => 'site_icon',
			'type'     => 'wpe-media',
			'heading'  => __( 'Site Icon', 'wpessential' ),
			'desc'     => __( 'Site Icons are what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. Upload one here!. Site Icons should be square and at least 512 × 512 pixels.', 'wpessential' ),
			'defined'  => '',
			'help'     => __( 'WPEssential', 'wpessential' ),
			'settings' => [
				'new'    => __( 'Select Site Icon', 'wpessential' ),
				'update' => __( 'Update Site Icon', 'wpessential' )
			]
		],
	]
];
