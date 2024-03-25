<?php

namespace WPEssential\Plugins\Builders\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

class Info extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'info';

	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $_type = 'warning';

	/**
	 * The alignment of the control.
	 *
	 * @var string
	 */
	public $_align = 'center';

	/**
	 * The closable of the control.
	 *
	 * @var bool
	 */
	public $_closable = false;

	/**
	 * The close text of the control.
	 *
	 * @var string
	 */
	public $_close_text = '';

	/**
	 * The show icon of the control.
	 *
	 * @var bool
	 */
	public $_show_icon = false;

	/**
	 * The effect of the control.
	 *
	 * @var bool
	 */
	public $_effect = 'light';

	/**
	 * Set the type of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _type ( $callback )
	{
		$this->_type = $callback;
		return $this;
	}

	/**
	 * Set the alignment of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _align ( $callback )
	{
		$this->_align = $callback;
		return $this;
	}

	/**
	 * Set the closable of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _closable ( $callback )
	{
		$this->_closable = $callback;
		return $this;
	}

	/**
	 * Set the close text of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _close_text ( $callback )
	{
		$this->_close_text = $callback;
		return $this;
	}

	/**
	 * Set the show icon of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _show_icon ( $callback )
	{
		$this->_show_icon = $callback;
		return $this;
	}

	/**
	 * Set the effect of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _effect ( $callback )
	{
		$this->_effect = $callback;
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
					'type'       => $this->_type,
					'closable'   => $this->_closable,
					'center'     => $this->_align === 'center' ? true : '',
					'close-text' => $this->_close_text,
					'show-icon'  => $this->_show_icon,
					'effect'     => $this->_effect
				]
			];
		}

		return [
			'picker_options' => [
				'enableTime:false',
			],
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
		}
		else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}

}
