<?php

namespace WPEssential\Inc\Utility;

class WPEssentialWidgets
{
    public static function constructor ()
    {
        self::collected();
    }

    public static function collected ()
    {
        $list = apply_filters( 'wpe/widgets', [] );
        
        if ( !$list ) {
            return;
        }

        foreach ( $list as $widget ) {
            register_widget( $widget );
        }
    }
}
