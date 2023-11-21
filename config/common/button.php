<?php

use WPEssential\Plugins\Builders\Fields\Choose;
use WPEssential\Plugins\Builders\Fields\Icons;
use WPEssential\Plugins\Builders\Fields\Select;
use WPEssential\Plugins\Builders\Fields\Slider;
use WPEssential\Plugins\Builders\Fields\Text;

return apply_filters(
	'wpe/shortcode/Wpessential_Post/button',
	[
		Select::make( __( 'Button Type' ) )
		      ->options( wpe_info_type() )
		      ->toArray(),
		Select::make( __( 'Button Size' ) )
		      ->options( wpe_element_size() )
		      ->default( 'xs' )
		      ->toArray(),
		Text::make( __( 'Button Label' ) )
		    ->default( __( 'Read More', 'wpessential' ) )
		    ->toArray(),
		Choose::make( __( 'Alignment', 'wpessential' ) )
		      ->options(
			      [
				      'left'    => [
					      'title' => __( 'Left', 'wpessential' ),
					      'icon'  => 'eicon-text-align-left',
				      ],
				      'center'  => [
					      'title' => __( 'Center', 'wpessential' ),
					      'icon'  => 'eicon-text-align-center',
				      ],
				      'right'   => [
					      'title' => __( 'Right', 'wpessential' ),
					      'icon'  => 'eicon-text-align-right',
				      ],
				      'justify' => [
					      'title' => __( 'Justified', 'wpessential' ),
					      'icon'  => 'eicon-text-align-justify',
				      ],
			      ]
		      )
		      ->toArray(),
		Icons::make( __( 'Button Icon' ) )
		     ->label_block( true )
		     ->default(
			     [
				     'value'   => 'fas fa-star',
				     'library' => 'solid',
			     ]
		     )
		     ->toArray(),
		Choose::make( __( 'Icon Position' ) )
		      ->toggle( false )
		      ->options( [
			      [
				      'left' => __( 'Before', 'wpessential' ),
				      'icon' => 'fa fa-align-left'
			      ],
			      [
				      'right' => __( 'After', 'wpessential' ),
				      'icon'  => 'fa fa-align-right',
			      ],
		      ] )
		      ->dependent( [
			      wpe_editor_key( 'icon_position[value]!' ) => '',
		      ] )
		      ->default( 'left' )
		      ->toArray(),
		Slider::make( __( 'Icon Spacing', 'wpessential' ) )
		      ->range(
			      [
				      'px' => [
					      'max' => 50,
				      ],
			      ]
		      )
		      ->dependent( [
			      wpe_editor_key( 'icon_position[value]!' ) => '',
		      ] )
		      ->toArray(),
		Text::make( __( 'Button ID', 'wpessential' ) )
		    ->desc( __( 'Please make sure the ID is unique and not used elsewhere on the page this form is displayed. This field allows <code>A-z 0-9</code> & underscore chars without spaces.', 'wpessential' ) )
		    ->dynamic(
			    [
				    'active' => true,
			    ]
		    )
		    ->separator( 'before' )
		    ->toArray()
	]
);
