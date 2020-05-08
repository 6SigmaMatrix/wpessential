<?php

namespace WPEssential\Builders\Beaver\Controls;

use WPEssential\Builders\Beaver\Implement\Crontrols as Implement;

class Hidden implements Implement
{
	public static function constructor ()
	{
		add_filter( 'fl_builder_custom_fields', [ __CLASS__, 'html' ], 11 );
	}

	public static function html ()
	{
		self::enqueue();
		/*Rander the filed HTML in Heredoc PHP format*/
		return <<<Hidden
		<#
		let field = data . field,
		name = data . name,
		value = data . value;
		#>
		<input type = "hidden" class="wpe-hidden" name = "{{name}}" value = "{{value}}" />
		Hidden;
	}

	public static function enqueue ()
	{
		self::css();
		self::js();
	}

	public static function css () { }

	public static function js () { }
}
