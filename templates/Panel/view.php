<?php
wpe_exit();
/**
 * view
 * An file to add the WPEssential plugin admin page.
 *
 * @see     https://wpessential.info/wpessential/
 * @package WPEssentil/elementor
 * @final
 * @since   1.0.0
 * @version 1.0.0
 */

$view_files = [
	'@about',
	'@update',
	'@register',
	'@extension',
	'@news',
];

?>
<style>
	.toplevel_page_wpessential {
		background: #fff;
	}

	.toplevel_page_wpessential div#wpcontent {
		padding-left: 0px;
	}

	.wpe_view_main {
		width: 100%;
		float: left;
	}

	.wpe_header_view {
		float: left;
		width: 100%;
		min-height: 60px;
		box-shadow: 0px 8px 20px 0px rgba(158, 158, 158, 0.4);
		/*padding-left: 10px;*/
	}

	.wpe_header_view .wpe_nav_menu {
		float: left;
		width: 100%;
	}

	.wpe_header_view .wpe_nav_menu > ul {
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.wpe_header_view .wpe_nav_menu > ul > li {
		float: left;
		line-height: 60px;
		font-size: 15px;
		font-weight: 600;
		margin-bottom: 0px;
		overflow: hidden;
	}

	.wpe_header_view .wpe_nav_menu > ul > li.active,
	.wpe_header_view .wpe_nav_menu > ul > li:hover,
	.wpe_header_view .wpe_nav_menu > ul > li.alert {
		background-color: #0073aa;
		color: #fff;
	}

	.wpe_header_view .wpe_nav_menu > ul > li.active > a,
	.wpe_header_view .wpe_nav_menu > ul > li:hover > a,
	.wpe_header_view .wpe_nav_menu > ul > li.alert > a {
		color: #fff;
	}

	.wpe_header_view .wpe_nav_menu > ul > li > a {
		text-decoration: none;
		width: 100%;
		display: block;
		padding: 10px 20px;
	}

	.wpe_header_view .wpe_nav_menu > ul > li > a > span {
		line-height: 60px;
		margin-right: 6px
	}

	.wpe_header_view .wpe_nav_menu > ul > li.wpe_li_ul_nav_header_view.alert {
		float: right !important;
		position: relative;
	}

	.wpe_header_view .wpe_nav_menu > ul > li span.wpe_li_ul_noti_count {
		position: absolute;
		width: 25px;
		height: 25px;
		background-color: #eeeeee;
		line-height: 25px !important;
		color: black;
		text-align: center;
		top: 20px;
		left: 2px;
		border-radius: 100%;
		font-size: 14px;
	}

	.wpe_error_alert {
		width: 20%;
		right: 0;
		min-height: 100%;
		position: fixed;
		z-index: 999;
		background-color: #fff;
		box-shadow: 0px 8px 20px 0px rgba(158, 158, 158, 0.4);
		padding: 10px 20px;
	}

	.wpe_error_alert .wpe_head_error_alert {
		min-height: 60px;
		line-height: 60px;
		background-color: #eeeeee;
		margin-bottom: 30px;
	}

	.wpe_error_alert .wpe_head_error_alert h2 {
		margin: 0;
		padding: 0 20px;
	}

	.wpe_error_alert .wpe_close_error_alert {
		position: absolute;
		left: -41px;
		top: 0;
		text-align: center;
		width: 40px;
		height: 40px;
		background-color: #0073aa;
		line-height: 40px;
		color: #fff;
		cursor: pointer;
	}

	.wpe_display {
		visibility: visible !important;
		opacity: 1 !important;
	}

	.wpe_display_hide {
		visibility: hidden !important;
		opacity: 0 !important;
	}

	.wpe_body_view {
		padding: 96px 55px 66px;
	}

	.wpe_tab h2,
	.wpe_tab h3,
	.wpe_tab p {
		font-family: Roboto;
	}

	.wpe_tab h2 {
		font-size: 30px;
		font-weight: 600;
	}

	.wpe_tab h3.wpe_subtitle {
		font-size: 20px;
		font-weight: 500;
	}

	.wpe_tab p.wpe_para {
		font-size: 15px;
		line-height: 20px;
		font-weight: 400;
	}

	.wpe_view_main .wpe_inner {
		border: 1px solid #ccd0d4;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
		margin-top: 50px;
	}

	.wpe_view_main .wpe_inner ul {
		padding: 0;
		margin: 0;
		min-width: 20%;
		float: left;
	}

	.wpe_view_main .wpe_inner ul li {
		margin: 0;
		font-size: 13px;
		font-weight: 600;
		border-bottom: 1px solid #0073aa;
	}

	.wpe_view_main .wpe_inner ul li:last-child {
		border-bottom: unset;
	}

	.wpe_view_main .wpe_inner ul li a {
		background-color: #eeeeee;
		display: block;
		padding: 15px 20px;
		text-decoration: none;
	}

	.wpe_view_main .wpe_inner ul li a > span {
		margin-right: 6px;
	}

	.wpe_view_main .wpe_inner .wpe_tab_data {
		min-width: 79%;
		display: inline-block;
	}


	.wpe_inner_continer .wpe_inner_row,
	.wpe_inner_continer {
		float: left;
		width: 100%;
	}

	.wpe_inner_continer .wpe_inner_row .wpe_inner_column_4 {
		float: left;
		padding: 0 15px;
		width: calc(100% / 4);
	}

	.wpe_ext_img {
		float: left;
		width: 100%;
	}

	.wpe_ext {
		float: left;
		width: 100%;
		border: 1px solid;
		padding: 10px;
	}

	.wpe_ext_img img {
		min-width: 100%;
		width: 100%;
		min-height: 100px;
		float: left;
		height: 200px;
	}

	.wpe_ext h3 {
		float: left;
		width: 100%;
		font-size: 15px;
		font-family: Roboto;
	}

	.wpe_ext p {
		float: left;
		width: 100%;
	}

	.wpe_ext_action {
		float: left;
		width: 100%;
		padding: 10px 0px;
	}

	.wpe_ext_action button {
		float: left;
	}

	.wpe_ext_action span {
		float: right;
	}

	.wpe_block {
		display: inline-block;
		width: 100%;
		padding-top: 50px;
		padding-bottom: 50px;
	}

	.wpe_view_main .wpe_inner ul li a > span.wpe_alert {
		float: right;
		text-align: center;
		width: 25px;
		height: auto;
		padding: 5px 5px;
		border-radius: 5px;
		margin-top: -4px;
		margin-right: 0;
	}

	.wpe_alert {
		background-color: #e21708;
		color: #fff;
	}
</style>
<div class="wpe_view_main">
	<?php require_once apply_filters( 'WPE_directory', apply_filters( 'WPE_dir_extract', "welcome@view@alert.php" ) ); ?>
	<div class="wpe_header_view">
		<?php require_once apply_filters( 'WPE_directory', apply_filters( 'WPE_dir_extract', "welcome@view@top.php" ) ); ?>
	</div>
	<div class="wpe_body_view">
		<?php $x = 0; ?>
		<?php foreach ( $view_files as $files ) : ?>
			<div class="<?php echo esc_attr( str_replace( '@', 'wpe_', $files ) ); ?> wpe_tab <?php echo esc_attr( 0 === $x ? 'wpe_display' : 'wpe_display_hide' ); ?>" id="<?php echo esc_attr( str_replace( '@', 'wpe_', $files ) ); ?>">
				<?php require_once apply_filters( 'WPE_directory', apply_filters( 'WPE_dir_extract', "welcome@view@{$files}.php" ) ); ?>
			</div>
			<?php $x ++; ?>
		<?php endforeach; ?>
	</div>
	<div class="wpe_footer_view">
		<?php require_once apply_filters( 'WPE_directory', apply_filters( 'WPE_dir_extract', "welcome@view@bottom.php" ) ); ?>
	</div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $(".wpe_li_ul_nav_header_view.alert").on("click", function () {
            $(".wpe_error_alert").removeClass("wpe_display_hide");
            $(".wpe_error_alert").addClass("wpe_display");
        });
        $(".wpe_close_error_alert").on("click", function () {
            $(".wpe_error_alert").removeClass("wpe_display");
            $(".wpe_error_alert").addClass("wpe_display_hide");
        });
        $(".wpe_li_ul_nav_header_view a").live("click", function () {
            var $tab_id = "#" + $(this).attr("data-id");
            console.log($tab_id);
            $(".wpe_body_view").find($tab_id).removeClass("wpe_display_hide").addClass("wpe_display");
        });
    });
</script>
