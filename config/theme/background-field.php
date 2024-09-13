<?php

use WPEssential\Plugins\Panel\Fields\Background;
use WPEssential\Plugins\Panel\Section;

return Section::make( esc_html__( 'Background', 'wpessential' ), 'background' )
              ->description( esc_html__( 'Background fields examples.', 'wpessential' ) )
              ->icon_type( 'icon' )
              ->icon( 'location' )
              ->note_desc( esc_html__( 'Background fields examples.', 'wpessential' ) )
              ->note_icon( 'location' )
              ->note_title( 'Background' )
              ->priority( 9 )
              ->controls( [
	              Background::make( esc_html__( 'Background', 'wpessential' ) )
	                        ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                        ->description( __( 'Field description' ) )
	                        ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                        ->default( [
		                        'image'      => '',
		                        'attachment' => 'scroll',
		                        'position_x' => 'left',
		                        'position_y' => 'top',
		                        'preset'     => 'custom',
		                        'repeat'     => 'repeat',
		                        'size'       => 'cover'
	                        ] )
	                        ->toArray(),
              ] )
              ->toArray();
