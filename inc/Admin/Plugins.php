<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Plugins
{
	public static function constructor ()
	{
		$path             = wpe_template_dir( 'config/plugin/' );
		$main_plugin_file = $path . 'wpessential.php';//glob( $path . '*.php' );
		$plugin_sections  = [ require $main_plugin_file ];

		$files = apply_filters( 'wpe/register/admin_pages/route/plugins/options/files', [] );
		if ( ! empty( $files ) && \is_array( $files ) ) {
			$priority = 1;
			foreach ( $files as $file ) {
				if ( file_exists( $file ) ) {
					$file  = require $file;
					$order = wpe_array_get( $file, 'priority', $priority );
					//$theme_sections[ $order ] = $file;
					$plugin_sections[ (int) $order ] = $file;
					$priority ++;
				}
			}
		}

		$plugin_sections = Settings::default( $plugin_sections );

		return apply_filters( 'wpe/register/admin_pages/route/plugins', [
			'menu_title' => __( 'Plugin options', 'wpessential' ),
			'page_desc'  => __( 'Plugin customization options.', 'wpessential' ),
			'route'      => [
				'path'      => '/plugins',
				'component' => [ 'template' => '<WpeOptions></WpeOptions>' ],
				'name'      => 'plugins'
			],
			'options'    => apply_filters( 'wpe/register/admin_pages/route/plugins/options', $plugin_sections ),
			'theme_info' => [
				'show_top_action'    => true,
				'show_bottom_action' => true,
				'Name'               => __( 'Plugins Setting', 'wpessential' ),
			],
		] );
	}
}
