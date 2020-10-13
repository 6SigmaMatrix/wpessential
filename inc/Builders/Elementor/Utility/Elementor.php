<?php

namespace WPEssential\Plugins\Builders\Elementor\Utility;

use Elementor\Plugin;

use WPEssential\Plugins\Builders\Elementor\Controls\Group\Posts;
use WPEssential\Plugins\Builders\Elementor\Controls\Group\Query as GroupQuery;
use WPEssential\Plugins\Builders\Elementor\Controls\Group\Related;
use WPEssential\Plugins\Builders\Elementor\Controls\Query;
use WPEssential\Plugins\Implement\ShortcodeInit;
use WPEssential\Plugins\Loader;

final class Elementor implements ShortcodeInit
{
	public static function constructor ()
	{
		add_action( 'elementor/ajax/register_actions', [ __CLASS__, 'register_ajax_actions' ] );
		add_action( 'elementor/elements/categories_registered', [ __CLASS__, 'register_category' ] );
		add_action( 'elementor/controls/controls_registered', [ __CLASS__, 'register_controls' ] );
		self::registry_widget();
	}

	public static function registry_widget ()
	{
		Loader::editor( 'elementor' );
		$list = apply_filters( 'wpe/elementor/shortcodes', [] );
		if ( ! $list ) {
			return;
		}

		foreach ( $list as $class_name ) {
			if ( class_exists( $class_name ) ) {
				new $class_name();
			}
		}
	}

	public static function register_category ( $elements_manager )
	{
		Categories::constructor( $elements_manager );
	}

	public static function register_controls ()
	{
		$controls_manager = Plugin::instance()->controls_manager;

		$controls_manager->add_group_control( Posts::get_type(), new Posts() );
		$controls_manager->add_group_control( GroupQuery::get_type(), new GroupQuery() );
		$controls_manager->add_group_control( Related::get_type(), new Related() );
		$controls_manager->register_control( 'query', new Query() );
	}

	public static function register_ajax_actions ( $ajax_manager )
	{
		$ajax_manager->register_ajax_action( 'query_control_value_titles', [
			__CLASS__,
			'ajax_posts_control_value_titles',
		] );
		$ajax_manager->register_ajax_action( 'panel_posts_control_filter_autocomplete', [
			__CLASS__,
			'ajax_posts_filter_autocomplete',
		] );
	}

	public static function ajax_posts_control_value_titles ( $request )
	{
		$ids = (array) $request[ 'id' ];

		$results = [];

		switch ( $request[ 'filter_type' ] ) {
			case 'taxonomy':
				$terms = get_terms(
					[
						'term_taxonomy_id' => $ids,
						'hide_empty'       => false,
					]
				);

				global $wp_taxonomies;
				foreach ( $terms as $term ) {
					$term_name = self::get_term_name_with_parents( $term );
					if ( ! empty( $request[ 'include_type' ] ) ) {
						$text = $wp_taxonomies[ $term->taxonomy ]->labels->name . ': ' . $term_name;
					} else {
						$text = $term_name;
					}
					$results[ $term->term_taxonomy_id ] = $text;
				}
				break;

			case 'by_id':
			case 'post':
				$query = new \WP_Query(
					[
						'post_type'      => 'any',
						'post__in'       => $ids,
						'posts_per_page' => - 1,
					]
				);

				foreach ( $query->posts as $post ) {
					$results[ $post->ID ] = $post->post_title;
				}
				break;

			case 'author':
				$query_params = [
					'who'                 => 'authors',
					'has_published_posts' => true,
					'fields'              => [
						'ID',
						'display_name',
					],
					'include'             => $ids,
				];

				$user_query = new \WP_User_Query( $query_params );

				foreach ( $user_query->get_results() as $author ) {
					$results[ $author->ID ] = $author->display_name;
				}
				break;
			default:
				$results = apply_filters( 'wpessential/query_control/get_value_titles/' . $request[ 'filter_type' ], [], $request );
		}

		return $results;
	}

	public static function ajax_posts_filter_autocomplete ( array $data )
	{
		if ( empty( $data[ 'filter_type' ] ) || empty( $data[ 'q' ] ) ) {
			throw new \Exception( 'Bad Request' );
		}

		$results = [];

		switch ( $data[ 'filter_type' ] ) {
			case 'taxonomy':
				$query_params = [
					'taxonomy'   => self::extract_post_type( $data ),
					'search'     => $data[ 'q' ],
					'hide_empty' => false,
				];

				$terms = get_terms( $query_params );

				global $wp_taxonomies;

				foreach ( $terms as $term ) {
					$term_name = self::get_term_name_with_parents( $term );
					if ( ! empty( $data[ 'include_type' ] ) ) {
						$text = $wp_taxonomies[ $term->taxonomy ]->labels->name . ': ' . $term_name;
					} else {
						$text = $term_name;
					}

					$results[] = [
						'id'   => $term->term_taxonomy_id,
						'text' => $text,
					];
				}

				break;

			case 'by_id':
			case 'post':
				$query_params = [
					'post_type'      => self::extract_post_type( $data ),
					's'              => $data[ 'q' ],
					'posts_per_page' => - 1,
				];

				if ( 'attachment' === $query_params[ 'post_type' ] ) {
					$query_params[ 'post_status' ] = 'inherit';
				}

				$query = new \WP_Query( $query_params );

				foreach ( $query->posts as $post ) {
					$post_type_obj = get_post_type_object( $post->post_type );
					if ( ! empty( $data[ 'include_type' ] ) ) {
						$text = $post_type_obj->labels->name . ': ' . $post->post_title;
					} else {
						$text = ( $post_type_obj->hierarchical ) ? self::get_post_name_with_parents( $post ) : $post->post_title;
					}

					$results[] = [
						'id'   => $post->ID,
						'text' => $text,
					];
				}
				break;

			case 'author':
				$query_params = [
					'who'                 => 'authors',
					'has_published_posts' => true,
					'fields'              => [
						'ID',
						'display_name',
					],
					'search'              => '*' . $data[ 'q' ] . '*',
					'search_columns'      => [
						'user_login',
						'user_nicename',
					],
				];

				$user_query = new \WP_User_Query( $query_params );

				foreach ( $user_query->get_results() as $author ) {
					$results[] = [
						'id'   => $author->ID,
						'text' => $author->display_name,
					];
				}
				break;
			default:
				$results = apply_filters( 'wpessential/query_control/get_autocomplete/' . $data[ 'filter_type' ], [], $data );
		}

		return [
			'results' => $results,
		];
	}
}
