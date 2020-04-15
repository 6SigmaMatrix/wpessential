<?php

namespace WPEssential\Utility;

class WPEssentialHelp
{
    public static function constructor ()
    {
        apply_filters( 'wpe_dir', [ __CLASS__, 'dir' ], 10 );
        apply_filters( 'wpe_uri', [ __CLASS__, 'uri' ], 10 );
    }

    public static function array_to_chunk ( $data, $size )
    {
        return array_chunk( $data, $size );
    }
}
