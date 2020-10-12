<?php

namespace WPEssential\Plugins\Utility;

final class MetaBoxInit
{
	private static array $options_list = [
		'thread_stock_tab' => 'thread-stock-tab.php',
	];

	public static $config;

	public static function constructor ()
	{
		self::options();

		add_filter( 'wpe/backend/js', [ __CLASS__, 'enqueue' ], 50 );
		add_action( 'add_meta_boxes', [ __CLASS__, 'metaboxes' ] );

		add_action( 'wp_ajax_wpessential_admin_save_metabox', [ __CLASS__, 'save' ], 50, 2 );
		add_action( 'wp_ajax_wpessential_admin_metabox_data', [ __CLASS__, 'metabox_data' ], 50, 2 );
	}

	public static function metaboxes ()
	{
		if ( self::$config && is_array( self::$config ) ) {

			foreach ( self::$config as $config ) {
				$collect = wpe_collect( $config );

				if ( $collect->get( 'id' ) ) {
					add_meta_box(
						$collect->get( 'id' ),
						$collect->get( 'heading' ),
						[ __CLASS__, 'output' ],
						$collect->get( 'post_types', 'post' ),
						$collect->get( 'context', 'normal' ),
						$collect->get( 'priority', 'low' ),
						[ 'config' => $config ]
					);
				}
			}
		}
	}

	public static function output ( $post, $metabox )
	{
		$config = wpe_array_get( $metabox, 'args.config' );
		$id     = wpe_array_get( $metabox, 'args.config.id' );
		$config = apply_filters( "wpe/register/metabox/{$id}", $config );
		?>
        <div class="wpe-metabox-wrapper wpe-wrapper" meta_id="<?php echo esc_attr( $id ) ?>">
            <wpe-metabox></wpe-metabox>
        </div>
		<?php
	}

	public static function enqueue ( $list )
	{
		$place = array_search( 'wpessential-admin', $list );
		unset( $list[ $place ] );
		return array_merge( $list, [ 'wpessential-metabox' ] );
	}

	public static function metabox_data ()
	{
		wpe_ajax_authorized();

		$_post       = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
		$metabox_key = wpe_array_get( $_post, 'meta_id' );
		$post_id     = wpe_array_get( $_post, 'post_id' );
		$options     = get_post_meta( $post_id, $metabox_key, true );

		if ( empty( $options ) ) {
			$options = [ 'key' => '' ];
		}
		$metabox = wpe_array_get( self::$config, $metabox_key );
		$metabox = apply_filters( "wpe/metabox/options/register/{$metabox_key}", $metabox );
		wp_send_json_success( [ 'metabox_options' => wpe_array_get( $metabox, 'fields' ), 'saved_options' => $options ] );
	}

	public static function options ()
	{
		$options_files = apply_filters( 'wpe/metabox/options/list', self::$options_list );
		foreach ( $options_files as $file_k => $file_v ) {
			$file = apply_filters( "wpe/metabox/options/{$file_k}", wpe_plugin_template_load( "config/metabox-controls/{$file_v}" ) );
			if ( file_exists( $file ) ) {
				$args = require_once $file;
				wpe_metabox( $args );
			}
		}
	}

	public static function save ()
	{
		wpe_ajax_authorized();

		if ( !current_user_can( 'manage_options' ) ) {
			wp_send_json_error( __( 'You are not authorized', 'wpessential' ) );
		}

		$_post = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

		$meta_key  = esc_attr( wpe_array_get( $_POST, 'meta_id' ) );
		$meta_data = wpe_array_get( $_post, 'save_options' );
		$post_id   = absint( wpe_array_get( $_POST, 'post_id' ) );
		$post_type = get_post_type( $post_id );

		if ( !$meta_key || !$post_id ) {
			wp_send_json_error( __( 'There is something went wrong', 'wpessential' ) );
		}

		update_post_meta( $post_id, $meta_key, $meta_data );

		do_action( 'wpe_metabox_after_save', $post_id, $meta_key, $meta_data );

		if ( $post_type ) {
			do_action( 'wpe_metabox_after_save_' . $post_type, $post_id, $meta_key, $meta_data );
		}

		wp_send_json_success( __( 'Updated Susscessfully', 'wpessential' ) );
	}
}


