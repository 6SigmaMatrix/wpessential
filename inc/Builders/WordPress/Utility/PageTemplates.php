<?php

namespace WPEssential\Plugins\Builders\WordPress\Utility;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class PageTemplates
{
	public static function constructor ()
	{
		add_filter( 'wpe/register/page_attributes/templates', [ __CLASS__, 'add_template' ] );
		add_filter( 'wpe/register/page_attributes/templates/view', [ __CLASS__, 'view_template' ] );
		add_filter( 'wpe/register/page_attributes/templates/status', [ __CLASS__, 'template_status' ] );
	}

	public static function add_template ( $list )
	{
		return wp_parse_args( [
			'wpe-wordpress.php' => 'WPE WordPress',
		], $list );
	}

	public static function view_template ( $list )
	{
		return wp_parse_args( [
			wpe_template_load( 'templates/editor-templates/' )
		], $list );
	}


	public static function template_status ( $list )
	{
		return wp_parse_args( [
			[
				'file'  => 'wpe-wordpress.php',
				'title' => __( 'WPE WordPress', 'wpessential' ),
			]
		], $list );
	}
}
