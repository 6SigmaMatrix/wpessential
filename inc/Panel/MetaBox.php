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
	protected $key = 'wpessential_meta';
	/**
	 * The displayable name of the section.
	 *
	 * @var string
	 */
	protected $name = 'WPEssential Meta';
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
	protected $post_types = [ 'post' ];
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
	 * Set the post types.
	 *
	 * @param string|array $callback
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

	public function init ()
	{
		return $this->prepear();
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		$meta_controls = $this->controls;
		$meta_title    = $this->name;
		add_meta_box( $this->key, $this->name, [
				__CLASS__,
				'view'
		], $this->post_types, $this->context, $this->priority );

		add_filter( 'wpe/localization', function ( $list ) use ( $meta_controls, $meta_title ) {
			return wp_parse_args( [
					'meta' => wp_parse_args( $meta_controls, wpe_array_get( $list, 'meta' ) ),
				/*'theme_info' => [
					'Name' => $meta_title
				],*/
			], $list );
		}, 14 );
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
