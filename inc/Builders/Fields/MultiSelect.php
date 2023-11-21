<?php

namespace WPEssential\Plugins\Builders\Fields;

use function defined;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class MultiSelect extends Select2
{
	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		return [
			'multiple' => $this->multiple,
			'options'  => $this->options
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
