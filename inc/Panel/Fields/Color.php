<?php

namespace WPEssential\Plugins\Panel\Fields;

use WPEssential\Plugins\Panel\Panel;

class Color extends Panel
{
	/**
	 * whether to display the alpha slider
	 *
	 * @var bool
	 */
	protected $alpha = false;
	/**
	 * Define the color list to show in color picker.
	 *
	 * @var array
	 */
	protected $color_list = [
		'#ff4500',
		'#ff8c00',
		'#ffd700',
		'#90ee90',
		'#00ced1',
		'#1e90ff',
		'#c71585'
	];
	/**
	 * color format to store (hsl/hsv/hex/rgb)
	 *
	 * @var string
	 */
	protected $format = 'hex';
	/**
	 * Get the list of material color
	 *
	 * @var bool
	 */
	protected $material_color = [];
	/**
	 * Indicates if the field should be allowed to add the size. (small, medium, large, mini)
	 *
	 * @var string
	 */
	protected $size = '';
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'color';

	/**
	 * whether to display the alpha slider
	 *
	 * @param string $callback
	 *
	 * @return Color
	 */
	public function alpha ( $callback )
	{
		$this->alpha = $callback;

		return $this;
	}

	/**
	 * color format to store (hsl/hsv/hex/rgb)
	 *
	 * @param string $callback
	 *
	 * @return Color
	 */
	public function format ( $callback )
	{
		$this->format = $callback;

		return $this;
	}

	/**
	 * Define the color list to show in color picker.
	 *
	 * @param string $callback
	 *
	 * @return Color
	 */
	public function color_list ( $callback )
	{
		$this->color_list = $callback;

		return $this;
	}

	/**
	 * Set the field size (small, medium, mini, large)
	 *
	 * @param string $callback
	 *
	 * @return Color
	 */
	public function size ( $callback )
	{
		$this->size = $callback;

		return $this;
	}

	/**
	 * Get the list of material color
	 *
	 * @param string $callback
	 *
	 * @return Color
	 */
	public function material_color ( $callback )
	{
		$url     = WPE_URL . 'assets/json/material-colors.min.json';
		$content = wpe_get_data_by_url( $url );
		if ( is_wp_error( $content ) ) {
			wp_die( $content->get_error_message(), $content->get_error_code(), [ 'url' => $url ] );
		}
		$content = wpe_josn_decode( $content, true );
		switch ( $callback ) {
			case 'red':
				$this->material_color = array_values( wpe_array_get( $content, 'red' ) );
				break;
			case 'pink':
				$this->material_color = array_values( wpe_array_get( $content, 'pink' ) );
				break;
			case 'purple':
				$this->material_color = array_values( wpe_array_get( $content, 'purple' ) );
				break;
			case 'deeppurple':
				$this->material_color = array_values( wpe_array_get( $content, 'deeppurple' ) );
				break;
			case 'indigo':
				$this->material_color = array_values( wpe_array_get( $content, 'indigo' ) );
				break;
			case 'blue':
				$this->material_color = array_values( wpe_array_get( $content, 'blue' ) );
				break;
			case 'lightblue':
				$this->material_color = array_values( wpe_array_get( $content, 'lightblue' ) );
				break;
			case 'cyan':
				$this->material_color = array_values( wpe_array_get( $content, 'cyan' ) );
				break;
			case 'teal':
				$this->material_color = array_values( wpe_array_get( $content, 'teal' ) );
				break;
			case 'green':
				$this->material_color = array_values( wpe_array_get( $content, 'green' ) );
				break;
			case 'lightgreen':
				$this->material_color = array_values( wpe_array_get( $content, 'lightgreen' ) );
				break;
			case 'lime':
				$this->material_color = array_values( wpe_array_get( $content, 'lime' ) );
				break;
			case 'yellow':
				$this->material_color = array_values( wpe_array_get( $content, 'yellow' ) );
				break;
			case 'amber':
				$this->material_color = array_values( wpe_array_get( $content, 'amber' ) );
				break;
			case 'orange':
				$this->material_color = array_values( wpe_array_get( $content, 'orange' ) );
				break;
			case 'deeporange':
				$this->material_color = array_values( wpe_array_get( $content, 'deeporange' ) );
				break;
			case 'brown':
				$this->material_color = array_values( wpe_array_get( $content, 'brown' ) );
				break;
			case 'grey':
				$this->material_color = array_values( wpe_array_get( $content, 'grey' ) );
				break;
			case 'bluegrey':
				$this->material_color = array_values( wpe_array_get( $content, 'bluegrey' ) );
				break;
			default:
				foreach ( $content as $color ) {
					$this->material_color = wp_parse_args( $color, $this->material_color );
				}
				$this->material_color = array_values( $this->material_color );
		}

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		$this->color_exchange();
		return [
			'settings' => array_filter( [
				'disabled'     => $this->disabled,
				'size'         => $this->size,
				'show-alpha'   => $this->alpha,
				'color-format' => $this->format,
				'predefine'    => $this->color_list,
				'tabindex'     => $this->tabindex,
			] )
		];
	}

	/**
	 * Prepare the list of color
	 *
	 * @return Color
	 */
	private function color_exchange ()
	{
		if ( $this->material_color ) {
			$this->color_list = $this->material_color;
		}
	}
}
