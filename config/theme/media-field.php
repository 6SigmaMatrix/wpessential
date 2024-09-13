<?php

use WPEssential\Plugins\Panel\Fields\Media;
use WPEssential\Plugins\Panel\Section;

return Section::make( __( 'Media', 'wpessential' ), 'media_field' )
              ->description( __( 'Media fields examples.', 'wpessential' ) )
              ->icon_type( 'icon' )
              ->icon( 'location' )
              ->note_desc( __( 'Media fields examples.', 'wpessential' ) )
              ->note_icon( 'location' )
              ->note_title( 'Media' )
	->priority( 60 )
              ->controls( [
	              Media::make( __( 'Media field', 'wpessential' ) )
	                   ->subtitle( __( 'Field Subtitle' ) )
	                   ->description( __( 'Field description' ) )
	                   ->toArray(),
	              Media::make( __( 'Media field with default', 'wpessential' ) )
	                   ->subtitle( __( 'Field Subtitle' ) )
	                   ->description( __( 'Field description' ) )
	                   ->add_text( __( 'Add Image' ) )
	                   ->update_text( __( 'Update Image' ) )
	                   ->default( [
		                   'id'  => 7,
		                   'url' => 'http://wpessential/wp-content/uploads/woocommerce-placeholder.png',
	                   ] )
	                   ->toArray(),
	              Media::make( __( 'Media field with info', 'wpessential' ) )
	                   ->subtitle( __( 'Field Subtitle' ) )
	                   ->description( __( 'Field description' ) )
	                   ->note_title( __( 'WPE ', 'wpessential' ) )
	                   ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
	                   ->toArray()
              ] )
              ->toArray();
