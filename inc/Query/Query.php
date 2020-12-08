<?php

namespace WPEssential\Plugins\Query;

class Query extends QueryBuilder
{
	public function run ()
	{
		$this->args = array_filter( $this->args );
		return new \WP_Query( $this->args );
	}
}
