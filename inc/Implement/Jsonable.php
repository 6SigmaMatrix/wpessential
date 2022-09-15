<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Implement;

interface Jsonable
{
	/**
	 * Convert the object to its JSON representation.
	 *
	 * @param int $options
	 *
	 * @return string
	 */
	public function toJson ( $options = 0 );
}
