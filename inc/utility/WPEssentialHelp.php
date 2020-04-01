<?php

namespace WPEssential\Utility;

class WPEssentialHelp
{
    public static function constructor ()
    {
        apply_filters( 'wpe_dir', [ __CLASS__, 'dir' ], 10 );
        apply_filters( 'wpe_uri', [ __CLASS__, 'uri' ], 10 );
    }

    public static function dir ( $dir = '' )
    {
        return plugin_dir_path( __FILE__ ) . $dir;
    }

    public static function uri ( $dir = '' )
    {
        return plugin_dir_path( __FILE__ ) . $dir;
    }
}
