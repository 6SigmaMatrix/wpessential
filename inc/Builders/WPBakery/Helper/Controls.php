<?php

namespace WPEssential\Builders\WPBakery\Helper;


trait Controls
{
	/**
	 * Global arguments of the controls.
	 *
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void The type.
	 * @since  1.0.0
	 * @access protected|static|satatic
	 */
	protected static function global ( array $new_args )
	{
		$args     = [
			'holder'           => '',
			'class'            => 'wpe-wpbakery-panel',
			'heading'          => '',
			'param_name'       => '',
			'description'      => '',
			'admin_label'      => '',
			'dependency'       => [],
			'edit_field_class' => 'vc_col-xs-12',
			'weight'           => '',
			'group'            => '',
			'std'              => '',
		];
		$new_args = wp_parse_args( $new_args, $args );

		return $new_args;
	}

	/**
	 * Register the text control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function text ( $id = null, $new_args = [] )
	{
		$args     = [
			'heading'    => __( 'Text', 'wpessential' ),
			'type'       => 'textfield',
			'std'        => __( 'IM An Example Text', 'wpessential' ),
			'param_name' => WPE_SETTINGS . "_text_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/text', $new_args );
	}

	/**
	 * Register the textarea control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function textarea ( $id = null, $new_args = [] )
	{
		$args     = [
			'heading'    => __( 'Text', 'wpessential' ),
			'type'       => 'textarea',
			'std'        => __( 'IM An Example Text', 'wpessential' ),
			'param_name' => WPE_SETTINGS . "_textarea_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/textarea', $new_args );
	}

	/**
	 * Register the heading control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function heading ( $id = null, $new_args = [] )
	{
		$args     = [
			'type'       => 'heading',
			'data'       => __( 'There is no option available.', 'wpessential' ),
			'tag'        => 'h3',
			'param_name' => WPE_SETTINGS . "_heading_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/heading', $new_args );
	}

	/**
	 * Register the divider control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function divider ( $id = null, $new_args = [] )
	{
		$args     = [
			'type'       => 'divider',
			'param_name' => WPE_SETTINGS . "_divider_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/divider', $new_args );
	}

	/**
	 * Register the raw html control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function raw_html ( $id = null, $new_args = [] )
	{
		$args     = [
			'heading'    => __( 'Raw HTML', 'wpessential' ),
			'type'       => 'textarea_raw_html',
			'param_name' => WPE_SETTINGS . "_raw_html_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/raw_html', $new_args );
	}

	/**
	 * Register the button control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function button ( $id = null, $new_args = [] )
	{
		$args     = [
			'heading'     => __( 'Button', 'wpessential' ),
			'type'        => 'button',
			'button_type' => 'success',
			'param_name'  => WPE_SETTINGS . "_button_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/raw_html', $new_args );
	}

	/**
	 * Register the number control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function number ( $id = null, $new_args = [] )
	{
		$args     = [
			'heading'    => __( 'Number', 'wpessential' ),
			'type'       => 'number',
			'min'        => 1,
			'max'        => 100,
			'step'       => 1,
			'std'        => 10,
			'param_name' => WPE_SETTINGS . "_number_{$id}",
		];
		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/number', $new_args );
	}

	/**
	 * Register the wysiwyg control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function wysiwyg ( $id = null, $new_args = [] )
	{
		$args = [
			'heading'    => __( 'Wysiwyg', 'wpessential' ),
			'type'       => 'textarea_html',
			'param_name' => WPE_SETTINGS . "_wysiwyg_{$id}",
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/wysiwyg', $new_args );
	}

	/**
	 * Register the code control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function code ( $id = null, $new_args = [] )
	{
		$args = [
			'heading'    => __( 'Code', 'wpessential' ),
			'type'       => 'code',
			'rows'       => 10,
			'param_name' => WPE_SETTINGS . "_code_{$id}",
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/code', $new_args );
	}

	/**
	 * Register the hidden control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function hidden ( $id = null, $new_args = [] )
	{
		$args = [
			'type'       => 'hidden',
			'param_name' => WPE_SETTINGS . "_hidden_{$id}",
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/hidden', $new_args );
	}

	/**
	 * Register the switcher control.
	 *
	 * @param null $id is used to add the options id.
	 * @param array $new_args are used to add the parameters of the method.
	 *
	 * @return bool|array|void
	 * @since  1.0.0
	 * @access protected|static
	 * @protected|@static
	 */
	protected static function switcher ( $id = null, $new_args = [] )
	{
		$args = [
			'heading'      => __( 'Switcher', 'wpessential' ),
			'type'         => 'switcher',
			'label_on'     => __( 'On', 'wpessential' ),
			'label_off'    => __( 'Off', 'wpessential' ),
			'return_value' => 'yes',
			'std'          => 'yes',
			'param_name'   => WPE_SETTINGS . "_switcher_{$id}",
		];

		$new_args = wp_parse_args( $new_args, $args );
		$new_args = self::global( $new_args );

		return apply_filters( 'wpe/wpbakery/fields/switcher', $new_args );
	}
}
