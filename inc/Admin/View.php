<?php

namespace WPEssential\Plugins\Admin;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class View
{
	public static function index ()
	{
		?>
		<div class="wpessential-admin wpe-container-fluid">
			<div class="wpe-admin-page" id="wpessential-admin">
				<wpe-navigation></wpe-navigation>
				<router-view></router-view>
			</div>
		</div>
		<?php
	}

	public static function meta_index ()
	{
		?>
		<div class="wpessential-admin wpe-container-fluid">
			<div class="wpe-admin-page" id="wpessential-admin">
				<wpe-options></wpe-options>
			</div>
		</div>
		<?php
	}
}
