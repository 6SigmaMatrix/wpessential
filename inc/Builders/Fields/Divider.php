<?php

namespace WPEssential\Plugins\Builders\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

class Divider extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'divider';

	/**
	 * The icon of control.
	 *
	 * @var string
	 */
	public $_icon = '';

	/**
	 * The content position of control.
	 *
	 * @var string
	 */
	public $_content_position = 'left';

	/**
	 * The direction of control.
	 *
	 * @var string
	 */
	public $_direction = 'horizontal';

	/**
	 * Set the control icon.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _icon ( $callback )
	{
		$this->_icon = $callback;
		return $this;
	}

	/**
	 * Set the content position. left/right/center
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _content_position ( $callback )
	{
		$this->_content_position = $callback;
		return $this;
	}

	/**
	 * Set the control direction. horizontal/vertical
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function _direction ( $callback )
	{
		$this->_direction = $callback;
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
				'icon'     => $this->_icon,
				'settings' => [
					'direction'        => $this->_direction,
					'content-position' => $this->_content_position,
				]
			];
		}

		return [];
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
			$prepear[ 'settings' ] = wp_parse_args( $this->prepear()[ 'settings' ], parent::toArray()[ 'settings' ] );
		}
		else {
			$prepear = $this->prepear();
		}
		return wp_parse_args( $prepear, parent::toArray() );
	}

}
