<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<<?php echo apply_filters( 'wpe/comment/title/tag', 'h2' ); ?> class="wpe-comments-title <?php echo apply_filters( 'wpe/comment/title/classes', 'comments-title' ); ?>">
<?php
$comments_number = get_comments_number();
if ( '1' === $comments_number ) {
	/* translators: %s: Post title. */
	printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'twentyseventeen' ), get_the_title() );
} else {
	printf(
	/* translators: 1: Number of comments, 2: Post title. */
		_nx(
			'%1$s Reply to &ldquo;%2$s&rdquo;',
			'%1$s Replies to &ldquo;%2$s&rdquo;',
			$comments_number,
			'comments title',
			'twentyseventeen'
		),
		number_format_i18n( $comments_number ),
		get_the_title()
	);
}
?>
</<?php echo apply_filters( 'wpe/comment/title/tag', 'h2' ); ?>>
