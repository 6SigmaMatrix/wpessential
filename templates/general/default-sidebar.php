<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside class="<?php echo apply_filters( 'wpe/sidebar/classes', 'wpe-default-sidebar sidebar-1' ); ?>">
		<?php dynamic_sidebar( 'sidebar-1' ) ?>
    </aside>
<?php
endif;
