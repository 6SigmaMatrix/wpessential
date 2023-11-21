<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * Template Name: WPE WordPress
 * */

wpe_template_load( 'editor-template/header' );
while ( have_posts() ) {
	the_post();
	the_content();
}
wpe_template_load( 'editor-template/footer' );
