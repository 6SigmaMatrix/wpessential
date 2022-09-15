<?php

namespace WPEssential\Plugins\Panel;

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;

final class Section implements Arrayable, JsonSerializable
{
	/**
	 * The add the filed id to database for save the data.
	 *
	 * @var string
	 */
	protected $key = '';
	/**
	 * The displayable name of the section.
	 *
	 * @var string
	 */
	protected $name = '';
	/**
	 * The description of the field.
	 *
	 * @var string
	 */
	protected $description = '';
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
	protected $note_icon = 'el-icon-plus';
	/**
	 * Indicates if the field should be note title.
	 *
	 * @var string
	 */
	protected $note_title = '';
	/**
	 * There are 2 type of icons in section to add like (image, icon).
	 *
	 * @var string
	 */
	protected $icon_type = 'icon';
	/**
	 * Get the icon path or icon.
	 *
	 * @var string
	 */
	protected $icon = '';
	/**
	 * Set the section priority.
	 *
	 * @var int
	 */
	protected $priority = null;
	/**
	 * Set the section controls.
	 *
	 * @var array
	 */
	protected $controls = [];
	/**
	 * Set the post types.
	 *
	 * @var array
	 */
	protected $post_types = [];
	/**
	 * Set the context.
	 *
	 * @var array
	 */
	protected $context = [];
	/**
	 * Set the priorities.
	 *
	 * @var array
	 */
	protected $priorities = [];

	/**
	 * Set the callback to be used for determining the field's key value.
	 *
	 * @param string $callback
	 *
	 * @return Section
	 */
	public function key ( $callback )
	{
		$this->key = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's description value.
	 *
	 * @param string $callback
	 *
	 * @return Section
	 */
	public function description ( $callback )
	{
		$this->description = $callback;

		return $this;
	}

	/**
	 * The note icon of the field.
	 *
	 * @param $callback
	 *
	 * @return Section
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
	 * @return Section
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
	 * @return Section
	 */
	public function note_desc ( $callback )
	{
		$this->note_desc = $callback;

		return $this;
	}

	/**
	 * Set the icon type.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function icon_type ( $callback )
	{
		$this->icon_type = $callback;

		return $this;
	}

	/**
	 * Set the icon path or icon.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function icon ( $callback )
	{
		$this->icon = $callback;

		return $this;
	}

	/**
	 * Set the section priority.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function priority ( $callback )
	{
		$this->priority = $callback;

		return $this;
	}

	/**
	 * Set the post_types.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function post_types ( $callback )
	{
		$this->post_types = $callback;

		return $this;
	}

	/**
	 * Set the context.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function context ( $callback )
	{
		$this->context = $callback;

		return $this;
	}

	/**
	 * Set the priorities.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function priorities ( $callback )
	{
		$this->priorities = $callback;

		return $this;
	}

	/**
	 * Set the section controls.
	 *
	 * @param $callback
	 *
	 * @return Section
	 */
	public function controls ( $callback )
	{
		$this->controls = $callback;

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
	}

	/**
	 * Create a new element.
	 *
	 * @param mixed ...$args
	 *
	 * @return Section
	 */
	public static function make ( ...$args )
	{
		return new static( ...$args );
	}

	/**
	 * Prepare the field json.
	 *
	 * @return false|string
	 * @throws \JsonException
	 */
	public function jsonSerialize ()
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
		return wp_parse_args( $this->prepear() );
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{

		return array_filter( [
			'id'        => $this->key,
			'title'     => $this->name,
			'desc'      => $this->description,
			'note'      => array_filter( [
				'title'   => $this->note_title,
				'icon'    => $this->note_icon,
				'content' => $this->note_desc
			] ),
			'icon_type' => $this->icon_type,
			'icon'      => $this->icon,
			'priority'  => $this->priority,
			'fields'    => $this->controls,
		] );
	}
}
