<?php

namespace WPEssential\Builders\Elementor\Implement;


interface ClassInit
{
	public static function constructor ();

	public static function registry_widget ();

	public static function register_category ( $elements_manager );
}
