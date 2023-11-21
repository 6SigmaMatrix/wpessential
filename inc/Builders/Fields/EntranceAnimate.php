<?php

namespace WPEssential\Plugins\Builders\Fields;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

class EntranceAnimate extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'animation';

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		return [
			'prefix_class' => 'animated ',
		];
	}

	/**
	 * Prepare the field's json serialize.
	 *
	 * @return array
	 */
	public function jsonSerialize ()
	{
		return wp_parse_args( $this->prepear(), parent::jsonSerialize() );
	}

	/**
	 * Prepare the field's array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		return wp_parse_args( $this->prepear(), parent::toArray() );
	}

}
