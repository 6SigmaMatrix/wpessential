<?php

use WPEssential\Plugins\Panel\Fields\Divider;

return [
	'section'  => 'divider_field',
	'controls' => [
		Divider::make( __( 'Color field with vertical', 'wpessential' ) )
		       ->subtitle( __( 'Field Subtitle' ) )
		       ->description( __( 'Field description' ) )
		       ->icon( 'star-on' )
		       ->direction( 'vertical' )
		       ->toArray(),
		Divider::make( __( 'Color field with horizontal', 'wpessential' ) )
		       ->subtitle( __( 'Field Subtitle' ) )
		       ->description( __( 'Field description' ) )
		       ->icon( 'star-on' )
		       ->direction( 'horizontal' )
		       ->toArray(),
		Divider::make( __( 'Color field with right text', 'wpessential' ) )
		       ->subtitle( __( 'Field Subtitle' ) )
		       ->description( __( 'Field description' ) )
		       ->icon( 'star-on' )
		       ->direction( 'horizontal' )
		       ->content_position( 'right' )
		       ->toArray(),
		Divider::make( __( 'Color field with center text', 'wpessential' ) )
		       ->subtitle( __( 'Field Subtitle' ) )
		       ->description( __( 'Field description' ) )
		       ->icon( 'star-on' )
		       ->direction( 'horizontal' )
		       ->content_position( 'center' )
		       ->toArray(),
		Divider::make( __( 'Color field with left text', 'wpessential' ) )
		       ->subtitle( __( 'Field Subtitle' ) )
		       ->description( __( 'Field description' ) )
		       ->direction( 'horizontal' )
		       ->content_position( 'left' )
		       ->toArray(),
	]
];
