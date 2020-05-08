<?php

namespace WPEssential\Builders\WordPress\Shortcodes;

use WPEssential\Builders\WordPress\Implement\Shortcodes as Implement;
use WPEssential\Builders\WordPress\Helper\Shortcodes as Traits;

class Post implements Implement
{
	use Traits;

	public static function constructor ()
	{
		add_filter( 'wpe/wordpress/shortcodes', [ __CLASS__, 'register' ], 11 );
	}

	public static function register ( $list )
	{
		$list = wp_parse_args(
			[
				'WPE_Post' =>
					[
						'\\WPEssential\\Builders\\WordPress\\Shortcodes\\Post',
						'rand'
					]
			],
			$list
		);
		return $list;
	}

	public static function rand ( $atts, $content = null )
	{
		self::enqueue();
		$atts = apply_filters( 'wpe/wordpress/shortcodes/post', $atts );
		extract( shortcode_atts( [
			'count' => 10,
		], $atts ) );

		if ( empty( $atts ) ) {
			return __( 'Please add the shortcode attributes to run the output of [WPE_Post].', 'wpessential' );
		}

		include wpe_template_url( 'templates/wordpress/wpe-post.php' );
	}

	public static function enqueue ()
	{
		add_filter( 'wpe/frontend/css', [ __CLASS__, 'css' ], 11 );
		add_filter( 'wpe/frontend/js', [ __CLASS__, 'js' ], 11 );
	}

	public static function css ( $list )
	{
		// TODO: Implement css() method.
	}

	public static function js ( $list )
	{
		// TODO: Implement js() method.
	}
}
