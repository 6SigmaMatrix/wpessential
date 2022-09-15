<?php

use WPEssential\Plugins\Panel\Fields\Code;

return [
	'section'  => 'code_field',
	'controls' => [
		Code::make( __( 'Code field', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->full_width( true )
			->toArray(),
		Code::make( __( 'Code field with material theme', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->theme( 'material' )
			->toArray(),
		Code::make( __( 'Code field with default', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->default( '<html></html>' )
			->toArray(),
		Code::make( __( 'Code field with php language', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->theme( 'material' )
			->language( 'php' )
			->toArray(),
		Code::make( __( 'Code field with info', 'wpessential' ) )
			->subtitle( __( 'Field Subtitle' ) )
			->description( __( 'Field description' ) )
			->placeholder( __( 'Field placeholder', 'wpessential' ) )
			->note_title( __( 'WPE ', 'wpessential' ) )
			->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			->toArray(),
	]
];
