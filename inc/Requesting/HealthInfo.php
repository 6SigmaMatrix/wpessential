<?php

namespace WPEssential\Plugins\Requesting;

final class HealthInfo extends \WPEssential\Plugins\Admin\HealthInfo
{
	public static function constructor ()
	{
		$prefix = WPE_AJAX_PREFIX;
		add_action( "wp_ajax_{$prefix}_constants", [ __CLASS__, 'constants' ] );
		add_action( "wp_ajax_{$prefix}_active_plugins", [ __CLASS__, 'active_plugins' ] );
		add_action( "wp_ajax_{$prefix}_used_hooks", [ __CLASS__, 'used_hooks' ] );
	}
}
