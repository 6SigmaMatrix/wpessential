<?php

namespace WPEssential\Plugins\Utility;

use WPEssential\Plugins\Loader;

final class Enqueue
{

	public static function constructor ()
	{
		add_action( 'wp_head', [ __CLASS__, 'localization' ], 0 );
		add_action( 'admin_head', [ __CLASS__, 'localization' ], 0 );
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'frontend_enqueue' ], 300 );
		add_action( 'admin_enqueue_scripts', [ __CLASS__, 'backend_enqueue' ], 300, 1 );
		add_action( 'admin_print_scripts-toplevel_page_wpessential', [ __CLASS__, 'admin_page_enqueue' ], 1000 );
		add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'elementor_editor_after_enqueue' ], 1000 );
	}

	public static function frontend_enqueue ()
	{
		$list = [
			'fontawesome',
			'animate',
			'wpessential'
		];
		$list = apply_filters( 'wpe/frontend/css', $list );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $style ) {
				wp_enqueue_style( $style );
			}
		}

		$list = [
			'wpessential'
		];
		$list = apply_filters( 'wpe/frontend/js', $list );

		wp_enqueue_script( $list );
	}

	public static function backend_enqueue ( $hook )
	{
		global $post_type;

		$post_types = Loader::options();
		$post_types = wpe_array_get( $post_types, 'plugin_options.allowed_post_types' );

		if ( 'post.php' === $hook || 'post-new.php' === $hook ) {
			if ( is_array( $post_types ) && in_array( $post_type, $post_types ) ) {

				$list = apply_filters( 'wpe/backend/css', [] );
				$list = array_filter( $list );
				if ( $list ) {
					foreach ( $list as $style ) {
						wp_enqueue_style( $style );
					}
				}

				$list = apply_filters( 'wpe/backend/js', [] );
				wp_enqueue_script( $list );
			}
		}

	}

	public static function localization ()
	{
		$localization = [
			'ajaxurl'   => admin_url( 'admin-ajax.php' ),
			'weburl'    => WPE_URL,
			'nonce'     => wp_create_nonce( 'wpe_request_nonce' ),
			'ajaxshort' => '/wp-admin/admin-ajax.php'
		];
		$localization = apply_filters( 'wpe_loco', $localization );
		$localization = json_encode( $localization );
		?>
        <script id="wpessential-localization">
            var WPEssential = <?php echo $localization; ?>;
        </script>
		<?php
		//wp_localize_script( 'jquery', 'WPEssential', $localization );
	}

	public static function admin_page_enqueue ()
	{
		$list = apply_filters( 'wpe/backend/page/css', [] );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $style ) {
				wp_enqueue_style( $style );
			}
		}

		$list = apply_filters( 'wpe/backend/page/js', [] );
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_script( [ $list ] );
		}

		self::localization();
	}

	public static function elementor_editor_after_enqueue ()
	{
		$list = apply_filters( 'wpe/elementor/editor/after/css', [] );
		$list = array_filter( $list );
		if ( $list ) {
			foreach ( $list as $style ) {
				wp_enqueue_style( $style );
			}
		}

		$list = apply_filters( 'wpe/elementor/editor/after/js', [ 'wpessential-elementor-editor' ] );
		$list = array_filter( $list );
		if ( $list ) {
			wp_enqueue_script( $list );
		}
	}

	public static function plugins ()
	{
		return [
			'names'   => [
				'wpessential',
				'wpessential-blog-post',
				'wpessential-team',
				'wpessential-portfolio',
				'wpessential-contact',
				'wpessential-social-kit'
			],
			'plugins' => [
				'wpessential'            => [
					'name'  => 'WPEssential',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
				'wpessential-blog-post'  => [
					'name'  => 'WPEssential Blog Post',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
				'wpessential-team'       => [
					'name'  => 'WPEssential Team',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
				'wpessential-portfolio'  => [
					'name'  => 'WPEssential Portfolio',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
				'wpessential-contact'    => [
					'name'  => 'WPEssential Contact',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
				'wpessential-social-kit' => [
					'name'  => 'WPEssential Social Kit',
					'desc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
					'ver'   => '1.0.0',
					'price' => '$30'
				],
			]
		];
	}
}
