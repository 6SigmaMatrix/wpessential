<?php

namespace WPEssential\Plugins\Builders\WordPress;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Builders\WordPress\Shortcodes\Heading;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Image;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Post;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Accordians;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\BreadCrums;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Button;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\EmptySpace;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Gallery;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Icons;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Lists;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\Navigation;
use WPEssential\Plugins\Builders\Wordpress\Shortcodes\Search;
use WPEssential\Plugins\Builders\Wordpress\Shortcodes\Share;
use WPEssential\Plugins\Builders\Wordpress\Shortcodes\Slider;
use WPEssential\Plugins\Builders\Wordpress\Shortcodes\Tabs;
use WPEssential\Plugins\Builders\WordPress\Shortcodes\TextEditor;





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
			'Post'      => Post::class,
			'Heading'   => Heading::class,
			'Image'     => Image::class,
			'Accordians'=> Accordians::class,
			'BreadCrums'=> BreadCrums::class,
			'Button'    => Button::class,
			'EmptySpace'=> EmptySpace::class,
			'Gallery'   => Gallery::class,
			'Icons'     => Icons::class,
			'Lists'     => Lists::class,
			'Navigation'=> Navigation::class,
			'Search'    => Search::class,
			'Share'     => Share::class,
			'Slider'    => Slider::class,
			'Tabs'      => Tabs::class,
			'TextEditor'=> TextEditor::class,
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
