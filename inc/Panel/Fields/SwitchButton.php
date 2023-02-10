<?php

namespace WPEssential\Plugins\Panel\Fields;

use WPEssential\Plugins\Panel\Panel;

class SwitchButton extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'switch-button';

	/**
	 * Width of Switch.
	 *
	 * @var numeric
	 */
	protected $width = 40;

	/**
	 * class name of the icon displayed when in on state, overrides active-text.
	 *
	 * @var string
	 */
	protected $active_icon_class;

	/**
	 * class name of the icon displayed when in off state, overrides inactive-text.
	 *
	 * @var string
	 */
	protected $inactive_icon_class;

	/**
	 * Text displayed when in on state.
	 *
	 * @var string
	 */
	protected $active_text;

	/**
	 * Text displayed when in off state.
	 *
	 * @var string
	 */
	protected $inactive_text;

	/**
	 * Switch value when in on state.
	 *
	 * @var boolean|sting|number
	 */
	protected $active_value = true;

	/**
	 * Switch value when in off state.
	 *
	 * @var boolean|sting|number
	 */
	protected $inactive_value = false;

	/**
	 * Background color when in on state.
	 *
	 * @var string
	 */
	protected $active_color = '#409EFF';

	/**
	 * Background color when in off state.
	 *
	 * @var string
	 */
	protected $inactive_color = '#C0CCDA';

	/**
	 * Set the add text control.
	 *
	 * @param number $callback
	 *
	 * @return $this
	 */
	public function width ( $callback )
	{
		$this->width = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function active_icon_class ( $callback )
	{
		$this->active_icon_class = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function inactive_icon_class ( $callback )
	{
		$this->inactive_icon_class = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function active_text ( $callback )
	{
		$this->active_text = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function inactive_text ( $callback )
	{
		$this->inactive_text = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string|boolean|number $callback
	 *
	 * @return $this
	 */
	public function active_value ( $callback )
	{
		$this->active_value = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string|boolean|number $callback
	 *
	 * @return $this
	 */
	public function inactive_value ( $callback )
	{
		$this->inactive_value = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function active_color ( $callback )
	{
		$this->active_color = $callback;

		return $this;
	}

	/**
	 * Set the add text control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function inactive_color ( $callback )
	{
		$this->inactive_color = $callback;

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
