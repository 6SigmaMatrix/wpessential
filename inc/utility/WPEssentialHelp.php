<?php

namespace WPEssential\Utility;

class WPEssentialHelp
{
	public static function constructor ()
	{
		add_action( 'wpe/post/loop/post_thumbnail', [ __CLASS__, 'loop_thumbnail' ] );
		add_action( 'wpe/post/loop/title', [ __CLASS__, 'loop_title' ] );
		add_action( 'wpe/post/loop/meta', [ __CLASS__, 'loop_meta' ] );
		add_action( 'wpe/post/loop/readmore', [ __CLASS__, 'loop_readmore' ] );
	}

	public static function array_to_chunk ( $data, $size )
	{
		return array_chunk( $data, $size );
	}

	public static function loop_thumbnail ()
	{
		include wpe_template_url( 'templates/global/post-thumbnail.php' );
	}

	public static function loop_title ()
	{
		include wpe_template_url( 'templates/global/title.php' );
	}

	public static function loop_meta ()
	{
		include wpe_template_url( 'templates/global/meta.php' );
	}

	public static function loop_readmore ()
	{
		include wpe_template_url( 'templates/global/readmore.php' );
	}
}
