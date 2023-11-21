<?php

use WPEssential\Plugins\Panel\Fields\Url;

return [
	'section'  => 'url_field',
	'controls' => [
		Url::make( __( 'Url field', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with max value', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->maxlength( 50 )
		   ->toArray(),
		Url::make( __( 'Url field with max/min value', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->maxlength( 50 )
		   ->minlength( 5 )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with word limit show', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->maxlength( 50 )
		   ->minlength( 5 )
		   ->show_word_limit( true )
		   ->toArray(),
		Url::make( __( 'Url field with clear icon', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->clearable( true )
		   ->toArray(),
		Url::make( __( 'Url field with disable', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->disabled( true )
		   ->toArray(),
		Url::make( __( 'Url field with read only', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->readonly( true )
		   ->toArray(),
		Url::make( __( 'Url field with large size', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->size( 'large' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with medium size', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->size( 'medium' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with small size', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->size( 'small' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with mini size', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->size( 'mini' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with prefix icon', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->prefix_icon( 'plus' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with suffix icon', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->suffix_icon( 'plus' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with resize', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->resize( 'both' )
		   ->default( 'Im default value of this field' )
		   ->toArray(),
		Url::make( __( 'Url field with info', 'wpessential' ) )
		   ->subtitle( __( 'Field Subtitle' ) )
		   ->description( __( 'Field description' ) )
		   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
		   ->default( 'Im default value of this field' )
		   ->note_title( __( 'WPE ', 'wpessential' ) )
		   ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
		   ->toArray()
	]
];
