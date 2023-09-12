<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Theme
{
	public static function constructor ()
	{
		$path           = wpe_template_dir( 'config/theme/' );
		$files          = apply_filters( 'wpe/register/admin_pages/route/theme/options/files', glob( $path . '*.php' ) );
		$theme_sections = [];
		if ( $files && is_array( $files ) ) {
			$priority = 0;
			foreach ( $files as $file ) {
				if ( file_exists( $file ) ) {
					$file                     = require $file;
					$order                    = wpe_array_get( $file, 'priority', $priority );
					$theme_sections[ $order ] = $file;
					$priority ++;
				}
			}
		}

		$theme_sections = Settings::default( $theme_sections );

		return apply_filters( 'wpe/register/admin_pages/route/theme', [
			'menu_title' => __( 'Theme options', 'wpessential' ),
			'page_title' => __( 'Theme Options', 'wpessential' ),
			'page_desc'  => __( 'Theme customization options.', 'wpessential' ),
			'route'      => [
				'path'      => '/theme',
				'component' => [ 'template' => '<wpe-options></wpe-options>' ],
				'name'      => 'theme'
			],
			'options'    => apply_filters( 'wpe/register/admin_pages/route/theme/options', $theme_sections ),
		] );
	}
}
