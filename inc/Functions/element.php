<?php
if ( ! function_exists( 'wpe_heading_tags' ) ) {
	/**
	 * Heading tags.
	 *
	 * @return array.
	 */
	function wpe_heading_tags ()
	{
		return apply_filters(
			'wpe/heading/tags',
			[
				'h1'   => 'H1',
				'h2'   => 'H2',
				'h3'   => 'H3',
				'h4'   => 'H4',
				'h5'   => 'H5',
				'h6'   => 'H6',
				'div'  => 'div',
				'span' => 'span',
				'p'    => 'p',
			]
		);
	}
}

if ( ! function_exists( 'wpe_info_type' ) ) {
	/**
	 * Info type.
	 *
	 * @return array
	 */
	function wpe_info_type ()
	{
		return apply_filters(
			'wpe/info/type',
			[
				''        => __( 'Default', 'wpessential' ),
				'info'    => __( 'Info', 'wpessential' ),
				'success' => __( 'Success', 'wpessential' ),
				'warning' => __( 'Warning', 'wpessential' ),
				'danger'  => __( 'Danger', 'wpessential' ),
			]
		);
	}
}

if ( ! function_exists( 'wpe_element_size' ) ) {
	/**
	 * Element size.
	 *
	 * @return array
	 */
	function wpe_element_size ()
	{
		return apply_filters(
			'wpe/size',
			[
				'xs' => __( 'Extra Small', 'wpessential' ),
				'sm' => __( 'Small', 'wpessential' ),
				'md' => __( 'Medium', 'wpessential' ),
				'lg' => __( 'Large', 'wpessential' ),
				'xl' => __( 'Extra Large', 'wpessential' ),
			]
		);
	}
}