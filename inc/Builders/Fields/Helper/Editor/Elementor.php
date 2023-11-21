<?php

namespace WPEssential\Plugins\Builders\Fields\Helper\Editor;

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
			'id'             => $this->key,
			'type'           => $this->type(),
			'label'          => $this->name,
			'description'    => $this->description,
			'placeholder'    => $this->placeholder,
			'show_label'     => $this->show_label,
			'label_block'    => $this->label_block,
			'dynamic'        => $this->dynamic,
			'separator'      => $this->separator,
			'prefix_class'   => $this->prefix_class,
			'render_type'    => $this->render_type,
			'title'          => $this->mouse_hover_title,
			'classes'        => implode( ' ', $this->add_classes ),
			'default'        => $this->defaul,
			'condition'      => $this->dependent,
			'conditions'     => $this->dependency,
			'name'           => $this->key,
			'responsive'     => $this->responsive,
			'global'         => $this->global,
			'range'          => $this->range,
			'selectors'      => $this->wrap_selectors,
			'selector'       => $this->wrap_selector,
			'selector_value' => $this->selector_value,
			'filter_type'    => $this->filter_type,
			'object_type'    => $this->object_type,
			'include_type'   => $this->include_type,
			'post_type'      => '',
		] );
	}
}
