<?php do_action( 'wpe_before_comment_list' ); ?>
    <<?php echo apply_filters( 'wpe/comment/list/tag', 'ol' ); ?> class="wpe-comment-list <?php echo apply_filters( 'wpe/comment/list/classes', 'comment-list' ); ?>">
<?php
wp_list_comments(
	apply_filters(
		'wpe/comment/list/args',
		[
			'avatar_size' => apply_filters( 'wpe/comment/avatar_size', 100 ),
			'style'       => apply_filters( 'wpe/comment/style', 'ol' ),
			'short_ping'  => apply_filters( 'wpe/comment/short_ping', true ),
			'reply_text'  => apply_filters( 'wpe/comment/reply_text', __( 'Reply', 'wpessential' ) ),
		]
	)
);
?>
    </<?php echo apply_filters( 'wpe/comment/list/tag', 'ol' ); ?>>
<?php
do_action( 'wpe_after_comment_list' );
