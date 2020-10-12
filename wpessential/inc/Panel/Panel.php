<?php

namespace WPEssential\Plugins\Panel;

use WPEssential\Plugins\ThemeSettings\Settings;

/**
 * WPE_Init.
 * An final class to load the WPEssential necessary files.
 *
 * @see     https://wpessential.info/wpessential/
 * @package WPEssentil/elementor
 * @final
 * @since   1.0.0
 * @version 1.0.0
 */
class Panel
{

	/**
	 * Constructer
	 *
	 * @since  0.0.5
	 * @access public
	 */
	public static function constructor ()
	{
		//self::tiny_mce_button();
		add_action( 'admin_menu', [ __CLASS__, 'add_menu_page' ] );
		add_filter( 'wpe/backend/page/css', [ __CLASS__, 'css' ], 10 );
		add_filter( 'wpe/backend/page/js', [ __CLASS__, 'js' ], 10 );
		add_filter( 'wpe/backend/css', [ __CLASS__, 'css' ], 20 );
		add_filter( 'wpe/backend/js', [ __CLASS__, 'js' ], 20 );
		/*if ( is_admin() ) {
			Settings::constructor();
		}*/
	}


	public static function add_menu_page ()
	{
		$page_title = __( 'WPEssential', 'wpessential' );
		add_menu_page( $page_title, $page_title, 'manage_options', 'wpessential', [ __CLASS__, 'page_view' ], '', 2 );

		do_action( 'wpe_menu_page' );
	}

	public static function page_view ()
	{
		?>
        <wpe></wpe>
		<?php
	}

	public static function css ( $list )
	{
		$list = wp_parse_args(
			$list,
			[
				'font-awesome',
				'element-ui-en',
				'element-ui',
				'wpessential-admin'
			]
		);
		return $list;
	}

	public static function js ( $list )
	{
		wp_enqueue_editor();
		wp_enqueue_media();
		//wp_enqueue_code_editor( $args);
		$list = wp_parse_args(
			$list,
			[
				'vue',
				'vue-router',
				'axios',
				'qs',
				'nprogress',
				'element-ui',
				'element-ui-en',
				'wpessential-options',
				'wpessential-admin',
			]
		);
		return $list;
	}

	public static function tiny_mce_button ()
	{
		add_filter( 'tiny_mce_before_init', [ __CLASS__, 'tiny_bce_fontsize_frmats' ], 0 );
		add_filter( 'mce_buttons', [ __CLASS__, 'mce_buttons1' ], 0 );
		add_filter( 'mce_buttons_2', [ __CLASS__, 'mce_buttons2' ], 0 );
	}

	public static function mce_buttons1 ( $buttons )
	{
		$buttons[ 0 ]  = 'formatselect';
		$buttons[ 1 ]  = 'bold';
		$buttons[ 2 ]  = 'italic';
		$buttons[ 3 ]  = 'underline';
		$buttons[ 4 ]  = 'bullist';
		$buttons[ 5 ]  = 'numlist';
		$buttons[ 6 ]  = 'blockquote';
		$buttons[ 7 ]  = 'alignleft';
		$buttons[ 8 ]  = 'aligncenter';
		$buttons[ 9 ]  = 'alignright';
		$buttons[ 10 ] = 'alignjustify';
		$buttons[ 11 ] = 'link';
		$buttons[ 12 ] = 'wp_more';
		$buttons[ 13 ] = 'spellchecker';
		$buttons[ 14 ] = 'dfw';
		$buttons[ 15 ] = 'wp_adv';

		return $buttons;
	}

	public static function mce_buttons2 ( $buttons )
	{
		array_unshift( $buttons, 'superscript' );
		array_unshift( $buttons, 'subscript' );
		array_unshift( $buttons, 'fontselect' );
		array_unshift( $buttons, 'fontsizeselect' );

		return $buttons;
	}

	public static function tiny_bce_fontsize_frmats ( $settings )
	{
		$settings[ 'fontsize_formats' ] = implode( 'px ', range( 5, 300 ) ) . 'px';

		return $settings;
	}
}

