<?php

namespace WPEssential\Plugins\Api\WordPress;

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;

abstract class WordPress implements Arrayable, JsonSerializable
{
	protected $base_url = 'https://api.wordpress.org';
	/**
	 * Get the route.
	 *
	 * @var string
	 */
	protected $route = '';
	/**
	 * Get the name.
	 *
	 * @var string
	 */
	protected $name = '';
	/**
	 * Get the version.
	 *
	 * @var string
	 */
	protected $ver = '/1.0';
	/**
	 * Get the type like info or update-check.
	 *
	 * @var string
	 */
	protected $type = '';
	/**
	 * Get the detail.
	 *
	 * @var bool
	 */
	protected $detail = false;
	/**
	 * Get the params.
	 *
	 * @var array
	 */
	protected $params = [];

	/**
	 * Set the route.
	 *
	 * @param string $callback
	 *
	 * @return Plugins
	 */
	public function route ( $callback )
	{
		$this->route = "/{$callback}";

		return $this;
	}

	/**
	 * Set the version.
	 *
	 * @param string $callback
	 *
	 * @return Plugins
	 */
	public function ver ( $callback )
	{
		$this->ver = "/{$callback}";

		return $this;
	}

	/**
	 * Set the type like plugin or theme.
	 *
	 * @param string $callback
	 *
	 * @return Plugins
	 */
	public function type ( $callback )
	{
		$this->type = "/{$callback}";

		return $this;
	}

	/**
	 * Set the detail.
	 *
	 * @param bool $callback
	 *
	 * @return Plugins
	 */
	public function detail ( $callback )
	{
		if ( $callback === true ) {
			$this->detail = '.json';
		}

		return $this;
	}

	/**
	 * Set the params.
	 * Example link (https://codex.wordpress.org/WordPress.org_API?#Arguments:)
	 *
	 * @param string $key
	 * @param string $value
	 *
	 * @return Plugins
	 */
	public function params ( $key, $value )
	{
		$this->params[ "request[{$key}]" ] = $value;

		return $this;
	}

	public function __construct ( $name = '', $detail = false )
	{
		if ( $name ) {
			$this->name = "/{$name}";
		}
		$this->detail( $detail );
	}

	public static function make ( ...$args )
	{
		return new static( ...$args );
	}

	public function fetch ()
	{
		$this->params = array_filter( $this->params );
		$this->params = ! empty( $this->params ) ? '?' . http_build_query( $this->params ) : '';
		$url          = "{$this->base_url}{$this->route}{$this->type}{$this->ver}{$this->name}{$this->detail}{$this->params}";
		$data         = wpe_get_data_by_url( $url );
		if ( is_wp_error( $data ) ) {
			wp_die( $data->get_error_message(), $data->get_error_code(), [ 'url' => $url ] );
		}
		return $data;
	}

	public function toArray ()
	{
		return wpe_josn_decode( $this->fetch(), true );
	}

	public function jsonSerialize ()
	{
		return wpe_josn_decode( $this->fetch() );
	}
}
