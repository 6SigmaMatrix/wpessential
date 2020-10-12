<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Builders\Elementor\Controls;

use Elementor\Control_Select2;

class Query extends Control_Select2
{

	public function get_type ()
	{
		return 'query';
	}

	/**
	 * 'query' can be used for passing query args in the structure and format used by WP_Query.
	 * @return array
	 */
	protected function get_default_settings ()
	{
		return array_merge(
			parent::get_default_settings(), [
				'query' => '',
			]
		);
	}
}
