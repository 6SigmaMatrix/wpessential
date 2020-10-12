<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

return [
	'tab_id'       => 'post_type_settings',
	'tab_title'    => __( 'Allowed Post Types', 'wpessential' ),
	'tab_desc'     => __( 'There is option to allow the meta box on your desired post types.', 'wpessential' ),
	'tab_icon'     => 'fas fa-box-open',
	'is_child'     => false,
	'tab_priority' => 20,
	'tab_fields'   => [
		[
			'id'      => 'allowed_post_types',
			'type'    => 'wpe-transfer',
			'defined' => [ 'post', 'page' ],
			'options' => wpe_get_post_types(),
		]
	]
];
