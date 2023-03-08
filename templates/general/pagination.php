<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$default = [
	'base'    => esc_url_raw( str_replace( 999999999, '%#%', get_pagenum_link( 999999999, false ) ) ),
	'current' => max( 1, get_query_var( 'paged' ) ),
];
$default = wp_parse_args( $args, $default );
$args    = apply_filters(
	'wpe/pagination/args',
	wp_parse_args(
		[
			'show_all'  => false,
			'add_args'  => false,
			'mid_size'  => 4,
			'end_size'  => 3,
			'next_text' => __( 'Next', 'wpessential' ),
			'prev_text' => __( 'Previous', 'wpessential' ),
			'type'      => 'list',
		],
		$default
	)
);
?>
<nav class="wpe-padination">
	<?php
	echo paginate_links( $args );
	?>
</nav>
