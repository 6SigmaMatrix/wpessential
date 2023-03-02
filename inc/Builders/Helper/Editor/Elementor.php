<?php

namespace WPEssential\Plugins\Builders\Helper\Editor;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait Elementor
{
	/**
	 * Prepare the elementor fields.
	 *
	 * @return array
	 */
	public function elementor ()
	{
		return array_filter( [
			'id'          => $this->key,
			'type'        => $this->type(),
			'label'       => $this->name,
			'description' => $this->description,
			'placeholder' => $this->placeholder,
			'show_label'  => $this->showLabel,
			'label_block' => $this->labelBlock,
			'dynamic'     => $this->dynamic,
			'separator'   => $this->separator,
			'title'       => $this->mouseHoverTitle,
			'classes'     => implode( ' ', $this->addClasses ),
			'default'     => $this->defaul,
			'condition'   => $this->dependent,
			'conditions'  => $this->dependency,
			'name'        => $this->key,
			'responsive'  => $this->responsive,
			'global'      => $this->global,
			'range'       => $this->range,
			'selectors'   => $this->wrap_selectors,
			'selector'    => $this->wrap_selector
		] );
	}
}
