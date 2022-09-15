<?php

use WPEssential\Plugins\Panel\Fields\Code;
use WPEssential\Plugins\Panel\MetaBox;
use WPEssential\Plugins\Panel\Section;

return MetaBox::make( __( 'General Meta', 'wpessential' ), 'general_meta' )
			  ->context( 'high' )
			  ->post_types( [ 'post', 'page' ] )
			  ->priority( 'high' )
			  ->context( 'advanced' )
			  ->controls( [
				  Section::make( __( 'Code', 'wpessential' ), 'code_field' )
						 ->description( __( 'Code fields examples.', 'wpessential' ) )
						 ->icon_type( 'icon' )
						 ->icon( 'el-icon-location' )
						 ->note_desc( __( 'Code fields examples.', 'wpessential' ) )
						 ->note_icon( 'el-icon-location' )
						 ->note_title( 'Code' )
						 ->priority( 10 )
						 ->controls( [
							 Code::make( __( 'Code field', 'wpessential' ) )
								 ->subtitle( __( 'Field Subtitle' ) )
								 ->description( __( 'Field description' ) )
								 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
								 ->toArray(),
							 Code::make( __( 'Code field with material theme', 'wpessential' ) )
								 ->subtitle( __( 'Field Subtitle' ) )
								 ->description( __( 'Field description' ) )
								 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
								 ->theme( 'material' )
								 ->toArray(),
							 Code::make( __( 'Code field with default', 'wpessential' ) )
								 ->subtitle( __( 'Field Subtitle' ) )
								 ->description( __( 'Field description' ) )
								 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
								 ->default( '<html></html>' )
								 ->toArray(),
							 Code::make( __( 'Code field with php language', 'wpessential' ) )
								 ->subtitle( __( 'Field Subtitle' ) )
								 ->description( __( 'Field description' ) )
								 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
								 ->theme( 'material' )
								 ->language( 'php' )
								 ->toArray(),
							 Code::make( __( 'Code field with info', 'wpessential' ) )
								 ->subtitle( __( 'Field Subtitle' ) )
								 ->description( __( 'Field description' ) )
								 ->placeholder( __( 'Field placeholder', 'wpessential' ) )
								 ->note_title( __( 'WPE ', 'wpessential' ) )
								 ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
								 ->toArray()
						 ] )
						 ->toArray()
			  ] )
			  ->toArray();
