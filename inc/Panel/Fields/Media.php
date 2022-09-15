<?php

namespace WPEssential\Plugins\Panel\Fields;

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
		$this->add_text = $callback;
		if ( ! $this->add_text ) {
			$this->add_text = __( 'Add Image', 'wpessential' );
		} else {
			$this->add_text = $callback;
		}

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
		$this->update_text = $callback;
		if ( ! $this->update_text ) {
			$this->update_text = __( 'Update Image', 'wpessential' );
		} else {
			$this->update_text = $callback;
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
		wp_enqueue_media();
		return [
			'settings' => array_filter( [
				'add_text'    => $this->add_text,
				'update_text' => $this->update_text
			] )
		];
	}
}
