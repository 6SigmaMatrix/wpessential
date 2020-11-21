<?php
$get_query_var = get_query_var();
$total         = isset( $total ) ? $total : $get_query_var( 'max_num_pages' );
$current       = isset( $current ) ? $current : $get_query_var( 'paged' );
$base          = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ) );
$format        = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	return;
}
?>
<nav class="wpe-padination">
	<?php
	echo paginate_links(
		apply_filters(
			'wpe/pagination/args',
			[
				'base'      => $base,
				'format'    => $format,
				'show_all'  => false,
				'add_args'  => false,
				'current'   => max( 1, $current ),
				'total'     => $total,
				'mid_size'  => 4,
				'end_size'  => 3,
				'next_text' => __( 'Next', 'wpessential' ),
				'prev_text' => __( 'Previous', 'wpessential' ),
				'type'      => 'list',
			]
		)
	);
	?>
</nav>
