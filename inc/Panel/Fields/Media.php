<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class Media extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'media';
	/**
	 * The add text of the control.
	 *
	 * @var string
	 */
	protected $add_text;
	/**
	 * The update text of the control.
	 *
	 * @var string
	 */
	protected $update_text;

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function add_text ( $callback )
	{
		$this->add_text = $callback ?? __( 'Add Image', 'wpessential' );

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function update_text ( $callback )
	{
		$this->update_text = $callback ?? __( 'Update Image', 'wpessential' );

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		wp_enqueue_media();
		return [
			'settings' => array_filter( [
				'add_text'    => $this->add_text,
				'update_text' => $this->update_text
			] )
		];
	}
}
