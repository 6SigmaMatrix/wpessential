<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class MultiSelect extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'select2';

	/**
	 * An array of key => value pairs: [ 'key' => 'value', ... ]
	 *
	 * @var array
	 */
	public $options;

	/**
	 * Whether to allow multiple value selection.
	 *
	 * @var bool
	 */
	public $multiple = true;

	/**
	 * Set the callback to be used for determining the field's array of key => value pairs: [ 'key' => 'value', ... ].
	 *
	 * @param $callback
	 * @return $this
	 */
	public function options ( $callback )
	{
		$this->options = $callback;

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
			'options'  => $this->options,
			'multiple' => $this->multiple
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
