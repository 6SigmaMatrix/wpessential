<?php

use WPEssential\Plugins\Panel\Fields\Text;

return [
	'section'  => 'text_field',
	'controls' => [
		Text::make( __( 'Text field', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with max value', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->maxlength( 50 )
			->toArray(),
		Text::make( __( 'Text field with max/min value', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->maxlength( 50 )
			->minlength( 5 )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with word limit show', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->maxlength( 50 )
			->minlength( 5 )
			->show_word_limit( true )
			->toArray(),
		Text::make( __( 'Text field with clear icon', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->clearable( true )
			->toArray(),
		Text::make( __( 'Text field with disable', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->disabled( true )
			->toArray(),
		Text::make( __( 'Text field with read only', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->readonly( true )
			->toArray(),
		Text::make( __( 'Text field with large size', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->size( 'large' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with medium size', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->size( 'medium' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with small size', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->size( 'small' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with mini size', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->size( 'mini' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with prefix icon', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->prefix_icon( 'el-icon-plus' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with suffix icon', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->suffix_icon( 'el-icon-plus' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with resize', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->resize( 'both' )
			->default( 'Im default value of this field' )
			->toArray(),
		Text::make( __( 'Text field with info', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( 'Im default value of this field' )
			->note_title( __( 'WPE ', 'wpessential' ) )
			->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			->toArray()
	]
];
