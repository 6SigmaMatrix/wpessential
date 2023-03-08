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
		$menu_args = array_filter( apply_filters( 'wpe/register/admin_pages/main_nav', [
			apply_filters( 'wpe/register/admin_pages/main_nav/wpessential',
				[
					'page_title' => __( 'WPEssential', 'wpessential' ),
					'menu_title' => __( 'WPEssential', 'wpessential' ),
					'capability' => 'manage_options',
					'menu_slug'  => 'wpessential',
					'callback'   => [ __CLASS__, 'view' ],
					'icon_url'   => '',
					'position'   => 2
				]
			)
		] ) );

		if ( ! empty( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				call_user_func_array( [ __CLASS__, 'add_menu_pages' ], $menu );
			}
		}

		$menu_args = array_filter( apply_filters( 'wpe/register/admin_pages/submenu_nav', [
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
		if ( ! empty( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				call_user_func_array( [ __CLASS__, 'add_submenu_pages' ], $menu );
			}
		}
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

	public static function view ()
	{
		?>
		<div class="wpessential-admin wpe-container-fluid">
			<div class="wpe-admin-page" id="wpessential-admin">
				<wpe-navigation></wpe-navigation>
				<router-view></router-view>
			</div>
		</div>
		<?php
	}
}
