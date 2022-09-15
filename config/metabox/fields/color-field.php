<?php

use WPEssential\Plugins\Panel\Fields\Color;

return [
	'section'  => 'color_field',
	'controls' => [
		Color::make( __( 'Color field', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->toArray(),
		Color::make( __( 'Color field with default value', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->default( '#000' )
			 ->toArray(),
		Color::make( __( 'Color field with disabled', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->disabled( true )
			 ->toArray(),
		Color::make( __( 'Color field with info', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->note_title( __( 'WPE ', 'wpessential' ) )
			 ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			 ->toArray(),
		Color::make( __( 'Color field in medium size', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->size( 'medium' )
			 ->toArray(),
		Color::make( __( 'Color field in small size', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->size( 'small' )
			 ->toArray(),
		Color::make( __( 'Color field in mini size', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->size( 'mini' )
			 ->toArray(),
		Color::make( __( 'Color field in hex value', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->format( 'hex' )
			 ->toArray(),
		Color::make( __( 'Color field in hsv value', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->format( 'hsv' )
			 ->toArray(),
		Color::make( __( 'Color field in hsl value', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->format( 'hsl' )
			 ->toArray(),
		Color::make( __( 'Color field in rgb value', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->format( 'rgb' )
			 ->toArray(),
		Color::make( __( 'Color field with alpha', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->alpha( true )
			 ->toArray(),
		Color::make( __( 'Color field with custom color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->color_list( [
				 '#00FFFF',
				 '#008080',
				 '#000080',
				 '#FF00FF',
			 ] )
			 ->toArray(),
		Color::make( __( 'Color field with custom color list (rbg)', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->color_list( [
				 'rgb(0, 255, 255)',
				 'rgb(0, 128, 128)',
				 'rgb(0, 0, 128)',
				 'rgb(255, 0, 255)',
			 ] )
			 ->toArray(),
		Color::make( __( 'Color field with red color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'red' )
			 ->toArray(),
		Color::make( __( 'Color field with pink color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'pink' )
			 ->toArray(),
		Color::make( __( 'Color field with purple color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'purple' )
			 ->toArray(),
		Color::make( __( 'Color field with deep purple color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'deeppurple' )
			 ->toArray(),
		Color::make( __( 'Color field with indigo color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'indigo' )
			 ->toArray(),
		Color::make( __( 'Color field with blue color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'blue' )
			 ->toArray(),
		Color::make( __( 'Color field with light blue color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'lightblue' )
			 ->toArray(),
		Color::make( __( 'Color field with cyan color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'cyan' )
			 ->toArray(),
		Color::make( __( 'Color field with teal color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'teal' )
			 ->toArray(),
		Color::make( __( 'Color field with green color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'green' )
			 ->toArray(),
		Color::make( __( 'Color field with light green color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'lightgreen' )
			 ->toArray(),
		Color::make( __( 'Color field with lime color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'lime' )
			 ->toArray(),
		Color::make( __( 'Color field with yellow color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'yellow' )
			 ->toArray(),
		Color::make( __( 'Color field with amber color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'amber' )
			 ->toArray(),
		Color::make( __( 'Color field with orange color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'orange' )
			 ->toArray(),
		Color::make( __( 'Color field with deep orange color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'deeporange' )
			 ->toArray(),
		Color::make( __( 'Color field with brown color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'brown' )
			 ->toArray(),
		Color::make( __( 'Color field with grey color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'grey' )
			 ->toArray(),
		Color::make( __( 'Color field with blue grey color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'bluegrey' )
			 ->toArray(),
		Color::make( __( 'Color field with all color list', 'wpessential' ) )
			 ->subtitle( __( 'Field Subtitle' ) )
			 ->description( __( 'Field description' ) )
			 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
			 ->material_color( 'all' )
			 ->toArray(),
	]
];
