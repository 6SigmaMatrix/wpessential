<?php
$post = new WP_Query( [
	'posts_per_page' => $posts_per_page,
	'post_type'      => 'post',
	'post_status'    => 'publish'
] );

while ( $post->have_posts() ):
	$post->the_post();
	?>
    <div <?php post_class( 'wpe-blog-article wpe-style4' ); ?>>
        <div class="wpe-row">
            <div class="wpe-lg-5">
                <div class="wpe-blog-img">
					<?php
					if ( has_post_thumbnail() ):
						?>
                        <figure class="wpe-figure">
							<?php the_post_thumbnail( 'full', [ 'class' => 'wpe-img' ] ); ?>
                        </figure>
					<?php
					endif;
					?>
                </div>
            </div>
            <div class="wpe-lg-7">
                <div class="wpe-blog-item">
                    <div class="wpe-blog-cat">
						<?php wpe_the_blog_cat( 'wpe-a' ); ?>
                    </div>
                    <h3>
                        <a class="wpe-a" href="<?php the_permalink(); ?>" <?php the_title_attribute( 'title="', '"' ); ?>>
							<?php the_title(); ?>
                        </a>
                    </h3>
                    <div class="wpe-blog-meta">
                        <div class="wpe-blog-date">
                            <span><?php echo esc_html( get_the_date() ); ?></span>
                        </div>
                        <span class="wpe-blog-comment"><?php comments_number( esc_html( 'No Comments' ), esc_html( '01 Comment' ) ); ?></span>
                    </div>
                    <div class="wpe-blog-stat">
                        <span class="wpe-blog-author"><?php _e( 'By', 'wpessential' ); ?>: <?php wpe_the_author_link( 'wpe-a' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
wp_reset_postdata();



