<?php do_action( 'wpe/post/loop/readmore/before' ); ?>
<div class="lower-box clearfix">
    <div class="comment-box wpe-pull-left">
        <p>
            <i class="far fa-comment-alt"></i>
			<?php echo get_comments_number_text( '0 Comments', '01 Comment' ); ?>
        </p>
    </div>
    <div class="link-box wpe-pull-right">
        <a class="wpe-a" href="<?php the_permalink(); ?>">
            <span><?php _e( 'Read More', 'wpessential' ); ?></span>
            <i class="flaticon-login"></i>
        </a>
    </div>
</div>
<?php do_action( 'wpe/post/loop/readmore/after' ); ?>
