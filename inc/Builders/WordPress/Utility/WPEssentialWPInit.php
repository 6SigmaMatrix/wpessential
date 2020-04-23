<?php

namespace WPEssential\Builders\WordPress\Utility;

use WPEssential\Builders\WordPress\Implement\WPEssentialWordPressInterFace as WPEApply;
use WPEssential\Builders\WordPress\Shortcodes\WPEssentialWPPost as Post;

class WPEssentialWPInit implements WPEApply
{
    public static function constructor ()
    {
        self::load_classes();
        self::registry();
    }

    public static function registry ()
    {
        $list = apply_filters( 'wpe/wordpress/shortcodes', [] );
        if ( !$list ) {
            return;
        }
        foreach ( $list as $tag => $function ) {
            add_shortcode( $tag, $function );
        }
    }

    public static function load_classes ()
    {
        Post::constructor();
    }
}
