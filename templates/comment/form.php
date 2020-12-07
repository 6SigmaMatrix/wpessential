<?php
$comment_author    = 'Name';
$comment_email     = 'E-Mail';
$comment_body      = 'Comment';
$comment_url       = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';

$comments_args = [
	'fields'               => [
		'author'  => '<p class="wpe-comment-form comment-form-author"><input id="author" name="author" placeholder="' . $comment_author . '"></p>',
		'email'   => '<p class="wpe-comment-form comment-form-email"><input id="email" name="email" placeholder="' . $comment_email . '"></p>',
		'cookies' => '<p class="wpe-comment-form cookies"><input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
	],
	'action'               => site_url( '/wp-comments-post.php' ),
	'id_form'              => 'commentform',
	'class_container'      => 'comment-respond',
	'class_submit'         => 'submit',
	'name_submit'          => 'submit',
	'title_reply_before'   => '<h3 id="reply-title" class="wpe-comment-form comment-reply-title">',
	'title_reply_after'    => '</h3>',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="wpe-comment-form %3$s">%4$s</button>',
	'submit_field'         => '<p class="wpe-comment-form form-submit">%1$s %2$s</p>',
	'label_submit'         => __( 'Send', 'wpessential' ),
	'title_reply'          => __( 'Leave a Message', 'wpessential' ),
	'title_reply_to'       => __( 'Reply', 'wpessential' ),
	'cancel_reply_link'    => __( 'Cancel Reply', 'wpessential' ),
	'comment_field'        => '<p class="wpe-comment-form comment-form-comment"><textarea id="comment" name="comment" placeholder="' . $comment_body . '"></textarea></p>',
	'comment_notes_before' => __( 'Registration isn\'t required.', 'wpessential' ),
	'comment_notes_after'  => '',
	'id_submit'            => 'submit',
	'class_form'           => 'wpe-comment-form',
	'format'               => 'xhtml',
];
$comments_args = apply_filters( 'wpe/comment/form/args', $comments_args );
comment_form( $comments_args );
