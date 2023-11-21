<?php

namespace WPEssential\Plugins\Panel;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;
use WPEssential\Plugins\Panel\Helper\Icon;
use WPEssential\Plugins\Panel\Helper\Note;

abstract class Panel implements Arrayable, JsonSerializable
{
	use Note;
	use Icon;

	/**
	 * Fields settings.
	 *
	 * @var object
	 */
	public $settings;

	/**
	 * Class information.
	 *
	 * @var string
	 */
	protected $class_info;
	/**
	 * The default field's value.
	 *
	 * @var mixed
	 */
	protected $default = '';
	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	protected $dependency = [];
	/**
	 * The add the filed dependency to editor.
	 *
	 * @var array
	 */
	protected $dependent = [];
	/**
	 * The description of the field.
	 *
	 * @var string
	 */
	protected $description = '';
	/**
	 * Indicates if the field should be disabled.
	 *
	 * @var bool
	 */
	protected $disabled = false;
	/**
	 * The set the editor.
	 *
	 * @var string
	 */
	protected $editor = 'panel';
	/**
	 * The add the filed id to database for save the data.
	 *
	 * @var string
	 */
	protected $key = '';
	/**
	 * The displayable name of the field.
	 *
	 * @var string
	 */
	protected $name = '';
	/**
	 * Set the callback to be used for determining the field's placeholder value.
	 *
	 * @return Panel
	 * @var string
	 */
	protected $placeholder = '';
	/**
	 * The short description of the field.
	 *
	 * @var string
	 */
	protected $subtitle = '';
	/**
	 * The input tabindex.
	 *
	 * @var int
	 */
	protected $tabindex = 0;
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'text';
	/**
	 * Full width the controls.
	 *
	 * @var string
	 */
	protected $full_width = false;

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 *
	 * @return Panel
	 */
	public function dependent ( $callback )
	{
		$this->dependent = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the editor dependency.
	 *
	 * @param array $callback
	 *
	 * @return Panel
	 */
	public function dependency ( $callback )
	{
		$this->dependency = $callback;

		return $this;
	}

	/**
	 * Get the component name for the field.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function type ( $callback )
	{
		$this->type = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's key value.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function key ( $callback )
	{
		$this->key = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's short description value.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function subtitle ( $callback )
	{
		$this->subtitle = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's description value.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function description ( $callback )
	{
		$this->description = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's placeholder value.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function placeholder ( $callback )
	{
		$this->placeholder = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's default value.
	 *
	 * @param $callback
	 *
	 * @return Panel
	 */
	public function default ( $callback )
	{
		$this->default = $callback;

		return $this;
	}

	/**
	 * whether Autocomplete is disabled
	 *
	 * @param $callback
	 *
	 * @return Panel
	 */
	public function disabled ( $callback )
	{
		$this->disabled = $callback;

		return $this;
	}

	/**
	 * The input tabindex.
	 *
	 * @param $callback
	 *
	 * @return Panel
	 */
	public function tabindex ( $callback )
	{
		$this->tabindex = $callback;

		return $this;
	}

	/**
	 * Full width the controls.
	 *
	 * @param $callback
	 *
	 * @return Panel
	 */
	public function full_width ( $callback )
	{
		$this->full_width = $callback;

		return $this;
	}

	public function __construct ( $name = '', $id = '' )
	{
		$this->name = sprintf( __( '%s', 'wpessentil' ), $name );
		if ( ! $id ) {
			$id = str_replace( ' ', '_', strtolower( $name ) );
		}

		if ( $id ) {
			$this->key = WPE_SETTINGS . '_' . $id;
		}

		//$this->editor( Loader::$editor );
		$this->editor( 'panel' );

		$this->reflection_class();
	}

	/**
	 * Set the callback to be used for determining the editor type.
	 *
	 * @param string $callback
	 *
	 * @return Panel
	 */
	public function editor ( $callback )
	{
		$this->editor = $callback;

		return $this;
	}

	protected function reflection_class ()
	{
		$this->class_info = ( new \ReflectionClass( $this ) );
	}

	/**
	 * Create a new element.
	 *
	 * @param mixed ...$args
	 *
	 * @return Panel
	 */
	public static function make ( ...$args )
	{
		return new static( ...$args );
	}

	/**
	 * Prepare the Options fields.
	 *
	 * @return array
	 */
	protected function panel ()
	{
		return array_filter( [
			'defined'   => $this->default,
			'desc'      => $this->description,
			'id'        => $this->key,
			'subtitle'  => $this->subtitle,
			'title'     => $this->name,
			'type'      => $this->type,
			'fullwidth' => $this->full_width,
			'note'      => array_filter( [
				'title'      => $this->note_title,
				'icon'       => $this->note_icon,
				'content'    => $this->note_desc,
				'icon_color' => $this->note_icon_color,
				'icon_size'  => $this->note_icon_size
			] )
		] );
	}

	/**
	 * Prepare the field json.
	 *
	 * @return false|string
	 * @throws \JsonException
	 */
	public function jsonSerialize ()
	: mixed
	{
		return json_encode( get_object_vars( $this ), JSON_THROW_ON_ERROR );
	}

	/**
	 * Prepare the editor fields in array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		$editor = $this->{$this->editor}();
		return wp_parse_args( $this->prepear(), $editor );
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		return [];
	}
}
