<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class RegisterMenus
{
	public static function constructor ()
	{
		add_action( 'admin_menu', [ __CLASS__, 'register' ] );
	}

	public static function register ()
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
}
