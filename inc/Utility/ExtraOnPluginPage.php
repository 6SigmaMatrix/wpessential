<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class ExtraOnPluginPage
{
	/**
	 * Donate links
	 *
	 * @string $donate_link_paypal
	 * @string $donate_link_patreon
	 */
	private static $donate_link_paypal  = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AJABLMWDF4RR8&source=url';
	private static $donate_link_patreon = 'https://www.patreon.com/WPEssential';

	public static function constructor ()
	{
		add_filter( 'plugin_action_links_wpessential/wpessential.php', [ __CLASS__, 'plugin_action_links' ] );
	}

	public static function plugin_action_links ( $links )
	{
		$plugin_links = [
			//			'<a href="' . self::$donate_link_paypal . '" target="_blank">' . __( 'Donate (Paypal)', 'wpessential' ) . '</a>',
			'<a style="color:#007d93;font-weight:700;" href="' . self::$donate_link_patreon . '" target="_blank">' . __( 'Donate on Patreon', 'wpessential' ) . '</a>',
		];

		return wp_parse_args( $plugin_links, $links );
	}
}
