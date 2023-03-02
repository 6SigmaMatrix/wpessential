<?php

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Gallery extends Field
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'gallery';
}
