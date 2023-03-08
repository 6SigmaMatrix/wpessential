<?php
if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( is_active_sidebar( 'sidebar-1' ) ) :
	do_action( 'wpe_default_sidebar_before' );
	dynamic_sidebar( 'sidebar-1' );
	do_action( 'wpe_default_sidebar_after' );
endif;
