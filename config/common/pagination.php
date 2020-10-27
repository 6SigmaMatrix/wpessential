<?php

use WPEssential\Plugins\Fields\Number;
use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Fields\Switcher;
use WPEssential\Plugins\Fields\Text;

return apply_filters(
	'wpe/shortcode/commen/pagination',
	[
		Switcher::make( __( 'Show Pagination', 'wpessential' ) )
				->toArray(),
		Select::make( __( 'Type', 'wpessential' ) )
			  ->default( 'page' )
			  ->options(
				  [
					  'page'          => __( 'Pages', 'wpessential' ),
					  'loadmore_page' => __( 'Ajax Pages', 'wpessential' ),
					  'loadmore'      => __( 'Ajax Loadmore', 'wpessential' ),
					  'infynite'      => __( 'Ajax Infynite', 'wpessential' ),
				  ]
			  )
			  ->dependent( [ wpe_editor_key( 'show_pagination' ) => 'yes' ] )
			  ->toArray(),
		Number::make( __( 'More Post Count', 'wpessential' ) )
			  ->default( 2 )
			  ->dependency(
				  [
					  'relation' => 'AND',
					  'terms'    => [
						  [
							  'name'  => wpe_editor_key( 'show_pagination' ),
							  'value' => 'yes',
						  ],
						  [
							  'name'     => wpe_editor_key( 'type' ),
							  'operator' => '!in',
							  'value'    => [ 'page', 'loadmore_page' ],
						  ],
					  ],
				  ]
			  )
			  ->toArray(),
		Text::make( __( 'Ajax Button Label', 'wpessential' ) )
			->default( __( 'More Post', 'wpessential' ) )
			->dependency(
				[
					'relation' => 'AND',
					'terms'    => [
						[
							'name'  => wpe_editor_key( 'show_pagination' ),
							'value' => 'yes',
						],
						[
							'name'     => wpe_editor_key( 'type' ),
							'operator' => '!in',
							'value'    => [ 'page', 'loadmore_page' ],
						],
					],
				]
			)
			->toArray(),
		Switcher::make( __( 'Next Page', 'wpessential' ) )
				->dependency(
					[
						'relation' => 'AND',
						'terms'    => [
							[
								'name'  => wpe_editor_key( 'show_pagination' ),
								'value' => 'yes',
							],
							[
								'name'     => wpe_editor_key( 'type' ),
								'operator' => 'in',
								'value'    => [ 'page', 'loadmore_page' ],
							],
						],
					]
				)
				->toArray(),
		Text::make( __( 'Next Page Label', 'wpessential' ) )
			->default( __( 'Next', 'wpessential' ) )
			->dependency(
				[
					'relation' => 'AND',
					'terms'    => [
						[
							'name'  => wpe_editor_key( 'show_pagination' ),
							'value' => 'yes',
						],
						[
							'name'     => wpe_editor_key( 'next_page' ),
							'operator' => '=',
							'value'    => 'yes',
						],
						[
							'name'     => wpe_editor_key( 'type' ),
							'operator' => 'in',
							'value'    => [ 'page', 'loadmore_page' ],
						],
					],
				]
			)
			->toArray(),
		Switcher::make( __( 'Previous Page', 'wpessential' ) )
				->dependency(
					[
						'relation' => 'AND',
						'terms'    => [
							[
								'name'  => wpe_editor_key( 'show_pagination' ),
								'value' => 'yes',
							],
							[
								'name'     => wpe_editor_key( 'type' ),
								'operator' => 'in',
								'value'    => [ 'page', 'loadmore_page' ],
							],
						],
					]
				)
				->toArray(),
		Text::make( __( 'Previous Page Label', 'wpessential' ) )
			->default( __( 'Previous', 'wpessential' ) )
			->dependency(
				[
					'relation' => 'AND',
					'terms'    => [
						[
							'name'  => wpe_editor_key( 'show_pagination' ),
							'value' => 'yes',
						],
						[
							'name'     => wpe_editor_key( 'previous_page' ),
							'operator' => '=',
							'value'    => 'yes',
						],
						[
							'name'     => wpe_editor_key( 'type' ),
							'operator' => 'in',
							'value'    => [ 'page', 'loadmore_page' ],
						],
					],
				]
			)
			->toArray()
	]
);

