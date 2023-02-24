<?php

use WPEssential\Plugins\Panel\Fields\Select;
use WPEssential\Plugins\Panel\Section;

return Section::make( __( 'WPEssential', 'wpessential' ), 'select_field' )
			  ->description( __( 'The is the WPEssential plugin settings. There has many options to customize the plugin.', 'wpessential' ) )
			  ->icon_type( 'icon' )
			  ->icon( 'el-icon-location' )
			  ->note_desc( __( 'The is the WPEssential plugin settings. There has many options to customize the plugin.', 'wpessential' ) )
			  ->note_icon( 'el-icon-location' )
			  ->note_title( 'WPEssential' )
			  ->priority( 10 )
			  ->controls( [
				  Select::make( __( 'Image Export', 'wpessential' ) )
						->subtitle( __( 'Allow the image export option in WordPress export option.', 'wpessential' ) )
						->placeholder( __( 'SSelect the option', 'wpessential' ) )
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
				  Select::make( __( 'Classic Editor', 'wpessential' ) )
						->subtitle( __( 'Allow the WordPress default editor and disable the Gutenberg.', 'wpessential' ) )
						->placeholder( __( 'Select the option', 'wpessential' ) )
						->options( [
							'allow'  => __( 'Allow', 'wpessential' ),
							'denied' => __( 'Denied', 'wpessential' ),
						] )
						->default( 'denied' )
						->toArray(),
			  ] )
			  ->toArray();
