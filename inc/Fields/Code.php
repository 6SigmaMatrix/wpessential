<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Code extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'code';

	/**
	 * The field's input rows.
	 *
	 * @var float
	 */
	public $rows = 10;

	/**
	 * The field's input language.
	 *
	 * @var string
	 */
	public $language = 'html';

	/**
	 * Set the callback to be used for determining the field's input type value.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function rows ( $callback )
	{
		$this->rows = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's input language.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function language ( $callback )
	{
		$this->language = $callback;

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
			wp_enqueue_code_editor( [ 'type' => $this->language, 'theme' => 'monokai' ] );
			return [
				/*'settings' => [
					'codemirror' => [
						'mode' => $this->language,
					],
					'theme' => 'monokai'
				]*/
			];
		}

		return [
			'rows'     => $this->rows,
			'language' => $this->language,
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
			$prepear[ 'settings' ] = wp_parse_args( wpe_array_get( $prepear, 'settings' ), parent::toArray()[ 'settings' ] );
		} else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}
}
