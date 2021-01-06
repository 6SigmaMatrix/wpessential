<?php

namespace WPEssential\Plugins\Utility;

final class AdminMenu
{
	public static function constructor ()
	{
		add_action( 'admin_menu', [ __CLASS__, 'register' ] );
		add_filter( 'wpe/admin_page/css', [ __CLASS__, 'css' ], 10 );
		add_filter( 'wpe/admin_page/js', [ __CLASS__, 'js' ], 10 );
	}

	public static function register ()
	{
		$menu_args = apply_filters( 'wpe/register/menu_pages', [
			[
				'page_title' => __( 'WPEssential', 'wpessential' ),
				'menu_title' => __( 'WPEssential', 'wpessential' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'wpessential',
				'callback'   => [ __CLASS__, 'view' ],
				'icon_url'   => '',
				'position'   => 2
			]
		] );
		$menu_args = array_filter( $menu_args );
		if ( $menu_args && is_array( $menu_args ) ) {
			foreach ( $menu_args as $menu ) {
				call_user_func_array( [ __CLASS__, 'add_menu_pages' ], $menu );
			}
		}
	}

	public static function add_menu_pages ( $page_title, $menu_title, $manage_options, $menu_slug = 'wpessential', $callback, $icon = '', $position = '' )
	{
		add_menu_page( $page_title, $menu_title, $manage_options, $menu_slug, $callback, $icon, $position );
		do_action( 'wpe_menu_page' );
	}

	public static function view ()
	{
		?>
        <div class="wpe-container" style="display: block;width: 100%;margin: 0 auto;text-align: center;height: 100vh;">
            <img style="transform: translateY(50%);" src="<?php echo esc_url( 'https://ps.w.org/wpessential/assets/banner-772x250.jpg' ); ?>" alt="<?php esc_attr_e( 'banner-logo', 'wpessential' ); ?>">
        </div>
		<?php
	}

	public static function css ( $list )
	{
		$list = wp_parse_args( $list, [] );
		return $list;
	}

	public static function js ( $list )
	{
		$list = wp_parse_args( $list, [] );
		return $list;
	}
}
