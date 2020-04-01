<?php

namespace WPEssential\Utility;

use WPEssential\Request;

class WPEssentialRequesting
{
    public static function constructor ()
    {
        add_action( 'wpe', [ __CLASS__, 'wpessential' ], 0 );
        add_action( 'wpe_emotion_react', [ __CLASS__, 'emotionReact', 0 ] );
        add_action( 'wpe_blog_post', [ __CLASS__, 'blogPost', 0 ] );
    }

    public static function emotionReact ()
    {
        new Request\WPEssentialEmotaionReact();
    }

    public static function blogPost ()
    {
        new Request\WPEssentialEmotaionReact();
    }

    public static function wpessential ()
    {
        new Request\WPEssential();
    }
}
