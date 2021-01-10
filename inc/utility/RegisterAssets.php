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
			'crypt_1'                      => [
				'link' => WPE_URL . "assets/js/crypt{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check(),
			],
			'crypt_2'                      => [
				'link' => WPE_URL . "assets/js/encryption{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check(),
			],
			'element-ui'                   => [
				'link' => WPE_URL . "assets/js/element-ui{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver_check( '2.14.1' ),
			],
			'fancybox'                     => [
				'link' => WPE_URL . "assets/js/fancybox{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '3.5.1' ),
			],
			'modal'                        => [
				'link' => WPE_URL . "assets/js/modal{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '0.9.2' ),
			],
			'nprogress'                    => [
				'link' => WPE_URL . "assets/js/nprogress{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver_check( '0.2.0' ),
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . "assets/js/perfect-scrollbar{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '1.5.0' ),
			],
			'slick'                        => [
				'link' => WPE_URL . "assets/js/slick{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '1.8.1' ),
			],
			'vue'                          => [
				'link' => WPE_URL . "assets/js/vue{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '2.6.12' ),
			],
			'vue-router'                   => [
				'link' => WPE_URL . "assets/js/vue-router{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver_check( '3.4.9' ),
			],
			'waypoints'                    => [
				'link' => WPE_URL . "assets/js/waypoints{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check( '4.0.1' ),
			],
			'wpessential'                  => [
				'link' => WPE_URL . "assets/js/wpessential{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check(),
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . "assets/js/wpessential-elementor-editor{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver_check(),
			],
		];
		$list   = apply_filters( 'wpe/register/js', $list );
		$list   = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				wp_register_script( $k, wpe_array_get( $v, 'link' ), wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ), true );
			}
		}
	}

	public static function register_style ()
	{
		$minify = self::$minify;
		$list   = [
			'font-awesome'                 => [
				'link' => WPE_URL . "assets/css/all{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '5.13.0' ),
			],
			'element-ui'                   => [
				'link' => WPE_URL . "assets/css/element-ui{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '2.14.1' ),
			],
			'animate'                      => [
				'link' => WPE_URL . "assets/css/animate{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '4.1.1' ),
			],
			'fancybox'                     => [
				'link' => WPE_URL . "assets/css/fancybox{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '3.5.1' ),
			],
			'npropress'                    => [
				'link' => WPE_URL . "assets/css/npropress{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '0.2.0' ),
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . "assets/css/perfect-scrollbar{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '1.5.0' ),
			],
			'slick'                        => [
				'link' => WPE_URL . "assets/css/slick{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check( '1.8.1' ),
			],
			'slick-theme'                  => [
				'link' => WPE_URL . "assets/css/slick-theme{$minify}css",
				'dep'  => [ 'slick' ],
				'ver'  => self::ver_check( '1.8.1' ),
			],
			'wpessential'                  => [
				'link' => WPE_URL . "assets/css/wpessential{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check(),
			],
			'wpessential-blog-post'        => [
				'link' => WPE_URL . "assets/css/wpessential-blog-post{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check(),
			],
			'wpessential-blog-post-color'  => [
				'link' => WPE_URL . "assets/css/wpessential-blog-post-color{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check(),
			],
			'wpessential-blog-post-res'    => [

				'link' => WPE_URL . "assets/css/wpessential-blog-post-res{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check(),
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . "assets/css/wpessential-elementor-editor{$minify}css",
				'dep'  => [ '' ],
				'ver'  => self::ver_check(),
			],
		];
		$list   = apply_filters( 'wpe/register/css', $list );
		$list   = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				wp_register_style( $k, wpe_array_get( $v, 'link' ), wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ), 'all' );
			}
		}
	}

	public static function minify_check ()
	{
		if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG || defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) {
			return '.';
		} else {
			return '.min.';
		}
	}

	public static function ver_check ( $ver = WPE_VERSION )
	{
		if ( defined( 'WP_DEBUG' ) && true === WP_DEBUG || defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) {
			return timer();
		} else {
			return $ver;
		}
	}
}
