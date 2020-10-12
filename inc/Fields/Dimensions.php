<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Dimensions extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public string $type = 'dimensions';

	/**
	 * Which fields to show. Available values are all, horizontal, vertical or an array [ 'top', 'right', 'bottom', 'left' ].
	 *
	 * @var string
	 */
	public string $allowedDimensions;

	/**
	 * Set the callback to be used for determining the field's to show the available values are all, horizontal, vertical or an array [ 'top', 'right', 'bottom', 'left' ].
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function allowedDimensions ( array $callback )
	{
		$this->allowedDimensions = $callback;

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		return [
			'allowed_dimensions' => 'elementor-animation-',
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
