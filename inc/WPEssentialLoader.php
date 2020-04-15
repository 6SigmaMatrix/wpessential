<?php

namespace WPEssential;

class WPEssentialLoader
{
    public static function constructor ()
    {
        self::constants();
        self::includes();
        self::autoload();
        self::start();
        add_action( 'init', [ __CLASS__, 'initialize' ] );
        add_action( 'widgets_init', [ '\WPEssential\Utility\WPEssentialWidgets', 'constructor' ] );
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
         * Plugin debug
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_DEBUG' ) ) {
            define( 'WPE_DEBUG', false );
        }

        /**
         * WPEssential Plugin dir
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_DIR' ) ) {
            define( 'WPE_DIR', WP_PLUGIN_DIR . '/wpessential' );
        }

        /**
         * WPEssential Plugin url
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_URL' ) ) {
            define( 'WPE_URL', WP_PLUGIN_URL . '/wpessential' );
        }

        /**
         * WPEssential Plugin dir
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_DIR' ) ) {
            define( 'WPE_DIR', WP_PLUGIN_DIR . '/wpessential' );
        }

        /**
         * WPEssential Emotion React Plugin dir
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_ER_DIR' ) ) {
            define( 'WPE_ER_DIR', WP_PLUGIN_DIR . '/wpessential-emotion-react' );
        }

        /**
         * WPEssential Emotion React Plugin url
         *
         * @since  1.0.0
         */
        if ( !defined( 'WPE_ER_URL' ) ) {
            define( 'WPE_ER_URL', WP_PLUGIN_URL . '/wpessential-emotion-react' );
        }
    }

    public static function autoload ()
    {
        $psr = [
            'WPEssential\\'    => WPE_DIR . '/inc/',
            'WPEssential\ER\\' => WPE_ER_DIR . '/inc/',
        ];

        $class_loader = new Utility\WPEssentialClassLoader;

        foreach ( $psr as $prefix => $paths ) {
            $class_loader->setPsr4( $prefix, $paths );
        }

        $class_loader->register();

    }

    public static function includes ()
    {
        require_once WPE_DIR . '/inc/Utility/WPEssentialClassLoader.php';
        require_once WPE_DIR . '/inc/functions.php';
    }

    public static function start ()
    {
        new Utility\WPEssentialRequesting();
        Utility\WPEssentialRegisterAssets::constructor();
        Utility\WPEssentialEnqueue::constructor();
        Panel\WPEssentialPanel::constructor();
        Utility\WPEssentialWPShortcodes::constructor();
        do_action( 'wpe' );

    }

    public static function initialize ()
    {
        do_action( 'wpe_init' );
        load_plugin_textdomain( 'wpessential', false, WPE_DIR . '/language' );
    }

    public static function options ()
    {
        return get_option( WPE_SETTINGS, [] );
    }

    public static function options_update ( array $data )
    {
        $options = wp_parse_args( $data, self::options() );
        $boolean = (bool) update_option( WPE_SETTINGS, $options );
        if ( $boolean ) {
            return true;
        } else {
            wp_send_json_error( __( 'Data did not stored. It have an error found in data.', 'wpessential' ) );
        }
    }
}

