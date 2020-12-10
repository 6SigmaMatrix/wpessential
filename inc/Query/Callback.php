<?php

namespace WPEssential\Plugins\Query;

abstract class Callback
{
	public function author ( $callback )
	{
		$this->author = $callback;
		return $this;
	}

	public function author_name ( $callback )
	{
		$this->author_name = $callback;
		return $this;
	}

	public function author__in ( $callback )
	{
		$this->author__in = $callback;
		return $this;
	}

	public function author__not_in ( $callback )
	{
		$this->author__not_in = $callback;
		return $this;
	}

	public function cat ( $callback )
	{
		$this->cat = $callback;
		return $this;
	}

	public function category_name ( $callback )
	{
		$this->category_name = $callback;
		return $this;
	}

	public function category__and ( $callback )
	{
		$this->category__and = $callback;
		return $this;
	}

	public function category__in ( $callback )
	{
		$this->category__in = $callback;
		return $this;
	}

	public function category__not_in ( $callback )
	{
		$this->category__not_in = $callback;
		return $this;
	}

	public function tag ( $callback )
	{
		$this->tag = $callback;
		return $this;
	}

	public function tag_id ( $callback )
	{
		$this->tag_id = $callback;
		return $this;
	}

	public function tag__and ( $callback )
	{
		$this->tag__and = $callback;
		return $this;
	}

	public function tag__in ( $callback )
	{
		$this->tag__in = $callback;
		return $this;
	}

	public function tag__not_in ( $callback )
	{
		$this->tag__not_in = $callback;
		return $this;
	}

	public function tag_slug__and ( $callback )
	{
		$this->tag_slug__and = $callback;
		return $this;
	}

	public function tag_slug__in ( $callback )
	{
		$this->tag_slug__in = $callback;
		return $this;
	}

	public function tax_query ( $callback )
	{
		$this->tax_query = $callback;
		return $this;
	}

	public function s ( $callback )
	{
		$this->s = $callback;
		return $this;
	}

	public function p ( $callback )
	{
		$this->p = $callback;
		return $this;
	}

	public function name ( $callback )
	{
		$this->name = $callback;
		return $this;
	}

	public function page_id ( $callback )
	{
		$this->page_id = $callback;
		return $this;
	}

	public function pagename ( $callback )
	{
		$this->pagename = $callback;
		return $this;
	}

	public function post_parent ( $callback )
	{
		$this->post_parent = $callback;
		return $this;
	}

	public function post_parent__in ( $callback )
	{
		$this->post_parent__in = $callback;
		return $this;
	}

	public function post_parent__not_in ( $callback )
	{
		$this->post_parent__not_in = $callback;
		return $this;
	}

	public function post__in ( $callback )
	{
		$this->post__in = $callback;
		return $this;
	}

	public function post__not_in ( $callback )
	{
		$this->post__not_in = $callback;
		return $this;
	}

	public function post_name__in ( $callback )
	{
		$this->post_name__in = $callback;
		return $this;
	}

	public function post_type ( $callback )
	{
		$this->post_type = $callback;
		return $this;
	}

	public function post_status ( $callback )
	{
		$this->post_status = $callback;
		return $this;
	}

	public function has_password ( $callback )
	{
		$this->has_password = $callback;
		return $this;
	}

	public function post_password ( $callback )
	{
		$this->post_password = $callback;
		return $this;
	}

	public function comment_count ( $callback )
	{
		$this->comment_count = $callback;
		return $this;
	}

	public function nopaging ( $callback )
	{
		$this->nopaging = $callback;
		return $this;
	}

	public function posts_per_page ( $callback )
	{
		$this->posts_per_page = $callback;
		return $this;
	}

	public function posts_per_archive_page ( $callback )
	{
		$this->posts_per_archive_page = $callback;
		return $this;
	}

	public function offset ( $callback )
	{
		$this->offset = $callback;
		return $this;
	}

	public function paged ( $callback )
	{
		$this->paged = $callback;
		return $this;
	}

	public function page ( $callback )
	{
		$this->page = $callback;
		return $this;
	}

	public function ignore_sticky_posts ( $callback )
	{
		$this->ignore_sticky_posts = $callback;
		return $this;
	}

	public function order ( $callback )
	{
		$this->order = $callback;
		return $this;
	}

	public function orderby ( $callback )
	{
		$this->orderby = $callback;
		return $this;
	}

	public function year ( $callback )
	{
		$this->year = $callback;
		return $this;
	}

	public function monthnum ( $callback )
	{
		$this->monthnum = $callback;
		return $this;
	}

	public function w ( $callback )
	{
		$this->w = $callback;
		return $this;
	}

	public function day ( $callback )
	{
		$this->day = $callback;
		return $this;
	}

	public function hour ( $callback )
	{
		$this->hour = $callback;
		return $this;
	}

	public function minute ( $callback )
	{
		$this->minute = $callback;
		return $this;
	}

	public function second ( $callback )
	{
		$this->second = $callback;
		return $this;
	}

	public function m ( $callback )
	{
		$this->m = $callback;
		return $this;
	}

	public function date_query ( $callback )
	{
		$this->date_query = $callback;
		return $this;
	}

	public function meta_key ( $callback )
	{
		$this->meta_key = $callback;
		return $this;
	}

	public function meta_value ( $callback )
	{
		$this->meta_value = $callback;
		return $this;
	}

	public function meta_value_num ( $callback )
	{
		$this->meta_value_num = $callback;
		return $this;
	}

	public function meta_compare ( $callback )
	{
		$this->meta_compare = $callback;
		return $this;
	}

	public function meta_query ( $callback )
	{
		$this->meta_query = $callback;
		return $this;
	}

	public function perm ( $callback )
	{
		$this->perm = $callback;
		return $this;
	}

	public function post_mime_type ( $callback )
	{
		$this->post_mime_type = $callback;
		return $this;
	}

	public function cache_results ( $callback )
	{
		$this->cache_results = $callback;
		return $this;
	}

	public function update_post_meta_cache ( $callback )
	{
		$this->update_post_meta_cache = $callback;
		return $this;
	}

	public function update_post_term_cache ( $callback )
	{
		$this->update_post_term_cache = $callback;
		return $this;
	}

	public function fields ( $callback )
	{
		$this->fields = $callback;
		return $this;
	}

	/**
	 * Call the class construct.
	 *
	 * @param mixed ...$arguments
	 * @return static
	 */
	public static function make ( ...$arguments )
	{
		return new static( $arguments );
	}

	/**
	 * Call the WP_Query
	 *
	 * @param array $post_type
	 */

	public function __construct ( $post_type )
	{
		if ( $post_type ) {
			$this->post_type( $post_type );
		} else {
			$this->post_type( 'post' );
		}

		return $this;

	}
}
