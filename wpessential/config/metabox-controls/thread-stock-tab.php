<?php
return [
	'id'         => 'wpe_thread_stock',
	'post_types' => [ 'post', 'page' ],
	'heading'    => __( 'Thread Options', 'wpessential' ),
	'context'    => 'normal',
	'priority'   => 'low',
	'fields'     => [
		[
			'tab_id'     => 'wpe_thread_stock_settings',
			'tab_fields' => [
				[
					'id'       => 'price_per_bundle',
					'type'     => 'wpe-number',
					'heading'  => __( 'Price Per Bundle', 'wpessential' ),
					'subtitle' => __( 'Enter thread bundle price.', 'wpessential' ),
					'settings' => [
						'placeholder' => __( 'Enter the price', 'wpessential' ),
						'min'         => 0,
						'step'        => 1,
					]
				],
				[
					'id'       => 'total_qty',
					'type'     => 'wpe-number',
					'heading'  => __( 'Total QTY', 'wpessential' ),
					'subtitle' => __( 'Enter thread total quantity.', 'wpessential' ),
					'settings' => [
						'placeholder' => __( 'Enter the qty', 'wpessential' ),
						'min'         => 0,
						'step'        => 1,
					]
				],
			]
		]
	]
];
