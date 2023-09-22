<?php

namespace WPEssential\Plugins\Fields;

use function defined;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class RgbaColor extends Color
{
	/**
	 * Whether to allow alpha channel.
	 *
	 * @var bool
	 */
	public $alpha = true;

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
					'show-alpha' => $this->alpha
				]
			];
		}

		return [
			'alpha' => $this->alpha,
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
			$prepear[ 'settings' ] = wp_parse_args( $this->prepear()[ 'settings' ], parent::toArray()[ 'settings' ] );
		}
		else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}

}
