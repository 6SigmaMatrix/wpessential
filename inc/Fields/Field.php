<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Fields;

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;
use WPEssential\Plugins\Loader;

abstract class Field extends Callback implements Arrayable, JsonSerializable
{
	/**
	 * The set the editor.
	 *
	 * @var string
	 */
	public string $editor = '';

	/**
	 * The add the filed id to database for save the data.
	 *
	 * @var string
	 */
	public string $key = '';

	/**
	 * The displayable name of the field.
	 *
	 * @var string
	 */
	public string $name = '';

	/**
	 * The description of the field.
	 *
	 * @var string
	 */
	public string $description = '';

	/**
	 * The placeholder of the field.
	 *
	 * @var string
	 */
	public string $placeholder = '';

	/**
	 * The default field's value.
	 *
	 * @var mixed
	 */
	public $defaul = '';

	/**
	 * HTML tag name where Visual Composer will store attribute value in WPBakery Page Builder edit mode. Default: hidden input
	 *
	 * @var mixed
	 */
	public $holder = '';

	/**
	 * Show value of param in WPBakery Page Builder editor
	 *
	 * @var bool
	 */
	public bool $adminLabel = false;

	/**
	 * Use it to divide your params within groups (tabs) in WPBakery
	 *
	 * @var string
	 */
	public string $group = '';

	/**
	 * Indicates if the field should be showing the labels
	 *
	 * @var bool
	 */
	public bool $showLabel = true;

	/**
	 * Indicates if the field should be showing the mouse hover title
	 *
	 * @var string
	 */
	public string $mouseHoverTitle = '';

	/**
	 * Indicates if the field should be showing the label like block display.
	 *
	 * @var bool
	 */
	public bool $labelBlock = false;

	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	public array $dependent = [];

	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	public array $dependency = [];

	/**
	 * Indicates if the field should be add the classes in editor.
	 *
	 * @var array
	 */
	public array $addClasses = [ 'wpe-editor-panel-options' ];

	/**
	 * Indicates if the field should be add the separator default/before/ofter/none the field type.
	 *
	 * @var string
	 */
	public string $separator = 'none';

	/**
	 * An array of available CSS units like px, em, rem, %, deg and vh.
	 *
	 * @var array
	 */
	public array $sizeUnit = [ 'px' ];

	/**
	 * An array of ranges for each register size.
	 * $min (int) The minimum value of range.
	 * $max (int) The maximum value of range.
	 * $step (int) The intervals value that will be incremented or decremented when using the controls’ spinners.
	 *
	 * @var array
	 */
	public array $range = [];

	/**
	 * Indicates if the field should be allow to add the dynamic tag options list.
	 *
	 * @var array
	 */
	public array $dynamic = [
		'active' => false
	];

	/**
	 * Add an array of elementor css selectors
	 *
	 * @var array
	 */
	public array $selectors;

	/**
	 * Add an string of elementor css selectors
	 *
	 * @var string
	 */
	public string $selector;

	/**
	 * Add an array of elementor css selectors
	 *
	 * @var array
	 */
	public array $wrap_selectors;

	/**
	 * Add an string of elementor css selectors
	 *
	 * @var string
	 */
	public string $wrap_selector;

	/**
	 * Create a new element.
	 *
	 * @param mixed ...$arguments
	 * @return static
	 */
	public static function make ( ...$arguments )
	{
		return new static( ...$arguments );
	}

	/**
	 * Prepare the field json.
	 *
	 * @return json
	 */
	public function jsonSerialize ()
	{
		return call_user_func( [ $this, $this->editor ] );
	}

	/**
	 * Prepare the editor fields in array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		return call_user_func( [ $this, $this->editor ] );
	}

	/**
	 * Create a new field.
	 *
	 * @param string $name
	 * @param string $id
	 */

	public function __construct ( string $name, string $id = '' )
	{
		$this->name = sprintf( __( '%s', 'wpessentil' ), $name );
		if ( ! $id ) {
			$id = str_replace( ' ', '_', strtolower( $name ) );
		}
		$this->key = WPE_SETTINGS . '_' . $id;
		$this->editor( Loader::$editor );
	}
}
