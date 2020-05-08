<?php

namespace WPEssential\Builders\Beaver\Implement;


interface Shortcodes
{
	public function __construct ();

	public static function set_name ();

	public static function set_desc ();

	public static function set_category ();

	public static function set_group ();

	public static function set_icon ();

	public static function set_html_template ();

	public static function set_id ();

	public static function set_html_wrapper_class ( $list );

	public static function args ();

	public static function _register_controls ();
}
