<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

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
	public $editor = '';

	/**
	 * The add the filed id to database for save the data.
	 *
	 * @var string
	 */
	public $key = '';

	/**
	 * The displayable name of the field.
	 *
	 * @var string
	 */
	public $name = '';

	/**
	 * The description of the field.
	 *
	 * @var string
	 */
	public $description = '';

	/**
	 * The short description of the field.
	 *
	 * @var string
	 */
	public $subtitle = '';

	/**
	 * The readonly of the field.
	 *
	 * @var string
	 */
	public $readonly = '';

	/**
	 * The placeholder of the field.
	 *
	 * @var string
	 */
	public $placeholder = '';

	/**
	 * The minimum number (only affects the spinners, the user can still type a lower value).
	 *
	 * @var string
	 */
	public $min = '';

	/**
	 * The maximum number (only affects the spinners, the user can still type a higher value).
	 *
	 * @var string
	 */
	public $max = '';

	/**
	 * The intervals value that will be incremented or decremented when using the controls’ spinners. Default is empty, the value will be incremented by 1.
	 *
	 * @var string
	 */
	public $step = '';

	/**
	 * Indicate the field type style like strictly or not.
	 *
	 * @var string
	 */
	public $step_strictly = '';

	/**
	 * Indicate the field controls.
	 *
	 * @var bool
	 */
	public $controls = true;

	/**
	 * Indicate the field controls.
	 *
	 * @var string
	 */
	public $autocomplete = '';

	/**
	 * Indicate the field fallible.
	 *
	 * @var bool
	 */
	public $filterable = false;

	/**
	 * An array of key => value pairs: [ 'key' => 'value', ... ]
	 *
	 * @var array
	 */
	public $options;

	/**
	 * An reserve keyword
	 *
	 * @var array
	 */
	public $reserve_keyword = false;

	/**
	 * Whether to allow multiple value selection.
	 *
	 * @var bool
	 */
	public $multiple = true;

	/**
	 * Whether to allow multiple limit value selection.
	 *
	 * @var number
	 */
	public $multiple_limit;

	/**
	 * Whether to allow predefine color.
	 *
	 * @var array
	 */
	public $predefine = [];

	/**
	 * Indicate the field controls. (right, left, top, bottom)
	 *
	 * @var string
	 */
	public $controls_position = '';

	/**
	 * Indicate the field maxlength.
	 *
	 * @var string
	 */
	public $maxlength = '';

	/**
	 * Indicate the field maxlength.
	 *
	 * @var string
	 */
	public $minlength = '';

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
	public $adminLabel = false;

	/**
	 * Use it to divide your params within groups (tabs) in WPBakery
	 *
	 * @var string
	 */
	public $group = '';

	/**
	 * Indicates if the field should be showing the labels
	 *
	 * @var bool
	 */
	public $showLabel = true;

	/**
	 * Indicates if the field should be showing the mouse hover title
	 *
	 * @var string
	 */
	public $mouseHoverTitle = '';

	/**
	 * Indicates if the field should be showing the label like block display.
	 *
	 * @var bool
	 */
	public $labelBlock = false;

	/**
	 * Indicates if the field should be disabled.
	 *
	 * @var bool
	 */
	public $disabled = false;

	/**
	 * Indicates if the field should be clearable.
	 *
	 * @var bool
	 */
	public $clearable = false;

	/**
	 * Indicates if the field should be note icon.
	 *
	 * @var string
	 */
	public $note_icon = 'el-icon-warning';

	/**
	 * Indicates if the field should be note title.
	 *
	 * @var string
	 */
	public $note_title = '';

	/**
	 * Indicates if the field should be note description.
	 *
	 * @var string
	 */
	public $note_desc = '';

	/**
	 * Indicates if the field should be word limit show.
	 *
	 * @var bool
	 */
	public $word_limit_show = false;

	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	public $dependent = [];

	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	public $dependency = [];

	/**
	 * Indicates if the field should be add the classes in editor.
	 *
	 * @var array
	 */
	public $addClasses = [ 'wpe-editor-panel-options' ];

	/**
	 * Indicates if the field should be add the separator default/before/ofter/none the field type.
	 *
	 * @var string
	 */
	public $separator = 'none';

	/**
	 * An array of available CSS units like px, em, rem, %, deg and vh.
	 *
	 * @var array
	 */
	public $sizeUnit = [ 'px' ];

	/**
	 * An array of ranges for each register size.
	 * $min (int) The minimum value of range.
	 * $max (int) The maximum value of range.
	 * $step (int) The intervals value that will be incremented or decremented when using the controls’ spinners.
	 *
	 * @var array
	 */
	public $range = [];

	/**
	 * Indicates if the field should be allow to add the dynamic tag options list.
	 *
	 * @var array
	 */
	public $dynamic = [
		'active' => false
	];

	/**
	 * Add an array of elementor css selectors
	 *
	 * @var array
	 */
	public $selectors = [];

	/**
	 * Add an string of elementor css selectors
	 *
	 * @var string
	 */
	public $selector = '';

	/**
	 * Add an array of elementor css selectors
	 *
	 * @var array
	 */
	public $wrap_selectors = [];

	/**
	 * Add an string of elementor css selectors
	 *
	 * @var string
	 */
	public $wrap_selector = '';

	/**
	 * Indicates if the field should be allowed to add the size. (small, medium, large)
	 *
	 * @var string
	 */
	public $field_size = '';

	/**
	 * Add responsive true or false
	 *
	 * @var bool
	 */
	public $responsive = false;

	/**
	 * Add global true or false
	 *
	 * @var array
	 */
	public $global = [
		'active' => false
	];

	/**
	 * The field's input rows.
	 *
	 * @var float
	 */
	public $rows = 5;

	/**
	 * The field's input minimum rows.
	 *
	 * @var float
	 */
	public $min_rows = 2;

	/**
	 * The field's input maximum rows.
	 *
	 * @var float
	 */
	public $max_rows = 5;

	/**
	 * Create a new field.
	 *
	 * @param string $name
	 * @param string $id
	 */

	public function __construct ( string $name = '', string $id = '' )
	{
		$this->name = sprintf( __( '%s', 'wpessentil' ), $name );
		if ( ! $id ) {
			$id = str_replace( ' ', '_', strtolower( $name ) );
		}

		if ( $id ) {
			$this->key = WPE_SETTINGS . '_' . $id;
		}

		$this->editor( Loader::$editor );

		return $this;
	}

	/**
	 * Create a new element.
	 *
	 * @param mixed ...$arguments
	 *
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
}
