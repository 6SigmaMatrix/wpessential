<?php

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class FontFamily extends Field
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'font';

}
