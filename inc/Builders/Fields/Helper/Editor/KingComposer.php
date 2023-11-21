<?php

namespace WPEssential\Plugins\Builders\Fields\Helper\Editor;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

trait KingComposer
{
	/**
	 * Prepare the king composer fields.
	 *
	 * @return array
	 */
	public function kingComposer ()
	{
		return array_filter( [
			'name'        => $this->key,
			'type'        => $this->type(),
			'label'       => $this->name,
			'description' => $this->description,
			'admin_label' => $this->admin_label,
			'relation'    => $this->dependency,
			'value '      => $this->defaul,
		] );
	}
}
