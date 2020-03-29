<?php

if ( !function_exists( 'wpe_get' ) ) {
    function wpe_get ( $var, $key, $def = null )
    {
        if ( is_object( $var ) ) {
            $var = (array) $var;
        }
        return \WPEssential\Inc\Utility\WPEssentialArray::get( $var, $key, $def );
    }

}
