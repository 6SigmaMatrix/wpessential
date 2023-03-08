<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="<?php echo esc_attr( join( ' ', get_post_class( apply_filters( 'wpe/before/loop/post/classes', 'wpe-loop-post-before' ), get_the_ID() ) ) ); ?>" id="post_<?php echo esc_attr( get_the_ID() ); ?>">
<?php
do_action( 'wpe_loop_post_before' );
