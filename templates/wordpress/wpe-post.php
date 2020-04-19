<?php
$p      = (array) $p;
$status = (array) $status;
if ( !$count ) {
	self::$args[ 'post__in' ] = $p;
}
if ( $status ) {
	self::$args[ 'post_status' ] = $status;
}
if ( $count ) {
	self::$args[ 'posts_per_page' ] = $count;
}

$post = new WP_Query( self::$args );

if ( $post->have_posts() ):
	?>
    <div class="wpe-row">
		<?php
		while ( $post->have_posts() ):
			$post->the_post();
			?>
            <div class="<?php echo apply_filters( 'wpe/wordpress/shortcodes/wpe_post/classes', 'wpe-sm-4' ); ?>">
                <div class="wpe-blog-block-one">
                    <div class="inner-box">
						<?php do_action( 'wpe/post/loop/post_thumbnail' ); ?>
                        <div class="lower-content">
                            <div class="upper-box">
								<?php do_action( 'wpe/post/loop/title' ); ?>
								<?php do_action( 'wpe/post/loop/meta' ); ?>
                            </div>
							<?php do_action( 'wpe/post/loop/readmore' ); ?>
                        </div>
                    </div>
                </div>
            </div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
    </div>
<?php
endif;


