<?php
/**
 * Copyright (c) 2020. This file is copyright by WPEssential.
 */

namespace WPEssential\Plugins\Helper;

trait Help
{
	public static function constructor ()
	{
		/*add_action( 'wpe/post/loop/post_thumbnail', [ __CLASS__, 'loop_thumbnail' ] );
		add_action( 'wpe/post/loop/title', [ __CLASS__, 'loop_title' ] );
		add_action( 'wpe/post/loop/meta', [ __CLASS__, 'loop_meta' ] );
		add_action( 'wpe/post/loop/readmore', [ __CLASS__, 'loop_readmore' ] );*/
	}

	public static function array_to_chunk ( $data, $size )
	{
		return array_chunk( $data, $size );
	}

	/**
	 * Returns an array of the attachment's properties.
	 *
	 * @param string $url URL to the image.
	 * @return array
	 */
	public static function get_image_from_url ( $url )
	{
		$image_id = self::get_image_id( $url );
		$image    = wp_get_attachment_image_src( $image_id, 'full' );

		return [
			'url'       => $image[ 0 ],
			'width'     => $image[ 1 ],
			'height'    => $image[ 2 ],
			'thumbnail' => $image[ 3 ],
		];
	}

	/**
	 * Returns the attachment object.
	 *
	 * @static
	 * @access public
	 * @see https://pippinsplugins.com/retrieve-attachment-id-from-image-url/
	 * @param string $url URL to the image.
	 * @return int|string Numeric ID of the attachement.
	 */
	public static function get_image_id ( $url )
	{
		global $wpdb;
		if ( empty( $url ) ) {
			return 0;
		}

		$attachment = wp_cache_get( 'wpe_image_id_' . md5( $url ), null );
		if ( false === $attachment ) {
			$attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE guid = %s;", $url ) );
			wp_cache_add( 'wpe_image_id_' . md5( $url ), $attachment, null );
		}

		if ( ! empty( $attachment ) ) {
			return $attachment[ 0 ];
		}
		return 0;
	}

	/**
	 * Get an array of posts.
	 *
	 * @static
	 * @access public
	 * @param array $args Define arguments for the get_posts function.
	 * @return array
	 */
	public static function get_posts ( $args )
	{
		if ( is_string( $args ) ) {
			$args = add_query_arg(
				[
					'suppress_filters' => false,
				]
			);
		} elseif ( is_array( $args ) && ! isset( $args[ 'suppress_filters' ] ) ) {
			$args[ 'suppress_filters' ] = false;
		}

		// Get the posts.
		$posts = get_posts( $args );

		// Properly format the array.
		$items = [
			'' => __( 'Choose', 'wpessential' ),
		];
		foreach ( $posts as $post ) {
			$items[ $post->ID ] = $post->post_title;
		}
		wp_reset_postdata();

		return $items;
	}

	/**
	 * Get an array of publicly-querable taxonomies.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_taxonomies ()
	{
		$items = [
			'' => __( 'Choose', 'wpessential' ),
		];

		// Get the taxonomies.
		$taxonomies = get_taxonomies(
			[
				'public' => true,
			]
		);

		// Build the array.
		foreach ( $taxonomies as $taxonomy ) {
			$id           = $taxonomy;
			$taxonomy     = get_taxonomy( $taxonomy );
			$items[ $id ] = $taxonomy->labels->name;
		}

		return $items;
	}

	/**
	 * Get an list of publicly-querable advanced taxonomies.
	 *
	 * @static
	 * @access public
	 * @param array $args
	 * @param string $output
	 * @param string $operator
	 * @return array
	 */
	public static function get_taxonomies_advanced ( array $args, string $output, string $operator )
	{
		global $wp_taxonomies;

		$field = ( 'names' === $output ) ? 'name' : false;

		// Handle 'object_type' separately.
		if ( isset( $args[ 'object_type' ] ) ) {
			$object_type = (array) $args[ 'object_type' ];
			unset( $args[ 'object_type' ] );
		}

		$taxonomies = wp_filter_object_list( $wp_taxonomies, $args, $operator );

		if ( isset( $object_type ) ) {
			foreach ( $taxonomies as $tax => $tax_data ) {
				if ( ! array_intersect( $object_type, $tax_data->object_type ) ) {
					unset( $taxonomies[ $tax ] );
				}
			}
		}

		if ( $field ) {
			$taxonomies = wp_list_pluck( $taxonomies, $field );
		}

		return $taxonomies;
	}

	/**
	 * Get an array of publicly-querable post-types.
	 *
	 * @static
	 * @access public
	 * @return array
	 */
	public static function get_post_types ()
	{
		$items = [
			'' => __( 'Choose', 'wpessential' ),
		];

		// Get the post types.
		$post_types = get_post_types(
			[
				'public' => true,
			],
			'objects'
		);

		// Build the array.
		foreach ( $post_types as $post_type ) {
			$items[ $post_type->name ] = $post_type->labels->name;
		}

		return $items;
	}

	/**
	 * Get an array of terms from a taxonomy.
	 *
	 * @static
	 * @access public
	 * @param string|array $taxonomies See https://developer.wordpress.org/reference/functions/get_terms/ for details.
	 * @return array
	 */
	public static function get_terms ( $taxonomies )
	{
		$items = [
			'' => __( 'Choose', 'wpessential' ),
		];

		// Get the post types.
		$terms = get_terms( $taxonomies );

		// Build the array.
		foreach ( $terms as $term ) {
			$items[ $term->term_id ] = $term->name;
		}

		return $items;
	}

	/**
	 * Returns an array of navigation menus.
	 *
	 * @access public
	 * @param string $value_field The value to be stored in options. Accepted values: id|slug.
	 * @return array
	 */
	public static function get_nav_menus ( $value_field = 'id' )
	{
		$choices   = [];
		$nav_menus = wp_get_nav_menus();

		foreach ( $nav_menus as $term ) {
			$choices[ 'slug' === $value_field ? $term->slug : $term->term_id ] = $term->name;
		}

		return $choices;
	}

	/**
	 * Compares the 2 values given the condition
	 *
	 * @param mixed $value1 The 1st value in the comparison.
	 * @param mixed $value2 The 2nd value in the comparison.
	 * @param string $operator The operator we'll use for the comparison.
	 * @return boolean whether The comparison has succeded (true) or failed (false).
	 */
	public static function compare_values ( $value1, $value2, $operator )
	{
		if ( '===' === $operator ) {
			return $value1 === $value2;
		}
		if ( '!==' === $operator ) {
			return $value1 !== $value2;
		}
		if ( ( '!=' === $operator || 'not equal' === $operator ) ) {
			return $value1 != $value2; // phpcs:ignore WordPress.PHP.StrictComparisons
		}
		if ( ( '>=' === $operator || 'greater or equal' === $operator || 'equal or greater' === $operator ) ) {
			return $value2 >= $value1;
		}
		if ( ( '<=' === $operator || 'smaller or equal' === $operator || 'equal or smaller' === $operator ) ) {
			return $value2 <= $value1;
		}
		if ( ( '>' === $operator || 'greater' === $operator ) ) {
			return $value2 > $value1;
		}
		if ( ( '<' === $operator || 'smaller' === $operator ) ) {
			return $value2 < $value1;
		}
		if ( 'contains' === $operator || 'in' === $operator ) {
			if ( is_array( $value1 ) && is_array( $value2 ) ) {
				foreach ( $value2 as $val ) {
					if ( in_array( $val, $value1 ) ) { // phpcs:ignore WordPress.PHP.StrictInArray
						return true;
					}
				}
				return false;
			}
			if ( is_array( $value1 ) && ! is_array( $value2 ) ) {
				return in_array( $value2, $value1 ); // phpcs:ignore WordPress.PHP.StrictInArray
			}
			if ( is_array( $value2 ) && ! is_array( $value1 ) ) {
				return in_array( $value1, $value2 ); // phpcs:ignore WordPress.PHP.StrictInArray
			}
			return ( false !== strrpos( $value1, $value2 ) || false !== strpos( $value2, $value1 ) );
		}
		if ( 'does not contain' === $operator || 'not in' === $operator ) {
			return ! self::compare_values( $value1, $value2, $operator );
		}
		return $value1 == $value2; // phpcs:ignore WordPress.PHP.StrictComparisons
	}

	/**
	 * Initialize the WP_Filesystem.
	 *
	 * @static
	 * @access public
	 * @return object WP_Filesystem
	 */
	public static function init_filesystem ()
	{
		$credentials = [];

		if ( ! defined( 'FS_METHOD' ) ) {
			define( 'FS_METHOD', 'direct' );
		}

		$method = defined( 'FS_METHOD' ) ? FS_METHOD : false;

		if ( 'ftpext' === $method ) {
			// If defined, set it to that, Else, set to NULL.
			$credentials[ 'hostname' ] = defined( 'FTP_HOST' ) ? preg_replace( '|\w+://|', '', FTP_HOST ) : null;
			$credentials[ 'username' ] = defined( 'FTP_USER' ) ? FTP_USER : null;
			$credentials[ 'password' ] = defined( 'FTP_PASS' ) ? FTP_PASS : null;

			// Set FTP port.
			if ( strpos( $credentials[ 'hostname' ], ':' ) && null !== $credentials[ 'hostname' ] ) {
				[ $credentials[ 'hostname' ], $credentials[ 'port' ] ] = explode( ':', $credentials[ 'hostname' ], 2 );
				if ( ! is_numeric( $credentials[ 'port' ] ) ) {
					unset( $credentials[ 'port' ] );
				}
			} else {
				unset( $credentials[ 'port' ] );
			}

			// Set connection type.
			if ( ( defined( 'FTP_SSL' ) && FTP_SSL ) && 'ftpext' === $method ) {
				$credentials[ 'connection_type' ] = 'ftps';
			} elseif ( ! array_filter( $credentials ) ) {
				$credentials[ 'connection_type' ] = null;
			} else {
				$credentials[ 'connection_type' ] = 'ftp';
			}
		}

		// The WordPress filesystem.
		global $wp_filesystem;

		if ( empty( $wp_filesystem ) ) {
			require_once wp_normalize_path( ABSPATH . '/wp-admin/includes/file.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
			WP_Filesystem( $credentials );
		}

		return $wp_filesystem;
	}

	/**
	 * Returns an array of user meta keys.
	 *
	 * @access public
	 * @return array
	 */
	public static function get_user_meta_keys ()
	{
		return array_keys( get_user_meta( get_current_user_id() ) );
	}

	/**
	 * Returns the string with words base limit
	 *
	 * @access public
	 * @param string $desc
	 * @param float $lenght
	 * @param $indecator
	 * @return array
	 */
	public static function trim_words ( string $desc, float $lenght, $indecator )
	{
		return wp_trim_words( $desc, $lenght, $indecator );
	}

	/**
	 * Returns the string with charactor base link
	 *
	 * @access public
	 * @param string $desc
	 * @param float $lenght
	 * @param $indecator
	 * @return array
	 */
	public static function trim_char ( string $desc, float $lenght, $indecator )
	{
		return mb_strimwidth( $desc, 0, $lenght, $indecator );
	}

	/**
	 * Returns the blog post categoies
	 *
	 * @access public
	 * @param string $classes
	 * @param string $seprator
	 * @return void
	 */
	public static function the_blog_cat ( string $classes = '', $seprator = ',' )
	{
		ob_start();
		the_category( $seprator );
		$cats = ob_get_clean();
		echo str_replace( '<a', "<a class='wpe-blog-cats {$classes}'", $cats );
	}

	/**
	 * Returns the author link
	 *
	 * @access public
	 * @param string $classes
	 * @return void
	 */
	public static function the_author_link ( string $classes = '' )
	{
		ob_start();
		the_author_posts_link();
		$link = ob_get_clean();
		echo str_replace( '<a', "<a class='wpe-author-link {$classes}'", $link );
	}

	/**
	 * Returns the archive url
	 *
	 * @access public
	 * @return string
	 */
	public static function get_the_archive_url ()
	{
		$url = '';
		if ( is_category() || is_tag() || is_tax() ) {
			$url = get_term_link( get_queried_object() );
		} elseif ( is_author() ) {
			$url = get_author_posts_url( get_queried_object_id() );
		} elseif ( is_year() ) {
			$url = get_year_link( get_query_var( 'year' ) );
		} elseif ( is_month() ) {
			$url = get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) );
		} elseif ( is_day() ) {
			$url = get_day_link( get_query_var( 'year' ), get_query_var( 'monthnum' ), get_query_var( 'day' ) );
		} elseif ( is_post_type_archive() ) {
			$url = get_post_type_archive_link( get_post_type() );
		}

		return $url;
	}

	/**
	 * Returns the archive title.
	 *
	 * @access public
	 * @param bool $include_context
	 * @return array
	 */
	public static function get_page_title ( bool $include_context )
	{
		$title = '';

		if ( is_singular() ) {
			/* translators: %s: Search term. */
			$title = get_the_title();

			if ( $include_context ) {
				$post_type_obj = get_post_type_object( get_post_type() );
				$title         = sprintf( '%s: %s', $post_type_obj->labels->singular_name, $title );
			}
		} elseif ( is_search() ) {
			/* translators: %s: Search term. */
			$title = sprintf( __( 'Search Results for: %s', 'wpessential' ), get_search_query() );

			if ( get_query_var( 'paged' ) ) {
				/* translators: %s is the page number. */
				$title .= sprintf( __( '&nbsp;&ndash; Page %s', 'wpessential' ), get_query_var( 'paged' ) );
			}
		} elseif ( is_category() ) {
			$title = single_cat_title( '', false );

			if ( $include_context ) {
				/* translators: Category archive title. 1: Category name */
				$title = sprintf( __( 'Category: %s', 'wpessential' ), $title );
			}
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
			if ( $include_context ) {
				/* translators: Tag archive title. 1: Tag name */
				$title = sprintf( __( 'Tag: %s', 'wpessential' ), $title );
			}
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';

			if ( $include_context ) {
				/* translators: Author archive title. 1: Author name */
				$title = sprintf( __( 'Author: %s', 'wpessential' ), $title );
			}
		} elseif ( is_year() ) {
			$title = get_the_date( _x( 'Y', 'yearly archives date format', 'wpessential' ) );

			if ( $include_context ) {
				/* translators: Yearly archive title. 1: Year */
				$title = sprintf( __( 'Year: %s', 'wpessential' ), $title );
			}
		} elseif ( is_month() ) {
			$title = get_the_date( _x( 'F Y', 'monthly archives date format', 'wpessential' ) );

			if ( $include_context ) {
				/* translators: Monthly archive title. 1: Month name and year */
				$title = sprintf( __( 'Month: %s', 'wpessential' ), $title );
			}
		} elseif ( is_day() ) {
			$title = get_the_date( _x( 'F j, Y', 'daily archives date format', 'wpessential' ) );

			if ( $include_context ) {
				/* translators: Daily archive title. 1: Date */
				$title = sprintf( __( 'Day: %s', 'wpessential' ), $title );
			}
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = _x( 'Asides', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = _x( 'Galleries', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = _x( 'Images', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = _x( 'Videos', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = _x( 'Quotes', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = _x( 'Links', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = _x( 'Statuses', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = _x( 'Audio', 'post format archive title', 'wpessential' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = _x( 'Chats', 'post format archive title', 'wpessential' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );

			if ( $include_context ) {
				/* translators: Post type archive title. 1: Post type name */
				$title = sprintf( __( 'Archives: %s', 'wpessential' ), $title );
			}
		} elseif ( is_tax() ) {
			$title = single_term_title( '', false );

			if ( $include_context ) {
				$tax = get_taxonomy( get_queried_object()->taxonomy );
				/* translators: Taxonomy term archive title. 1: Taxonomy singular name, 2: Current taxonomy term */
				$title = sprintf( __( '%1$s: %2$s', 'wpessential' ), $tax->labels->singular_name, $title );
			}
		} elseif ( is_404() ) {
			$title = __( 'Page Not Found', 'wpessential' );
		} // End if().

		/**
		 * The archive title.
		 * Filters the archive title.
		 *
		 * @param string $title Archive title to be displayed.
		 * @since 1.0.0
		 *
		 */
		$title = apply_filters( 'wpe/get_the_archive_title', $title );

		return $title;
	}

	/*public static function loop_thumbnail ()
	{
		include wpe_template_load( 'templates/global/post-thumbnail.php' );
	}

	public static function loop_title ()
	{
		include wpe_template_load( 'templates/global/title.php' );
	}

	public static function loop_meta ()
	{
		include wpe_template_load( 'templates/global/meta.php' );
	}

	public static function loop_readmore ()
	{
		include wpe_template_load( 'templates/global/readmore.php' );
	}*/
}
