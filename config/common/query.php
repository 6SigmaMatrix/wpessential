<?php

use WPEssential\Plugins\Fields\MultiSelect;
use WPEssential\Plugins\Fields\Number;
use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Fields\Switcher;

return apply_filters(
	'wpe/shortcode/commen/query',
	[
		Number::make( __( 'Post Per Page', 'wpessential' ) )
			  ->desc( __( 'Number of post to show per page. Use "-1" to show all posts.', 'wpessential' ) )
			  ->default( 4 )
			  ->toArray(),
		Select::make( __( 'Post Per Row', 'wpessential' ) )
			  ->default( 2 )
			  ->options(
				  [
					  '1' => __( '1', 'wpessential' ),
					  '2' => __( '2', 'wpessential' ),
					  '3' => __( '3', 'wpessential' ),
					  '4' => __( '4', 'wpessential' ),
				  ]
			  )
			  ->toArray(),
		MultiSelect::make( __( 'Post Status', 'wpessential' ) )
				   ->desc( __( 'Retrieves posts by post status', 'wpessential' ) )
				   ->options(
					   apply_filters(
						   'wpe/shortcode/commen/query/post_status',
						   [
							   'publish'    => __( 'Publish', 'wpessential' ),
							   'pending'    => __( 'Pending', 'wpessential' ),
							   'draft'      => __( 'Draft', 'wpessential' ),
							   'auto-draft' => __( 'Auto Draft', 'wpessential' ),
							   'future'     => __( 'Future', 'wpessential' ),
							   'private'    => __( 'Private', 'wpessential' ),
							   'inherit'    => __( 'Inherit', 'wpessential' ),
							   'trash'      => __( 'Trash', 'wpessential' ),
							   'any'        => __( 'Any', 'wpessential' ),
						   ]
					   )
				   )
				   ->default( [ 'publish' ] )
				   ->toArray(),
		Number::make( __( 'Comment Count ', 'wpessential' ) )
			  ->desc( __( 'The amount of comments your CPT has to have ( Search operator will do a ‘=’ operation )', 'wpessential' ) )
			  ->toArray(),
		Select::make( __( 'Comment Compare', 'wpessential' ) )
			  ->options(
				  [
					  '='  => __( 'Equal', 'wpessential' ),
					  '!=' => __( 'Not Equal', 'wpessential' ),
					  '>'  => __( 'Greater Than', 'wpessential' ),
					  '>=' => __( 'Greater Than Equal', 'wpessential' ),
					  '<'  => __( 'Less Than', 'wpessential' ),
					  '<=' => __( 'Less Than Equal', 'wpessential' ),
				  ]
			  )
			  ->toArray(),
		MultiSelect::make( __( 'Post Not In', 'wpessential' ) )
				   ->desc( __( 'Specify post NOT to retrieve. Use post ids', 'wpessential' ) )
				   ->options(
					   wpe_get_post(
						   [
							   'post_type'      => 'post',
							   'posts_per_page' => - 1
						   ],
						   true
					   )
				   )
				   ->toArray(),
		Number::make( __( 'Post Offset', 'wpessential' ) )
			  ->desc( __( 'Number of post to displace or pass over. Warning: Setting the offset parameter overrides/ignores the paged parameter and breaks pagination', 'wpessential' ) )
			  ->toArray(),
		Select::make( __( 'Post Orderby', 'wpessential' ) )
			  ->desc( __( 'Sort retrieved posts by parameter', 'wpessential' ) )
			  ->default( 'none' )
			  ->options(
				  apply_filters(
					  'wpe/shortcode/commen/query/orderby',
					  [
						  'none'          => __( 'No Order', 'wpessential' ),
						  'ID'            => __( 'ID', 'wpessential' ),
						  'author'        => __( 'Author', 'wpessential' ),
						  'title'         => __( 'Title', 'wpessential' ),
						  'name'          => __( 'Name', 'wpessential' ),
						  'date'          => __( 'Date', 'wpessential' ),
						  'modified'      => __( 'Modified Date', 'wpessential' ),
						  'parent'        => __( 'Parent ID', 'wpessential' ),
						  'rand'          => __( 'Random', 'wpessential' ),
						  'comment_count' => __( 'Comment Count', 'wpessential' ),
					  ]
				  )
			  )
			  ->toArray(),
		Select::make( __( 'Post Order', 'wpessential' ) )
			  ->desc( __( 'Designates the ascending or descending order of post', 'wpessential' ) )
			  ->default( 'DESC' )
			  ->options(
				  apply_filters(
					  'wpe/shortcode/commen/query/order',
					  [
						  'DESC' => __( 'Descending ', 'wpessential' ),
						  'ASC'  => __( 'Ascending ', 'wpessential' ),
					  ]
				  )
			  )
			  ->toArray(),
		Switcher::make( __( 'Ignore Sticky Post', 'wpessential' ) )
				->returnValue( true )
				->toArray(),
		Switcher::make( __( 'Cache Results', 'wpessential' ) )
				->returnValue( true )
				->default( true )
				->toArray(),
		Switcher::make( __( 'Update Term Cache', 'wpessential' ) )
				->returnValue( true )
				->toArray(),
		Switcher::make( __( 'Update Meta Cache', 'wpessential' ) )
				->returnValue( true )
				->toArray()
	]
);

