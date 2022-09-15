<?php

namespace WPEssential\Plugins\Panel\Fields;

use WPEssential\Plugins\Panel\Panel;

class Wysiwyg extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'wysiwyg';

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		wp_enqueue_editor();
		wp_enqueue_media();
		return [];
	}
}
