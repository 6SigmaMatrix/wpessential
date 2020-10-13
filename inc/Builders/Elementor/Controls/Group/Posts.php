<?php
/*
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Builders\Elementor\Controls\Group;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Base;

class Posts extends Group_Control_Base
{

	const INLINE_MAX_RESULTS = 15;

	protected static $fields;

	public static function get_type ()
	{
		return 'posts';
	}

	/**
	 * @deprecated since 2.4.0 using Control's settings 'export' = false
	 *
	 * @param $element
	 * @param $control_id
	 *
	 * @return mixed
	 */
	public static function on_export_remove_setting_from_element ( $element, $control_id )
	{
		// _deprecated_function( __METHOD__, '2.4.0' );

		unset( $element[ 'settings' ][ $control_id . '_posts_ids' ] );
		unset( $element[ 'settings' ][ $control_id . '_authors' ] );

		foreach ( TCI_Utils::get_public_post_types() as $post_type => $label ) {
			$taxonomy_filter_args = [
				'show_in_nav_menus' => true,
				'object_type'       => [ $post_type ],
			];

			$taxonomies = get_taxonomies( $taxonomy_filter_args, 'objects' );

			foreach ( $taxonomies as $taxonomy => $object ) {
				unset( $element[ 'settings' ][ $control_id . '_' . $taxonomy . '_ids' ] );
			}
		}

		return $element;
	}

	protected function init_fields ()
	{
		$fields = [];

		$fields[ 'post_type' ] = [
			'label' => __( 'Source', 'tci-uet' ),
			'type'  => Controls_Manager::SELECT,
		];

		$fields[ 'posts_ids' ] = [
			'label'       => __( 'Search & Select', 'tci-uet' ),
			'type'        => 'query',
			'post_type'   => '',
			'options'     => [],
			'label_block' => true,
			'multiple'    => true,
			'filter_type' => 'by_id',
			'condition'   => [
				'post_type' => 'by_id',
			],
			'export'      => false,
		];

		$fields[ 'authors' ] = [
			'label'       => __( 'Author', 'tci-uet' ),
			'label_block' => true,
			'type'        => 'query',
			'multiple'    => true,
			'default'     => [],
			'options'     => [],
			'filter_type' => 'author',
			'condition'   => [
				'post_type!' => [
					'by_id',
					'current_query',
				],
			],
			'export'      => false,
		];

		return $fields;
	}

	protected function prepare_fields ( $fields )
	{
		$args = $this->get_args();

		$post_type_args = [];
		if ( ! empty( $args[ 'post_type' ] ) ) {
			$post_type_args[ 'post_type' ] = $args[ 'post_type' ];
		}

		$post_types = wpe_get_post_type_list( $post_type_args );//TCI_Utils::get_public_post_types( $post_type_args );

		$post_types_options = $post_types;

		$post_types_options[ 'by_id' ]         = __( 'Manual Selection', 'tci-uet' );
		$post_types_options[ 'current_query' ] = __( 'Current Query', 'tci-uet' );

		$fields[ 'post_type' ][ 'options' ] = $post_types_options;

		$fields[ 'post_type' ][ 'default' ] = key( $post_types );

		$fields[ 'posts_ids' ][ 'object_type' ] = array_keys( $post_types );

		$taxonomy_filter_args = [
			'show_in_nav_menus' => true,
		];

		$taxonomies = get_taxonomies( $taxonomy_filter_args, 'objects' );

		// bypass bug in WP_List_Util::filter() causing wrong array comparison
		// when a taxonomy belongs to several post-types (e.g. when using woocommerce-product-add-ons)
		// ( using simple '==' rather than in_array() or array_intersect() ).
		$filtered_taxonomies = [];
		if ( ! empty( $args[ 'post_type' ] ) ) {
			foreach ( $taxonomies as $taxonomy => $obj ) {
				$tax_array = (array) $obj;
				if ( in_array( $args[ 'post_type' ], $tax_array[ 'object_type' ] ) ) {
					$filtered_taxonomies[ $taxonomy ] = $obj;
				}
			}
		} else {
			$filtered_taxonomies = $taxonomies;
		}

		foreach ( $filtered_taxonomies as $taxonomy => $object ) {
			$taxonomy_args = [
				'label'       => $object->label,
				'type'        => 'query',
				'label_block' => true,
				'multiple'    => true,
				'object_type' => $taxonomy,
				'options'     => [],
				'condition'   => [
					'post_type' => $object->object_type,
				],
				'export'      => false,
			];

			$count = wp_count_terms( $taxonomy );

			$options = [];

			// For large websites, use Ajax to search
			if ( $count > self::INLINE_MAX_RESULTS ) {
				$taxonomy_args[ 'type' ] = 'query';

				$taxonomy_args[ 'filter_type' ] = 'taxonomy';
			} else {
				$taxonomy_args[ 'type' ] = Controls_Manager::SELECT2;

				$terms = get_terms( [
					'taxonomy'   => $taxonomy,
					'hide_empty' => false,
				] );

				foreach ( $terms as $term ) {
					$options[ $term->term_id ] = $term->name;
				}

				$taxonomy_args[ 'options' ] = $options;
			}

			$fields[ $taxonomy . '_ids' ] = $taxonomy_args;
		}

		return parent::prepare_fields( $fields );
	}

	protected function get_default_options ()
	{
		return [
			'popover' => false,
		];
	}

	protected function fix_offset ( $query_args, $settings, $prefix = '' )
	{
		if ( 0 < $settings[ $prefix . 'offset' ] ) {
			/**
			 * Due to a WordPress bug, the offset will be set later, in $this->fix_query_offset()
			 * @see https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination
			 */
			$query_args[ 'offset_to_fix' ] = $settings[ $prefix . 'offset' ];
		}

		return $query_args;
	}

	protected function build_query_args ( $settings, $control_id_prefix )
	{

		$prefix = $control_id_prefix . '_';

		$post_type = $settings[ $prefix . 'post_type' ];

		$query_args = [
			'orderby'             => $settings[ 'orderby' ],
			'order'               => $settings[ 'order' ],
			'ignore_sticky_posts' => 1,
			'post_status'         => 'publish', // Hide drafts/private posts for admins
		];

		if ( 'by_id' === $post_type ) {
			$post_types = wpe_get_post_type_list();//TCI_Utils::get_public_post_types();

			$query_args[ 'post_type' ]      = array_keys( $post_types );
			$query_args[ 'posts_per_page' ] = - 1;

			$query_args[ 'post__in' ] = $settings[ $prefix . 'posts_ids' ];

			if ( empty( $query_args[ 'post__in' ] ) ) {
				// If no selection - return an empty query
				$query_args[ 'post__in' ] = [ 0 ];
			}
		} else {
			$query_args[ 'post_type' ]      = $post_type;
			$query_args[ 'posts_per_page' ] = $settings[ 'posts_per_page' ];
			$query_args[ 'tax_query' ]      = [];

			$query_args = $this->fix_offset( $query_args, $settings );

			$taxonomies = get_object_taxonomies( $post_type, 'objects' );

			foreach ( $taxonomies as $object ) {
				$setting_key = $prefix . $object->name . '_ids';

				if ( ! empty( $settings[ $setting_key ] ) ) {
					$query_args[ 'tax_query' ][] = [
						'taxonomy' => $object->name,
						'field'    => 'term_id',
						'terms'    => $settings[ $setting_key ],
					];
				}
			}
		}

		if ( ! empty( $settings[ $prefix . 'authors' ] ) ) {
			$query_args[ 'author__in' ] = $settings[ $prefix . 'authors' ];
		}

		$post__not_in = [];
		if ( ! empty( $settings[ 'exclude' ] ) ) {
			if ( in_array( 'current_post', $settings[ 'exclude' ], true ) ) {
				if ( wp_doing_ajax() && ! empty( $_REQUEST[ 'post_id' ] ) ) {
					$post__not_in[] = sanitize_text_field( $_REQUEST[ 'post_id' ] );
				} elseif ( is_singular() ) {
					$post__not_in[] = get_queried_object_id();
				}
			}

			if ( in_array( 'manual_selection', $settings[ 'exclude' ], true ) && ! empty( $settings[ 'exclude_ids' ] ) ) {
				$post__not_in = array_merge( $post__not_in, $settings[ 'exclude_ids' ] );
			}
		}

		if ( ! empty( $settings[ 'avoid_duplicates' ] ) && 'yes' === $settings[ 'avoid_duplicates' ] ) {
			$post__not_in = array_merge( $post__not_in, Query::$displayed_ids );
		}

		$query_args[ 'post__not_in' ] = $post__not_in;

		return $query_args;
	}

	public function get_query_args ( $control_id_prefix, $settings )
	{

		$defaults = [
			$control_id_prefix . '_post_type' => 'post',
			$control_id_prefix . '_posts_ids' => [],
			'orderby'                         => 'date',
			'order'                           => 'desc',
			'posts_per_page'                  => 3,
			'offset'                          => 0,
		];

		$settings = wp_parse_args( $settings, $defaults );

		$post_type = $settings[ $control_id_prefix . '_post_type' ];

		if ( 'current_query' === $post_type ) {
			$current_query_vars = $GLOBALS[ 'wp_query' ]->query_vars;

			/**
			 * Current query variables.
			 *
			 * Filters the query variables for the current query.
			 *
			 * @param array $current_query_vars Current query variables.
			 * @since 1.0.0
			 *
			 */
			$current_query_vars = apply_filters( 'wpessential/query_control/get_query_args/current_query', $current_query_vars );

			return $current_query_vars;
		}

		return $this->build_query_args( $settings, $control_id_prefix );
	}
}
