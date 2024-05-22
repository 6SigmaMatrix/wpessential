<?php

use WPEssential\Plugins\Panel\Fields\Select;

$section_init = WPEssential\Plugins\Panel\Section::make( __( 'WPEssential', 'wpessential' ), 'wpessential' );
$section_init->description( __( 'The is the WPEssential plugin settings. There has many options to customize the plugin working.', 'wpessential' ) );
$section_init->icon_type( 'img' );
$section_init->icon( WPE_URL . '/assets/svgs/plugin_icon.svg' );
$section_init->note_desc( __( 'The is the WPEssential plugin settings. There has many options to customize the plugin.', 'wpessential' ) );
$section_init->note_icon( 'WarningFilled' );
$section_init->note_title( 'WPEssential' );
$section_init->priority( 10 );
$section_init->controls( [
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
	Select::make( __( 'Classic Editor', 'wpessential' ) )
	      ->subtitle( __( 'Allow the WordPress default editor and disable the Gutenberg.', 'wpessential' ) )
	      ->placeholder( __( 'Select the option', 'wpessential' ) )
	      ->options( [
		      'allow'  => __( 'Allow', 'wpessential' ),
		      'denied' => __( 'Denied', 'wpessential' ),
	      ] )
	      ->default( 'denied' )
	      ->toArray(),
	Select::make( __( 'Allowed Post Types', 'wpessential' ) )
	      ->subtitle( __( 'Select the post types where you want to print the WPEssential scripts in WP Admin.', 'wpessential' ) )
	      ->placeholder( __( 'Select the post types', 'wpessential' ) )
	      ->data( 'post_types' )
	      ->multiple( true )
	      ->default( [ 'post' ] )
	      ->toArray(),
	Select::make( __( 'WP Admin Denied', 'wpessential' ) )
	      ->subtitle( __( 'Select to denied the WP top bar and admin page after login for specific user role.', 'wpessential' ) )
	      ->placeholder( __( 'Select the roles', 'wpessential' ) )
	      ->data( 'roles' )
	      ->multiple( true )
	      ->toArray(),
	Select::make( __( 'Taxonomies Description Editor', 'wpessential' ) )
	      ->subtitle( __( 'Allow the WP editor option in taxonomies description field.', 'wpessential' ) )
	      ->placeholder( __( 'Select the option', 'wpessential' ) )
	      ->options( [
		      'allow'  => __( 'Allow', 'wpessential' ),
		      'denied' => __( 'Denied', 'wpessential' ),
	      ] )
	      ->toArray(),
	Select::make( __( 'Duplicate Post', 'wpessential' ) )
	      ->subtitle( __( 'Allow the duplicate post button on posts list and edit screen.', 'wpessential' ) )
	      ->placeholder( __( 'Select the option', 'wpessential' ) )
	      ->options( [
		      'allow'  => __( 'Allow', 'wpessential' ),
		      'denied' => __( 'Denied', 'wpessential' ),
	      ] )
	      ->toArray()
] );

return $section_init->toArray();
