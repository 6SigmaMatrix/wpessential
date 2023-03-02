<?php

namespace WPEssential\Plugins\Builders\Helper\Editor;

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
			'class'       => implode( ' ', $this->addClasses ),
			'admin_label' => $this->adminLabel,
			'group'       => $this->group,
			'dependency'  => $this->dependency,
			'std'         => $this->defaul,
		] );
	}
}
