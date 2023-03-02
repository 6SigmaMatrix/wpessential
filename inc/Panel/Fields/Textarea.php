<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Textarea extends Text
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'textarea';

	/**
	 * whether textarea has an adaptive height
	 *
	 * @var int
	 */
	protected $max_rows = 5;
	/**
	 * whether textarea has an adaptive height
	 *
	 * @var int
	 */
	protected $min_rows = 3;
	/**
	 * number of rows of textarea.
	 *
	 * @var int
	 */
	protected $rows = 5;

	/**
	 * number of rows of textarea.
	 *
	 * @param $callback
	 *
	 * @return Textarea
	 */
	public function rows ( $callback )
	{
		$this->rows = $callback;

		return $this;
	}

	/**
	 * whether textarea has an adaptive height
	 *
	 * @param $callback
	 *
	 * @return Textarea
	 */
	public function max_rows ( $callback )
	{
		$this->max_rows = $callback ?? $this->rows;

		return $this;
	}

	/**
	 * whether textarea has an adaptive height
	 *
	 * @param $callback
	 *
	 * @return Textarea
	 */
	public function min_rows ( $callback )
	{
		$this->min_rows = $callback ?? $this->rows;

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
			'settings' => array_filter( [
				'autosize'        => [
					'maxRows' => $this->max_rows,
					'minRows' => $this->min_rows,
				],
				'clearable'       => $this->clearable,
				'disabled'        => $this->disabled,
				'maxlength'       => $this->maxlength,
				'minlength'       => $this->minlength,
				'placeholder'     => $this->placeholder,
				'readonly'        => $this->readonly,
				'resize'          => $this->resize,
				'rows'            => $this->rows,
				'show-word-limit' => $this->show_word_limit,
				'size'            => $this->size,
				'tabindex'        => $this->tabindex,
			] )
		];
	}
}
