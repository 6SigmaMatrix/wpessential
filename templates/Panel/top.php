<?php
wpe_exit();
/**
 * top
 * An file to add the WPEssential plugin admin page.
 *
 * @see     https://wpessential.info/wpessential/
 * @package WPEssentil/elementor
 * @final
 * @since   1.0.0
 * @version 1.0.0
 */
?>
<nav class="wpe_nav_menu">
	<ul>
		<li class="wpe_li_ul_nav_header_view active">
			<a href="javascript:void(0)" data-id="wpe_about">
				<span class="dashicons dashicons-menu-alt3"></span>
				<?php _e( 'Wlecome', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="javascript:void(0)" data-id="wpe_update">
				<span class="dashicons dashicons-backup"></span>
				<?php _e( 'Update', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="javascript:void(0)" data-id="wpe_register">
				<span class="dashicons dashicons-admin-network"></span>
				<?php _e( 'Register', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="javascript:void(0)" data-id="wpe_addonce">
				<span class="dashicons dashicons-admin-plugins"></span>
				<?php _e( 'Add-once', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="javascript:void(0)" data-id="wpe_settings">
				<span class="dashicons dashicons-admin-settings"></span>
				<?php _e( 'Settings', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="javascript:void(0)" data-id="wpd_news">
				<span class="dashicons dashicons-code-standards"></span>
				<?php _e( 'News', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_hsseader_view">
			<a href="<?php echo esc_url( 'https://wpessential.info/wpessential/?data=faqs' ); ?>" target="_blank">
				<span class="dashicons dashicons-book"></span>
				<?php _e( 'FAQ\'s', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view">
			<a href="<?php echo esc_url( 'https://wpessential.info/wpessential/' ); ?>" target="_blank">
				<span class="dashicons dashicons-editor-help"></span>
				<?php _e( 'Support', 'wpessential' ); ?>
			</a>
		</li>
		<li class="wpe_li_ul_nav_header_view alert">
			<a href="javascript:void(0)">
				<span class="dashicons dashicons-warning"></span>
				<span class="wpe_li_ul_noti_count">8</span>
			</a>
		</li>
	</ul>
</nav>
