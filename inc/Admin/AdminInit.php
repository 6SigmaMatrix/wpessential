<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Peast\Syntax\Token;
use WPEssential\Plugins\Admin\ImportExport\WithMediaExport;

final class AdminInit
{
	public static function constructor ()
	{
		self::run();
		add_action( 'admin_print_scripts-toplevel_page_wpessential', function () {
			add_filter( 'wpe/localization', [ __CLASS__, 'localization' ], 13 );
		}, );

		WithMediaExport::constructor();
	}

	public static function run ()
	{
		Pages::constructor();
		MetaBox::constructor();
	}

	public static function localization ( $list )
	{
		$time = date( 'H' );
		if ( $time >= '1' ) {
			$time_msg = __( 'Good Morning', 'wpessential' );
		}
		elseif ( $time >= '12' ) {
			$time_msg = __( 'Good Afternoon', 'wpessential' );
		}
		else {
			$time_msg = __( 'Good Evening', 'wpessential' );
		}

		//License::remove_info();
		/*$token_info   = License::token() ?? [];
		$token_verify = Auth::authorized_token( $token_info );
		$token_verify = wpe_josn_decode( $token_verify, true );
		if ( wpe_array_get( $token_info, 'token' ) && wpe_array_get( $token_verify, 'user' ) ) {*/

		$admin_pages = [
			'admin_pages' => [
				'home_page'  => apply_filters( 'wpe/register/admin_pages/route/redirect', [
					'route' => apply_filters( 'wpe/register/admin_pages/routes_info/redirect/route', [
						'path'     => '/',
						'redirect' => '/home'
					] ),
				] ),
				'home'       => apply_filters( 'wpe/register/admin_pages/route/home', [
					'menu_title' => __( 'Home', 'wpessential' ),
					'page_title' => sprintf( __( '%s %s', 'wpessential' ), $time_msg, ucwords( str_replace( [
						'_',
						'-'
					], ' ', get_bloginfo( 'name' ) ) ) ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'ver_bag'    => [
						'ver'   => WPE_VERSION,
						'title' => __( 'Version', 'wpessential' )
					],
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/home/route', [
						'path'      => '/home',
						'component' => [ 'template' => '<WpeHome></WpeHome>' ],
						'name'      => 'home'
					] ),
				] ),
				'health'     => apply_filters( 'wpe/register/admin_pages/route/health', [
					'menu_title' => __( 'Health', 'wpessential' ),
					'page_title' => __( 'Health Check And Info', 'wpessential' ),
					'page_desc'  => __( 'Health Check And Info', 'wpessential' ),
					'route'      => apply_filters( 'wpe/register/admin_pages/routes_info/health/route', [
						'path'      => '/health-info',
						'component' => [ 'template' => '<WpeHealth></WpeHealth>' ],
						'name'      => 'health'
					] ),
				] ),
				'extensions' => Extension::constructor(),
				'plugins'    => Plugins::constructor(),
			]
		];
		if ( \defined( 'WPE_THEME' ) === true ) {
			$admin_pages[ 'admin_pages' ][ 'theme' ] = Theme::constructor();
		}
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
		$admin_pages = apply_filters( 'wpe/register/admin_pages/routes', $admin_pages );

		return wp_parse_args(
			$admin_pages,
			$list
		);
	}
}
