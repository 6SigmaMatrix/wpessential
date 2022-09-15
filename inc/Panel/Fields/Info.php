<?php

namespace WPEssential\Plugins\Panel\Fields;

use WPEssential\Plugins\Panel\Panel;

class Info extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'info';

	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $alert_type = 'success';

	/**
	 * The alignment of the control.
	 *
	 * @var string
	 */
	protected $align = 'left';

	/**
	 * The closable of the control.
	 *
	 * @var bool
	 */
	protected $closable = false;

	/**
	 * The close text of the control.
	 *
	 * @var string
	 */
	protected $close_text = '';

	/**
	 * The show icon of the control.
	 *
	 * @var bool
	 */
	protected $show_icon = false;

	/**
	 * The effect of the control.
	 *
	 * @var bool
	 */
	protected $effect = 'light';

	/**
	 * Set the type of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function alert_type ( $callback )
	{
		$this->alert_type = $callback;

		return $this;
	}

	/**
	 * Set the alignment of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function align ( $callback )
	{
		$this->align = $callback;

		return $this;
	}

	/**
	 * Set the closable of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function closable ( $callback )
	{
		$this->closable = $callback;

		return $this;
	}

	/**
	 * Set the close text of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function close_text ( $callback )
	{
		$this->close_text = $callback;

		return $this;
	}

	/**
	 * Set the show icon of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function show_icon ( $callback )
	{
		$this->show_icon = $callback;

		return $this;
	}

	/**
	 * Set the effect of the control.
	 *
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function effect ( $callback )
	{
		$this->effect = $callback;

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
			'settings' => [
				'type'       => $this->alert_type,
				'closable'   => $this->closable,
				'center'     => $this->align === 'center',
				'close-text' => $this->close_text,
				'show-icon'  => $this->show_icon,
				'effect'     => $this->effect
			]
		];
	}
}
