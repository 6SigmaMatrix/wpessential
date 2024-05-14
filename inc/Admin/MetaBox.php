<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class MetaBox
{
	public static function constructor ()
	{
		add_action( 'add_meta_boxes', function () {

			add_filter( 'wpe/admin_page/js', [ __CLASS__, 'enqueue_script' ], 12 );

			$path  = wpe_template_dir( 'config/metabox/' );
			$files = glob( "{$path}*.php" );
			if ( $files && \is_array( $files ) ) {
				foreach ( $files as $file ) {
					if ( file_exists( $file ) ) {
						require_once $file;
					}
				}
			}

		}, 1000 );
	}

	public static function enqueue_script ( $list )
	{
		$router = array_search( 'wpessential-admin', $list, true );
		unset( $list[ $router ] );
		$list[] = 'wpessential-meta';
		return $list;
	}
}
