<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class FancyBox
{

	private static $config = [];

	public static function consturtor ( $config )
	{
		self::$config = wp_parse_args( $config, self::$config );
	}

	public static function video ( $data )
	{
		$initiator = '';
		return $initiator;
	}

	public static function video_gallery ( $data ) {}

	public static function image ( $data ) {}

	public static function image_gallery ( $data ) {}

	public static function iframe ( $data ) {}

	public static function iframe_gallery ( $data ) {}

	public static function audio ( $data ) {}

	public static function audio_gallery ( $data ) {}
}
