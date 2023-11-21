<?php

namespace WPEssential\Plugins\Builders\Fields;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

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
	public $label_on = 'on';

	/**
	 * The label for the “checked” state.
	 *
	 * @var string
	 */
	public $label_off = 'off';

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
	public function label_on ( $callback )
	{
		$this->label_on = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's “checked” state.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function label_off ( $callback )
	{
		$this->label_off = $callback;

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
			'label_on'     => $this->label_on,
			'label_off'    => $this->label_off,
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
