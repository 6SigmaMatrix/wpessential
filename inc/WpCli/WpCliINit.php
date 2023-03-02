<?php

namespace WPEssential\Plugins\WpCli;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class WpCliINit
{
	public static function constructor ()
	{
		add_action( 'cli_init', [ __CLASS__, 'register' ] );
	}

	public static function register ()
	{
		RegisterTheme::constructor();
		Images::constructor();
	}
}
