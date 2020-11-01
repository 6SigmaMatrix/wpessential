<?php

namespace WPEssential\Plugins\Themes;

final class Setup
{
	public static function constructor ()
	{
		add_action( 'after_setup_themes', [ __CLASS__, 'run_setup' ], 2000 );
	}

	public static function run_setup ()
	{
		Support::constructor();
		Images::constructor();
		Sidebars::constructor();
		Widget::constructor();
	}
}
