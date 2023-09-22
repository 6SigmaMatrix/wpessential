<?php

namespace WPEssential\Plugins\Fields;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

class Button extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'button';

	/**
	 * The button type. Available values are default and success.
	 *
	 * @var string
	 */
	public $buttonType = 'success';

	/**
	 * The button text.
	 *
	 * @var string
	 */
	public $buttonText = '';

	/**
	 * The event the button will trigger. The event will be triggered via elementor.channels.editor.on( event ).
	 *
	 * @var string
	 */
	public $buttonEvent = '';

	/**
	 * Set the button type. Available values are default and success.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function buttonType ( $callback )
	{
		$this->buttonType = $callback;

		return $this;
	}

	/**
	 * Set the button text.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function buttonText ( $callback )
	{
		$this->buttonType = $callback;

		return $this;
	}

	/**
	 * Set event the button will trigger. The event will be triggered via elementor.channels.editor.on( event ).
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function buttonEvent ( $callback )
	{
		$this->buttonEvent = $callback;

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
			'button_type' => $this->buttonType,
			'text'        => $this->buttonText,
			'event'       => $this->buttonEvent,
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
