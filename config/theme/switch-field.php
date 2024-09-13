<?php

use WPEssential\Plugins\Panel\Fields\Switcher;
use WPEssential\Plugins\Panel\Section;

return Section::make( esc_html__( 'Switcher', 'wpessential' ) )
              ->description( esc_html__( 'Switcher fields examples.', 'wpessential' ) )
              ->icon_type( 'icon' )
              ->icon( 'location' )
              ->note_desc( esc_html__( 'Switcher fields examples.', 'wpessential' ) )
              ->note_icon( 'location' )
              ->note_title( 'Switcher' )
              ->priority( 90 )
              ->controls( [
	              Switcher::make( esc_html__( 'Switcher with loading', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->loading( true )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with default size', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->size( 'default' )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with small size', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->size( 'small' )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with large size', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->size( 'large' )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with width', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->width( 40 )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with inline prompt text', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->inline_prompt( true )
	                      ->active_text( __( 'Active', 'wpessential' ) )
	                      ->inactive_text( __( 'Inactive', 'wpessential' ) )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with inline prompt icon', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->inline_prompt( true )
	                      ->active_icon( __( 'Plus', 'wpessential' ) )
	                      ->inactive_icon( __( 'Minus', 'wpessential' ) )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with inline prompt icon 2', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->inline_prompt( true )
	                      ->active_action_icon( __( 'View', 'wpessential' ) )
	                      ->inactive_action_icon( __( 'Hide', 'wpessential' ) )
	                      ->toArray(),
	              Switcher::make( esc_html__( 'Switcher with change value', 'wpessential' ) )
	                      ->subtitle( esc_html__( 'Field Subtitle', 'wpessential' ) )
	                      ->description( __( 'Field description' ) )
	                      ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                      ->inline_prompt( true )
	                      ->active_value( 3 )
	                      ->inactive_value( 'Hello' )
	                      ->toArray(),
              ] )
              ->toArray();
