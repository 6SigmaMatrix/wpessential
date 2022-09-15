<?php

namespace WPEssential\Plugins\Requesting;

final class Settings extends \WPEssential\Plugins\Admin\Settings
{
	public static function constructor ()
	{
		$prefix = WPE_AJAX_PREFIX;
		add_action( "wp_ajax_{$prefix}_save_options", [ __CLASS__, 'save' ] );
		add_action( "wp_ajax_{$prefix}_reset_all_options", [ __CLASS__, 'reset_all' ] );
	}

	public static function save ()
	{
		wpe_ajax_authorized();
		$res = self::save_values( wpe_array_get( $_POST, 'save' ) );
		if ( $res ) {
			wp_send_json_success(
				[
					'title'   => __( 'Success', 'wpessential' ),
					'message' => __( 'Settings are saved.', 'wpessential' )
				]
			);
		}

		wp_send_json_error(
			[
				'title'   => __( 'Error', 'wpessential' ),
				'message' => __( 'Settings are not saved.', 'wpessential' )
			],
			401
		);
	}

	public static function reset_all ()
	{
		wpe_ajax_authorized();
		parent::constructor();

		wp_send_json_success(
			[
				'title'   => __( 'Success', 'wpessential' ),
				'message' => __( 'Settings are reset.', 'wpessential' )
			]
		);
	}
}
