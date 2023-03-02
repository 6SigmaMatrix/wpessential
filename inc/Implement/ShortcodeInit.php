<?php

namespace WPEssential\Plugins\Implement;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

interface ShortcodeInit
{
	public static function constructor ();

	public static function registry_widget ( $list = '' );
}
