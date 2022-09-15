<?php

use WPEssential\Plugins\Panel\Fields\Media;

return [
	'section'  => 'media_field',
	'controls' => [
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
			 ->toArray(),
	]
];
