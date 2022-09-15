<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Media extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'media';

	/**
	 * The add text of the control.
	 *
	 * @var string
	 */
	public $_add_text;

	/**
	 * The update text of the control.
	 *
	 * @var string
	 */
	public $_update_text;

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function _add_text ( $callback )
	{
		if ( ! $this->_add_text ) {
			$this->_add_text = __( 'Add Image', 'wpessential' );
		} else {
			$this->_add_text = $callback;
		}

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function _update_text ( $callback )
	{
		if ( ! $this->_update_text ) {
			$this->_update_text = __( 'Update Image', 'wpessential' );
		} else {
			$this->_update_text = $callback;
		}

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
			wp_enqueue_media();
			return [
				'settings' => [
					'add_text'    => $this->_add_text,
					'update_text' => $this->_update_text
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
