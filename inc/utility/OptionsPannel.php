<?php

namespace WPEssential\Plugins\Utility;

final class OptionsPannel
{
	public static function constructor ()
	{
		self::init();
	}

	private static function init ()
	{
		if ( class_exists( 'Kirki' ) && defined( 'WPE_KIRKI' ) && true === WPE_KIRKI ) {
			Kirki::constructor();
		}
	}
}
