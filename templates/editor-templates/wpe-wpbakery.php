<?php
/*
 * Template Name: WPE WPBakery
 * */

include wpe_template_load( 'templates/editor-templates/header.php' );
while ( have_posts() ) {
	the_post();
	the_content();
}
include wpe_template_load( 'templates/editor-templates/footer.php' );