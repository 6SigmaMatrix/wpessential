<?php

namespace WPEssential\Plugins\Panel\Helper;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait Note
{
	/**
	 * Indicates if the field should be note description.
	 *
	 * @var string
	 */
	protected $note_desc = '';
	/**
	 * Indicates if the field should be note icon.
	 *
	 * @var string
	 */
	protected $note_icon = 'plus';
	/**
	 * Indicates if the field should be note title.
	 *
	 * @var string
	 */
	protected $note_title = '';
	/**
	 * Indicates if the field should be note icon color.
	 *
	 * @var string
	 */
	protected $note_icon_color = '#000';
	/**
	 * Indicates if the field should be note icon size.
	 *
	 * @var string
	 */
	protected $note_icon_size = '16';

	/**
	 * The note icon of the field.
	 *
	 * @param $callback
	 *
	 * @return Note
	 */
	public function note_icon ( $callback )
	{
		$this->note_icon = $callback;

		return $this;
	}

	/**
	 * The note title of the field.
	 *
	 * @param $callback
	 *
	 * @return Note
	 */
	public function note_title ( $callback )
	{
		$this->note_title = $callback;

		return $this;
	}

	/**
	 * The note description of the field.
	 *
	 * @param $callback
	 *
	 * @return Note
	 */
	public function note_desc ( $callback )
	{
		$this->note_desc = $callback;

		return $this;
	}

	/**
	 * The note icon color of the field.
	 *
	 * @param $callback
	 *
	 * @return Note
	 */
	public function note_icon_color ( $callback )
	{
		$this->note_icon_color = $callback;

		return $this;
	}

	/**
	 * The note icon size of the field.
	 *
	 * @param $callback
	 *
	 * @return Note
	 */
	public function note_icon_size ( $callback )
	{
		$this->note_icon_size = $callback;

		return $this;
	}
}
