<?php

namespace WPEssential\Plugins\Libraries\TermDescriptionEditor;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class TermDescriptionEditor
{
	public static function constructor ()
	{
		add_action( 'admin_head-edit-tags.php', function () {
			echo '<style>.quicktags-toolbar input { width: auto; }.column-description img { max-width: 100%; }.term-description-wrap #post-status-info { width: auto; }</style>';
		} );
		add_action( 'admin_head-edit-tags.php', [ __CLASS__, 'load_wordcount_js' ] );
		add_action( 'admin_head-term.php', [ __CLASS__, 'load_wordcount_js' ] );
		/* Only users with the "publish_posts" capability can use this feature. */
		if ( current_user_can( 'publish_posts' ) ) {

			/* Remove the filters, which disallow HTML in term descriptions */
			remove_filter( 'pre_term_description', 'wp_filter_kses' );
			remove_filter( 'term_description', 'wp_kses_data' );

			/* Add filters to disallow unsafe HTML tags */
			if ( ! current_user_can( 'unfiltered_html' ) ) {
				add_filter( 'pre_term_description', 'wp_kses_post' );
				add_filter( 'term_description', 'wp_kses_post' );
			}
		}

		/* Apply `the_content` filters to term description */
		if ( isset( $GLOBALS[ 'wp_embed' ] ) ) {
			add_filter( 'term_description', [ $GLOBALS[ 'wp_embed' ], 'run_shortcode' ], 8 );
			add_filter( 'term_description', [ $GLOBALS[ 'wp_embed' ], 'autoembed' ], 8 );
		}

		add_filter( 'term_description', 'wptexturize' );
		add_filter( 'term_description', 'convert_smilies' );
		add_filter( 'term_description', 'convert_chars' );
		add_filter( 'term_description', 'wpautop' );

		if ( ! is_admin() ) {
			add_filter( 'term_description', 'shortcode_unautop' );
			add_filter( 'term_description', 'do_shortcode', 11 );
		}

		$taxonomies = get_taxonomies();
		/* Loop through the taxonomies, adding actions */
		foreach ( $taxonomies as $taxonomy ) {
			add_action( $taxonomy . '_edit_form_fields', [ __CLASS__, 'render_field_edit' ], 1, 2 );
			add_action( $taxonomy . '_add_form_fields', [ __CLASS__, 'render_field_add' ], 1, 1 );
		}
	}

	public static function render_field_edit ( $tag, $taxonomy )
	{
		$settings = [
			'textarea_name' => 'description',
			'textarea_rows' => 10,
			'editor_class'  => 'i18n-multilingual',
		];
		?>
		<tr class="form-field term-description-wrap">
			<th scope="row">
				<label for="description"><?php _e( 'Description', 'wpessential' ); ?></label>
			</th>
			<td>
				<?php
				wp_editor( htmlspecialchars_decode( $tag->description ), 'html-tag-description', $settings );
				self::editor_word_count();
				?>
				<p class="description"><?php _e( 'The description is not prominent by default; however, some themes may show it.', 'wpessential' ); ?></p>
			</td>
			<script>
				// Remove the non-html field
				jQuery( 'textarea#description' ).closest( '.form-field' ).remove();
			</script>
		</tr>
		<?php
	}

	private static function editor_word_count ()
	{
		?>
		<div id="post-status-info">
			<div id="description-word-count" class="hide-if-no-js" style="padding: 5px 10px;">
				<?php printf(
					__( 'Word count: %s', 'wpessential' ),
					'<span class="word-count">0</span>'
				); ?>
			</div>
		</div>
		<?php
	}

	public static function render_field_add ( $taxonomy )
	{
		$settings = [
			'textarea_name' => 'description',
			'textarea_rows' => 7,
			'editor_class'  => 'i18n-multilingual',
		];
		?>
		<div class="form-field term-description-wrap">
			<label for="tag-description"><?php esc_html_e( 'Description' ); ?></label>
			<?php
			wp_editor( '', 'html-tag-description', $settings );
			self::editor_word_count();
			?>
			<p><?php _e( 'The description is not prominent by default; however, some themes may show it.', 'wpessential' ); ?></p>
			<script>
				// Remove the non-html field
				jQuery( 'textarea#tag-description' ).closest( '.form-field' ).remove();
				jQuery( function ( $ )
				{
					$( '#addtag' ).on( 'mousedown', '#submit', function ()
					{
						tinyMCE.triggerSave();
						$( document ).bind( 'ajaxSuccess.vtde_add_term', function ()
						{
							if ( tinyMCE.activeEditor )
							{
								tinyMCE.activeEditor.setContent( '' );
							}
							$( document ).unbind( 'ajaxSuccess.vtde_add_term', false );
						} );
					} );
				} );
			</script>
		</div>
		<?php
	}

	public static function load_wordcount_js ()
	{
		wp_enqueue_script( 'wpessential-editor-wordcount' );
	}
}
