<?php

namespace WPEssential\Builders\WordPress\Implement;


interface Shortcodes
{
    public static function constructor ();

    public static function register ( $list );

    public static function rand ( $atts, $content = null );

    public static function enqueue ();

    public static function css ();

    public static function js ();
}
