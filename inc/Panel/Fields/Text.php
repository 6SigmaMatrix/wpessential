<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class Text extends Panel
{
	/**
	 * Indicates if the field should be clearable.
	 *
	 * @var bool
	 */
	protected $clearable = false;

	/**
	 * Indicate the field maxlength.
	 *
	 * @var string
	 */
	protected $maxlength = '';

	/**
	 * Indicate the field maxlength.
	 *
	 * @var string
	 */
	protected $minlength = '';

	/**
	 * prefix icon class
	 *
	 * @var string
	 */
	protected $prefix_icon = '';

	/**
	 * The readonly of the field.
	 *
	 * @var string
	 */
	protected $readonly = '';

	/**
	 * control the resizability (none, both, horizontal, vertical)
	 *
	 * @var string
	 */
	protected $resize = '';

	/**
	 * Indicates if the field should be word limit show.
	 *
	 * @var bool
	 */
	protected $show_word_limit = false;

	/**
	 * Indicates if the field should be allowed to add the size. ('large' | 'default' | 'small')
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * suffix icon class
	 *
	 * @var string
	 */
	protected $suffix_icon = '';

	/**
	 * Set the field maxlength.
	 *
	 * @param $callback
	 *
	 * @return Text
	 */
	public function maxlength ( $callback )
	{
		$this->maxlength = $callback;

		return $this;
	}

	/**
	 * Set the field minlength.
	 *
	 * @param $callback
	 *
	 * @return Text
	 */
	public function minlength ( $callback )
	{
		$this->minlength = $callback;

		return $this;
	}

	/**
	 * The clearable of the field.
	 *
	 * @param $callback
	 *
	 * @return Text
	 */
	public function clearable ( $callback )
	{
		$this->clearable = $callback;

		return $this;
	}

	/**
	 * The readonly of the field.
	 *
	 * @param $callback
	 *
	 * @return Text
	 */
	public function readonly ( $callback )
	{
		$this->readonly = $callback;

		return $this;
	}

	/**
	 * The word limit show of the field.
	 *
	 * @param $callback
	 *
	 * @return Text
	 */
	public function show_word_limit ( $callback )
	{
		$this->show_word_limit = $callback;

		return $this;
	}

	/**
	 * Set the field size (small, medium, mini, large)
	 *
	 * @param string $callback
	 *
	 * @return Text
	 */
	public function size ( $callback )
	{
		$this->size = $callback;

		return $this;
	}

	/**
	 * prefix icon class
	 *
	 * @param string $callback
	 *
	 * @return Text
	 */
	public function prefix_icon ( $callback )
	{
		$this->prefix_icon = $callback;

		return $this;
	}

	/**
	 * suffix icon class
	 *
	 * @param string $callback
	 *
	 * @return Text
	 */
	public function suffix_icon ( $callback )
	{
		$this->suffix_icon = $callback;

		return $this;
	}

	/**
	 * control the resizability (none, both, horizontal, vertical)
	 *
	 * @param string $callback
	 *
	 * @return Text
	 */
	public function resize ( $callback )
	{
		$this->resize = $callback;

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
				'clearable'       => $this->clearable,
				'disabled'        => $this->disabled,
				'maxlength'       => $this->maxlength,
				'minlength'       => $this->minlength,
				'placeholder'     => $this->placeholder,
				'prefix-icon'     => $this->prefix_icon,
				'readonly'        => $this->readonly,
				'resize'          => $this->resize,
				'show-word-limit' => $this->show_word_limit,
				'size'            => $this->size,
				'suffix-icon' => $this->suffix_icon
			] )
		];
	}
}
