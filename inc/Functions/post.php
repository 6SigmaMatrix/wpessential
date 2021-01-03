<?php
if ( ! function_exists( 'wpe_get_sidebar' ) ) {
	/**
	 * Retrive the array of sidebar list.
	 *
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @return array
	 */
	function wpe_get_sidebar ( $is_multiselect = false )
	{
		global $wp_registered_sidebars;

		$items = [];

		// Properly format the array.
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $wp_registered_sidebars ) {
			foreach ( $wp_registered_sidebars as $id => $sidebar ) {
				$items[ $id ] = $sidebar;
			}
		} else {
			$items[ 'no' ] = __( 'No Sidebar Found', 'wpessential' );
		}

		$items = apply_filters( 'wpe/get/sidebars', $items );

		return $items;
	}
}

if ( ! function_exists( 'wpe_get_posts' ) ) {
	/**
	 * Retrive the array of posts.
	 *
	 * @param array $args Define arguments for the get_posts function.
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @return array
	 */
	function wpe_get_posts ( $args = null, $is_multiselect = false )
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

		$items = [];

		// Properly format the array.
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $posts ) {
			foreach ( $posts as $post ) {
				$items[ $post->ID ] = $post->post_title;
			}
		} else {
			$items[ 'no' ] = __( 'No Post Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/posts', $items );
	}
}

if ( ! function_exists( 'wpe_get_post_types' ) ) {
	/**
	 * Retrive the array of post types.
	 *
	 * @param string $output get the output like object or name etc.
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @param bool $public either get the public or protect post types list.
	 * @return array
	 */
	function wpe_get_post_types ( $output = 'objects', $is_multiselect = false, $public = true )
	{
		$items = [];
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Get the post types.
		$post_types = get_post_types(
			[
				'public' => $public,
			],
			$output
		);

		// Build the array.
		if ( $post_types ) {
			foreach ( $post_types as $post_type ) {
				$items[ $post_type->name ] = $post_type->labels->name;
			}
		} else {
			$items[ 'no' ] = __( 'No Post Type Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/post_types', $items );
	}
}

if ( ! function_exists( 'wpe_get_taxonomies' ) ) {
	/**
	 * Retrive the array of publicly taxonomies.
	 *
	 * @param string $output get the output like object or name etc.
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @param bool $public either get the public or protect post types list.
	 * @return array
	 */
	function wpe_get_taxonomies ( $output = 'names', $is_multiselect = false, $public = true )
	{
		$items = [];
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Get the taxonomies.
		$taxonomies = get_taxonomies(
			[
				'public' => $public,
			],
			$output
		);

		// Build the array.
		if ( $taxonomies ) {
			foreach ( $taxonomies as $taxonomy ) {
				$id           = $taxonomy;
				$taxonomy     = get_taxonomy( $taxonomy );
				$items[ $id ] = $taxonomy->labels->name;
			}
		} else {
			$items[ 'no' ] = __( 'No Taxonomy Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/taxonomies', $items );
	}
}

if ( ! function_exists( 'wpe_get_terms' ) ) {
	/**
	 * Retrive array of terms from a taxonomy.
	 *
	 * @param string|array $args See https://developer.wordpress.org/reference/functions/get_terms/ for details.
	 * @param bool $slug get list of terms post by slug or id
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @return array
	 */
	function wpe_get_terms ( $args, $slug = false, $is_multiselect = false )
	{
		$items = [];
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Get the post types.
		$terms = get_terms( $args );
		// Build the array.
		if ( $terms ) {
			$slug = ( $slug ) ? 'slug' : 'term_id';
			foreach ( $terms as $term ) {
				$items[ wpe_array_get( $term, $slug ) ] = wpe_array_get( $term, 'name' );
			}
		} else {
			$items[ 'no' ] = __( 'No Term Found', 'wpessential' );
		}


		return apply_filters( 'wpe/get/terms', $items );
	}
}

if ( ! function_exists( 'wpe_get_page_title' ) ) {
	/**
	 * Returns the archive title.
	 *
	 * @param bool $include_context allow to add the page or post or archive identity.
	 * @return array
	 */
	function wpe_get_page_title ( bool $include_context = true )
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
		}

		return apply_filters( 'wpe/get/archive/title', $title );
	}
}

if ( ! function_exists( 'wpe_get_the_archive_url' ) ) {
	/**
	 * Returns the archive url
	 *
	 * @return string
	 */
	function wpe_get_the_archive_url ()
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
}

if ( ! function_exists( 'wpe_get_user_meta_keys' ) ) {
	/**
	 * Retrive the array of current user meta keys.
	 *
	 * @return array
	 */
	function wpe_get_user_meta_keys ()
	{
		return array_keys( get_user_meta( get_current_user_id() ) );
	}
}

if ( ! function_exists( 'wpe_get_post_custom_keys_array' ) ) {
	/**
	 * Retrive the array of publicly taxonomies.
	 *
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @return array
	 */
	function wpe_get_post_custom_keys_array ( bool $is_multiselect = false )
	{
		global $wpdb;

		// Get the keys.
		$custom_keys = $wpdb->get_results( "SELECT meta_key FROM {$wpdb->prefix}postmeta GROUP BY meta_key" );

		$items = [];
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $custom_keys ) {
			foreach ( $custom_keys as $key ) {
				$items[ $key->meta_key ] = $key->meta_key;
			}
		} else {
			$items[ 'no' ] = __( 'No Key Found', 'wpessential' );
		}

		return apply_filters( 'wpe/get/post/custom/keys', $items );
	}
}

if ( ! function_exists( 'wpe_register_post_type' ) ) {
	/**
	 * Register post type
	 *
	 * @param string $name Define the post type name.
	 * @param array $args Define arguments for the post type.
	 * @return void
	 */
	function wpe_register_post_type ( string $name, array $args )
	{
		$name = "wpe_{$name}";
		$args = apply_filters( "wpe/post_type/{$name}/args", $args );
		register_post_type( $name, $args );
	}
}

if ( ! function_exists( 'wpe_register_taxonomy' ) ) {
	/**
	 * Register taxonomy
	 *
	 * @param string $name Define the taxonomy name.
	 * @param string $post_type Define the post type name.
	 * @param array $args Define arguments for the taxonomy.
	 * @return void
	 */
	function wpe_register_taxonomy ( string $name, string $post_type, array $args )
	{
		$name = "wpe_{$name}";
		$args = apply_filters( "wpe/taxonomy/{$name}/args", $args );
		register_taxonomy( $name, $post_type, $args );
	}
}

if ( ! function_exists( 'wpe_the_blog_cat' ) ) {
	/**
	 * Print the blog post categoies
	 *
	 * @param string $classes classes to add.
	 * @param string $seprator
	 * @return void
	 */
	function wpe_the_blog_cat ( $classes = '', $seprator = ',' )
	{
		ob_start();
		the_category( $seprator );
		$cats = ob_get_clean();
		echo str_replace( '<a', "<a class='wpe-blog-cats {$classes}'", $cats );
	}
}

if ( ! function_exists( 'wpe_the_author_link' ) ) {
	/**
	 * Print the author link
	 *
	 * @param string $classes classes to add
	 * @return void
	 */
	function wpe_the_author_link ( $classes = '' )
	{
		ob_start();
		the_author_posts_link();
		$link = ob_get_clean();
		echo str_replace( '<a', "<a class='wpe-author-link {$classes}'", $link );
	}
}

if ( ! function_exists( 'wpe_get_nav_menus' ) ) {
	/**
	 * Returns an array of navigation menus.
	 *
	 * @param string $value_field The value to be stored in options. Accepted values: id|slug.
	 * @param bool $is_multiselect enable or disable the first option like empty.
	 * @return array
	 */
	function wpe_get_nav_menus ( $value_field = 'id', $is_multiselect = false )
	{
		$nav_menus = wp_get_nav_menus();

		$items = [];
		if ( ! $is_multiselect ) {
			$items[] = __( 'Choose', 'wpessential' );
		}

		// Build the array.
		if ( $nav_menus ) {
			foreach ( $nav_menus as $menu ) {
				$items[ 'slug' === $value_field ? $menu->slug : $menu->term_id ] = $menu->name;
			}
		} else {
			$items[ 'no' ] = __( 'No Menu Found', 'wpessential' );
		}

		return $items;
	}
}