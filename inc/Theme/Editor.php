<?php

namespace WPEssential\Plugins\Theme;

final class Editor
{
	public static function constructor ()
	{
		add_filter( 'tiny_mce_before_init', [ __CLASS__, 'font_size' ] );
		add_filter( 'mce_buttons', [ __CLASS__, 'buttons_1' ] );
		add_filter( 'mce_buttons_2', [ __CLASS__, 'buttons_2' ] );
	}

	public static function font_size ( $settings )
	{
		$range = apply_filters( 'wpe/tiny_mce_editor/font_size', [ 'start' => 0, 'end' => 80 ] );
		if ( $range && is_array( $range ) ) {
			$settings[ 'fontsize_formats' ] = implode( 'px ', range( implode( ', ', $range ) ) ) . 'px';
		}
		return $settings;
	}

	public static function buttons_1 ( $buttons )
	{
		$buttons_set = apply_filters(
			'wpe/tiny_mce_editor/buttons_1',
			[
				'formatselect',
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
				'wp_adv'
			]
		);

		if ( $buttons_set && is_array( $buttons_set ) ) {
			$buttons = wp_parse_args( $buttons_set, $buttons );
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
				'fontselect',
				'fontsizeselect'
			]
		);

		if ( $button_set && is_array( $button_set ) ) {
			array_unshift( $buttons, implode( ',', $button_set ) );
		}

		return $buttons;
	}
}
