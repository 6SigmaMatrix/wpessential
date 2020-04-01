<?php

namespace WPEssential\Utility;

class WPEssentialEnqueue
{

    public static function constructor ()
    {
        add_action( 'wp_enqueue_scripts', [ __CLASS__, 'front_end' ], 300 );
        add_action( 'admin_print_scripts', [ __CLASS__, 'back_end' ], 300 );
    }

    public static function front_end ()
    {
        self::localiztion();
        do_action( 'wpe_enqueue_before' );
        do_action( 'wpe_enqueue_after' );
    }

    public static function back_end ()
    {
        self::localiztion();
        do_action( 'wpe_admin_enqueue_before' );
        do_action( 'wpe_admin_enqueue_after' );
    }

    public static function localiztion ()
    {
        $localization = [
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'weburl'  => WPE_URL,
            'nonce'   => wp_create_nonce( 'wpe_request_nonce' ),
        ];
        $localization = apply_filters( 'wpe_loco', $localization );
        wp_localize_script( 'jquery', 'WPEssential', $localization );
    }

    public static function register_script ()
    {
        $minify = self::minify_check();
        $list   = [
            'crypt_1' => WPE_URL . "/assts/js/crypt.{$minify}",
            'crypt_2' => WPE_URL . "/assts/js/encryption.{$minify}",
            'crypt_2' => WPE_URL . "/assts/js/wpessential.{$minify}",
        ];
    }

    public static function minify_check ()
    {
        if ( WP_DEBUG == true || WPE_DEBUG == true ) {
            $minify = 'min.js';
        } else {
            $minify = 'js';
        }
    }


}
