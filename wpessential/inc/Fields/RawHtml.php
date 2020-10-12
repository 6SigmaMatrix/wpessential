<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class RawHtml extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public string $type = 'raw_html';

	/**
	 * The field's input data.
	 *
	 * @var string
	 */
	public string $data = '';

	/**
	 * The field's content classes.
	 *
	 * @var string
	 */
	public string $contentClasses = 'wpe-panel-notes';

	/**
	 * Set the callback to be used for determining the field's input data.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function data ( $callback )
	{
		$this->data = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's content classes.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function contentClasses ( $callback )
	{
		$this->contentClasses = $callback;

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
			'raw'             => $this->data,
			'content_classes' => $this->contentClasses,
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
