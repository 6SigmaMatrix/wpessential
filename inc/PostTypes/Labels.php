<?php

namespace WPEssential\Plugins\PostTypes;

use JsonSerializable;
use WPEssential\Plugins\Implement\Arrayable;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Labels implements Arrayable, JsonSerializable
{
	/*
	 * General name for the post type, usually plural. The same and overridden by $post_type_object->label. Default is ‘Posts’ / ‘Pages.’
	 *
	 * @var string
	 * */
	protected $name = '';
	/*
	 * Name for one object of this post type. Default is ‘Post’ / ‘Page’.
	 *
	 * @var string
	 * */
	protected $singular_name = '';
	/*
	 * Default is ‘Add New’ for both hierarchical and non-hierarchical types.
	 * When internationalizing this string, please use a gettext context matching your post type. Example: _x( 'Add New', 'product', 'textdomain' );.
	 *
	 * @var string
	*/
	protected $add_new = '';
	/*
	 * Label for adding a new singular item. Default is ‘Add New Post’ / ‘Add New Page’.
	 *
	 * @var string
	 * */
	protected $add_new_item = '';
	/*
	 * Label for editing a singular item. Default is ‘Edit Post’ / ‘Edit Page’.
	 *
	 * @var string
	 * */
	protected $edit_item = '';
	/*
	 * Label for the new item page title. Default is ‘New Post’ / ‘New Page’.
	 *
	 * @var string
	 * */
	protected $new_item = '';
	/*
	 * Label for viewing a singular item. Default is ‘View Post’ / ‘View Page’.
	 *
	 * @var string
	 * */
	protected $view_item = '';
	/*
	 * Label for viewing post type archives. Default is ‘View Posts’ / ‘View Pages’.
	 *
	 * @var string
	 * */
	protected $view_items = '';
	/*
	 * Label for searching plural items. Default is ‘Search Posts’ / ‘Search Pages’.
	 *
	 * @var string
	 * */
	protected $search_items = '';
	/*
	 * Label used when no items are found. Default is ‘No posts found’ / ‘No pages found’.
	 *
	 * @var string
	 * */
	protected $not_found = '';
	/*
	 * Label used when no items are in the Trash. Default is ‘No posts found in Trash’ / ‘No pages found in Trash’.
	 *
	 * @var string
	 * */
	protected $not_found_in_trash = '';
	/*
	 * Label used to prefix parents of hierarchical items. Not used on non-hierarchical post types. Default is ‘Parent Page:’.
	 *
	 * @var string
	 * */
	protected $parent_item_colon = '';
	/*
	 * Label to signify all items in a submenu link. Default is ‘All Posts’ / ‘All Pages’.
	 *
	 * @var string
	 * */
	protected $all_items = '';
	/*
	 * Label for archives in nav menus. Default is ‘Post Archives’ / ‘Page Archives’.
	 *
	 * @var string
	 * */
	protected $archives = '';
	/*
	 * Label for the attributes meta box. Default is ‘Post Attributes’ / ‘Page Attributes’.
	 *
	 * @var string
	 * */
	protected $attributes = '';
	/*
	 * Label for the media frame button. Default is ‘Insert into post’ / ‘Insert into page’.
	 *
	 * @var string
	 * */
	protected $insert_into_item = '';
	/*
	 * Label for the media frame filter. Default is ‘Uploaded to this post’ / ‘Uploaded to this page’.
	 *
	 * @var string
	 * */
	protected $uploaded_to_this_item = '';
	/*
	 * Label for the featured image meta box title. Default is ‘Featured image’.
	 *
	 * @var string
	 * */
	protected $featured_image = '';
	/**
	 * Label for setting the featured image. Default is ‘Set featured image’.
	 *
	 * @var string
	 */
	protected $set_featured_image = '';
	/*
	 * Label for removing the featured image. Default is ‘Remove featured image’.
	 *
	 * @var string
	 * */
	protected $remove_featured_image = '';
	/*
	 * Label in the media frame for using a featured image. Default is ‘Use as featured image’.
	 *
	 * @var string
	 * */
	protected $use_featured_image = '';
	/*
	 * Label for the menu name. Default is the same as name.
	 *
	 * @var string
	 * */
	protected $menu_name = '';
	/*
	 * Label for the table views hidden heading. Default is ‘Filter posts list’ / ‘Filter pages list’.
	 *
	 * @var string
	 * */
	protected $filter_items_list = '';
	/*
	 * Label for the date filter in list tables. Default is ‘Filter by date’.
	 *
	 * @var string
	 * */
	protected $filter_by_date = '';
	/*
	 * Label for the table pagination hidden heading. Default is ‘Posts list navigation’ / ‘Pages list navigation’.
	 *
	 * @var string
	 * */
	protected $items_list_navigation = '';
	/*
	 * Label for the table hidden heading. Default is ‘Posts list’ / ‘Pages list’.
	 *
	 * @var string
	 * */
	protected $items_list = '';
	/*
	 * Label used when an item is published. Default is ‘Post published.’ / ‘Page published.’
	 *
	 * @var string
	 * */
	protected $item_published = '';
	/*
	 * Label used when an item is published with private visibility. Default is ‘Post published privately.’ / ‘Page published privately.’
	 *
	 * @var string
	 * */
	protected $item_published_privately = '';
	/*
	 * Label used when an item is switched to a draft. Default is ‘Post reverted to draft.’ / ‘Page reverted to draft.’
	 *
	 * @var string
	 * 	*/
	protected $item_reverted_to_draft = '';
	/*
	 * Label used when an item is moved to Trash. Default is ‘Post trashed.’ / ‘Page trashed.’
	 *
	 * @var string
	 * */
	protected $item_trashed = '';
	/*
	 * Label used when an item is scheduled for publishing. Default is ‘Post scheduled.’ / ‘Page scheduled.’
	 *
	 * @var string
	 * */
	protected $item_scheduled = '';
	/*
	 * Label used when an item is updated. Default is ‘Post updated.’ / ‘Page updated.’
	 *
	 * @var string
	 * */
	protected $item_updated = '';
	/*
	 * Title for a navigation link block variation. Default is ‘Post Link’ / ‘Page Link’.
	 *
	 * @var string
	 * */
	protected $item_link = '';
	/*
	 * Description for a navigation link block variation. Default is ‘A link to a post.’ / ‘A link to a page.’
	 *
	 * @var string
	 * */
	protected $item_link_description = '';

	/*
	 * General name for the post type, usually plural. The same and overridden by $post_type_object->label. Default is ‘Posts’ / ‘Pages.’
	 *
	 * @var string
	 * */
	public function name ( $callback )
	{
		$this->name = $callback;
		return $this;
	}

	/*
	 * Name for one object of this post type. Default is ‘Post’ / ‘Page’.
	 *
	 * @var string
	 * */
	public function singular_name ( $callback )
	{
		$this->singular_name = $callback;
		return $this;
	}

	/*
	 * Default is ‘Add New’ for both hierarchical and non-hierarchical types.
	 * When internationalizing this string, please use a gettext context matching your post type. Example: _x( 'Add New', 'product', 'textdomain' );.
	 *
	 * @var string
	*/
	public function add_new ( $callback )
	{
		$this->add_new = $callback;
		return $this;
	}

	/*
	 * Label for adding a new singular item. Default is ‘Add New Post’ / ‘Add New Page’.
	 *
	 * @var string
	 * */
	public function add_new_item ( $callback )
	{
		$this->add_new_item = $callback;
		return $this;
	}

	/*
	 * Label for editing a singular item. Default is ‘Edit Post’ / ‘Edit Page’.
	 *
	 * @var string
	 * */
	public function edit_item ( $callback )
	{
		$this->edit_item = $callback;
		return $this;
	}

	/*
	 * Label for the new item page title. Default is ‘New Post’ / ‘New Page’.
	 *
	 * @var string
	 * */
	public function new_item ( $callback )
	{
		$this->new_item = $callback;
		return $this;
	}

	/*
	 * Label for viewing a singular item. Default is ‘View Post’ / ‘View Page’.
	 *
	 * @var string
	 * */
	public function view_item ( $callback )
	{
		$this->view_item = $callback;
		return $this;
	}

	/*
	 * Label for viewing post type archives. Default is ‘View Posts’ / ‘View Pages’.
	 *
	 * @var string
	 * */
	public function view_items ( $callback )
	{
		$this->view_items = $callback;
		return $this;
	}

	/*
	 * Label for searching plural items. Default is ‘Search Posts’ / ‘Search Pages’.
	 *
	 * @var string
	 * */
	public function search_items ( $callback )
	{
		$this->search_items = $callback;
		return $this;
	}

	/*
	 * Label used when no items are found. Default is ‘No posts found’ / ‘No pages found’.
	 *
	 * @var string
	 * */
	public function not_found ( $callback )
	{
		$this->not_found = $callback;
		return $this;
	}

	/*
	 * Label used when no items are in the Trash. Default is ‘No posts found in Trash’ / ‘No pages found in Trash’.
	 *
	 * @var string
	 * */
	public function not_found_in_trash ( $callback )
	{
		$this->not_found_in_trash = $callback;
		return $this;
	}

	/*
	 * Label used to prefix parents of hierarchical items. Not used on non-hierarchical post types. Default is ‘Parent Page:’.
	 *
	 * @var string
	 * */
	public function parent_item_colon ( $callback )
	{
		$this->parent_item_colon = $callback;
		return $this;
	}

	/*
	 * Label to signify all items in a submenu link. Default is ‘All Posts’ / ‘All Pages’.
	 *
	 * @var string
	 * */
	public function all_items ( $callback )
	{
		$this->all_items = $callback;
		return $this;
	}

	/*
	 * Label for archives in nav menus. Default is ‘Post Archives’ / ‘Page Archives’.
	 *
	 * @var string
	 * */
	public function archives ( $callback )
	{
		$this->archives = $callback;
		return $this;
	}

	/*
	 * Label for the attributes meta box. Default is ‘Post Attributes’ / ‘Page Attributes’.
	 *
	 * @var string
	 * */
	public function attributes ( $callback )
	{
		$this->attributes = $callback;
		return $this;
	}

	/*
	 * Label for the media frame button. Default is ‘Insert into post’ / ‘Insert into page’.
	 *
	 * @var string
	 * */
	public function insert_into_item ( $callback )
	{
		$this->insert_into_item = $callback;
		return $this;
	}

	/*
	 * Label for the media frame filter. Default is ‘Uploaded to this post’ / ‘Uploaded to this page’.
	 *
	 * @var string
	 * */
	public function uploaded_to_this_item ( $callback )
	{
		$this->uploaded_to_this_item = $callback;
		return $this;
	}

	/*
	 * Label for the featured image meta box title. Default is ‘Featured image’.
	 *
	 * @var string
	 * */
	public function featured_image ( $callback )
	{
		$this->featured_image = $callback;
		return $this;
	}

	/**
	 * Label for setting the featured image. Default is ‘Set featured image’.
	 *
	 * @var string
	 */
	public function set_featured_image ( $callback )
	{
		$this->set_featured_image = $callback;
		return $this;
	}

	/*
	 * Label for removing the featured image. Default is ‘Remove featured image’.
	 *
	 * @var string
	 * */
	public function remove_featured_image ( $callback )
	{
		$this->remove_featured_image = $callback;
		return $this;
	}

	/*
	 * Label in the media frame for using a featured image. Default is ‘Use as featured image’.
	 *
	 * @var string
	 * */
	public function use_featured_image ( $callback )
	{
		$this->use_featured_image = $callback;
		return $this;
	}

	/*
	 * Label for the menu name. Default is the same as name.
	 *
	 * @var string
	 * */
	public function menu_name ( $callback )
	{
		$this->menu_name = $callback;
		return $this;
	}

	/*
	 * Label for the table views hidden heading. Default is ‘Filter posts list’ / ‘Filter pages list’.
	 *
	 * @var string
	 * */
	public function filter_items_list ( $callback )
	{
		$this->filter_items_list = $callback;
		return $this;
	}

	/*
	 * Label for the date filter in list tables. Default is ‘Filter by date’.
	 *
	 * @var string
	 * */
	public function filter_by_date ( $callback )
	{
		$this->filter_by_date = $callback;
		return $this;
	}

	/*
	 * Label for the table pagination hidden heading. Default is ‘Posts list navigation’ / ‘Pages list navigation’.
	 *
	 * @var string
	 * */
	public function items_list_navigation ( $callback )
	{
		$this->items_list_navigation = $callback;
		return $this;
	}

	/*
	 * Label for the table hidden heading. Default is ‘Posts list’ / ‘Pages list’.
	 *
	 * @var string
	 * */
	public function items_list ( $callback )
	{
		$this->items_list = $callback;
		return $this;
	}

	/*
	 * Label used when an item is published. Default is ‘Post published.’ / ‘Page published.’
	 *
	 * @var string
	 * */
	public function item_published ( $callback )
	{
		$this->item_published = $callback;
		return $this;
	}

	/*
	 * Label used when an item is published with private visibility. Default is ‘Post published privately.’ / ‘Page published privately.’
	 *
	 * @var string
	 * */
	public function item_published_privately ( $callback )
	{
		$this->item_published_privately = $callback;
		return $this;
	}

	/*
	 * Label used when an item is switched to a draft. Default is ‘Post reverted to draft.’ / ‘Page reverted to draft.’
	 *
	 * @var string
	 * 	*/
	public function item_reverted_to_draft ( $callback )
	{
		$this->item_reverted_to_draft = $callback;
		return $this;
	}

	/*
	 * Label used when an item is moved to Trash. Default is ‘Post trashed.’ / ‘Page trashed.’
	 *
	 * @var string
	 * */
	public function item_trashed ( $callback )
	{
		$this->item_trashed = $callback;
		return $this;
	}

	/*
	 * Label used when an item is scheduled for publishing. Default is ‘Post scheduled.’ / ‘Page scheduled.’
	 *
	 * @var string
	 * */
	public function item_scheduled ( $callback )
	{
		$this->item_scheduled = $callback;
		return $this;
	}

	/*
	 * Label used when an item is updated. Default is ‘Post updated.’ / ‘Page updated.’
	 *
	 * @var string
	 * */
	public function item_updated ( $callback )
	{
		$this->item_updated = $callback;
		return $this;
	}

	/*
	 * Title for a navigation link block variation. Default is ‘Post Link’ / ‘Page Link’.
	 *
	 * @var string
	 * */
	public function item_link ( $callback )
	{
		$this->item_link = $callback;
		return $this;
	}

	/*
	 * Description for a navigation link block variation. Default is ‘A link to a post.’ / ‘A link to a page.’
	 *
	 * @var string
	 * */
	public function item_link_description ( $callback )
	{
		$this->item_link_description = $callback;
		return $this;
	}

	public function toArray ()
	{
		return (array) get_object_vars( $this );
	}

	public function jsonSerialize ()
	: mixed
	{
		return json_encode( get_object_vars( $this ), JSON_THROW_ON_ERROR );
	}
}
