<div class="wpe-logo">
    <h1>
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			$blog_info = get_bloginfo( 'name' );
			if ( ! empty( $blog_info ) ) {
				?>
                <a class="wpe-a" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
					bloginfo( 'name' );
					?>
                </a>
				<?php
			}
		}
		?>
    </h1>
	<?php
	if ( ! has_custom_logo() ) {
		$description = get_bloginfo( 'description', 'display' );
		if ( $description ) :
			?>
            <p class="site-description">
				<?php echo wp_kses( $description, wp_kses_allowed_html( true ) ); ?>
            </p>
		<?php
		endif;
	}
	?>
</div>
