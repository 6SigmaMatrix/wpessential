<?php
return [
	'id'         => 'code_field',
	'title'      => __( 'Code Editor', 'wpessential' ),
	'desc'       => __( 'Code editor fields examples.', 'wpessential' ),
	'note'       => [
		'title'   => __( 'Code Editor', 'wpessential' ),
		'icon'    => 'el-icon-warning',
		'content' => __( 'Color editor fields examples.', 'wpessential' )
	],
	'icon'       => 'el-icon-location',
	'image_icon' => 'el-icon-location',
	'priority'   => 'high',
	'fields'     => 'code_field',
	'post_type'  => [ 'post', 'page' ],
	'context'    => 'advanced',
];
