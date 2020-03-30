<?php
wpe_exit();
/**
 * update
 * An file to add the WPEssential plugin admin page.
 *
 * @see      https://wpessential.info/wpessential/
 * @package  WPEssentil/elementor
 * @final
 * @since    1.0.0
 * @verslion 1.0.0
 */
?>
<h2 class="wpe_title"><?php _e( 'Plugin Updates', 'wpessential' ); ?></h2>
<p class="wpe_para">
	<?php _e( 'WPEssential is a free Gutenberg and GDPR-compatible WordPress custom fields plugin and framework that makes quick work of customizing a website with—you guessed it—meta boxes and custom fields in WordPress. Follow the instruction below to get started!', 'wpessential' ); ?>
</p>
<div class="wpe_inner">
	<ul class="wpe_inner_tab">
		<li data-id="wpe_free">
			<a href="#">
				<span class="dashicons dashicons-menu-alt3"></span>
				<?php _e( 'FREE', 'wpessential' ); ?>
				<span class="wpe_alert">8</span>
			</a>
		</li>
		<li data-id="wpe_pro">
			<a href="#">
				<span class="dashicons dashicons-menu-alt3"></span>
				<?php _e( 'PRO', 'wpessential' ); ?>
				<span class="wpe_alert">8</span>
			</a>
		</li>
		<li data-id="wpe_pro+">
			<a href="#">
				<span class="dashicons dashicons-menu-alt3"></span>
				<?php _e( 'PRO+', 'wpessential' ); ?>
				<span class="wpe_alert">8</span>
			</a>
		</li>
	</ul>
	<div class="wpe_tab_data" id="wpe_free">
		<?php require_once apply_filters( 'WPE_directory', apply_filters( 'WPE_dir_extract', "welcome@view@extension.php" ) ); ?>
	</div>
</div>
