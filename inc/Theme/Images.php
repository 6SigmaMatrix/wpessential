<?php

namespace WPEssential\Plugins\Theme;

final class Images
{
	public static function constructor ()
	{
		self::remove();
		self::register();
	}

	public static function register ()
	{
		$images = apply_filters(
			'wpe/register/images/size',
			[
				[
					'name'  => 'wpe_featured_image_1980x9999',
					'size'  => [ 1980, 9999 ],
					'croup' => true
				]
			]
		);

		if ( $images && is_array( $images ) ) {
			foreach ( $images as $image ) {
				add_image_size( $image[ 'name' ], implode( ', ', $image[ 'size' ] ), $image[ 'croup' ] );
			}
		}
	}

	public static function remove ()
	{
		$images = apply_filters( 'wpe/remove/images/size', [] );
		if ( $images ) {
			foreach ( $images as $image ) {
				remove_image_size( $image );
			}
		}
	}
}

