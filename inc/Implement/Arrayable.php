<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Implement;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

interface Arrayable
{
	/**
	 * Get the instance as an array.
	 *
	 * @return array
	 */
	public function toArray ();
}
