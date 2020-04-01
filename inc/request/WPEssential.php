<?php

namespace WPEssential\Request;

use WPEssential\Utility;

class WPEssential
{
    public function __construct ()
    {
        add_action( 'wp_ajax_nopriv_auth', [ $this, 'login' ] );
    }

    public function login ()
    {
        check_ajax_referer( 'nonce', 'security' );

        $data                    = [];
        $data[ 'user_login' ]    = sanitize_text_field( wpe_get( $_POST, 'user' ) );
        $data[ 'user_password' ] = wpe_get( $_POST, 'pass' );

        Utility\WPEssentialAuth::authorized( $data );
    }

    public static function registrar ()
    {

    }
}
