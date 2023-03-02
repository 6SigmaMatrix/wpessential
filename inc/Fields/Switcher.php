<?php

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;

class Switcher extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'switcher';

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
	public $returnValue = 'yes';

	/**
	 * class name of the icon displayed when in on state, overrides active-text.
	 *
	 * @var string
	 */
	public $active_icon = '';

	/**
	 * class name of the icon displayed when in off state, overrides inactive-text.
	 *
	 * @var string
	 */
	public $inactive_icon = '';

	/**
	 * text displayed when in on state.
	 *
	 * @var string
	 */
	public $active_text = '';

	/**
	 * text displayed when in off state.
	 *
	 * @var string
	 */
	public $inactive_text = '';

	/**
	 * switch value when in on state.
	 *
	 * @var mixed
	 */
	public $active_value = true;

	/**
	 * switch value when in off state.
	 *
	 * @var mixed
	 */
	public $inactive_value = false;

	/**
	 * background color when in on state.
	 *
	 * @var string
	 */
	public $active_color = '#409EFF';

	/**
	 * background color when in off state.
	 *
	 * @var string
	 */
	public $inactive_color = '#C0CCDA';

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
	 * class name of the icon displayed when in on state, overrides active-text.
	 *
	 * @return $this
	 * @var string
	 */
	public function active_icon ( $callback )
	{
		$this->active_icon = $callback;

		return $this;
	}

	/**
	 * class name of the icon displayed when in off state, overrides inactive-text.
	 *
	 * @return $this
	 * @var string
	 */
	public function inactive_icon ( $callback )
	{
		$this->inactive_icon = $callback;

		return $this;
	}

	/**
	 * text displayed when in on state.
	 *
	 * @return $this
	 * @var string
	 */
	public function active_text ( $callback )
	{
		$this->active_text = $callback;

		return $this;
	}

	/**
	 * text displayed when in off state.
	 *
	 * @return $this
	 * @var string
	 */
	public function inactive_text ( $callback )
	{
		$this->inactive_text = $callback;

		return $this;
	}

	/**
	 * switch value when in on state.
	 *
	 * @return $this
	 * @var mixed
	 */
	public function active_value ( $callback )
	{
		$this->active_value = $callback;

		return $this;
	}

	/**
	 * switch value when in off state.
	 *
	 * @return $this
	 * @var mixed
	 */
	public function inactive_value ( $callback )
	{
		$this->inactive_value = $callback;

		return $this;
	}

	/**
	 * background color when in on state.
	 *
	 * @return $this
	 * @var string
	 */
	public function active_color ( $callback )
	{
		$this->active_color = $callback;

		return $this;
	}

	/**
	 * background color when in off state.
	 *
	 * @return $this
	 * @var string
	 */
	public function inactive_color ( $callback )
	{
		$this->inactive_color = $callback;

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		if ( 'Panel' === $this->editor ) {
			return [
				'settings' => [
					'active-icon-class'   => $this->active_icon,
					'inactive-icon-class' => $this->inactive_icon,
					'active-text'         => $this->active_text,
					'inactive-text'       => $this->inactive_text,
					'active-value'        => $this->active_value,
					'inactive-value'      => $this->inactive_value,
					'active-color'        => $this->inactive_color,
					'inactive-color'      => $this->inactive_color,
				]
			];
		}

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
		if ( 'Panel' === $this->editor ) {
			$prepear               = $this->prepear();
			$prepear[ 'settings' ] = wp_parse_args( wpe_array_get( $this->prepear(), 'settings' ), parent::toArray()[ 'settings' ] );
		} else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}

}
