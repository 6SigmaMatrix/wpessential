<?php

namespace WPEssential\Builders\WordPress\Implement;


interface ClassInit
{
    public static function constructor ();

    public static function registry ();

    public static function load_classes ();
}
