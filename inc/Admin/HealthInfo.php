<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class HealthInfo
{
	public static function constants ()
	{
		wpe_ajax_authorized();
		$undefined = __( 'Undefined', 'wpessential' );
		$list      = [
			'plugins' => [
				'title'         => __( 'Plugins', 'wpessential' ),
				'column_labels' => [
					'first'  => __( 'Constant', 'wpessential' ),
					'second' => __( 'Value', 'wpessential' ),
				],
				'list'          => [
					'wpessential'     => [
						'title' => __( 'WPEssential', 'wpessential' ),
						'list'  => [
							[
								'first'  => 'WPE_SETTINGS',
								'second' => defined( 'WPE_SETTINGS' ) ? WPE_SETTINGS : $undefined
							],
							[
								'first'  => 'WPE_VERSION',
								'second' => defined( 'WPE_VERSION' ) ? WPE_VERSION : $undefined
							],
							[
								'first'  => 'WPE_DEBUG',
								'second' => defined( 'WPE_DEBUG' ) ? WPE_DEBUG : $undefined
							],
							[
								'first'  => 'WPE_DIR',
								'second' => defined( 'WPE_DIR' ) ? WPE_DIR : $undefined
							],
							[
								'first'  => 'WPE_URL',
								'second' => defined( 'WPE_URL' ) ? WPE_URL : $undefined
							],
							[
								'first'  => 'WPE_NONCE',
								'second' => defined( 'WPE_NONCE' ) ? WPE_NONCE : $undefined
							]
						],
					],
					'wpessential-pro' => [
						'title' => __( 'WPEssential Pro', 'wpessential' ),
						'list'  => [
							[
								'first'  => 'WPEPRO_VERSION',
								'second' => defined( 'WPEPRO_VERSION' ) ? WPEPRO_VERSION : $undefined
							],
							[
								'first'  => 'WPEPRO_DIR',
								'second' => defined( 'WPEPRO_DIR' ) ? WPEPRO_DIR : $undefined
							],
							[
								'first'  => 'WPEPRO_URL',
								'second' => defined( 'WPEPRO_URL' ) ? WPEPRO_URL : $undefined
							],
						],
					]
				]
			],
			'themes'  => []
		];
		$list      = array_filter( $list );
		$list      = apply_filters( 'wpe/register/admin_pages/health_info/constants', $list );

		wp_send_json_success( [
			'title' => __( 'Constants', 'wpessential' ),
			'desc'  => __( 'Here are the WPEssential plugins and theme defined constasts info listed below.', 'wpessential' ),
			'list'  => $list
		] );
	}

	public static function active_plugins ()
	{
		wpe_ajax_authorized();

		$_active_plugins = (array) get_option( 'active_plugins', [] );

		if ( is_multisite() ) {
			$_active_plugins = array_merge( $_active_plugins, get_site_option( 'active_sitewide_plugins', [] ) );
		}

		$active_plugins = [];

		foreach ( $_active_plugins as $plugin ) {
			if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin ) ) {
				$plugin_data = @get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );
				$plugin_name = esc_html( $plugin_data[ 'Name' ] );
				$plugin_info = [];
				foreach ( $plugin_data as $k => $v ) {
					$plugin_info[] = [
						'first'  => $k,
						'second' => $v ? $v : __( 'Undefined', 'wpeseential' )
					];
				}
				$active_plugins[ $plugin_name ] = [
					'title' => $plugin_name,
					'list'  => $plugin_info,
				];
			}
		}

		wp_send_json_success( apply_filters( 'wpe/register/admin_pages/health_info/plugins', [
				'title' => __( 'Active Plugins', 'wpessential' ),
				'desc'  => __( 'Here are the active plugins info listed below.', 'wpessential' ),
				'list'  => [
					'plugins' => [
						'column_labels' => [
							'first'  => __( 'Header Meta', 'wpessential' ),
							'second' => __( 'Meta Value', 'wpessential' ),
						],
						'title'         => sprintf( __( 'Active Plugins (%s)', 'wpessential' ), count( $_active_plugins ) ),
						'desc'          => __( 'Here are the list of active plugins on your website.', 'wpessential' ),
						'list'          => $active_plugins
					]
				]
			]
		) );
	}

	public static function used_hooks ()
	{

		wpe_ajax_authorized();

		global $wp_filter;

		$filters = [];
		foreach ( $wp_filter as $key => $value ) {
			if ( strpos( $key, 'wpe' ) === 0 ) {
				$filters[] = [ 'filter' => $key ];
			}
		}
		wp_send_json_success(
			[
				'title' => __( 'WPEssential Hooks', 'wpessential' ),
				'desc'  => __( 'Here are the list of WPEssential used hooks/filters below.', 'wpessential' ),
				'list'  => [
					'wpe' => [
						'title'         => __( 'Hook/Filter', 'wpessential' ),
						'column_labels' => [
							'first' => __( 'List', 'wpessential' ),
						],
						'list'          => $filters
					]
				]
			]
		);
	}
}
