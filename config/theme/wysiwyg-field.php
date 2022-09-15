<?php

use WPEssential\Plugins\Panel\Fields\Wysiwyg;
use WPEssential\Plugins\Panel\Section;

return Section::make( __( 'Wysiwyg Editor', 'wpessential' ), 'wysiwyg_field' )
			  ->description( __( 'Wysiwyg editor examples.', 'wpessential' ) )
			  ->icon_type( 'icon' )
			  ->icon( 'el-icon-location' )
			  ->note_desc( __( 'Wysiwyg editor examples.', 'wpessential' ) )
			  ->note_icon( 'el-icon-location' )
			  ->note_title( 'Wysiwyg Editor' )
			  ->priority( 10 )
			  ->controls( [
				  Wysiwyg::make( __( 'Wysiwyg field', 'wpessential' ) )
						 ->subtitle( __( 'Field Subtitle' ) )
						 ->description( __( 'Field description' ) )
						 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
						 ->toArray(),
				  Wysiwyg::make( __( 'Wysiwyg field with default', 'wpessential' ) )
						 ->subtitle( __( 'Field Subtitle' ) )
						 ->description( __( 'Field description' ) )
						 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
						 ->default( '<p>hello word</p>' )
						 ->toArray(),
				  Wysiwyg::make( __( 'Wysiwyg field with info', 'wpessential' ) )
						 ->subtitle( __( 'Field Subtitle' ) )
						 ->description( __( 'Field description' ) )
						 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
						 ->note_title( __( 'WPE ', 'wpessential' ) )
						 ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
						 ->toArray()
			  ] )
			  ->toArray();
