<div class="<?php esc_attr( join( ' ', get_post_class( apply_filters( 'wpe/before/loop/classes', 'wpe-before-loop' ), get_the_ID() ) ) ); ?>" id="post_<?php echo esc_attr( get_the_ID() ) ?>">
<?php
do_action( 'wpe_before_post_loop' );
