<?php do_action( 'wpe/post/loop/meta/before' ); ?>
<ul class="wpe-ul wpe-p-0 wpe-m-0 post-info clearfix">
    <li class="wpe-li wpe-p-0 wpe-m-0">
        <i class="far fa-calendar"></i>
		<?php echo esc_html( get_the_date( '', get_the_ID() ) ); ?>
    </li>
    <li class="wpe-li wpe-p-0 wpe-m-0">
        <i class="far fa-user"></i>
		<?php _e( 'By ', 'wpessential' ); ?>
		<?php the_author_posts_link(); ?>
    </li>
</ul>
<?php do_action( 'wpe/post/loop/meta/after' ); ?>
