<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Helper\Fields\Beaver;
use WPEssential\Plugins\Helper\Fields\Brizy;
use WPEssential\Plugins\Helper\Fields\Divi;
use WPEssential\Plugins\Helper\Fields\Elementor;
use WPEssential\Plugins\Helper\Fields\Gutenberg;
use WPEssential\Plugins\Helper\Fields\KingComposer;
use WPEssential\Plugins\Helper\Fields\ShortcodesUltimate;
use WPEssential\Plugins\Helper\Fields\SiteOrigin;
use WPEssential\Plugins\Helper\Fields\Themify;
use WPEssential\Plugins\Helper\Fields\VisualComposer;
use WPEssential\Plugins\Helper\Fields\WordPress;
use WPEssential\Plugins\Helper\Fields\WPBakery;

abstract class Callback extends Common
{
	use Beaver, Brizy, Divi, Elementor, Gutenberg, KingComposer, ShortcodesUltimate, SiteOrigin, Themify, VisualComposer, WPBakery, WordPress;

	/**
	 * Set the callback to be used for determining the editor type.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function editor ( string $callback = 'wordpress' )
	{
		$this->editor = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function dependent ( array $callback )
	{
		$this->dependent = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function dependency ( array $callback )
	{
		$this->dependency = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor panel classes.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function addClasses ( string $callback )
	{
		$this->addClasses = wp_parse_args( $callback, $this->addClasses );

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor separator.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function separator ( string $callback )
	{
		$this->separator = $callback;

		return $this;
	}

	/**
	 * Set the HTML tag name where Visual Composer will store attribute value in WPBakery Page Builder edit mode. Default: hidden input
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function holder ( string $callback )
	{
		$this->holder = $callback;

		return $this;
	}

	/**
	 * Set the params within groups (tabs)
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function group ( string $callback )
	{
		$this->group = $callback;

		return $this;
	}

	/**
	 * Set the value of param in WPBakery Page Builder editor
	 *
	 * @param bool $callback
	 * @return $this
	 */
	public function adminLabel ( bool $callback )
	{
		$this->adminLabel = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dynamic.
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function dynamic ( array $callback )
	{
		$this->dynamic = $callback;

		return $this;
	}

	/**
	 * Get the component name for the field.
	 *
	 * @return string
	 */
	public function type ()
	{
		if ( isset( static::$customType[ get_class( $this ) ] ) ) {
			return static::$customType[ get_class( $this ) ];
		}

		return $this->type;
	}

	/**
	 * Set the callback to be used for determining the field's key value.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function key ( string $callback )
	{
		$this->key = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's description value.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function desc ( string $callback )
	{
		$this->description = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's placeholder value.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function placeholder ( string $callback )
	{
		$this->placeholder = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's label_block value.
	 *
	 * @param bool $callback
	 * @return $this
	 */
	public function labelBlock ( bool $callback )
	{
		$this->labelBlock = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's available CSS units like px, em, rem, %, deg and vh.
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function sizeUnit ( array $callback )
	{
		$this->sizeUnit = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's array of ranges for each register size.
	 * $min (int) The minimum value of range.
	 * $max (int) The maximum value of range.
	 * $step (int) The intervals value that will be incremented or decremented when using the controls’ spinners.
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function range ( array $callback )
	{
		$this->range = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's to display the label.
	 *
	 * @param bool $callback
	 * @return $this
	 */
	public function showLabel ( bool $callback )
	{
		$this->showLabel = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's default value.
	 *
	 * @param $callback
	 * @return $this
	 */
	public function default ( $callback )
	{
		$this->defaul = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's mouse hover title value.
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function mouseHoverTitle ( string $callback )
	{
		$this->mouseHoverTitle = $callback;

		return $this;
	}

	/**
	 * Add an array of elementor css selectors
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function selectors ( array $callback )
	{
		$this->selectors = $callback;

		return $this;
	}

	/**
	 * Add an string of elementor css selectors
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function selector ( string $callback )
	{
		$this->selector = $callback;

		return $this;
	}

	/**
	 * Add an array of elementor css selectors
	 *
	 * @param array $callback
	 * @return $this
	 */
	public function wrap_selectors ( array $callback )
	{
		$this->wrap_selectors = wpe_array_key_prefix( $callback, '{{WRAPPER}} ' );

		return $this;
	}

	/**
	 * Add an string of elementor css selectors
	 *
	 * @param string $callback
	 * @return $this
	 */
	public function wrap_selector ( string $callback )
	{
		$this->wrap_selector = '{{WRAPPER}} ' . $callback;

		return $this;
	}
}
