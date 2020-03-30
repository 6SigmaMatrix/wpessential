<?php
wpe_exit();
/**
 * about
 * An file to add the WPEssential plugin admin page.
 *
 * @see      https://wpessential.info/wpessential/
 * @package  WPEssentil/elementor
 * @final
 * @since    1.0.0
 * @verslion 1.0.0
 */
$time = date( 'H' );
$hi   = __( 'Good Evening ', 'wpessential' );
if ( $time < '12' ) {
	$hi = __( 'Good Morning ', 'wpessential' );
} elseif ( $time >= '12' && $time < '17' ) {
	$hi = __( 'Good Afternoon ', 'wpessential' );
}
?>
<h2 class="wpe_title"><?php echo sprintf( __( '%s %s', 'wpessential' ), $hi, '<span>' . ucwords( wp_get_current_user()->display_name ) . '</span>' ); ?></h2>
<h3 class="wpe_subtitle"><?php echo sprintf( __( 'You are running WPEssential Version %s', 'wpessential' ), '<span>' . WPE_VR . '</span>' ); ?></h3>
<p class="wpe_para">
	<?php _e( 'WPEssential is a free Gutenberg and GDPR-compatible WordPress custom fields plugin and framework that makes quick work of customizing a website with—you guessed it—meta boxes and custom fields in WordPress. Follow the instruction below to get started!', 'wpessential' ); ?>
</p>
