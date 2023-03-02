<?php

namespace WPEssential\Plugins\Panel\Fields;

if ( ! \defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WPEssential\Plugins\Panel\Panel;

class Select extends Panel
{
	/**
	 * whether creating new items is allowed. To use this, filterable must be true.
	 *
	 * @var bool
	 */
	protected $allow_create = false;

	/**
	 * Query args.
	 *
	 * @var array
	 */
	protected $args = [];

	/**
	 * the autocomplete attribute of select input.
	 *
	 * @var string
	 */
	protected $autocomplete = 'off';

	/**
	 * for non-filterable Select, this prop decides if the option menu pops up when the input is focused.
	 *
	 * @var bool
	 */
	protected $automatic_dropdown = false;

	/**
	 * Indicates if the field should be clearable.
	 *
	 * @var bool
	 */
	protected $clearable = false;

	/**
	 * whether to collapse tags to a text when multiple selecting.
	 *
	 * @var bool
	 */
	protected $collapse_tags = false;

	/**
	 * Allow the query.
	 *
	 * @var string
	 */
	protected $data = '';

	/**
	 * select first matching option on enter key. Use with filterable or remote.
	 *
	 * @var bool
	 */
	protected $default_first_option = false;

	/**
	 * custom filter method.
	 *
	 * @var string
	 */
	protected $filter_method = '';

	/**
	 * whether Select is filterable.
	 *
	 * @var bool
	 */
	protected $filterable = false;

	/**
	 * Allow th group type of options.
	 *
	 * @var string
	 */
	protected $group = false;

	/**
	 * Icons.
	 *
	 * @var bool
	 */
	protected $icons = false;

	/**
	 * whether Select is loading data from server.
	 *
	 * @var string
	 */
	protected $loading_text = 'Loading';

	/**
	 * whether multiple-select is activated.
	 *
	 * @var bool
	 */
	protected $multiple = false;

	/**
	 * maximum number of options user can select when multiple is true. No limit when set to 0
	 *
	 * @var int
	 */
	protected $multiple_limit = 0;

	/**
	 * displayed text when there is no options, you can also use slot empty.
	 *
	 * @var string
	 */
	protected $no_data_text = 'No data';

	/**
	 * displayed text when no data matches the filtering query, you can also use slot empty.
	 *
	 * @var string
	 */
	protected $no_match_text = 'No matching data';

	/**
	 * Add the select list.
	 *
	 * @var array
	 */
	protected $options = [];

	/**
	 * whether to append the popper menu to body. If the positioning of the popper is wrong, you can try to set this prop to false.
	 *
	 * @var bool
	 */
	protected $popper_append_to_body = true;

	/**
	 * whether options are loaded from server.
	 *
	 * @var bool
	 */
	protected $remote = false;

	/**
	 * when multiple and filter is true, whether to reserve current keyword after selecting an option.
	 *
	 * @var bool
	 */
	protected $reserve_keyword = false;

	/**
	 * size of Input. (large, small, medium, mini)
	 *
	 * @var string
	 */
	protected $size = '';

	/**
	 * Style files of icons.
	 *
	 * @var array
	 */
	protected $style_files = [];

	/**
	 * The type of the control.
	 *
	 * @var string
	 */
	protected $type = 'select';

	/**
	 * whether multiple-select is activated.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function multiple ( $callback )
	{
		$this->multiple = $callback;

		return $this;
	}

	/**
	 * Indicates if the field should be clearable.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function clearable ( $callback )
	{
		$this->clearable = $callback;

		return $this;
	}

	/**
	 * size of Input. (large, small, medium, mini)
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function size ( $callback )
	{
		$this->size = $callback;

		return $this;
	}

	/**
	 * maximum number of options user can select when multiple is true. No limit when set to 0
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function multiple_limit ( $callback )
	{
		$this->multiple_limit = $callback;

		return $this;
	}

	/**
	 * whether to collapse tags to a text when multiple selecting.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function collapse_tags ( $callback )
	{
		$this->collapse_tags = $callback;

		return $this;
	}

	/**
	 * the autocomplete attribute of select input.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function autocomplete ( $callback )
	{
		$this->autocomplete = $callback;

		return $this;
	}

	/**
	 * whether creating new items is allowed. To use this, filterable must be true.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function allow_create ( $callback )
	{
		$this->allow_create = $callback;

		return $this;
	}

	/**
	 * custom filter method.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function filter_method ( $callback )
	{
		$this->filter_method = $callback;

		return $this;
	}

	/**
	 * whether options are loaded from server.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function remote ( $callback )
	{
		$this->remote = $callback;

		return $this;
	}

	/**
	 * whether Select is loading data from server.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function loading_text ( $callback )
	{
		$this->loading_text = $callback;

		return $this;
	}

	/**
	 * displayed text when no data matches the filtering query, you can also use slot empty.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function no_match_text ( $callback )
	{
		$this->no_match_text = $callback;

		return $this;
	}

	/**
	 * displayed text when there is no options, you can also use slot empty.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function no_data_text ( $callback )
	{
		$this->no_data_text = $callback;

		return $this;
	}

	/**
	 * when multiple and filter is true, whether to reserve current keyword after selecting an option.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function reserve_keyword ( $callback )
	{
		$this->reserve_keyword = $callback;

		return $this;
	}

	/**
	 * select first matching option on enter key. Use with filterable or remote.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function default_first_option ( $callback )
	{
		$this->default_first_option = $callback;

		return $this;
	}

	/**
	 * whether to append the popper menu to body. If the positioning of the popper is wrong, you can try to set this prop to false.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function popper_append_to_body ( $callback )
	{
		$this->popper_append_to_body = $callback;

		return $this;
	}

	/**
	 * for non-filterable Select, this prop decides if the option menu pops up when the input is focused.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function automatic_dropdown ( $callback )
	{
		$this->automatic_dropdown = $callback;

		return $this;
	}

	/**
	 * Allow the query.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function data ( $callback )
	{
		$this->data = $callback;

		return $this;
	}

	/**
	 * Query args.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function args ( $callback )
	{
		$this->args = $callback;
		$this->args = is_array( $this->args ) ? $this->args : [];

		return $this;
	}

	/**
	 * Icons.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function icons ( $callback )
	{
		$this->icons = $callback;

		return $this;
	}

	/**
	 * Style files of icons.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function style_files ( $callback )
	{
		$this->style_files = $callback;

		return $this;
	}

	/**
	 * Allow th group type of options.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function group ( $callback )
	{
		$this->group = $callback;

		return $this;
	}

	/**
	 * Set the callback to be used for determining the field's default value.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function default ( $callback )
	{
		$this->default = $callback;

		return $this;
	}

	/**
	 * Prepare the field's.
	 *
	 * @return array
	 */
	protected function prepear ()
	{
		$this->queries();
		$this->multi_select();
		$this->create_options();

		return array_filter( [
			'args'        => $this->args,
			'data'        => $this->data,
			'options'     => $this->options,
			'icons'       => $this->icons,
			'style_files' => $this->style_files,
			'group'       => $this->group,
			'settings'    => array_filter( [
				'allow-create'          => $this->allow_create,
				'autocomplete'          => $this->autocomplete,
				'clearable'             => $this->clearable,
				'collapse-tags'         => $this->collapse_tags,
				'default-first-option'  => $this->default_first_option,
				'disabled'              => $this->disabled,
				'filter-method'         => $this->filter_method,
				'filterable'            => $this->filterable,
				'loading-text'          => $this->loading_text,
				'multiple'              => $this->multiple,
				'multiple-limit'        => $this->multiple_limit,
				'no-data-text'          => $this->no_data_text,
				'no-match-text'         => $this->no_match_text,
				'placeholder'           => $this->placeholder,
				'popper-append-to-body' => $this->popper_append_to_body,
				'remote'                => $this->remote,
				'reserve-keyword'       => $this->reserve_keyword,
				'size'                  => $this->size,
				'tabindex'              => $this->tabindex,
			] )
		] );
	}

	/**
	 * Allow to access the data queries.
	 *
	 * @return void
	 */
	private function queries ()
	{
		if ( $this->data && false === $this->remote ) {
			switch ( $this->data ) {
				case 'posts':
					$this->options( wpe_get_posts( $this->args ) );
					break;
				case 'pages':
					$this->args = wp_parse_args( [ 'post_type' => 'page' ], $this->args );
					$this->options( wpe_get_posts( $this->args ) );
					break;
				case 'terms':
					$this->options( wpe_get_terms( $this->args ) );
					break;
				case 'categories':
					$this->args = wp_parse_args( [ 'taxonomy' => 'category' ], $this->args );
					$this->options( wpe_get_terms( $this->args ) );
					break;
				case 'taxonomies':
					$this->options( wpe_get_taxonomies( $this->args ) );
					break;
				case 'tags':
					$this->args = wp_parse_args( [ 'taxonomy' => 'post_tag' ], $this->args );
					$this->options( wpe_get_terms( $this->args ) );
					break;
				case 'post_types':
					$this->options( wpe_get_post_types( $this->args ) );
					break;
				case 'menus':
					$this->options( wpe_get_nav_menus( $this->args ) );
					break;
				case 'image_sizes':
					$this->options( wpe_get_images_sizes() );
					break;
				case 'menu_locations':
					$this->options( wpe_get_menus_location() );
					break;
				case 'roles':
					$this->options( wpe_get_roles() );
					break;
				case 'sidebars':
					$this->options( wpe_get_sidebar() );
					break;
				case 'capabilities':
					$this->options( wpe_get_capabilities() );
					break;
				case 'users':
					$this->options( wpe_get_users( [ 'fields' => [ 'ID', 'display_name', 'user_email' ] ] ) );
					break;
			}
		}

		if ( $this->data && true === $this->remote ) {
			$this->filterable( true );
		}
	}

	/**
	 * Add the select list.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function options ( $callback )
	{
		$this->options = $callback;

		return $this;
	}

	/**
	 * whether Select is filterable.
	 *
	 * @param $callback
	 *
	 * @return Select
	 */
	public function filterable ( $callback )
	{
		$this->filterable = $callback;

		return $this;
	}

	/**
	 * Allow multi select.
	 *
	 * @return void
	 */
	private function multi_select ()
	{
		if ( $this->multiple === true ) {
			$this->default = [ $this->default ];
		}
	}

	/**
	 * create the select list.
	 *
	 * @return Select
	 */
	private function create_options ()
	{
		$options       = $this->options;
		$this->options = [];
		if ( $options && is_array( $options ) && $this->group === false ) {
			foreach ( $options as $key => $val ) {
				$this->options[] = [
					'key'   => $key,
					'label' => $val,
				];
			}
		}

		if ( $options && is_array( $options ) && $this->group === true ) {
			foreach ( $options as $val ) {
				$label  = wpe_array_get( $val, 'name' );
				$list   = wpe_array_get( $val, 'list' );
				$option = [];
				if ( is_array( $list ) ) {
					foreach ( $list as $k => $v ) {
						$option[] = [
							'key'   => $k,
							'label' => $v
						];
					}
				}
				$this->options[] = [
					'label' => $label,
					'list'  => $option
				];
			}
		}

		return $this;
	}
}
