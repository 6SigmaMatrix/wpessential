<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class ImageSelect extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'image-select';
	/**
	 * An array of key => value pairs: [ 'key' => 'value', ... ]
	 *
	 * @var array
	 */
	protected $options;

	/**
	 * Set the callback to be used for determining the field's array of key => value pairs: [ 'key' => 'value', ... ].
	 *
	 * @param $callback
	 *
	 * @return ImageSelect
	 */
	public function options ( $callback )
	{
		$options = $callback;

		if ( $options ) {
			foreach ( $options as $k => $v ) {
				$this->options[] = [
					'key'   => $k,
					'label' => $v
				];
			}
		}

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
			'options' => $this->options,
		];
	}
}
