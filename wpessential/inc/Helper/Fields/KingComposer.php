<?php

namespace WPEssential\Plugins\Helper\Fields;

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
			'admin_label' => $this->adminLabel,
			'relation'    => $this->dependency,
			'value '      => $this->defaul,
		] );
	}
}
