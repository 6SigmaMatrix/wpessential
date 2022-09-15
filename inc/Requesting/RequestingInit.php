<?php

namespace WPEssential\Plugins\Requesting;

use WPEssential\Plugins\Api\Wpessential\Auth;

final class RequestingInit
{
	public static function constructor ()
	{
		$prefix = WPE_AJAX_PREFIX;
		add_action( "wp_ajax_{$prefix}_get_image_from_url", [ __CLASS__, 'get_image_from_url' ] );

		AuthGuard::constructor();
		Settings::constructor();
		HealthInfo::constructor();
		LiveSearch::constructor();
		Auth::constructor();
	}

	public static function get_image_from_url ()
	{
		wpe_ajax_authorized();

		$image_url = sanitize_text_field( wpe_array_get( $_POST, 'user' ) );
		//wpe_error( wpe_get_image_from_url() );
		return;
	}
}
