<?php

namespace WPEssential\Plugins\Fields;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Implement\Fields;
use function defined;

class Repeater extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'repeater';

	/**
	 * Add the fields.
	 *
	 * @var array
	 */
	public $fields;

	/**
	 * Add the field title.
	 *
	 * @var string
	 */
	public $titleField = '';

	/**
	 * Add the fields.
	 *
	 * @param array $callback
	 *
	 * @return Repeater
	 */
	public function fields ( array $callback )
	{
		$this->fields = $callback;

		return $this;
	}

	/**
	 * Add the field title.
	 *
	 * @param string $callback
	 *
	 * @return Repeater
	 */
	public function titleField ( string $callback )
	{
		$this->titleField = $callback;

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
			'fields' => $this->fields,
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
