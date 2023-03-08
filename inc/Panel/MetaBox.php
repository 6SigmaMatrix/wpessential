<?php

namespace WPEssential\Plugins\Panel;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;

final class MetaBox implements Arrayable, JsonSerializable
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
	 * Set the section priority.
	 *
	 * @var int
	 */
	protected $priority = 'default';
	/**
	 * Set the section controls.
	 *
	 * @var string
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
	 * @var string
	 */
	protected $context = 'advanced';

	/**
	 * Set the callback to be used for determining the field's key value.
	 *
	 * @param string $callback
	 *
	 * @return MetaBox
	 */
	public function key ( $callback )
	{
		$this->key = $callback;

		return $this;
	}

	/**
	 * Set the section priority.
	 *
	 * @param $callback
	 *
	 * @return MetaBox
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
	 * @return MetaBox
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
	 * @return MetaBox
	 */
	public function context ( $callback )
	{
		$this->context = $callback;

		return $this;
	}

	/**
	 * Set the section controls.
	 *
	 * @param $callback
	 *
	 * @return MetaBox
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
	 * @return MetaBox
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
		return [
			'id'       => $this->key,
			'title'    => $this->name,
			'callback' => [ __CLASS__, 'view' ],
			'screens'  => $this->post_types,
			'context'  => $this->context,
			'priority' => $this->priority,
			'meta'     => $this->controls
		];
	}

	public static function view ()
	{
		?>
		<div class="wpessential-admin wpe-container-fluid">
			<div class="wpe-admin-page" id="wpessential-admin">
				<wpe-options></wpe-options>
			</div>
		</div>
		<?php
	}
}
