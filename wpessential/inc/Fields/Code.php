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
	public string $type = 'code';

	/**
	 * The field's input rows.
	 *
	 * @var float
	 */
	public float $rows = 10;

	/**
	 * The field's input language.
	 *
	 * @var string
	 */
	public string $language = 'html';

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
		return wp_parse_args( $this->prepear(), parent::toArray() );
	}

}
