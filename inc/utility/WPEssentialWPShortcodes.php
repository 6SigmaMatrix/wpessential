<?php

namespace WPEssential\Inc\Utility;

class WPEssentialWPShortcodes
{
    public static function constructor ()
    {
        self::collected();
    }

    public static function collected ()
    {
        $list = apply_filters( 'wpe/shortcodes/wordpress', [] );
        if ( !$list ) {
            return;
        }
        foreach ( $list as $tag => $function ) {
            add_shortcode( $tag, $function );
        }
    }
}
