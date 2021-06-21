<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Number extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'number';

	/**
	 * The minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @var string
	 */
	public $min = '';

	/**
	 * The maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @var string
	 */
	public $max = '';

	/**
	 * The intervals value that will be incremented or decremented when using the controls’ spinners. Default is empty, the value will be incremented by 1.
	 *
	 * @var string
	 */
	public $step = '';

	/**
	 * Set the minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @param $callback
	 * @return $this
	 */
	public function min ( $callback )
	{
		$this->min = $callback;

		return $this;
	}

	/**
	 * Set the maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @param $callback
	 * @return $this
	 */
	public function max ( $callback )
	{
		$this->max = $callback;

		return $this;
	}

	/**
	 * Set the intervals value that will be incremented or decremented when using the controls’ spinners. Default is empty, the value will be incremented by 1.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function step ( $callback )
	{
		$this->step = $callback;

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
			'min'  => $this->min,
			'max'  => $this->max,
			'step' => $this->step,
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
