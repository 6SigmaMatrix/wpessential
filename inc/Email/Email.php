<?php

namespace WPEssential\Plugins\Email;
class Email
{
	protected $args          = [];
	protected $send_to       = '';
	protected $send_from     = '';
	protected $subject       = '';
	protected $template_path = '';
	protected $template_html = '';
	protected $plain_text    = '';

	public function constructor () {}

	public function args ( $callback )
	{
		$this->args = $callback;
		return $this;
	}

	public function send_to ( $callback )
	{
		$this->send_to = $callback;
		return $this;
	}

	public function send_from ( $callback )
	{
		$this->send_from = $callback;
		return $this;
	}

	public function subject ( $callback )
	{
		$this->subject = $callback;
		return $this;
	}

	public function template_path ( $callback )
	{
		$this->template_path = $callback;
		return $this;
	}

	public function template_html ( $callback )
	{
		$this->template_html = $callback;
		return $this;
	}

	public function plain_text ( $callback )
	{
		$this->plain_text = $callback;
		return $this;
	}

	public function placeholders ()
	{
		$placeholders = [
			'{{site_logo}}'    => get_custom_logo(),
			'{{site_name}}'    => get_bloginfo( 'name', 'display' ),
			'{{site_tagline}}' => get_bloginfo( 'description', 'display' ),
			'{{site_url}}'     => esc_url( home_url( '/' ) ),
			'{{year}}'         => date( 'Y' ),
			'{{month}}'        => date( 'm' ),
			'{{day}}'          => date( 'd' ),
			'{{date}}'         => date( get_option( 'date_format' ) ),
			'{{time}}'         => date( get_option( 'time_format' ) ),
			'{{admin_email}}'  => esc_html( get_bloginfo( 'admin_email' ) ),
			'{{body}}'         => '',
		];

		return $placeholders;
	}
}
