<?php

namespace WPEssential\Plugins\Panel\Fields;

class Number extends Text
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'number';

	/**
	 * whether to enable the control buttons.
	 *
	 * @var boolean
	 */
	protected $controls = true;
	/**
	 * Set controls-position to decide the position of control buttons. (right)
	 *
	 * @var boolean
	 */
	protected $controls_position = '';
	/**
	 * The maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @var int
	 */
	protected $max = '';
	/**
	 * The minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @var int
	 */
	protected $min = '';
	/**
	 * Add precision attribute to set the precision of input value.
	 * The value of precision must be a non negative integer and should not be less than the decimal places of step.
	 *
	 * @var int
	 */
	protected $precision = '';
	/**
	 * The intervals value that will be incremented or decremented when using the controls’ spinners. Default is empty, the value will be incremented by 1.
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	protected $step = '';
	/**
	 * The step-strictly attribute accepts a boolean. if this attribute is true, input value can only be multiple of step.
	 *
	 * @var boolean
	 */
	protected $step_strictly = false;

	/**
	 * The maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function max ( $callback )
	{
		$this->max = $callback;

		return $this;
	}

	/**
	 * The minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function min ( $callback )
	{
		$this->min = $callback;

		return $this;
	}

	/**
	 * The intervals value that will be incremented or decremented when using the controls’ spinners. Default is empty, the value will be incremented by 1.
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function step ( $callback )
	{
		$this->step = $callback;

		return $this;
	}

	/**
	 * The step-strictly attribute accepts a boolean. if this attribute is true, input value can only be multiple of step.
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function step_strictly ( $callback )
	{
		$this->step_strictly = $callback;

		return $this;
	}

	/**
	 * Add precision attribute to set the precision of input value.
	 * The value of precision must be a non negative integer and should not be less than the decimal places of step.
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function precision ( $callback )
	{
		$this->precision = $callback;

		return $this;
	}

	/**
	 * whether to enable the control buttons.
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function controls ( $callback )
	{
		$this->controls = $callback;

		return $this;
	}

	/**
	 *  Set controls-position to decide the position of control buttons. (right, left, both, top, bottom)
	 *
	 * @param $callback
	 *
	 * @return Number
	 */
	public function controls_position ( $callback )
	{
		$this->controls_position = $callback;

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		return [
			'settings' => array_filter( [
				'clearable'         => $this->clearable,
				'controls'          => $this->controls,
				'controls-position' => $this->controls_position,
				'disabled'          => $this->disabled,
				'max'               => $this->max,
				'min'               => $this->min,
				'placeholder'       => $this->placeholder,
				'precision'         => $this->precision,
				'size'              => $this->size,
				'step'              => $this->step,
				'step-strictly'     => $this->step_strictly,
				'tabindex'          => $this->tabindex,
			] )
		];
	}
}
