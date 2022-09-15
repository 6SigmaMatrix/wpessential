<?php

namespace WPEssential\Plugins\Utility;

final class DupplicatePost
{
	public static function constructor ()
	{
		add_filter( 'post_row_actions', [ __CLASS__, 'edit_page_link' ], 10, 2 );
		add_action( 'admin_head', [ __CLASS__, 'edit_screen_guten' ] );
		add_action( 'post_submitbox_misc_actions', [ __CLASS__, 'edit_screen_classic' ] );
		add_action( 'admin_action_wpe_duplicate_post_as_draft', [ __CLASS__, 'duplicate_it' ] );
		add_action( 'wp_before_admin_bar_render', [ __CLASS__, 'duplicate_page_admin_bar_link' ] );
	}

	public static function edit_page_link ( $actions, $post )
	{
		if ( current_user_can( 'edit_posts' ) ) {
			$actions[ 'duplicate' ] = '<a href="admin.php?action=wpe_duplicate_post_as_draft&amp;post=' . $post->ID . '&amp;nonce=' . wp_create_nonce( WPE_NONCE . $post->ID ) . '" title="' . __( 'Duplicate this as draft', 'wpessential' ) . '" rel="permalink">' . __( 'Duplicate', 'wpessential' ) . '</a>';
		}

		return $actions;
	}

	public static function edit_screen_guten ()
	{
		global $post;
		if ( $post ) {
			wp_enqueue_style( 'wpessential-gutenberg-editor', WPE_URL . 'assets/css/wpessential-gutenberg-editor.css' );
			wp_register_script( 'wpessential-gutenberg-editor', WPE_URL . 'assets/js/wpessential-gutenberg-editor.js', [ 'wp-edit-post', 'wp-plugins', 'wp-i18n', 'wp-element' ], WPE_VERSION );
			wp_localize_script( 'wpessential-gutenberg-editor', 'wpe_params', [
					'wpe_post_id'        => $post->ID,
					'wpenonce'           => wp_create_nonce( WPE_NONCE . $post->ID ),
					'wpe_post_text'      => __( "Duplicate This", 'duplicate-page' ),
					'wpe_post_title'     => __( 'Duplicate this as draft', 'duplicate-page' ),
					'wpe_duplicate_link' => "admin.php?action=wpe_duplicate_post_as_draft"
				]
			);
			wp_enqueue_script( 'wpessential-gutenberg-editor' );
		}
	}

	public static function edit_screen_classic ()
	{
		global $post;

		if ( $post ) {
			$html    = '<div id="major-publishing-actions">';
			$html    .= '<div id="export-action">';
			$html    .= '<a href="admin.php?action=wpe_duplicate_post_as_draft&amp;post=' . $post->ID . '&amp;nonce=' . wp_create_nonce( WPE_NONCE . $post->ID ) . '" title="' . __( 'Duplicate this as draft', 'duplicate-page' ) . '" rel="permalink">' . __( 'Duplicate This', 'duplicate-page' ) . '</a>';
			$html    .= '</div>';
			$html    .= '</div>';
			$content = apply_filters( 'wpautop', $html );
			$content = str_replace( ']]>', ']]>', $content );

			echo $content;
		}
	}

	public static function duplicate_it ()
	{
		$nonce = sanitize_text_field( wpe_array_get( $_REQUEST, 'nonce' ) );

		$post_id         = wpe_array_get( $_GET, 'post', wpe_array_get( $_POST, 'post' ) );
		$post            = get_post( intval( $post_id ) );
		$current_user_id = get_current_user_id();
		if ( wp_verify_nonce( $nonce, WPE_NONCE . $post_id ) ) {
			if ( current_user_can( 'manage_options' ) || current_user_can( 'edit_others_posts' ) ) {
				self::edit_post( $post_id );
			} elseif ( current_user_can( 'contributor' ) && $current_user_id === $post->post_author ) {
				self::edit_post( $post_id, 'pending' );
			} elseif ( current_user_can( 'edit_posts' ) && $current_user_id === $post->post_author ) {
				self::edit_post( $post_id );
			} else {
				wp_die( __( 'Unauthorized Access.', 'wpessential' ) );
			}
		} else {
			wp_die( __( 'Security check issue, Please try again.', 'wpessential' ) );
		}
	}

	public static function duplicate_page_admin_bar_link ()
	{
		global $wp_admin_bar, $post;

		$current_object = get_queried_object();
		if ( empty( $current_object ) ) {
			return;
		}

		$post_type_object = $post->post_type;
		if ( ! empty( $post_type_object ) && ( $post_type_object && ( $current_object->show_ui || $post_type_object === 'attachment' ) ) ) {
			$wp_admin_bar->add_menu( [
				'parent' => 'edit',
				'id'     => 'duplicate_this',
				'title'  => __( 'Duplicate This as draft', 'wpessential' ),
				'href'   => esc_url_raw( admin_url() . 'admin.php?action=wpe_duplicate_post_as_draft&amp;post=' . $post->ID . '&amp;nonce=' . wp_create_nonce( WPE_NONCE . $post->ID ) )
			] );
		}
	}

	private static function edit_post ( $post_id, $post_status_update = '' )
	{
		if ( $post_status_update === '' ) {
			$post_status = 'draft';
		} else {
			$post_status = $post_status_update;
		}

		$action   = wpe_array_get( $_REQUEST, 'action' );
		$_post_id = wpe_array_get( $_GET, 'post', wpe_array_get( $_POST, 'post' ) );

		if ( ! $_post_id || ( ! $action && 'wpe_duplicate_post_as_draft' !== sanitize_text_field( $action ) ) ) {
			wp_die( __( 'No post to duplicate has been supplied!', 'wpessential' ) );
		}

		$post = get_post( $post_id );

		$current_user    = wp_get_current_user();
		$new_post_author = $current_user->ID;

		if ( $post ) {
			$args = [
				'comment_status' => $post->comment_status,
				'ping_status'    => $post->ping_status,
				'post_author'    => $new_post_author,
				'post_content'   => $post->post_content,
				'post_excerpt'   => $post->post_excerpt,
				'post_parent'    => $post->post_parent,
				'post_password'  => $post->post_password,
				'post_status'    => $post_status,
				'post_title'     => $post->post_title . '- (Copy)',
				'post_type'      => $post->post_type,
				'to_ping'        => $post->to_ping,
				'menu_order'     => $post->menu_order,
			];


			$new_post_id = wp_insert_post( $args );


			self::save_taxonomy( $post->post_type, $post_id, $new_post_id );
			self::save_meta( $post_id, $new_post_id );


			$returnpage = '';
			if ( $post->post_type !== 'post' ) {
				$returnpage = '?post_type=' . $post->post_type;
			}
			wp_redirect( esc_url_raw( admin_url( 'edit.php' . $returnpage ) ) );
			exit;
		} else {
			wp_die( __( 'Error! Post creation failed, could not find original post: ', 'wpessential' ) . $post_id );
		}
	}

	private static function save_meta ( $old_id, $new_id )
	{
		global $wpdb;

		$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=%d", $old_id ) );
		if ( count( $post_meta_infos ) !== 0 ) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ( $post_meta_infos as $meta_info ) {
				$meta_key        = sanitize_text_field( $meta_info->meta_key );
				$meta_value      = addslashes( $meta_info->meta_value );
				$sql_query_sel[] = "SELECT $new_id, '$meta_key', '$meta_value'";
			}
			$sql_query .= implode( ' UNION ALL ', $sql_query_sel );
			$wpdb->query( $sql_query );
		}
	}

	private static function save_taxonomy ( $post_type, $old_id, $new_id )
	{
		$taxonomies = array_map( 'sanitize_text_field', get_object_taxonomies( $post_type ) );
		if ( ! empty( $taxonomies ) ) {
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $old_id, $taxonomy, [ 'fields' => 'slugs' ] );
				wp_set_object_terms( $new_id, $post_terms, $taxonomy, false );
			}
		}
	}
}
