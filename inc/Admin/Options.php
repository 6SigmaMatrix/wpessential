<?php

namespace WPEssential\Plugins\Admin;

final class Options
{
	public static function init ()
	{
		$path           = wpe_template_dir( 'config/theme/' );
		$files          = glob( $path . '*.php' );
		$theme_sections = [];
		if ( $files && is_array( $files ) ) {
			//$priority = 0;
			foreach ( $files as $file ) {
				if ( file_exists( $file ) ) {
					//$file = require $file;
					//$order                    = wpe_array_get( $file, 'priority', $priority );
					//$theme_sections[ $order ] = $file;
					$theme_sections[] = require $file;
					//$priority ++;
				}
			}
		}
		//sort( $theme_sections );
		$path            = wpe_template_dir( 'config/plugin/' );
		$files           = glob( $path . '*.php' );
		$plugin_sections = [];
		if ( $files && is_array( $files ) ) {
			//$priority = 0;
			foreach ( $files as $file ) {
				if ( file_exists( $file ) ) {
					//$file = require $file;
					//$order                    = wpe_array_get( $file, 'priority', $priority );
					//$theme_sections[ $order ] = $file;
					$plugin_sections[] = require $file;
					//$priority ++;
				}
			}
		}

		Settings::constructor();

		apply_filters( 'wpe/register/admin_pages/options/theme_options/fields', wp_parse_args( $plugin_sections, $theme_sections ) );

		return [
			'theme'      => apply_filters( 'wpe/register/admin_pages/options/theme_options/tabs', $theme_sections ),
			'plugin'     => apply_filters( 'wpe/register/admin_pages/options/plugin_options/tabs', $plugin_sections ),
			'theme_info' => wpe_theme_info(),
		];
	}
}
