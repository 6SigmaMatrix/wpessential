<?php

namespace WPEssential\Plugins\Builders\Fields;

use function defined;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class ImageCordinate extends Field
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'image_dimensions';
}
