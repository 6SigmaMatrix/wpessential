<?php
wpe_exit();
/**
 * alert
 * An file to add the WPEssential plugin admin page.
 *
 * @see     https://wpessential.info/wpessential/
 * @package WPEssentil/elementor
 * @final
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<div class="wpe_error_alert wpe_display_hide">
	<div class="wpe_close_error_alert">
		<span>X</span>
	</div>
	<div class="wpe_head_error_alert">
		<h2><?php _e( 'Please Fix The Errors', 'wpessential' ); ?></h2>
	</div>
	<div class="wpe_inner_error_alert">
		<ul class="wpe_ul_error_alert">
			<li class="wpe_li_ul_error_alert">
				<span class="dashicons dashicons-menu-alt3"></span>
				<a href="#"><?php _e( 'Plugin is not Registered', 'wpessential' ); ?></a>
			</li>
			<li class="wpe_li_ul_error_alert">
				<span class="dashicons dashicons-menu-alt3"></span>
				<a href="#"><?php _e( 'Plugin is not Registered', 'wpessential' ); ?></a>
			</li>
		</ul>
	</div>
</div>
