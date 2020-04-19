<?php do_action( 'wpe/post/loop/title/before' ); ?>
<h3>
    <a class="wpe-a" href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
    </a>
</h3>
<?php do_action( 'wpe/post/loop/title/after' ); ?>
