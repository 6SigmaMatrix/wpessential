<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Kirki
{
	public static function constructor ()
	{
		self::init();
	}

	private static function init ()
	{
		$config = self::config();
		\Kirki::add_config( $config[ 'config_id' ], $config[ 'config' ] );
		self::panels();
		self::sections();
		self::controls();
	}

	private static function config ()
	{
		return apply_filters(
			'wpe/kirki/config',
			[
				'config_id' => 'wpe_dev_themes',
				'config'    => [
					'capability'     => 'edit_theme_options',
					'option_type'    => 'theme_mod',
					'disable_output' => false,
				]
			]
		);
	}

	private static function panels ()
	{
		$panels = apply_filters( 'wpe/kirki/register/panels', [ 'header-panel' ] );
		$panels = array_filter( $panels );
		if ( $panels && is_array( $panels ) && ! empty( $panels ) ) {
			foreach ( $panels as $panel ) {
				$panel = require_once wpe_template_load( "config/kirki/panels/{$panel}.php" );
				\Kirki::add_panel( $panel[ 'id' ], $panel );
			}
		}

	}

	private static function sections ()
	{
		$sections = apply_filters( 'wpe/kirki/register/sections', [ 'header-section' ] );
		$sections = array_filter( $sections );
		if ( $sections && is_array( $sections ) && ! empty( $sections ) ) {
			foreach ( $sections as $_sections ) {
				$_sections = require_once wpe_template_load( "config/kirki/sections/{$_sections}.php" );
				if ( is_array( $_sections ) && ! wpe_array_get( $_sections, 'id' ) ) {
					foreach ( $_sections as $section ) {
						\Kirki::add_section( $section[ 'id' ], $section );
					}
				} else {
					\Kirki::add_section( $_sections[ 'id' ], $_sections );
				}
			}
		}
	}

	private static function controls ()
	{
		$controls = apply_filters( 'wpe/kirki/register/controls', [ 'header-control' ] );
		$controls = array_filter( $controls );
		if ( $controls && is_array( $controls ) && ! empty( $controls ) ) {
			foreach ( $controls as $_controls ) {
				$_controls = require_once wpe_template_load( "config/kirki/controls/{$_controls}.php" );
				foreach ( $_controls as $control ) {
					\Kirki::add_field( $control[ 'id' ], $control );
				}
			}
		}
	}
}
