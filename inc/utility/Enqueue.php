<?php

namespace WPEssential\Utility;

class Enqueue
{

	public static function constructor ()
	{
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'frontend' ], 300 );
		add_action( 'admin_enqueue_scripts', [ __CLASS__, 'backend' ], 300 );
		add_action( 'admin_print_scripts-toplevel_page_wpessential', [ __CLASS__, 'admin_page_enqueue' ], 1000 );
	}

	public static function frontend ()
	{
		self::localization();

		$list = [
			'fontawesome',
			'animate',
			'wpessential'
		];
		$list = apply_filters( 'wpe/frontend/css', $list );

		foreach ( $list as $v ) {
			wp_enqueue_style( $v );
		}

		$list = [
			'wpessential'
		];
		$list = apply_filters( 'wpe/frontend/js', $list );

		wp_enqueue_script( $list );
	}

	public static function backend ()
	{

		$list = apply_filters( 'wpe/backend/css', [] );
		foreach ( $list as $v ) {
			wp_enqueue_style( $v );
		}

		$list = apply_filters( 'wpe/backend/js', [] );
		wp_enqueue_script( $list );

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
		wp_localize_script( 'jquery', 'WPEssential', $localization );
	}

	public static function admin_page_enqueue ()
	{
		$list = apply_filters( 'wpe/backend/page/css', [] );
		foreach ( $list as $v ) {
			wp_enqueue_style( $v );
		}

		$list = apply_filters( 'wpe/backend/page/js', [] );
		wp_enqueue_script( $list );

		self::localization();
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