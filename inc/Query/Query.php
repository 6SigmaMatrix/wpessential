<?php

namespace WPEssential\Plugins\Query;

class Query extends QueryBuilder
{
	public function run ()
	{
		return new \WP_Query( $this->toArray() );
	}

	public function related ( array $callback )
	{
		$this->post__not_in( $callback );
		return $this;
	}
}
