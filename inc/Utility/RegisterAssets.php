<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Libraries\Fonts\Google\GoogleFonts;

final class RegisterAssets
{
	public static $minify;

	public static function constructor ()
	{
		self::$minify = self::minify();
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
		add_action( 'admin_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
		add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'init' ], 0 );
	}

	public static function minify ()
	{
		if ( ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) || ( defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) ) {
			return '.';
		}

		return '.min.';
	}

	public static function init ()
	{
		self::script();
		self::style();
	}

	public static function script ()
	{
		$minify = self::$minify;
		$list   = [
			'bootstrap'                    => [
				'link' => WPE_URL . "assets/js/bootstrap{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '4.3.1' ),
			],
			'crypt_1'                      => [
				'link' => WPE_URL . "assets/js/crypt{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
			],
			'crypt_2'                      => [
				'link' => WPE_URL . "assets/js/encryption{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
			],
			'element-ui'                   => [
				'link' => WPE_URL . "assets/js/element-ui{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '2.15.7' ),
			],
			'element-ui-en'                => [
				'link' => WPE_URL . "assets/js/element-ui-en{$minify}js",
				'dep'  => [ 'vue' ],
				'ver'  => self::ver( '2.15.7' ),
			],
			'fancybox'                     => [
				'link' => WPE_URL . "assets/js/fancybox{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '3.5.1' ),
			],
			'modal'                        => [
				'link' => WPE_URL . "assets/js/modal{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '0.9.2' ),
			],
			'moment'                       => [
				'link' => WPE_URL . "assets/js/moment{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.29.1' ),
			],
			'nprogress'                    => [
				'link' => WPE_URL . "assets/js/nprogress{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '0.2.0' ),
			],
			'owl-carousel'                 => [
				'link' => WPE_URL . "assets/js/owl.carousel{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.3.4' ),
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . "assets/js/perfect-scrollbar{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '1.5.0' ),
			],
			'slick'                        => [
				'link' => WPE_URL . "assets/js/slick{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '1.8.1' ),
			],
			'vue'                          => [
				'link' => WPE_URL . "assets/js/vue{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.6.12' ),
			],
			'vue-router'                   => [
				'link' => WPE_URL . "assets/js/vue-router{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '3.5.2' ),
			],
			'vuex'                         => [
				'link' => WPE_URL . "assets/js/vuex{$minify}js",
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '2.0.0' ),
			],
			'waypoints'                    => [
				'link' => WPE_URL . "assets/js/waypoints{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '4.0.1' ),
			],
			'wpessential'                  => [
				'link' => WPE_URL . "assets/js/wpessential{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
			],
			'wpessential-admin'            => [
				'link' => WPE_URL . "assets/js/wpessential-admin{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . "assets/js/wpessential-elementor-editor{$minify}js",
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
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

	public static function ver ( $ver = WPE_VERSION )
	{
		if ( ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) || ( defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) ) {
			return time();
		}

		return $ver;
	}

	public static function style ()
	{
		$minify = self::$minify;
		$list   = [
			'font-awesome'                 => [
				'link' => WPE_URL . "assets/css/all{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '5.13.0' ),
			],
			'animate'                      => [
				'link' => WPE_URL . "assets/css/animate{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '4.1.1' ),
			],
			'bootstrap'                    => [
				'link' => WPE_URL . "assets/css/bootstrap{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '4.3.1' ),
			],
			'element-ui'                   => [
				'link' => WPE_URL . "assets/css/element-ui{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '2.15.7' ),
			],
			'fancybox'                     => [
				'link' => WPE_URL . "assets/css/fancybox{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '3.5.1' ),
			],
			'npropress'                    => [
				'link' => WPE_URL . "assets/css/npropress{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '0.2.0' ),
			],
			'owl-carousel'                 => [
				'link' => WPE_URL . "assets/css/owl.carousel{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '2.3.4' ),
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . "assets/css/perfect-scrollbar{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '1.5.0' ),
			],
			'slick'                        => [
				'link' => WPE_URL . "assets/css/slick{$minify}css",
				'dep'  => false,
				'ver'  => self::ver( '1.8.1' ),
			],
			'slick-theme'                  => [
				'link' => WPE_URL . "assets/css/slick-theme{$minify}css",
				'dep'  => [ 'slick' ],
				'ver'  => self::ver( '1.8.1' ),
			],
			'wpessential'                  => [
				'link' => WPE_URL . "assets/css/wpessential{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-admin'            => [
				'link' => WPE_URL . "assets/css/wpessential-admin{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post'        => [
				'link' => WPE_URL . "assets/css/wpessential-blog-post{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post-color'  => [
				'link' => WPE_URL . "assets/css/wpessential-blog-post-color{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post-res'    => [

				'link' => WPE_URL . "assets/css/wpessential-blog-post-res{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . "assets/css/wpessential-elementor-editor{$minify}css",
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'google-font-poppins'          => [
				'link' => GoogleFonts::make()->get_font_style_links( 'Poppins' ),
				'dep'  => false,
				'ver'  => self::ver(),
			]
		];

		$code_editor_themes = glob( WPE_DIR . 'assets/css/code-editor-themes/*.css' );
		if ( $code_editor_themes && is_array( $code_editor_themes ) ) {
			foreach ( $code_editor_themes as $theme ) {
				if ( file_exists( $theme ) ) {
					$name                                = str_replace( '.css', '', basename( $theme ) );
					$list[ "code-editor-theme-{$name}" ] = [
						'link' => WPE_URL . "assets/css/code-editor-themes/{$name}.css",
						'dep'  => false,
						'ver'  => self::ver(),
					];
				}
			}
		}

		$list = apply_filters( 'wpe/register/css', $list );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				wp_register_style( $k, wpe_array_get( $v, 'link' ), wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ), 'all' );
			}
		}
	}
}
