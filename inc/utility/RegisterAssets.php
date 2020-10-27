<?php

namespace WPEssential\Plugins\Utility;

final class RegisterAssets
{
	public static string $minify;

	public static function constructor ()
	{
		self::$minify = self::minify_check();
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
		add_action( 'admin_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
		add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
	}

	public static function init ()
	{
		self::register_script();
		self::register_style();
	}

	public static function register_script ()
	{
		$minify = self::$minify;
		$list   = [
			'crypt_1'                      => WPE_URL . "assets/js/crypt{$minify}js",
			'crypt_2'                      => WPE_URL . "assets/js/encryption{$minify}js",
			'modal'                        => WPE_URL . "assets/js/modal{$minify}js",
			'perfect-scrollbar'            => WPE_URL . "assets/js/perfect-scrollbar{$minify}js",
			'wpessential'                  => WPE_URL . "assets/js/wpessential{$minify}js",
			'wpessential-elementor-editor' => WPE_URL . "assets/js/wpessential-elementor-editor{$minify}js",
		];
		$list   = apply_filters( 'wpe/register/js', $list );
		$list   = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				wp_register_script( $k, $v, [], WPE_VERSION, true );
			}
		}
	}

	public static function register_style ()
	{
		$minify = self::$minify;
		$list   = [
			'font-awesome'                 => WPE_URL . "assets/css/all{$minify}css",
			'animate'                      => WPE_URL . "assets/css/animate{$minify}css",
			'perfect-scrollbar'            => WPE_URL . "assets/css/perfect-scrollbar{$minify}css",
			'wpessential'                  => WPE_URL . "assets/css/wpessential{$minify}css",
			'wpessential-elementor-editor' => WPE_URL . "assets/css/wpessential-elementor-editor{$minify}css",
			'wpessential-blog-post'        => WPE_URL . "assets/css/wpessential-blog-post{$minify}css",
			'wpessential-blog-post-color'  => WPE_URL . "assets/css/wpessential-blog-post-color{$minify}css",
			'wpessential-blog-post-res'    => WPE_URL . "assets/css/wpessential-blog-post-res{$minify}css",

		];
		$list   = apply_filters( 'wpe/register/css', $list );
		$list   = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				wp_register_style( $k, $v, [], WPE_VERSION, 'all' );
			}
		}
	}

	public static function minify_check ()
	{
		if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) {
			return '.';
		} else {
			return '.min.';
		}
	}
}
