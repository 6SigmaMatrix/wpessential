<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Helper;

trait ElementRender
{
	public static $ALLOWED_HTML_WRAPPER_TAGS = [
		'a',
		'article',
		'aside',
		'div',
		'footer',
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'header',
		'main',
		'nav',
		'p',
		'section',
		'span',
	];

	public static $EXTENDED_ALLOWED_HTML_TAGS = [
		'iframe' => [
			'iframe' => [
				'allow'           => true,
				'allowfullscreen' => true,
				'frameborder'     => true,
				'height'          => true,
				'loading'         => true,
				'name'            => true,
				'referrerpolicy'  => true,
				'sandbox'         => true,
				'src'             => true,
				'width'           => true,
			],
		],
		'svg'    => [
			'svg'   => [
				'aria-hidden'     => true,
				'aria-labelledby' => true,
				'class'           => true,
				'height'          => true,
				'role'            => true,
				'viewbox'         => true,
				'width'           => true,
				'xmlns'           => true,
			],
			'g'     => [
				'fill' => true,
			],
			'title' => [
				'title' => true,
			],
			'path'  => [
				'd'    => true,
				'fill' => true,
			],
		],
	];

	/**
	 * Element render attributes.
	 *
	 * Holds all the render attributes of the element. Used to store data like
	 * the HTML class name and the class value, or HTML element ID name and value.
	 *
	 * @access private
	 *
	 * @var array
	 */
	public $render_attributes = [];

	/**
	 * Add link render attributes.
	 *
	 * Used to add link tag attributes to a specific HTML element.
	 *
	 * The HTML link tag is represented by the element parameter. The `url_control` parameter
	 * needs to be an array of link settings in the same format they are set by Elementor's URL control.
	 *
	 * Example usage:
	 *
	 * `$this->add_link_attributes( 'button', $settings['link'] );`
	 *
	 * @param array|string $element     The HTML element.
	 * @param array        $url_control Array of link settings.
	 * @param bool         $overwrite   Optional. Whether to overwrite existing
	 *                                  attribute. Default is false, not to overwrite.
	 *
	 * @return \WPEssential\Plugins\Builders\Elementor\Utility\Base|\WPEssential\Plugins\Builders\WordPress\Utility\Base|Element_Base
	 * @since  2.8.0
	 * @access public
	 *
	 */

	public function add_link_attributes ( $element, array $url_control, $overwrite = false )
	{
		$attributes = [];

		if ( ! empty( $url_control[ 'url' ] ) ) {
			$allowed_protocols = array_merge( wp_allowed_protocols(), [ 'skype', 'viber' ] );

			$attributes[ 'href' ] = esc_url( $url_control[ 'url' ], $allowed_protocols );
		}

		if ( ! empty( $url_control[ 'is_external' ] ) ) {
			$attributes[ 'target' ] = '_blank';
		}

		if ( ! empty( $url_control[ 'nofollow' ] ) ) {
			$attributes[ 'rel' ] = 'nofollow';
		}

		if ( ! empty( $url_control[ 'custom_attributes' ] ) ) {
			// Custom URL attributes should come as a string of comma-delimited key|value pairs
			$attributes = array_merge( $attributes, $this->parse_custom_attributes( $url_control[ 'custom_attributes' ] ) );
		}

		if ( $attributes ) {
			$this->add_render_attribute( $element, $attributes, $overwrite );
		}

		return $this;
	}

	/**
	 * Parse attributes that come as a string of comma-delimited key|value pairs.
	 * Removes Javascript events and unescaped `href` attributes.
	 *
	 * @param string $attributes_string
	 *
	 * @param string $delimiter Default comma `,`.
	 *
	 * @return array
	 */
	public function parse_custom_attributes ( $attributes_string, $delimiter = ',' )
	{
		$attributes = explode( $delimiter, $attributes_string );
		$result     = [];

		foreach ( $attributes as $attribute ) {
			$attr_key_value = explode( '|', $attribute );

			$attr_key = mb_strtolower( $attr_key_value[ 0 ] );

			// Remove any not allowed characters.
			preg_match( '/[-_a-z0-9]+/', $attr_key, $attr_key_matches );

			if ( empty( $attr_key_matches[ 0 ] ) ) {
				continue;
			}

			$attr_key = $attr_key_matches[ 0 ];

			// Avoid Javascript events and unescaped href.
			if ( 'href' === $attr_key || 'on' === substr( $attr_key, 0, 2 ) ) {
				continue;
			}

			if ( isset( $attr_key_value[ 1 ] ) ) {
				$attr_value = trim( $attr_key_value[ 1 ] );
			} else {
				$attr_value = '';
			}

			$result[ $attr_key ] = $attr_value;
		}

		return $result;
	}

	/**
	 * Add render attribute.
	 *
	 * Used to add attributes to a specific HTML element.
	 *
	 * The HTML tag is represented by the element parameter, then you need to
	 * define the attribute key and the attribute key. The final result will be:
	 * `<element attribute_key="attribute_value">`.
	 *
	 * Example usage:
	 *
	 * `$this->add_render_attribute( 'wrapper', 'class', 'custom-widget-wrapper-class' );`
	 * `$this->add_render_attribute( 'widget', 'id', 'custom-widget-id' );`
	 * `$this->add_render_attribute( 'button', [ 'class' => 'custom-button-class', 'id' => 'custom-button-id' ] );`
	 *
	 * @param array|string $element   The HTML element.
	 * @param array|string $key       Optional. Attribute key. Default is null.
	 * @param array|string $value     Optional. Attribute value. Default is null.
	 * @param bool         $overwrite Optional. Whether to overwrite existing
	 *                                attribute. Default is false, not to overwrite.
	 *
	 * @return self Current instance of the element.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function add_render_attribute ( $element, $key = null, $value = null, $overwrite = false )
	{
		if ( is_array( $element ) ) {
			foreach ( $element as $element_key => $attributes ) {
				$this->add_render_attribute( $element_key, $attributes, null, $overwrite );
			}

			return $this;
		}

		if ( is_array( $key ) ) {
			foreach ( $key as $attribute_key => $attributes ) {
				$this->add_render_attribute( $element, $attribute_key, $attributes, $overwrite );
			}

			return $this;
		}

		if ( empty( $this->render_attributes[ $element ][ $key ] ) ) {
			$this->render_attributes[ $element ][ $key ] = [];
		}

		settype( $value, 'array' );

		if ( $overwrite ) {
			$this->render_attributes[ $element ][ $key ] = $value;
		} else {
			$this->render_attributes[ $element ][ $key ] = array_merge( $this->render_attributes[ $element ][ $key ], $value );
		}

		return $this;
	}

	/**
	 * Get render attribute string.
	 *
	 * Used to retrieve the value of the render attribute.
	 *
	 * @param string $element The element.
	 *
	 * @return string Render attribute string, or an empty string if the attribute
	 *                is empty or not exist.
	 * @since  1.0.0
	 * @access public
	 *
	 */
	public function get_render_attribute_string ( $element )
	{
		if ( empty( $this->render_attributes[ $element ] ) ) {
			return '';
		}

		return $this->render_html_attributes( $this->render_attributes[ $element ] );
	}

	/**
	 * Render html attributes
	 *
	 * @access public
	 * @static
	 *
	 * @param array $attributes
	 *
	 * @return string
	 */
	public function render_html_attributes ( array $attributes )
	{
		$rendered_attributes = [];

		foreach ( $attributes as $attribute_key => $attribute_values ) {
			if ( is_array( $attribute_values ) ) {
				$attribute_values = implode( ' ', $attribute_values );
			}

			$rendered_attributes[] = sprintf( '%1$s="%2$s"', $attribute_key, esc_attr( $attribute_values ) );
		}

		return implode( ' ', $rendered_attributes );
	}

	/**
	 * Safe print a validated HTML tag.
	 *
	 * @param string $tag
	 */
	public function print_validated_html_tag ( $tag )
	{
		echo $this->validate_html_tag( $tag );
	}

	/**
	 * Validate an HTML tag against a safe allowed list.
	 *
	 * @param string $tag
	 *
	 * @return string
	 */
	public function validate_html_tag ( $tag )
	{
		return in_array( strtolower( $tag ), self::$ALLOWED_HTML_WRAPPER_TAGS ) ? $tag : 'div';
	}
}
