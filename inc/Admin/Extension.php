<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Extension
{
	public static function init ()
	{
		return [
			'extensions' => apply_filters( 'wpe/register/admin_pages/options/extension_options/tabs', [
				[
					'img'         => 'https://ps.w.org/edd-blocks/assets/icon.svg?rev=1977109',
					'title'       => 'Easy Digital Downloads – Blocks',
					'link'        => 'https://google.com',
					'rating'      => 4.5,
					'description' => 'EDD Blocks adds a "Downloads" block to the new WordPress editor, also knownas Gutenberg.',
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
			] ),
		];
	}
}
