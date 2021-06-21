<?php

namespace WPEssential\Plugins\Utility;

final class RegisterPostStatus
{
	public static function constructor ()
	{
		self::status_list();
	}

	private static function status_list ()
	{
		$post_status = apply_filters( 'wpe/register/post_status', [] );
		if ( $post_status && is_array( $post_status ) && ! empty( $post_status ) ) {
			foreach ( $post_status as $k => $v ) {
				register_post_status(
					$k,
					apply_filters(
						"wpe/register/post_staus/{$k}",
						[
							'label'                     => $v,
							'label_count'               => _n_noop( "{$v} <span class='count'>(%s)</span>", "{$v} <span class='count'>(%s)</span>" ),
							'public'                    => true,
							'exclude_from_search'       => false,
							'show_in_admin_all_list'    => true,
							'show_in_admin_status_list' => true,
							'publicly_queryable'        => true,
						]
					)
				);
			}
		}
	}
}
