<?php

use WPEssential\Plugins\Panel\Fields\ImageSelect;

return [
	'section'  => 'image_select_field',
	'controls' => [
		ImageSelect::make( __( 'Image Select field', 'wpessential' ) )
				   ->subtitle( __( 'Field Subtitle' ) )
				   ->description( __( 'Field description' ) )
				   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
				   ->options( [
					   'test'  => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
					   'test2' => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
				   ] )
				   ->toArray(),
		ImageSelect::make( __( 'Image Select field with default', 'wpessential' ) )
				   ->subtitle( __( 'Field Subtitle' ) )
				   ->description( __( 'Field description' ) )
				   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
				   ->options( [
					   'test'  => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
					   'test2' => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
				   ] )
				   ->default( 'test' )
				   ->toArray(),
		ImageSelect::make( __( 'Image Select field with info', 'wpessential' ) )
				   ->subtitle( __( 'Field Subtitle' ) )
				   ->description( __( 'Field description' ) )
				   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
				   ->note_title( __( 'WPE ', 'wpessential' ) )
				   ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
				   ->options( [
					   'test'  => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
					   'test2' => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
				   ] )
				   ->toArray(),
	]
];
