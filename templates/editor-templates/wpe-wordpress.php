<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * Template Name: WPE WordPress
 * */

include wpe_template_load( 'templates/editor-templates/header.php' );
while ( have_posts() ) {
	the_post();
	the_content();
}
include wpe_template_load( 'templates/editor-templates/footer.php' );
