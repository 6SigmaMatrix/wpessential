<?php

namespace WPEssential\Plugins\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class RegisterPostStatus
{
	private static $quick_script;
	private static $edit_script;

	public static function constructor ()
	{
		if ( ! \defined( 'WPE_REG_POST_STATUS' ) ) {
			return;
		}

		self::status_list();
	}

	private static function status_list ()
	{
		$post_status = apply_filters( 'wpe/register/post_status', [] );
		if ( ! empty( $post_status ) && \is_array( $post_status ) ) {
			foreach ( $post_status as $k => $v ) {
				register_post_status(
					$k,
					apply_filters(
						"wpe/register/post_status/{$k}",
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

				self::$quick_script .= "$( 'select[name=\"_status\"]' ).append( '<option value=\"{$k}\">{$v}</option>' );";
				self::$edit_script  .= "$( 'select[name=\"post_status\"]' ).append( '<option value=\"{$k}\">{$v}</option>' );";
			}

			self::in_status_html();
		}
	}

	private static function in_status_html ()
	{
		add_action( 'admin_footer-edit.php', [ __CLASS__, 'add_in_edit_screen' ] );
		add_action( 'admin_footer-post.php', [ __CLASS__, 'add_in_edit_screen' ] );
		add_action( 'admin_footer-post-new.php', [ __CLASS__, 'add_in_quick_screen' ] );
	}

	public static function add_in_quick_screen ()
	{
		$quick_script = self::$quick_script;
		echo "<script>jQuery(document).ready(function($){{$quick_script}});</script>";
	}

	public static function add_in_edit_screen ()
	{
		$edit_script = self::$edit_script;
		echo "<script>jQuery(document).ready(function($){{$edit_script}});</script>";
	}
}
