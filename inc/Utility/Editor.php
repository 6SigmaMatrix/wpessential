<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Libraries\Fonts\Google\GoogleFonts;

final class Editor
{
	protected static $google_font_obj;

	public static function constructor ()
	{

		self::$google_font_obj = GoogleFonts::make();
		//self::editor_style();
		add_filter( 'tiny_mce_before_init', [ __CLASS__, 'font_size' ] );
		add_filter( 'mce_buttons', [ __CLASS__, 'buttons_1' ], 1000 );
		add_filter( 'mce_buttons_2', [ __CLASS__, 'buttons_2' ] );
	}

	public static function font_size ( $settings )
	{
		$range = apply_filters( 'wpe/tiny_mce_editor/font_size', [ 'start' => 0, 'end' => 100 ] );
		if ( $range && is_array( $range ) ) {
			$settings[ 'fontsize_formats' ] = implode( 'px ', range( $range[ 'start' ], $range[ 'end' ] ) );
		}

		$fonts = apply_filters( 'wpe/tiny_mce_editor/font_format', self::$google_font_obj->get_names() );
		if ( $fonts && is_array( $fonts ) ) {
			$_fonts = '';
			foreach ( $fonts as $item ) {
				$_fonts .= $item . '=' . $item . ';';
			}
			$settings[ 'font_formats' ] = $_fonts;
		}

		return $settings;
	}

	public static function editor_style ()
	{
		foreach ( self::$google_font_obj->get_font_style_links() as $link ) {
			add_editor_style( $link );
		}
	}

	public static function buttons_1 ( $buttons )
	{
		$buttons_set = apply_filters(
			'wpe/tiny_mce_editor/buttons_1',
			[
				'formatselect',
				'fontselect',
				'fontsizeselect',
				'bold',
				'italic',
				'underline',
				'bullist',
				'numlist',
				'blockquote',
				'alignleft',
				'aligncenter',
				'alignright',
				'alignjustify',
				'link',
				'wp_more',
				'spellchecker',
				'dfw',
				'wp_adv',
			]
		);

		if ( $buttons_set && is_array( $buttons_set ) ) {
			return $buttons_set;
		}

		return $buttons;
	}

	public static function buttons_2 ( $buttons )
	{
		$button_set = apply_filters(
			'wpe/tiny_mce_editor/buttons_2',
			[
				'superscript',
				'subscript',
			]
		);

		if ( $button_set && is_array( $button_set ) ) {
			array_unshift( $buttons, implode( ',', $button_set ) );
		}

		return $buttons;
	}
}
