<?php
add_action( 'wpe_before_loop', 'wpe_before_loop_template' );
add_action( 'wpe_after_loop', 'wpe_after_loop_template' );
add_action( 'wpe_pagination', 'wpe_pagination_template' );
add_action( 'wpe_default_sidebar', 'wpe_default_sidebar_template' );
add_action( 'wpe_footer', 'wpe_footer_sidebar_template', 10 );
add_action( 'wpe_footer', 'footer_menu_template', 20 );
add_action( 'wpe_footer', 'footer_copyright_template', 30 );
add_action( 'wpe_header', 'header_logo_template', 10 );
add_action( 'wpe_header', 'header_menu_template', 20 );
add_action( 'wpe_loop', 'blog_loop_template' );
add_action( 'wpe_post_format', 'post_format_template', 10, 1 );

function wpe_before_loop_template ()
{
	require_once wpe_template_load( 'templates/general/before-loop.php' );
}

function wpe_after_loop_template ()
{
	require_once wpe_template_load( 'templates/general/after-loop.php' );
}

function wpe_pagination_template ()
{
	require_once wpe_template_load( 'templates/general/pagination.php' );
}

function wpe_default_sidebar_template ()
{
	require_once wpe_template_load( 'templates/general/default-sidebar.php' );
}

function wpe_footer_sidebar_template ()
{
	require_once wpe_template_load( 'templates/footer/footer-sidebar.php' );
}

function footer_template ()
{
	require_once wpe_template_load( 'templates/footer/footer.php' );
}

function footer_menu_template ()
{
	require_once wpe_template_load( 'templates/footer/branding/menu.php' );
}

function footer_copyright_template ()
{
	require_once wpe_template_load( 'templates/footer/branding/copyright.php' );
}

function header_logo_template ()
{
	require_once wpe_template_load( 'templates/header/branding/logo.php' );
}

function header_menu_template ()
{
	require_once wpe_template_load( 'templates/header/branding/menu.php' );
}

function header_template ()
{
	require_once wpe_template_load( 'templates/header/header.php' );
}

function blog_loop_template ()
{
	include wpe_template_load( 'templates/blog/loop.php' );
}

function post_format_aside_template ()
{
	include wpe_template_load( 'templates/post-formats/aside.php' );
}

function post_format_audio_template ()
{
	include wpe_template_load( 'templates/post-formats/audio.php' );
}

function post_format_chat_template ()
{
	include wpe_template_load( 'templates/post-formats/chat.php' );
}

function post_format_gallery_template ()
{
	include wpe_template_load( 'templates/post-formats/gallery.php' );
}

function post_format_image_template ()
{
	include wpe_template_load( 'templates/post-formats/image.php' );
}

function post_format_link_template ()
{
	include wpe_template_load( 'templates/post-formats/link.php' );
}

function post_format_quote_template ()
{
	include wpe_template_load( 'templates/post-formats/quote.php' );
}

function post_format_status_template ()
{
	include wpe_template_load( 'templates/post-formats/status.php' );
}

function post_format_video_template ()
{
	include wpe_template_load( 'templates/post-formats/video.php' );
}

function post_format_template ( $format )
{
	if ( ! $format ) {
		return post_format_image_template();
	}

	$format = "post_format_{$format}_template";
	return $format();
}

