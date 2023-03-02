<?php

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;

class PopoverToggle extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'popover_toggle';

	/**
	 * The label for the “unchecked” state.
	 *
	 * @var string
	 */
	public $labelOn = 'on';

	/**
	 * The label for the “checked” state.
	 *
	 * @var string
	 */
	public $labelOff = 'off';

	/**
	 * The value returned when checked.
	 *
	 * @var string
	 */
	public $returnValue = 'true';

	/**
	 * Set the callback to be used for determining the field's “unchecked” state.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function labelOn ( $callback )
	{
		$this->labelOn = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's “checked” state.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function labelOff ( $callback )
	{
		$this->labelOff = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's  value returned when checked.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function returnValue ( $callback )
	{
		$this->returnValue = $callback;

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
			'label_on'     => $this->labelOn,
			'label_off'    => $this->labelOff,
			'return_value' => $this->returnValue,
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
