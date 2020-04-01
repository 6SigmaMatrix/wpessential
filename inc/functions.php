<?php

if ( !function_exists( 'wpe_get' ) ) {
    function wpe_get ( $var, $key, $def = null )
    {
        if ( is_object( $var ) ) {
            $var = (array) $var;
        }
        return \WPEssential\Utility\WPEssentialArray::get( $var, $key, $def );
    }

}

if ( !function_exists( 'wpe_template_url' ) ) {
    function wpe_template_url ( $path )
    {
        $find_in_theme = get_theme_file_path( $path );
        if ( $find_in_theme ) {
            return $find_in_theme;
        } else {
            return WP_PLUGIN_DIR . "/{$path}";
        }
    }

}

if ( !function_exists( 'wpe_error' ) ) {
    function wpe_error ( $error )
    {
        return new \WP_Error( '', $error );
    }
}
