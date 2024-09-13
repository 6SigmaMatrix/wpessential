<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Background extends Media
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'background';
}
