<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Builders\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use JsonSerializable;
use ReturnTypeWillChange;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Beaver;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Brizy;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Divi;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Elementor;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Gutenberg;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\KingComposer;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\ShortcodesUltimate;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\SiteOrigin;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\Themify;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\VisualComposer;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\WordPress;
use WPEssential\Plugins\Builders\Fields\Helper\Editor\WPBakery;
use WPEssential\Plugins\Builders\Fields\Helper\Fields\Callback;
use WPEssential\Plugins\Builders\Fields\Helper\Fields\Parameters;
use WPEssential\Plugins\Implement\Arrayable;
use WPEssential\Plugins\Loader;

abstract class Field implements Arrayable, JsonSerializable
{
	use Parameters;
	use Callback;
	use Beaver;
	use Brizy;
	use Divi;
	use Elementor;
	use Gutenberg;
	use KingComposer;
	use ShortcodesUltimate;
	use SiteOrigin;
	use Themify;
	use VisualComposer;
	use WordPress;
	use WPBakery;

	/**
	 * Create a new field.
	 *
	 * @param string $name
	 * @param string $id
	 */

	public function __construct ( string $name = '', string $id = '' )
	{
		$this->name = sprintf( __( '%s', 'wpessentil' ), $name );
		if ( ! $id ) {
			$id = str_replace( ' ', '_', strtolower( $name ) );
		}

		if ( $id ) {
			$this->key = WPE_SETTINGS . '_' . $id;
		}

		$this->editor( Loader::$editor );
	}

	/**
	 * Create a new element.
	 *
	 * @param mixed ...$arguments
	 *
	 * @return static
	 */
	public static function make ( ...$arguments )
	{
		return new static( ...$arguments );
	}

	/**
	 * Prepare the field json.
	 *
	 * @return json
	 */
	#[ReturnTypeWillChange]
	public function jsonSerialize ()
	{
		return \call_user_func( [ $this, $this->editor ] );
	}

	/**
	 * Prepare the editor fields in array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		return \call_user_func( [ $this, $this->editor ] );
	}
}
