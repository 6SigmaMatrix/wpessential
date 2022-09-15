<?php

use WPEssential\Plugins\Panel\Fields\Wysiwyg;

return [
	'section'  => 'wysiwyg_field',
	'controls' => [
		Wysiwyg::make( __( 'Wysiwyg field', 'wpessential' ) )
			   ->subtitle( __( 'Field Subtitle' ) )
			   ->description( __( 'Field description' ) )
			   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			   ->toArray(),
		Wysiwyg::make( __( 'Wysiwyg field with default', 'wpessential' ) )
			   ->subtitle( __( 'Field Subtitle' ) )
			   ->description( __( 'Field description' ) )
			   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			   ->default( '<p>hello word</p>' )
			   ->toArray(),
		Wysiwyg::make( __( 'Wysiwyg field with info', 'wpessential' ) )
			   ->subtitle( __( 'Field Subtitle' ) )
			   ->description( __( 'Field description' ) )
			   ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			   ->note_title( __( 'WPE ', 'wpessential' ) )
			   ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			   ->toArray()
	]
];
