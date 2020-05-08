<?php

namespace WPEssential\Builders\Beaver\Implement;


interface ClassInit
{
	public static function constructor ();

	public static function registry ();

	public static function load_modules ();

	public static function load_controls ();
}
