<?php

namespace WPEssential\Plugins\Builders\WordPress;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Shortcodes\Heading;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Image;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Post;
use WPEssential\Plugins\Builders\WordPress\Utility\PageTemplates;
use WPEssential\Plugins\Implement\ShortcodeInit;
use WPEssential\Plugins\Loader;

final class WordPressInit implements ShortcodeInit
{
	public static function constructor ()
	{
		self::register_widget();
	}

	public static function register_widget ( $list = '' )
	{
		//global $shortcode_tags;
		Loader::editor( 'wordpress' );
		$list = apply_filters( 'wpe/wordpress/shortcodes', [
			'Post'    => Post::class,
			'Heading' => Heading::class,
			'Image'   => Image::class,
		] );
		$list = array_filter( $list );
		if ( ! $list ) {
			return;
		}
		foreach ( $list as $class ) {
			new $class();
		}
	}
}
