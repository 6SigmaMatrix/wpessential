<?php

namespace WPEssential\Plugins\Fields;

use WPEssential\Plugins\Implement\Fields;

class Wysiwyg extends Field implements Fields
{
	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	public $type = 'wysiwyg';

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	public function prepear ()
	{
		if ( 'Panel' === $this->editor ) {
			//wp_enqueue_media();
			wp_enqueue_editor();
			//wp_editor( $content, $editor_id);
			/*return [
				'settings' => [
					'type'               => $this->_type,
					'format'             => $this->_format,
					'align'              => $this->_align,
					'time-arrow-control' => $this->_time_arrow_control,
					'range-separator'    => $this->_range_separator,
					'start-placeholder'  => $this->_start_placeholder,
					'end-placeholder'    => $this->_end_placeholder,
				]
			];*/
		}

		return [];
	}

	/**
	 * Prepare the field's json serialize.
	 *
	 * @return array
	 */
	public function jsonSerialize ()
	{
		return wp_parse_args( $this->prepear(), parent::jsonSerialize() );
	}

	/**
	 * Prepare the field's array.
	 *
	 * @return array
	 */
	public function toArray ()
	{
		if ( 'Panel' === $this->editor ) {
			$prepear               = $this->prepear();
			$prepear[ 'settings' ] = wp_parse_args( wpe_array_get( $prepear, 'settings' ), parent::toArray()[ 'settings' ] );
		} else {
			$prepear = $this->prepear();
		}

		return wp_parse_args( $prepear, parent::toArray() );
	}

}
