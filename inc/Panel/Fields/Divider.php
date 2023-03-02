<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class Divider extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'divider';
	/**
	 * The icon of control.
	 *
	 * @var string
	 */
	protected $icon = '';
	/**
	 * The content position of control.
	 *
	 * @var string
	 */
	protected $content_position = 'left';
	/**
	 * The direction of control.
	 *
	 * @var string
	 */
	protected $direction = 'horizontal';

	/**
	 * Set the control icon.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function icon ( $callback )
	{
		$this->icon = $callback;

		return $this;
	}

	/**
	 * Set the content position. left/right/center
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function content_position ( $callback )
	{
		$this->content_position = $callback;

		return $this;
	}

	/**
	 * Set the control direction. horizontal/vertical
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function direction ( $callback )
	{
		$this->direction = $callback;

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
			'icon'     => $this->icon,
			'settings' => array_filter( [
				'direction'        => $this->direction,
				'content-position' => $this->content_position,
			] )
		];
	}
}
