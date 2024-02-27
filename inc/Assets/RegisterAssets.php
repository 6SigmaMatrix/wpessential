<?php

namespace WPEssential\Plugins\Assets;

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
		if ( ( \defined( 'WP_DEBUG' ) && true === WP_DEBUG ) || ( \defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) ) {
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
				'link' => WPE_URL . 'assets/js/bootstrap',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '4.3.1' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'crypt_1'                      => [
				'link' => WPE_URL . 'assets/js/crypt',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'crypt_2'                      => [
				'link' => WPE_URL . 'assets/js/encryption',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			/*	'element-ui'                   => [
					'link' => WPE_URL . 'assets/js/element-ui',
					'dep'  => [ 'jquery', 'vue' ],
					'ver'  => self::ver( '2.15.7' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
				],
				'element-ui-en'                => [
					'link' => WPE_URL . 'assets/js/element-ui-en',
					'dep'  => [ 'vue' ],
					'ver'  => self::ver( '2.15.7' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
				],*/
			/*'vue'                          => [
				'link' => WPE_URL . 'assets/js/vue',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.6.12' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'vue-router'                   => [
				'link' => WPE_URL . 'assets/js/vue-router',
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '3.5.2' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'vuex'                         => [
				'link' => WPE_URL . 'assets/js/vuex',
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '2.0.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],*/
			'vue'                          => [
				'link' => WPE_URL . 'assets/js/vue.global',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '3.4.19' ),
				'args' => [
					'in_footer' => false,
				]
			],
			'vue-router'                   => [
				'link' => WPE_URL . 'assets/js/vue-router.global',
				'dep'  => [ 'vue' ],
				'ver'  => self::ver( '4.3.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'vuex'                         => [
				'link' => WPE_URL . 'assets/js/vuex.global',
				'dep'  => [ 'vue' ],
				'ver'  => self::ver( '4.1.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'element-ui'                   => [
				'link' => WPE_URL . 'assets/js/element-plus',
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '2.5.6' ),
				'args' => [
					'in_footer' => true,
				]
			],
			'element-ui-en'                => [
				'link' => WPE_URL . 'assets/js/element-ui-en',
				'dep'  => [ 'vue' ],
				'ver'  => self::ver( '2.15.7' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'fancybox'                     => [
				'link' => WPE_URL . 'assets/js/fancybox',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '3.5.1' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'modal'                        => [
				'link' => WPE_URL . 'assets/js/modal',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '0.9.2' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'moment'                       => [
				'link' => WPE_URL . 'assets/js/moment',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.29.1' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'nprogress'                    => [
				'link' => WPE_URL . 'assets/js/nprogress',
				'dep'  => [ 'jquery', 'vue' ],
				'ver'  => self::ver( '0.2.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'owl-carousel'                 => [
				'link' => WPE_URL . 'assets/js/owl.carousel',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '2.3.4' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . 'assets/js/perfect-scrollbar',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '1.5.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'slick'                        => [
				'link' => WPE_URL . 'assets/js/slick',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '1.8.1' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'waypoints'                    => [
				'link' => WPE_URL . 'assets/js/waypoints',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver( '4.0.1' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'wpessential'                  => [
				'link' => WPE_URL . 'assets/js/wpessential',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'vendor'                       => [
				'link' => WPE_URL . 'assets/js/vendor',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'wpessential-admin'            => [
				'link' => WPE_URL . 'assets/js/wpessential-admin',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . 'assets/js/wpessential-elementor-editor',
				'dep'  => [ 'jquery' ],
				'ver'  => self::ver(),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
			'wpessential-editor-wordcount' => [
				'link' => WPE_URL . 'assets/js/wordcount',
				'dep'  => [ 'jquery', 'underscore', 'word-count' ],
				'ver'  => self::ver( '1.0.0' ),
				'args' => [
					'in_footer' => true,
					'strategy'  => 'defer', // async
				]
			],
		];
		$list   = apply_filters( 'wpe/register/js', $list );
		$list   = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				switch ( wpe_array_get( $v, 'external' ) ) {
					case 'yes':
						wp_register_script( $k, trim( wpe_array_get( $v, 'link' ) ), wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ), wpe_array_get( $v, 'args' ) );
						break;
					default:
						wp_register_script( $k, trim( wpe_array_get( $v, 'link' ) ) . "{$minify}js", wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ), wpe_array_get( $v, 'args' ) );
				}
			}
		}
	}

	public static function ver ( $ver = WPE_VERSION )
	{
		if ( ( \defined( 'WP_DEBUG' ) && true === WP_DEBUG ) || ( \defined( 'WPE_DEBUG' ) && true === WPE_DEBUG ) ) {
			return time();
		}

		return $ver;
	}

	public static function style ()
	{
		$minify = self::$minify;
		$list   = [
			'font-awesome'                 => [
				'link' => WPE_URL . 'assets/css/all',
				'dep'  => false,
				'ver'  => self::ver( '5.13.0' ),
			],
			'animate'                      => [
				'link' => WPE_URL . 'assets/css/animate',
				'dep'  => false,
				'ver'  => self::ver( '4.1.1' ),
			],
			'bootstrap'                    => [
				'link' => WPE_URL . 'assets/css/bootstrap',
				'dep'  => false,
				'ver'  => self::ver( '4.3.1' ),
			],
			/*	'element-ui'                   => [
					'link' => WPE_URL . 'assets/css/element-ui',
					'dep'  => false,
					'ver'  => self::ver( '2.15.7' ),
				],*/
			'fancybox'                     => [
				'link' => WPE_URL . 'assets/css/fancybox',
				'dep'  => false,
				'ver'  => self::ver( '3.5.1' ),
			],
			'npropress'                    => [
				'link' => WPE_URL . 'assets/css/npropress',
				'dep'  => false,
				'ver'  => self::ver( '0.2.0' ),
			],
			'owl-carousel'                 => [
				'link' => WPE_URL . 'assets/css/owl.carousel',
				'dep'  => false,
				'ver'  => self::ver( '2.3.4' ),
			],
			'perfect-scrollbar'            => [
				'link' => WPE_URL . 'assets/css/perfect-scrollbar',
				'dep'  => false,
				'ver'  => self::ver( '1.5.0' ),
			],
			'slick'                        => [
				'link' => WPE_URL . 'assets/css/slick',
				'dep'  => false,
				'ver'  => self::ver( '1.8.1' ),
			],
			'slick-theme'                  => [
				'link' => WPE_URL . 'assets/css/slick-theme',
				'dep'  => [ 'slick' ],
				'ver'  => self::ver( '1.8.1' ),
			],
			'wpessential'                  => [
				'link' => WPE_URL . 'assets/css/wpessential',
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-admin'            => [
				'link' => WPE_URL . 'assets/css/wpessential-admin',
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post'        => [
				'link' => WPE_URL . 'assets/css/wpessential-blog-post',
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post-color'  => [
				'link' => WPE_URL . 'assets/css/wpessential-blog-post-color',
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-blog-post-res'    => [

				'link' => WPE_URL . 'assets/css/wpessential-blog-post-res',
				'dep'  => false,
				'ver'  => self::ver(),
			],
			'wpessential-elementor-editor' => [
				'link' => WPE_URL . 'assets/css/wpessential-elementor-editor',
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
		if ( $code_editor_themes && \is_array( $code_editor_themes ) ) {
			foreach ( $code_editor_themes as $theme ) {
				if ( file_exists( $theme ) ) {
					$name                                = str_replace( '.css', '', basename( $theme ) );
					$list[ "code-editor-theme-{$name}" ] = [
						'link'     => WPE_URL . "assets/css/code-editor-themes/{$name}.css",
						'dep'      => false,
						'external' => 'yes',
						'ver'      => self::ver(),
					];
				}
			}
		}

		$list = apply_filters( 'wpe/register/css', $list );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $k => $v ) {
				switch ( wpe_array_get( $v, 'external' ) ) {
					case 'yes':
						wp_register_style( $k, trim( wpe_array_get( $v, 'link' ) ), wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ) );
						break;
					default:
						wp_register_style( $k, trim( wpe_array_get( $v, 'link' ) ) . "{$minify}css", wpe_array_get( $v, 'dep' ), wpe_array_get( $v, 'ver' ) );
				}
			}
		}
	}
}
