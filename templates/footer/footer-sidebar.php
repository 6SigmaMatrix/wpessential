<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( is_active_sidebar( 'footer' ) ) :
	?>
	<div class="<?php echo apply_filters( 'wpe/sidebar/classes', 'wpe-footer-sidebar footer' ); ?>">
		<?php dynamic_sidebar( 'footer' ) ?>
	</div>
<?php
endif;
