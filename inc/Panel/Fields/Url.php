<?php

namespace WPEssential\Plugins\Panel\Fields;

class Url extends Text
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'url';

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
				'suffix-icon'     => $this->suffix_icon,
				'tabindex'        => $this->tabindex,
			] )
		];
	}
}
