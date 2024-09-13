<?php

use WPEssential\Plugins\Panel\Fields\Select;
use WPEssential\Plugins\Panel\Section;

$content = wpe_get_data_by_url( WPE_URL . 'assets/json/fa5-social-profile.min.json' );
$content = wpe_josn_decode( $content, true );

return Section::make( __( 'Select', 'wpessential' ), 'select_field' )
              ->description( __( 'Select fields examples.', 'wpessential' ) )
              ->icon_type( 'icon' )
              ->icon( 'location' )
              ->note_desc( __( 'Select fields examples.', 'wpessential' ) )
              ->note_icon( 'location' )
              ->note_title( 'Select' )
	->priority( 80 )
              ->controls( [
	              Select::make( __( 'Select field', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with clear icon', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->clearable( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with disable', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->disabled( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with large size', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->size( 'large' )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with small size', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->size( 'small' )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with default size', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->size( 'default' )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with empty size', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->size( '' )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with default', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->default( 'first' )
	                    ->toArray(),
	              Select::make( __( 'Select field with info', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->note_title( __( 'WPE ', 'wpessential' ) )
	                    ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
	                    ->toArray(),
	              Select::make( __( 'Select field with searchable', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->filterable( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with searchable autocomplete on', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->filterable( true )
	                    ->autocomplete( 'on' )
	                    ->toArray(),
	              Select::make( __( 'Select field with searchable and create allow', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->filterable( true )
	                    ->allow_create( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with default first', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->filterable( true )
	                    ->default_first_option( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with multiple', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->multiple( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with multiple limit', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->multiple( true )
	                    ->multiple_limit( 2 )
	                    ->toArray(),
	              Select::make( __( 'Select field with reserve keyword', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->multiple( true )
	                    ->filterable( true )
	                    ->reserve_keyword( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with no match text', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->multiple( true )
	                    ->filterable( true )
	                    ->no_match_text( __( 'No data match found', 'wpessential' ) )
	                    ->toArray(),
	              Select::make( __( 'Select field with collapse tags when multiple', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->multiple( true )
	                    ->multiple_limit( 2 )
	                    ->collapse_tags( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with no data text', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->no_data_text( __( 'No data found', 'wpessential' ) )
	                    ->toArray(),
	              Select::make( __( 'Select field with dropdown in body', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->options( [
		                    'first' => '1 Option',
		                    'sec'   => '2 Option',
		                    'third' => '3 Option',
	                    ] )
	                    ->popper_append_to_body( false )
	                    ->toArray(),
	              Select::make( __( 'Select field with group', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->group( true )
	                    ->options( [
		                    [
			                    'name' => 'Group 1',
			                    'list' => [
				                    'first' => '1 Option',
				                    'sec'   => '2 Option',
				                    'third' => '3 Option',
			                    ]
		                    ],
		                    [
			                    'name' => 'Group 2',
			                    'list' => [
				                    'first' => '1 Option',
				                    'sec'   => '2 Option',
				                    'third' => '3 Option',
			                    ]
		                    ]
	                    ] )
	                    ->toArray(),
	              Select::make( __( 'Select field with posts', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'posts' )
	                    ->args(
		                    [
			                    'post_type'      => 'post',
			                    'posts_per_page' => - 1,
			                    'orderby'        => 'title',
			                    'order'          => 'ASC',
		                    ]
	                    )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search posts', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'posts' )
	                    ->args(
		                    [
			                    'post_type'      => 'post',
			                    'posts_per_page' => - 1,
			                    'orderby'        => 'title',
			                    'order'          => 'ASC',
		                    ]
	                    )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with loading text', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'posts' )
	                    ->args(
		                    [
			                    'post_type'      => 'post',
			                    'posts_per_page' => - 1,
			                    'orderby'        => 'title',
			                    'order'          => 'ASC',
		                    ]
	                    )
	                    ->remote( true )
	                    ->loading_text( 'Loading post from search' )
	                    ->toArray(),
	              Select::make( __( 'Select field with pages', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'pages' )
	                    ->args(
		                    [
			                    'posts_per_page' => - 1,
		                    ]
	                    )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search pages', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'pages' )
	                    ->args(
		                    [
			                    'posts_per_page' => - 1,
		                    ]
	                    )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with categories', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'categories' )
	                    ->args(
		                    [
			                    'hide_empty' => false,
		                    ]
	                    )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search categories', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'categories' )
	                    ->args(
		                    [
			                    'hide_empty' => false,
		                    ]
	                    )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with terms', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'terms' )
	                    ->args(
		                    [
			                    'taxonomy'   => 'category',
			                    'hide_empty' => false,
		                    ]
	                    )
	                    ->toArray(),
	              Select::make( __( 'Select field with with live search terms', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'terms' )
	                    ->args(
		                    [
			                    'taxonomy'   => 'category',
			                    'hide_empty' => false,
		                    ]
	                    )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with taxonomies', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'taxonomies' )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search taxonomies', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'taxonomies' )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with tags', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'tags' )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search tags', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'tags' )
	                    ->args(
		                    [
			                    'hide_empty' => false,
		                    ]
	                    )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with post types', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'post_types' )
	                    ->toArray(),
	              Select::make( __( 'Select field with menus', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'menus' )
	                    ->toArray(),
	              Select::make( __( 'Select field with image sizes', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'image_sizes' )
	                    ->toArray(),
	              Select::make( __( 'Select field with menu locations', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'menu_locations' )
	                    ->toArray(),
	              Select::make( __( 'Select field with roles', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'roles' )
	                    ->toArray(),
	              Select::make( __( 'Select field with sidebars', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'sidebars' )
	                    ->toArray(),
	              Select::make( __( 'Select field with capabilities', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'capabilities' )
	                    ->toArray(),
	              Select::make( __( 'Select field with users', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'users' )
	                    ->toArray(),
	              Select::make( __( 'Select field with live search users', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->data( 'users' )
	                    ->remote( true )
	                    ->toArray(),
	              Select::make( __( 'Select field with icons', 'wpessential' ) )
	                    ->subtitle( __( 'Field Subtitle' ) )
	                    ->description( __( 'Field description' ) )
	                    ->placeholder( __( 'Field placeholder', 'wpessential' ) )
	                    ->icons( true )
	                    ->style_files( [
		                    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'
	                    ] )
	                    ->options( $content )
	                    ->toArray()
              ] )
              ->toArray();
