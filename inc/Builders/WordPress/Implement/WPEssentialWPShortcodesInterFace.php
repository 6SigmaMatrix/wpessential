<?php

namespace WPEssential\Builders\WordPress\Implement;


interface WPEssentialWPShortcodesInterFace
{
    public static function constructor ();

    public static function register ( $list );

    public static function rand ( $atts, $content = null );

    public static function enqueue ();

    public static function css ( $list );

    public static function js ( $list );
}
