<?php

namespace WPEssential\Plugins\Requesting;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Loader;
use WPEssential\Plugins\Panel\Fields\Select;

final class LiveSearch extends \WPEssential\Plugins\Admin\HealthInfo
{
	public static function constructor ()
	{
		$prefix = WPE_AJAX_PREFIX;
		add_action( "wp_ajax_{$prefix}_live_search", [ __CLASS__, 'search' ] );
	}

	public static function search ()
	{
		wpe_ajax_authorized();

		Loader::editor( 'panel' );
		$search_base  = [
			'tags',
			'categories',
			'taxonomies',
			'users',
			'terms',
		];
		$data         = wpe_array_get( $_POST, 'type' );
		$query        = wpe_array_get( $_POST, 'query' );
		$args         = wpe_array_get( $_POST, 'args' );
		$search_query = in_array( $data, $search_base, true ) ? 'search' : 's';
		$args         = wp_parse_args( $args, [ $search_query => $query ] );
		$query_data   = Select::make()->args( $args )->data( $data )->toArray();

		wp_send_json_success( wpe_array_get( $query_data, 'options' ) );
	}
}
