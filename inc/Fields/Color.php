<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Color extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public string $type = 'color';

	/**
	 * Whether to allow alpha channel.
	 *
	 * @var bool
	 */
	public bool $alpha = false;

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		return [
			'alpha' => $this->alpha,
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
