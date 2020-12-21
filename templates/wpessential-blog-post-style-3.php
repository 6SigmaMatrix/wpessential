<?php
$post = new WP_Query( [
	'posts_per_page' => $posts_per_page,
	'post_type'      => 'post',
	'post_status'    => 'publish'
] );

while ( $post->have_posts() ):
	$post->the_post();
	?>
    <div <?php post_class( 'wpe-blog-article wpe-style3' ); ?>>
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
            <div class="wpe-blog-cat">
				<?php wpe_the_blog_cat( 'wpe-a' ); ?>
            </div>
            <div class="wpe-blog-date">
                <span><?php echo esc_html( get_the_date() ); ?></span>
            </div>
        </div>
        <div class="wpe-blog-meta">
            <span class="wpe-blog-author"><?php _e( 'Posted in', 'wpessential' ); ?> <?php wpe_the_author_link( 'wpe-a' ); ?></span>
            <span class="wpe-blog-comment">
                <i>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 30.333 30.333" xml:space="preserve">
                    <g>
                        <path style="fill:#010002;" d="M0,26.75V11.908c0-4.59,3.735-8.325,8.325-8.325h13.681c4.591,0,8.327,3.735,8.327,8.325v2.56
                            c0,4.59-3.735,8.325-8.325,8.325H8.518L0,26.75z M8.325,5.439c-3.567,0-6.469,2.902-6.469,6.469v11.933l6.253-2.905h13.899
                            c3.567,0,6.469-2.902,6.469-6.469v-2.56c0-3.567-2.903-6.469-6.471-6.469H8.325V5.439z M8.937,11.767
                            c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S7.962,11.767,8.937,11.767z M21.395,11.767
                            c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S20.42,11.767,21.395,11.767z M15.165,11.767
                            c0.975,0,1.765,0.79,1.765,1.765s-0.79,1.765-1.765,1.765s-1.765-0.79-1.765-1.765S14.19,11.767,15.165,11.767z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                </i>
                <?php comments_number( esc_html( 'No Comments' ), esc_html( '01 Comment' ) ); ?>
            </span>
        </div>
        <div class="wpe-blog-content">
            <h3>
                <a class="wpe-a" href="<?php the_permalink(); ?>" <?php the_title_attribute( 'title="', '"' ); ?>>
					<?php the_title(); ?>
                </a>
            </h3>
        </div>
    </div>
<?php
endwhile;
wp_reset_postdata();



