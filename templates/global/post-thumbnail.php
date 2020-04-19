<?php
if ( has_post_thumbnail() ):
	do_action( 'wpe/post/loop/post_thumbnail/before' );
	?>
    <figure class="image-box">
        <a href="<?php the_permalink(); ?>" class="wpe-a link">
			<?php the_post_thumbnail( 'wpe/570/385' ); ?>
        </a>
		<?php if ( has_category() ): ?>
            <div class="category">
                <p>
                    <i class="far fa-folder"></i>
					<?php the_category( ',' ); ?>
                </p>
            </div>
		<?php endif; ?>
    </figure>
	<?php
	do_action( 'wpe/post/loop/post_thumbnail/after' );
endif;
