<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Extension
{
	public static function constructor ()
	{
		return apply_filters( 'wpe/register/admin_pages/route/extensions', [
			'menu_title' => __( 'Extension', 'wpessential' ),
			'page_title' => __( 'WPE Extensions', 'wpessential' ),
			'page_desc'  => __( 'Extend your WordPress experience with 58,257 plugins.', 'wpessential' ),
			'route'      => [
				'path'      => '/extensions',
				'component' => [ 'template' => '<wpe-extensions></wpe-extensions>' ],
				'name'      => 'extensions'
			],
			'options'    => apply_filters( 'wpe/register/admin_pages/route/extensions/options', [
				[
					'img'         => 'https://ps.w.org/edd-blocks/assets/icon.svg?rev=1977109',
					'title'       => 'Easy Digital Downloads – Blocks',
					'link'        => 'https://google.com',
					'rating'      => 4.5,
					'description' => 'EDD Blocks adds a "Downloads" block to the new WordPress editor, also known Gutenberg.',
					'author'      => 'WPEssential',
					'active'      => '30000',
					'wp_tested'   => '5.9.2',
					'php_tested'  => '8.2',
					'type'        => 'Free'
				],
				[
					'img'         => 'https://ps.w.org/edd-blocks/assets/icon.svg?rev=1977109',
					'title'       => 'Digital Downloads – Blocks',
					'link'        => 'https://google.com',
					'rating'      => 2.0,
					'description' => 'EDD Blocks adds a "Downloads" block to the new WordPress editor, also knownas Gutenberg.',
					'author'      => 'WPEssential',
					'active'      => '30000',
					'wp_tested'   => '5.9.2',
					'php_tested'  => '8.2',
					'type'        => 'Pro'
				],
				[
					'img'         => 'https://ps.w.org/edd-blocks/assets/icon.svg?rev=1977109',
					'title'       => 'Digital Downloads – Blocks',
					'link'        => 'https://google.com',
					'rating'      => 3.4,
					'description' => 'EDD Blocks adds a "Downloads" block to the new WordPress editor, also knownas Gutenberg.',
					'author'      => 'WPEssential',
					'active'      => '30000',
					'wp_tested'   => '5.9.2',
					'php_tested'  => '8.2',
					'type'        => 'Pro+'
				]
			] )
		] );
	}
}
