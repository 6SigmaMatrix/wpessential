<?php

namespace WPEssential\Plugins\Query;

use phpDocumentor\Reflection\Types\Mixed_;

abstract class Callback
{
	public function author ( int $callback )
	{
		$this->author = $callback;
		return $this;
	}

	public function author_name ( string $callback )
	{
		$this->author_name = $callback;
		return $this;
	}

	public function author__in ( array $callback )
	{
		$this->author__in = $callback;
		return $this;
	}

	public function author__not_in ( array $callback )
	{
		$this->author__not_in = $callback;
		return $this;
	}

	public function cat ( int $callback )
	{
		$this->cat = $callback;
		return $this;
	}

	public function category_name ( string $callback )
	{
		$this->category_name = $callback;
		return $this;
	}

	public function category__and ( array $callback )
	{
		$this->category__and = $callback;
		return $this;
	}

	public function category__in ( array $callback )
	{
		$this->category__in = $callback;
		return $this;
	}

	public function category__not_in ( array $callback )
	{
		$this->category__not_in = $callback;
		return $this;
	}

	public function tag ( string $callback )
	{
		$this->tag = $callback;
		return $this;
	}

	public function tag_id ( int $callback )
	{
		$this->tag_id = $callback;
		return $this;
	}

	public function tag__and ( array $callback )
	{
		$this->tag__and = $callback;
		return $this;
	}

	public function tag__in ( array $callback )
	{
		$this->tag__in = $callback;
		return $this;
	}

	public function tag__not_in ( array $callback )
	{
		$this->tag__not_in = $callback;
		return $this;
	}

	public function tag_slug__and ( array $callback )
	{
		$this->tag_slug__and = $callback;
		return $this;
	}

	public function tag_slug__in ( array $callback )
	{
		$this->tag_slug__in = $callback;
		return $this;
	}

	public function tax_query ( array $callback )
	{
		$this->tax_query = $callback;
		return $this;
	}

	public function s ( string $callback )
	{
		$this->s = $callback;
		return $this;
	}

	public function p ( int $callback )
	{
		$this->p = $callback;
		return $this;
	}

	public function name ( string $callback )
	{
		$this->name = $callback;
		return $this;
	}

	public function page_id ( int $callback )
	{
		$this->page_id = $callback;
		return $this;
	}

	public function pagename ( string $callback )
	{
		$this->pagename = $callback;
		return $this;
	}

	public function post_parent ( int $callback )
	{
		$this->post_parent = $callback;
		return $this;
	}

	public function post_parent__in ( array $callback )
	{
		$this->post_parent__in = $callback;
		return $this;
	}

	public function post_parent__not_in ( array $callback )
	{
		$this->post_parent__not_in = $callback;
		return $this;
	}

	public function post__in ( array $callback )
	{
		$this->post__in = $callback;
		return $this;
	}

	public function post__not_in ( array $callback )
	{
		$this->post__not_in = $callback;
		return $this;
	}

	public function post_name__in ( array $callback )
	{
		$this->post_name__in = $callback;
		return $this;
	}

	public function post_type ( array $callback )
	{
		$this->post_type = $callback;
		return $this;
	}

	public function post_status ( array $callback )
	{
		$this->post_status = $callback;
		return $this;
	}

	public function has_password ( bool $callback )
	{
		$this->has_password = $callback;
		return $this;
	}

	public function post_password ( string $callback )
	{
		$this->post_password = $callback;
		return $this;
	}

	public function comment_count ( Mixed_ $callback )
	{
		$this->comment_count = $callback;
		return $this;
	}

	public function nopaging ( bool $callback )
	{
		$this->nopaging = $callback;
		return $this;
	}

	public function posts_per_page ( int $callback )
	{
		$this->posts_per_page = $callback;
		return $this;
	}

	public function posts_per_archive_page ( int $callback )
	{
		$this->posts_per_archive_page = $callback;
		return $this;
	}

	public function offset ( int $callback )
	{
		$this->offset = $callback;
		return $this;
	}

	public function paged ( int $callback )
	{
		$this->paged = $callback;
		return $this;
	}

	public function page ( int $callback )
	{
		$this->page = $callback;
		return $this;
	}

	public function ignore_sticky_posts ( bool $callback )
	{
		$this->ignore_sticky_posts = $callback;
		return $this;
	}

	public function order ( Mixed_ $callback )
	{
		$this->order = $callback;
		return $this;
	}

	public function orderby ( Mixed_ $callback )
	{
		$this->orderby = $callback;
		return $this;
	}

	public function year ( int $callback )
	{
		$this->year = $callback;
		return $this;
	}

	public function monthnum ( int $callback )
	{
		$this->monthnum = $callback;
		return $this;
	}

	public function w ( int $callback )
	{
		$this->w = $callback;
		return $this;
	}

	public function day ( int $callback )
	{
		$this->day = $callback;
		return $this;
	}

	public function hour ( int $callback )
	{
		$this->hour = $callback;
		return $this;
	}

	public function minute ( int $callback )
	{
		$this->minute = $callback;
		return $this;
	}

	public function second ( int $callback )
	{
		$this->second = $callback;
		return $this;
	}

	public function m ( int $callback )
	{
		$this->m = $callback;
		return $this;
	}

	public function date_query ( array $callback )
	{
		$this->date_query = $callback;
		return $this;
	}

	public function meta_key ( string $callback )
	{
		$this->meta_key = $callback;
		return $this;
	}

	public function meta_value ( string $callback )
	{
		$this->meta_value = $callback;
		return $this;
	}

	public function meta_value_num ( string $callback )
	{
		$this->meta_value_num = $callback;
		return $this;
	}

	public function meta_compare ( string $callback )
	{
		$this->meta_compare = $callback;
		return $this;
	}

	public function meta_query ( array $callback )
	{
		$this->meta_query = $callback;
		return $this;
	}

	public function perm ( string $callback )
	{
		$this->perm = $callback;
		return $this;
	}

	public function post_mime_type ( Mixed_ $callback )
	{
		$this->post_mime_type = $callback;
		return $this;
	}

	public function cache_results ( bool $callback )
	{
		$this->cache_results = $callback;
		return $this;
	}

	public function update_post_meta_cache ( bool $callback )
	{
		$this->update_post_meta_cache = $callback;
		return $this;
	}

	public function update_post_term_cache ( bool $callback )
	{
		$this->update_post_term_cache = $callback;
		return $this;
	}

	public function fields ( string $callback )
	{
		$this->fields = $callback;
		return $this;
	}
}
