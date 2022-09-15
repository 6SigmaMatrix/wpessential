<?php

namespace WPEssential\Plugins\Panel\Fields;

use WPEssential\Plugins\Panel\Panel;

class Code extends Panel
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'code';
	/**
	 * Display theme.
	 *
	 * @var string
	 */
	protected $theme = '';
	/**
	 * The field's input language.
	 *
	 * @var string
	 */
	protected $language = 'html';

	/**
	 * Display theme.
	 *
	 * @param $callback
	 *
	 * @return Code
	 */
	public function theme ( $callback )
	{
		$this->theme = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's input language.
	 *
	 * @param $callback
	 *
	 * @return $this
	 */
	public function language ( $callback )
	{
		$this->language = $callback;

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		wp_enqueue_script( 'code-editor' );
		wp_enqueue_style( 'code-editor' );
		wp_enqueue_style( "code-editor-theme-{$this->theme}" );
		$settings = wp_get_code_editor_settings( [ 'type' => $this->language ] );
		if ( $this->language ) {
			$mode = $this->language;
			if ( is_string( $mode ) ) {
				$mode = [
					'name' => $mode,
				];
			}

			if ( ! empty( $settings[ 'codemirror' ][ 'lint' ] ) ) {
				switch ( $mode[ 'name' ] ) {
					case 'css':
					case 'text/css':
					case 'text/x-scss':
					case 'text/x-less':
						wp_enqueue_script( 'csslint' );
						break;
					case 'htmlmixed':
					case 'text/html':
					case 'html':
					case 'php':
					case 'application/x-httpd-php':
					case 'text/x-php':
						wp_enqueue_script( 'htmlhint' );
						wp_enqueue_script( 'csslint' );
						wp_enqueue_script( 'jshint' );
						if ( ! current_user_can( 'unfiltered_html' ) ) {
							wp_enqueue_script( 'htmlhint-kses' );
						}
						break;
					case 'javascript':
					case 'application/ecmascript':
					case 'application/json':
					case 'application/javascript':
					case 'application/ld+json':
					case 'text/typescript':
					case 'application/typescript':
						wp_enqueue_script( 'jshint' );
						wp_enqueue_script( 'jsonlint' );
						break;
				}
			}
		}
		return [
			'settings' => array_filter( [
				'args'  => $settings,
				'theme' => $this->theme
			] )
		];
	}
}
