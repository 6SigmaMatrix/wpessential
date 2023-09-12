<?php

use WPEssential\Plugins\Panel\Fields\Select;
use WPEssential\Plugins\Panel\MetaBox;
use WPEssential\Plugins\Panel\Section;

return MetaBox::make( __( 'Generalt Meta', 'wpessential' ), 'general_meta' )
              ->context( 'high' )
              ->post_types( [ 'post', 'page' ] )
              ->priority( 'high' )
              ->context( 'advanced' )
              ->controls( [
	              Section::make( __( 'Code2', 'wpessential' ), 'code_field' )
	                     ->description( __( 'Code fields examples.', 'wpessential' ) )
	                     ->icon_type( 'icon' )
	                     ->icon( 'el-icon-location' )
	                     ->note_desc( __( 'Code fields examples.', 'wpessential' ) )
	                     ->note_icon( 'el-icon-location' )
	                     ->note_title( 'Code' )
	                     ->priority( 10 )
	                     ->controls( [
		                     Select::make( __( 'Image Export', 'wpessential' ) )
		                           ->subtitle( __( 'Allow the image export option in WordPress export option.', 'wpessential' ) )
		                           ->placeholder( __( 'Select the option', 'wpessential' ) )
		                           ->options( [
			                           'allow'  => __( 'Allow', 'wpessential' ),
			                           'denied' => __( 'Denied', 'wpessential' ),
		                           ] )
		                           ->default( 'allow' )
		                           ->toArray(),
		                     Select::make( __( 'SVG Support', 'wpessential' ) )
		                           ->subtitle( __( 'Allow the svg support.', 'wpessential' ) )
		                           ->placeholder( __( 'Select the option', 'wpessential' ) )
		                           ->options( [
			                           'allow'  => __( 'Allow', 'wpessential' ),
			                           'denied' => __( 'Denied', 'wpessential' ),
		                           ] )
		                           ->default( 'allow' )
		                           ->toArray(),
	                     ] )->toArray()
              ] )->init();
