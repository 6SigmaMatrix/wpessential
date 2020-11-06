<?php
/**
 * Get an array of posts.
 *
 * @return array
 * @since  1.0.0
 */
if ( ! function_exists( 'wpe_formidable_table_query' ) ) {
	function wpe_formidable_table_query ()
	{
		global $wpdb;
		$results = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}frm_forms WHERE %d", [ 1 ] ) );
		$data    = [];
		foreach ( $results as $result ) {
			$data[ $result->id ] = $result->name;
		}

		return apply_filters( 'wpe_formidable_table_query', $data );
	}
}

/**
 * Get an array of posts.
 *
 * @return array
 * @since  1.0.0.00002
 */
if ( ! function_exists( 'wpe_caldera_table_query' ) ) {
	function wpe_caldera_table_query ()
	{
		global $wpdb;
		$results = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}cf_forms WHERE %d", [ 1 ] ) );
		$data    = [];
		foreach ( $results as $result ) {
			$data[ $result->form_id ] = unserialize( $result->config )[ 'name' ];
		}

		return apply_filters( 'wpe_caldera_table_query', $data );
	}
}


/**
 * Get an array of posts.
 *
 * @return array
 * @since  1.0.0.00002
 */
if ( ! function_exists( 'wpe_ninja_table_query' ) ) {
	function wpe_ninja_table_query ()
	{
		global $wpdb;
		$results = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM {$wpdb->prefix}nf3_forms WHERE %d", [ 1 ] ) );
		$data    = [];
		foreach ( $results as $result ) {
			$data[ $result->id ] = $result->title;
		}

		return apply_filters( 'wpe_ninja_table_query', $data );
	}
}
