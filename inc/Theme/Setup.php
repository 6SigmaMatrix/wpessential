<?php

namespace WPEssential\Plugins\Theme;

final class Setup
{
	public static function constructor ()
	{
		add_action( 'after_setup_theme', [ __CLASS__, 'regiter' ], 2000 );
	}

	public static function regiter ()
	{
		Support::constructor();
		Images::constructor();
		Sidebars::constructor();
		Widget::constructor();
		Editor::constructor();
	}
}
