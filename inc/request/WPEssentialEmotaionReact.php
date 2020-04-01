<?php

namespace WPEssential\Request;

use WPEssential\ER\Utility\WPEssentialERDB;

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

    public function reaction_process ()
    {
        check_ajax_referer( 'er_ajax_nonce', 'security' );

        WPEssentialERDB::insert();
    }
}
