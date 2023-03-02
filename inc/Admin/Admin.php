<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Admin\ImportExport\WithMediaExport;

final class Admin
{
	public static function constructor ()
	{
		self::run();

		add_action( 'admin_print_scripts-toplevel_page_wpessential', function ()
		{
			add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 13 );
		}, );

		WithMediaExport::constructor();
	}

	public static function run ()
	{
		Index::constructor();
		MetaBox::constructor();
	}

	public static function health_info ()
	{
		$list = apply_filters( 'wpe/register/admin_pages/health_info', HealthInfo::constructor() );
		$list = array_filter( $list );
		return $list;
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

		//License::remove_info();
		/*$token_info   = License::token() ?? [];
		$token_verify = Auth::authorized_token( $token_info );
		$token_verify = wpe_josn_decode( $token_verify, true );
		if ( wpe_array_get( $token_info, 'token' ) && wpe_array_get( $token_verify, 'user' ) ) {*/
		$admin_pages = [
			'admin_pages' => [
				'home_page'      => apply_filters( 'wpe/register/admin_pages/routes_info/redirect', [
					'route' => apply_filters( 'wpe/register/admin_pages/routes_info/redirect/route', [
						'path'     => '/',
						'redirect' => '/home'
					] ),
				] ),
				'home'           => apply_filters( 'wpe/register/admin_pages/routes_info/home', [
					'menu_title' => __( 'Home', 'wpessential' ),
					'page_title' => sprintf( __( '%s %s', 'wpessential' ), $time_msg, ucwords( str_replace( [ '_', '-' ], ' ', get_bloginfo( 'name' ) ) ) ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'ver_bag'    => [
						'ver'   => WPE_VERSION,
						'title' => __( 'Version', 'wpessential' )
					],
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/home/route', [
						'path'      => '/home',
						'component' => [ 'template' => '<wpe-home></wpe-home>' ],
						'name'      => 'home'
					] ),
				] ),
				'health'         => apply_filters( 'wpe/register/admin_pages/routes_info/health', [
					'menu_title' => __( 'Health', 'wpessential' ),
					'page_title' => __( 'Health Check And Info', 'wpessential' ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/health/route', [
						'path'      => '/health-info',
						'component' => [ 'template' => '<wpe-health></wpe-health>' ],
						'name'      => 'health'
					] ),
				] ),
				'theme_options'  => apply_filters( 'wpe/register/admin_pages/routes_info/theme_options', [
					'menu_title' => __( 'Theme options', 'wpessential' ),
					'page_title' => __( 'Theme Options', 'wpessential' ),
					'page_desc'  => __( 'Theme customization options.', 'wpessential' ),
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/theme_options/route', [
						'path'      => '/theme',
						'component' => [ 'template' => '<wpe-options></wpe-options>' ],
						'name'      => 'theme_options'
					] ),
				] ),
				'plugin_options' => apply_filters( 'wpe/register/admin_pages/routes_info/plugin_options', [
					'menu_title' => __( 'Plugin options', 'wpessential' ),
					'page_title' => __( 'Plugin Options', 'wpessential' ),
					'page_desc'  => __( 'Plugin customization options.', 'wpessential' ),
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/plugin_options/route', [
						'path'      => '/plugin',
						'component' => [ 'template' => '<wpe-options></wpe-options>' ],
						'name'      => 'plugin_options'
					] ),
				] ),
				'extensions'     => apply_filters( 'wpe/register/admin_pages/routes_info/extension_options', [
					'menu_title' => __( 'Extension', 'wpessential' ),
					'page_title' => __( 'WPE Extensions', 'wpessential' ),
					'page_desc'  => __( 'Extend your WordPress experience with 58,257 plugins.', 'wpessential' ),
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/extension_options/route', [
						'path'      => '/extensions',
						'component' => [ 'template' => '<wpe-extensions></wpe-extensions>' ],
						'name'      => 'extensions'
					] ),
				] )
			]
		];
		$admin_pages = apply_filters( 'wpe/register/admin_pages/routes_info', $admin_pages );
		$admin_pages = wp_parse_args( Options::init(), $admin_pages );
		$admin_pages = wp_parse_args( Extension::init(), $admin_pages );
		/*} else {
			$admin_pages = [
				'admin_pages' => [
					'home_page' => apply_filters( 'wpe/register/admin_pages/routes_info/redirect', [
						'route' => apply_filters( 'wpe/register/admin_pages/routes_info/redirect/route', [
							'path'     => '/',
							'redirect' => '/home'
						] ),
					] ),
					'login'     => apply_filters( 'wpe/register/admin_pages/routes_info/license', [
						'menu_title' => __( 'License', 'wpessential' ),
						'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/license/route', [
							'path'      => '/home',
							'component' => [ 'template' => '<wpe-auth></wpe-auth>' ],
							'name'      => 'license'
						] ),
					] )
				]
			];
		}*/
		return wp_parse_args(
			$admin_pages,
			$list
		);
	}
}
