<?php

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;

class Date extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'date_time';

	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $_type = 'datetime';

	/**
	 * The format of the control.
	 *
	 * @var string
	 */
	public $_format = 'yyyy-MM-dd';

	/**
	 * The alignment of the control.
	 *
	 * @var string
	 */
	public $_align = 'center';

	/**
	 * The alignment of the control.
	 *
	 * @var bool
	 */
	public $_time_arrow_control = true;

	/**
	 * The range separator of the control.
	 *
	 * @var string
	 */
	public $_range_separator = 'To';

	/**
	 * The start placeholder of the control.
	 *
	 * @var string
	 */
	public $_start_placeholder = '';

	/**
	 * The end placeholder of the control.
	 *
	 * @var string
	 */
	public $_end_placeholder = '';

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
	 * Set The format of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _format ( $callback )
	{
		$this->_format = $callback;
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
	 * Set the time arrow control of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _time_arrow_control ( $callback )
	{
		$this->_time_arrow_control = $callback;
		return $this;
	}

	/**
	 * Set the range separator of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _range_separator ( $callback )
	{
		$this->_range_separator = $callback;
		return $this;
	}

	/**
	 * Set the start placeholder of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _start_placeholder ( $callback )
	{
		$this->_start_placeholder = $callback;
		return $this;
	}

	/**
	 * Set the end placeholder of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _end_placeholder ( $callback )
	{
		$this->_end_placeholder = $callback;
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
					'type'               => $this->_type,
					'format'             => $this->_format,
					'align'              => $this->_align,
					'time-arrow-control' => $this->_time_arrow_control,
					'range-separator'    => $this->_range_separator,
					'start-placeholder'  => $this->_start_placeholder,
					'end-placeholder'    => $this->_end_placeholder,
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
		} else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}

}
