<?php

namespace WPEssential\Plugins\Admin;

final class Admin
{
	public static function constructor ()
	{
		self::pages();

		add_action( 'admin_menu', [ __CLASS__, 'register_menu' ] );
		add_filter( 'wpe/admin_page/css', [ __CLASS__, 'css' ], 10 );
		add_filter( 'wpe/admin_page/js', [ __CLASS__, 'js' ], 10 );
	}

	public static function register_menu ()
	{
		$menu_args = apply_filters( 'wpe/register/admin_pages/main_nav', [] );
		$menu_args = array_filter( $menu_args );
		if ( $menu_args && is_array( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				call_user_func_array( [ __CLASS__, 'add_menu_pages' ], $menu );
			}
		}

		$menu_args = apply_filters( 'wpe/register/admin_pages/submenu_nav', [] );
		$menu_args = array_filter( $menu_args );
		if ( $menu_args && is_array( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				call_user_func_array( [ __CLASS__, 'add_submenu_pages' ], $menu );
			}
		}

		add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 10 );
	}

	public static function pages ()
	{
		Index::constructor();
		Options::constructor();
	}

	public static function add_menu_pages ( $page_title, $menu_title, $manage_options, $menu_slug = 'wpessential', $callback = '', $icon = '', $position = null )
	{
		add_menu_page( $page_title, $menu_title, $manage_options, $menu_slug, $callback, $icon, $position );
		do_action( 'wpe_menu_page' );
	}

	public static function add_submenu_pages ( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $callback = '', $position = null )
	{
		add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $callback, $position );
		do_action( 'wpe_submenu_page' );
	}

	public static function health_info ()
	{
		$list = apply_filters( 'wpe/register/admin_pages/health_info', HealthInfo::constructor() );
		$list = array_filter( $list );
		return $list;
	}

	public static function css ( $list )
	{
		return wp_parse_args( [ 'wpessential', 'element-ui', 'nprogress', 'wpessential-admin' ], $list );
	}

	public static function js ( $list )
	{
		return wp_parse_args( [ 'vue', 'vue-router', 'element-ui', 'nprogress', 'wpessential-admin' ], $list );
	}

	public static function localization ( $list )
	{
		$time = date( 'H' );
		if ( $time >= '1' ) {
			$time_msg = __( 'Good Morning', 'wpessential' );
		} elseif ( $time >= '12' ) {
			$time_msg = __( 'Good Afternoon', 'wpessential' );
		} else {
			$time_msg = __( 'Good Evening', 'wpessential' );
		}

		$admin_pages = [
			'admin_pages' => [
				'home'          => [
					'menu_title' => __( 'Home', 'wpessential' ),
					'page_title' => sprintf( __( '%s %s', 'wpessential' ), $time_msg, ucwords( str_replace( [ '_', '-' ], ' ', get_bloginfo( 'name' ) ) ) ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'ver_bag'    => [
						'ver'   => WPE_VERSION,
						'title' => __( 'Verstion', 'wpessential' )
					],
					'path'       => '/',
					'component'  => 'index'
				],
				'health'        => [
					'menu_title' => __( 'Health', 'wpessential' ),
					'page_title' => __( 'Health Check And Info', 'wpessential' ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'path'       => '/health-info',
					'component'  => 'health'
				],
				'theme_options' => [
					'menu_title' => __( 'Theme options', 'wpessential' ),
					'page_title' => __( 'Theme Options', 'wpessential' ),
					'page_desc'  => __( 'Theme customization options.', 'wpessential' ),
					'path'       => '/theme',
					'component'  => 'options'
				]
			]
		];
		$admin_pages = apply_filters( 'wpe/register/admin_pages/routes_info', $admin_pages );

		return wp_parse_args(
			$admin_pages,
			$list
		);
	}
}
