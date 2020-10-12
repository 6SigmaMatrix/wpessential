<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Implement;

interface Fields
{
	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ();

	/**
	 * Prepare the field's json serialize.
	 *
	 * @return array
	 */
	public function jsonSerialize ();

	/**
	 * Prepare the field's array.
	 *
	 * @return array
	 */
	public function toArray ();
}
