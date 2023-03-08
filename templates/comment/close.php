<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	<<?php echo apply_filters( 'wpe/comment/close/tag', 'p' ); ?> class="wpe-no-comments <?php echo apply_filters( 'wpe/comment/close/classes', 'no-comments' ); ?>">
	<?php echo apply_filters( 'wpe/comment/close/title', 'Comments are closed.' ); ?>
	</<?php echo apply_filters( 'wpe/comment/close/tag', 'p' ); ?>>
<?php
endif;
