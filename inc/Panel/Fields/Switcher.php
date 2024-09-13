<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class Switcher extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'switcher';

	/**
	 * Whether Switch is in loading state
	 *
	 * @var string
	 */
	protected $loading = '';

	/**
	 * Indicates if the field should be allowed to add the size. (small, default, large)
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * Width of Switch.
	 *
	 * @var numeric
	 */
	protected $width;

	/**
	 * Whether icon or text is displayed inside dot, only the first character will be rendered for text
	 *
	 * @var numeric
	 */
	protected $inline_prompt;

	/**
	 * Component of the icon displayed when in on state, overrides active-text.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @var string
	 */
	protected $active_icon;

	/**
	 * Component of the icon displayed when in off state, overrides inactive-text.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @var string
	 */
	protected $inactive_icon;

	/**
	 * Component of the icon displayed in action when in on state.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @var string
	 */
	protected $active_action_icon;

	/**
	 * Component of the icon displayed in action when in off state.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @var string
	 */
	protected $inactive_action_icon;

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
	 * @var bool|string|number
	 */
	protected $active_value = true;

	/**
	 * Switch value when in off state.
	 *
	 * @var bool|string|number
	 */
	protected $inactive_value = false;

	/**
	 * Set whether Switch is in loading state.
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function loading ( $callback )
	{
		$this->loading = $callback;

		return $this;
	}

	/**
	 * Set size of Switch.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function size ( $callback )
	{
		$this->size = $callback;

		return $this;
	}

	/**
	 * Set width of Switch.
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
	 * Set whether icon or text is displayed inside dot, only the first character will be rendered for text.
	 *
	 * @param bool $callback
	 *
	 * @return $this
	 */
	public function inline_prompt ( $callback )
	{
		$this->inline_prompt = $callback;

		return $this;
	}

	/**
	 * Set component of the icon displayed when in on state, overrides active-text.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function active_icon ( $callback )
	{
		$this->active_icon = $callback;

		return $this;
	}

	/**
	 * Set component of the icon displayed when in off state, overrides inactive-text.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function inactive_icon ( $callback )
	{
		$this->inactive_icon = $callback;

		return $this;
	}

	/**
	 * Set component of the icon displayed in action when in on state.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function active_action_icon ( $callback )
	{
		$this->active_action_icon = $callback;

		return $this;
	}

	/**
	 * Set component of the icon displayed in action when in off state.
	 * For icons use the link to pick a icon https://element-plus.org/en-US/component/icon
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function inactive_action_icon ( $callback )
	{
		$this->inactive_action_icon = $callback;

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
	 * @param string|bool|number $callback
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
	 * @param string|bool|number $callback
	 *
	 * @return $this
	 */
	public function inactive_value ( $callback )
	{
		$this->inactive_value = $callback;

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
				'loading'              => $this->loading,
				'size'                 => $this->size,
				'width'                => $this->width,
				'inline-prompt'        => $this->inline_prompt,
				'active-icon'          => $this->active_icon,
				'inactive-icon'        => $this->inactive_icon,
				'active-action-icon'   => $this->active_action_icon,
				'inactive-action-icon' => $this->inactive_action_icon,
				'active-text'          => $this->active_text,
				'inactive-text'        => $this->inactive_text,
				'active-value'         => $this->active_value,
				'inactive-value'       => $this->inactive_value,
			] )
		];
	}
}
