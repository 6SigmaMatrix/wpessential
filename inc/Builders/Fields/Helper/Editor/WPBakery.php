<?php

namespace WPEssential\Plugins\Builders\Fields\Helper\Editor;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait WPBakery
{
	/**
	 * Prepare the wpbakery fields.
	 *
	 * @return array
	 */
	public function wpbakery ()
	{
		return array_filter( [
			'param_name'  => $this->key,
			'type'        => $this->type(),
			'heading'     => $this->name,
			'description' => $this->description,
			'holder'      => $this->holder,
			'class'       => implode( ' ', $this->add_classes ),
			'admin_label' => $this->admin_label,
			'group'       => $this->group,
			'dependency'  => $this->dependency,
			'std'         => $this->defaul,
		] );
	}
}
