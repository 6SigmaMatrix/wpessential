<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$classes = apply_filters( 'wpe/before/loop/classes', 'wpe-before-loop' );
?>
<div class="<?php echo esc_attr( $classes ); ?>">
<?php
do_action( 'wpe_before_post_loop' );
