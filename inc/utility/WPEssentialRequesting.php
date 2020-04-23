<?php

namespace WPEssential\Utility;

class WPEssentialRequesting
{
    public function __construct ()
    {
        add_action( 'wp_ajax_nopriv_auth', [ $this, 'login' ] );
        add_action( 'wp_ajax_settings_args', [ $this, 'settings_args' ] );
    }

    public function login ()
    {
        check_ajax_referer( 'wpe_request_nonce', 'security' );

        $data                    = [];
        $data[ 'user_login' ]    = sanitize_text_field( wpe_array_get( $_POST, 'user' ) );
        $data[ 'user_password' ] = wpe_array_get( $_POST, 'pass' );

        Utility\WPEssentialAuth::authorized( $data );
    }

    public static function registrar ()
    {

    }

    public static function settings_args ()
    {
        check_ajax_referer( 'wpe_request_nonce', 'nonce' );

        $settings = apply_filters( 'wpe/settings/args', [] );
        wp_send_json_success( $settings );
    }
}
