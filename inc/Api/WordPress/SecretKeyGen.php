<?php

namespace WPEssential\Plugins\Api\WordPress;

final class SecretKeyGen extends Base
{
	private static string $branch = 'secret-key/';

	public static function constructor ( $ver = 'last' )
	{
		$ver = ( 'last' !== $ver ) ? str_replace( '.', '_', $ver ) : $ver;
		return call_user_func( [ __CLASS__, "key_{$ver}" ] );
	}

	public static function key_1_0 ()
	{
		$content = wp_remote_get( parent::$base . self::$branch . '1.1/' );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}

	public static function key_1_1 ()
	{
		$content = wp_remote_get( parent::$base . self::$branch . '1.1/' );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}

	public static function key_last ()
	{
		$content = wp_remote_get( parent::$base . self::$branch . '1.1/salt/' );
		$content = wpe_array_get( $content, 'body' );
		return $content;
	}
}
