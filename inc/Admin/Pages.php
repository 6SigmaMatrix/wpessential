<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Pages
{
	public static function constructor ()
	{
		add_action( 'admin_menu', [ __CLASS__, 'register' ] );
	}

	public static function register ()
	{
		self::menu();
		self::submenu();
		self::submneu_custom_link();
	}

	private static function menu ()
	{
		$menu_args = array_filter( apply_filters( 'wpe/register/admin_pages/main_nav', [
			apply_filters( 'wpe/register/admin_pages/main_nav/wpessential',
				[
					'page_title' => __( 'WPEssential', 'wpessential' ),
					'menu_title' => __( 'WPEssential', 'wpessential' ),
					'capability' => 'manage_options',
					'menu_slug'  => 'wpessential',
					'callback'   => [ __CLASS__, 'view' ],
					'icon_url' => WPE_URL . '/assets/svgs/plugin_icon.svg',
					'position'   => 2
				]
			)
		] ) );

		if ( ! empty( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				\call_user_func_array( [ __CLASS__, 'add_menu_pages' ], $menu );
			}
		}
	}

	private static function submenu ()
	{
		$submenu_args = array_filter( apply_filters( 'wpe/register/admin_pages/submenu_nav', [
			apply_filters( 'wpe/register/admin_pages/submenu_nav/wpessential',
				[
					'parent_slug' => 'wpessential',
					'page_title'  => __( 'Dashboard', 'wpessential' ),
					'menu_title'  => __( 'Dashboard', 'wpessential' ),
					'capability'  => 'manage_options',
					'menu_slug'   => 'wpessential',
					'callback'    => [ __CLASS__, 'view' ],
					'position'    => 0
				]
			)
		] ) );

		if ( ! empty( $submenu_args ) ) {
			foreach ( $submenu_args as $menu ) {
				\call_user_func_array( [ __CLASS__, 'add_submenu_pages' ], $menu );
			}
		}
	}

	/*
	 * [
				'parent' => 'wpessential',
				'title'  => __( 'Health', 'wpessential' ),
				'access' => 'manage_options',
				'link'   => admin_url( 'admin.php?page=wpessential#/health' ),
			]
	 * */
	private static function submneu_custom_link ()
	{
		global $submenu;

		$menus = apply_filters( 'wpe/register/admin_pages/submenu_nav_custom', [
			[
				'parent' => 'wpessential',
				'title'  => __( 'Health', 'wpessential' ),
				'access' => 'manage_options',
				'link'   => admin_url( 'admin.php?page=wpessential#/health-info' ),
			],
			[
				'parent' => 'wpessential',
				'title'  => __( 'Extension', 'wpessential' ),
				'access' => 'manage_options',
				'link'   => admin_url( 'admin.php?page=wpessential#/extensions' ),
			],
			[
				'parent' => 'wpessential',
				'title'  => __( 'Plugin Options', 'wpessential' ),
				'access' => 'manage_options',
				'link'   => admin_url( 'admin.php?page=wpessential#/plugins' ),
			]
		] );

		if ( ! empty( $menus ) ) {
			foreach ( $menus as $menu ) {
				$parent_name   = wpe_array_get( $menu, 'parent' );
				$selected_menu = wpe_array_get( $submenu, $parent_name );
				unset( $menu[ 'parent' ] );
				$selected_menu[]         = array_values( $menu );
				$submenu[ $parent_name ] = $selected_menu;
			}
		}
	}

	public static function add_menu_pages ( $page_title, $menu_title, $capability, $menu_slug = 'wpessential', $callback = '', $icon_url = WPE_URL . '/assets/svgs/plugin_icon.svg', $position = null )
	{
		add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $callback, $icon_url, $position );
		do_action( 'wpe_menu_page' );
	}

	public static function add_submenu_pages ( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $callback = '', $position = null )
	{
		add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $callback, $position );
		do_action( 'wpe_submenu_page' );
	}

	public static function view ()
	{
		?>
		<div class="wpessential-admin wpe-container-fluid" id="wpessential-admin"><App></App></div>
		<?php
	}
}
