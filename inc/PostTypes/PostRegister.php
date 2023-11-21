<?php

namespace WPEssential\Plugins\PostTypes;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class PostRegister
{
	protected $label                 = '';
	protected $labels                = '';
	protected $description           = '';
	protected $public                = '';
	protected $hierarchical          = '';
	protected $exclude_from_search   = '';
	protected $publicly_queryable    = '';
	protected $show_ui               = '';
	protected $show_in_menu          = '';
	protected $show_in_nav_menus     = '';
	protected $show_in_admin_bar     = '';
	protected $show_in_rest          = '';
	protected $rest_base             = '';
	protected $rest_namespace        = '';
	protected $rest_controller_class = '';
	protected $menu_position         = '';
	protected $menu_icon             = '';
	protected $capability_type       = '';
	protected $capabilities          = '';
	protected $map_meta_cap          = '';
	protected $supports              = '';
	protected $register_meta_box_cb  = '';
	protected $taxonomies            = '';
	protected $has_archive           = '';
	protected $rewrite               = '';
	protected $query_var             = '';
	protected $can_export            = '';
	protected $delete_with_user      = '';
	protected $template              = '';
	protected $template_lock         = '';
	protected $_builtin              = '';
	protected $_edit_link            = '';
}
