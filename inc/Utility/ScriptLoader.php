<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Javascript Loader Class
 *
 * Allow `async` and `defer` while enqueuing Javascript.
 */
class ScriptLoader
{
	public static function constructor ()
	{
		add_filter( 'script_loader_tag', [ __CLASS__, 'register' ], 10, 2 );
	}

	/**
	 * Adds async/defer attributes to enqueued / registered scripts.
	 *
	 * If #12009 lands in WordPress, this function can no-op since it would be handled in core.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12009
	 *
	 * @param string $tag    The script tag.
	 * @param string $handle The script handle.
	 *
	 * @return string Script HTML string.
	 */
	public static function register ( $tag, $handle )
	{
		foreach ( self::extra_tags() as $attr ) {
			if ( ! wp_scripts()->get_data( $handle, $attr ) ) {
				continue;
			}
			// Prevent adding attribute when already added in #12009.
			if ( ! preg_match( ":\s$attr(=|>|\s):", $tag ) ) {
				$tag = preg_replace( ':(?=></script>):', " $attr", $tag, 1 );
			}
			// Only allow async or defer, not both.
			break;
		}
		return $tag;
	}

	public static function extra_tags ()
	{
		return apply_filters( 'wpe/register/script/extra/tags', [ 'async', 'defer' ] );
	}
}
