<?php

namespace WPEssential\Plugins\Panel\Helper;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait Icon
{
	/**
	 * There are 2 type of icons in a section to add like (image, icon).
	 *
	 * @var string
	 */
	protected $icon_type = 'icon';
	/**
	 * Set the icon path or icon.
	 *
	 * @var string
	 */
	protected $icon = '';
	/**
	 * Set the icon color.
	 *
	 * @var string
	 */
	protected $icon_color = '#000';
	/**
	 * Set the icon size.
	 *
	 * @var string
	 */
	protected $icon_size = '16';


	/**
	 * Set the icon type.
	 *
	 * @param $callback
	 *
	 * @return Icon
	 */
	public function icon_type ( $callback )
	{
		$this->icon_type = $callback;
		if ( $this->icon_type === 'icon' ) {
			$this->icon( str_replace( ' ', '', strtoupper( str_replace( '-', ' ', $this->icon ) ) ) );
		}
		return $this;
	}

	/**
	 * Set the icon path or icon.
	 *
	 * @param $callback
	 *
	 * @return Icon
	 */
	public function icon ( $callback )
	{
		$this->icon = $callback;

		return $this;
	}

	/**
	 * Set the icon color.
	 *
	 * @param $callback
	 *
	 * @return Icon
	 */
	public function icon_color ( $callback )
	{
		$this->icon_color = $callback;

		return $this;
	}

	/**
	 * Set the icon size.
	 *
	 * @param $callback
	 *
	 * @return Icon
	 */
	public function icon_size ( $callback )
	{
		$this->icon_size = $callback;

		return $this;
	}
}
