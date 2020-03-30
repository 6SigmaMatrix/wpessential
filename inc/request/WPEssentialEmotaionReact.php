<?php

namespace WPEssential\Inc\Request;

use WPE\Plugins\Emotion\WPE_ER_DB;

class WPEssentialEmotaionReact
{
    public function __construct ()
    {
        add_action( 'wp_ajax_er_ajax', [ $this, 'ajax_handler' ] );
        add_action( 'wp_ajax_nopriv_er_ajax', [ $this, 'ajax_handler' ] );
    }

    public function ajax_handler ()
    {
        $method = wpe_set( $_REQUEST, 'subaction' );
        if ( method_exists( $this, $method ) ) {
            $this->$method();
        }
        exit;
    }

    public function login_ajax ()
    {
        check_ajax_referer( 'er_ajax_nonce', 'security' );
        $info                    = [];
        $info[ 'user_login' ]    = wpe_set( $_POST, 'user' );
        $info[ 'user_password' ] = wpe_set( $_POST, 'pass' );
        $user_signon             = wp_signon( $info, false );
        if ( is_wp_error( $user_signon ) ) {
            wp_send_json_error( $user_signon->get_error_message() );
        } else {
            wp_send_json_success( '<div class="alert alert-success">' . esc_html__( 'Login successful, redirecting...', 'wpe-emotion-react' ) . '</div>' );
        }
    }

    public function reaction_process ()
    {
        check_ajax_referer( 'er_ajax_nonce', 'security' );

        WPE_ER_DB::insert();
    }
}
