<?php
add_filter( 'rwmb_meta_boxes', function ()
{
	$meta_boxes[] = [
		'title'      => esc_html__( 'Accessories Setting', 'online-generator' ),
		'id'         => 'fg_accessories_settings',
		'context'    => 'normal',
		'post_types' => 'frg_accessories',
		'autosave'   => true,
		'fields'     => [
			[
				'name'    => 'Short Description',
				'id'      => 'sh_desc',
				'type'    => 'wysiwyg',
				'raw'     => false,
				'options' => [
					'textarea_rows' => 4,
					'teeny'         => true,
				],
			],
			[
				'name'    => 'Type',
				'id'      => 'type',
				'type'    => 'select',
				'options' => [
					'simple'   => 'Simple',
					'variable' => 'Variable',
				]
			],
			[
				'name'         => 'Gallery',
				'id'           => 'gallery',
				'type'         => 'image_advanced',
				'force_delete' => false,
				'image_size'   => 'thumbnail',
				'hidden'       => [ 'type', '!=', 'simple' ]
			],
			[
				'type'              => 'textarea',
				'sanitize_callback' => 'none',
				'name'              => esc_html__( 'Shopify Button JS', 'online-generator' ),
				'id'                => 'shopify-button-code',
				'rows'              => 10,
				'hidden'            => [ 'type', '!=', 'simple' ]
			],
			[
				'type'   => 'text',
				'name'   => esc_html__( 'Shopify Button ID', 'online-generator' ),
				'id'     => 'shopify-button-html',
				'hidden' => [ 'type', '!=', 'simple' ]
			],
			[
				'type'          => 'text',
				'name'          => esc_html__( 'Regular price ($)', 'online-generator' ),
				'id'            => 'regular_price',
				'admin_columns' => true,
				'hidden'        => [ 'type', '!=', 'simple' ]
			],
			[
				'name'        => 'Variable Settings', // Optional
				'id'          => 'veriable_settings',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'fullwidth'   => true,
				'hidden'      => [ 'type', '!=', 'variable' ],
				'fields'      => [
					[
						'name'             => 'Thumbnail',
						'id'               => 'thumbnail',
						'type'             => 'image_advanced',
						'force_delete'     => false,
						'image_size'       => 'thumbnail',
						'max_file_uploads' => 1,
					],
					[
						'name'         => 'Gallery',
						'id'           => 'gallery',
						'type'         => 'image_advanced',
						'force_delete' => false,
						'image_size'   => 'thumbnail',
					],
					[
						'name' => 'Color',
						'id'   => 'color',
						'type' => 'color',
					],
					[
						'type'              => 'textarea',
						'sanitize_callback' => 'none',
						'name'              => esc_html__( 'Shopify Button JS', 'online-generator' ),
						'id'                => 'shopify-button-code',
						'rows'              => 10,
					],
					[
						'type' => 'text',
						'name' => esc_html__( 'Shopify Button ID', 'online-generator' ),
						'id'   => 'shopify-button-html',
					],
					[
						'type'          => 'text',
						'name'          => esc_html__( 'Regular price ($)', 'online-generator' ),
						'id'            => 'regular_price',
						'admin_columns' => true
					],
				],
			],
			[
				'name'   => 'Tech Info', // Optional
				'id'     => 'tech_info',
				'type'   => 'group',
				'clone'  => true,
				'fields' => [
					[
						'name' => 'Title',
						'id'   => 'title',
						'type' => 'text',
					],
					[
						'name' => 'Description',
						'id'   => 'desc',
						'type' => 'textarea',
					],
				],
			],
		],
	];

	return $meta_boxes;
} );
