<?php

namespace WPEssential\Inc;

class WPEssentialLoader
{
    public static function constructor ()
    {
        self::constants();
        self::includes();
        self::autoload();
        self::start();
    }

    public static function constants ()
    {
        /**
         * Plugin DB settings
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_SETTINGS' ) ) {
            define( 'WPE_SETTINGS', 'wpe_st' );
        }

        /**
         * Plugin Version
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_VERSION' ) ) {
            define( 'WPE_VERSION', '1.0.0' );
        }

        /**
         * WPEssential Plugin dir
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_DIR' ) ) {
            define( 'WPE_DIR', WP_PLUGIN_DIR . '/wpessential' );
        }
    }

    public static function autoload ()
    {
        $inc_dir = WPE_DIR . '/inc';

        $psr = [
            'WPEssential\\' => [ $inc_dir ],
        ];

        $class_loader = new \WPEssential\Inc\Utility\WPEssentialClassesLoader;

        foreach ( $psr as $prefix => $paths ) {
            $class_loader->setPsr4( $prefix, $paths );
        }

        $class_loader->register();

    }

    public static function includes ()
    {
        require_once WPE_DIR . '/inc/Utility/WPEssentialClassesLoader.php';
        require_once WPE_DIR . '/inc/functions.php';
    }

    public static function start ()
    {
        do_action( 'wpe' );
    }
}

