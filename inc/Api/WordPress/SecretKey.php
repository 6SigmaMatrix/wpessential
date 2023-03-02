<?php

namespace WPEssential\Plugins\Api\WordPress;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class SecretKey extends WordPress
{
	/**
	 * Get the route.
	 *
	 * @var string
	 */
	protected $route = '/secret-key';
	/**
	 * Get the version.
	 *
	 * @var string
	 */
	protected $ver = '/1.0';
	/**
	 * Get the salt.
	 *
	 * @var string
	 */
	protected $salt = '';

	public function ver_1_1 ()
	{
		$this->ver = '/1.1';

		return $this;
	}

	public function __construct ( $salt = false )
	{
		parent::__construct();
		if ( $salt && $this->ver === '/1.1' ) {
			$this->salt = '/salt';
		}
	}

	public function fetch ()
	{
		$url  = "{$this->base_url}{$this->route}{$this->ver}{$this->salt}/";
		$data = wpe_get_data_by_url( $url );
		if ( is_wp_error( $data ) ) {
			wp_die( $data->get_error_message(), $data->get_error_code(), [ 'url' => $url ] );
		}
		return $data;
	}
}
