<?php

namespace WPEssential\Panel;

/**
 * WPE_Init.
 * An final class to load the WPEssential necessary files.
 *
 * @see     https://wpessential.info/wpessential/
 * @package WPEssentil/elementor
 * @final
 * @since   1.0.0
 * @version 1.0.0
 */
class WPEssentialPanel
{

    /**
     * Constructer
     *
     * @since  0.0.5
     * @access public
     */
    public static function constructor ()
    {
        add_action( 'admin_menu', [ __CLASS__, 'add_menu_page' ] );
    }


    public static function add_menu_page ()
    {
        $page_title = __( 'WPEssential', 'wpessential' );
        add_menu_page( $page_title, $page_title, 'manage_options', 'wpessential', [ __CLASS__, 'wpe_page_view' ], '', 2 );

        do_action( 'wpe_menu_page' );
    }

    public static function wpe_page_view ()
    {
        /* $file_location = apply_filters( 'WPE_dir_extract', 'welcome@view@view' );
         $file_location = apply_filters( 'WPE_directory', "{$file_location}.php" );
         if ( file_exists( "{$file_location}" ) ) {
             require_once "{$file_location}";
         }*/
    }
}

