<?php

namespace WPEssential\Plugins\Builders\KingComposer\Utility;

use WPEssential\Plugins\Builders\KingComposer\Helper\Common as Traits;
use WPEssential\Plugins\Helper\GetShortcodeBase;
use WPEssential\Plugins\Implement\Shortcodes;

abstract class Base
{
	use GetShortcodeBase, Traits;

	public array  $controls     = [];
	public string $adminView    = '';
	public array  $views        = [];
	public bool   $isContainer  = false;
	public bool   $cssBox       = false;
	public bool   $systemOnly   = false;
	public bool   $nested       = false;
	public array  $assets       = [];
	public string $acceptChild  = '';
	public string $exceptChild  = '';
	public string $acceptParent = '';
	public string $exceptParent = '';
	public string $filter       = '';

	public function __construct ()
	{
		if ( ! ( $this instanceof Shortcodes ) ) {
			wp_die( __( 'King Composer element ' . $this->get_name() . ' has not interface.', 'wpessential' ) );
		}

		self::shortcode();
	}

	public function shortcode ()
	{
		$this->_register_controls();
		$this->filter();
		wpe_error( [
			'name'          => $this->get_name(),
			'description'   => $this->get_desc(),
			'category'      => ucwords( $this->get_category() ),
			'title'         => $this->get_name(),
			'icon'          => $this->get_icon(),
			'params'        => $this->controls,
			'admin_view'    => $this->adminView,
			'views'         => $this->views,
			'is_container'  => $this->isContainer,
			'css_box'       => $this->cssBox,
			'system_only'   => $this->systemOnly,
			'nested'        => $this->nested,
			'assets'        => $this->assets,
			'accept_child'  => $this->acceptChild,
			'except_child'  => $this->exceptChild,
			'accept_parent' => $this->acceptParent,
			'except_parent' => $this->exceptParent,
			'filter'        => $this->filter,
		] );
		kc_add_map(
			[
				'name'        => $this->get_name(),
				'description' => $this->get_desc(),
				'category'    => ucwords( $this->get_category() ),
				'title'       => $this->get_name(),
				'icon'        => $this->get_icon(),
				'params'      => $this->controls,
				/*'admin_view'    => $this->adminView,
				'views'         => $this->views,
				'is_container'  => $this->isContainer,
				'css_box'       => $this->cssBox,
				'system_only'   => $this->systemOnly,
				'nested'        => $this->nested,
				'assets'        => $this->assets,
				'accept_child'  => $this->acceptChild,
				'except_child'  => $this->exceptChild,
				'accept_parent' => $this->acceptParent,
				'except_parent' => $this->exceptParent,
				'filter'        => $this->filter,*/
			]
		);
	}

	/**
	 * Set element admin view.
	 *
	 * @param string $callback
	 * @return string Element admin view.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function adminView ( string $callback )
	{
		$this->adminView = $callback;

		return $this;
	}

	/**
	 * Set element container.
	 * The default value is false. The container shortcode should be inserted into.
	 *
	 * @param bool $callback
	 * @return Base Element container.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function isContainer ( bool $callback )
	{
		$this->isContainer = $callback;

		return $this;
	}

	/**
	 * Set element view.
	 *
	 * @param array $callback
	 * @return Base Element view.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function views ( array $callback )
	{
		$this->views = $callback;

		return $this;
	}

	/**
	 * Set element css box.
	 * The default value is false. It allows you to add CSS via editting popup.
	 *
	 * @param bool $callback
	 * @return Base Element css box.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function cssBox ( bool $callback )
	{
		$this->cssBox = $callback;

		return $this;
	}

	/**
	 * Set element system only.
	 * The default value is false. The elements are used in the system only,
	 * they aren’t shown on the list of elements. For example shortcode [tab].
	 *
	 * @param bool $callback
	 * @return Base Element system only.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function systemOnly ( bool $callback )
	{
		$this->systemOnly = $callback;

		return $this;
	}

	/**
	 * Set element nested.
	 * Allows add another elements inside your element.
	 *
	 * @param bool $callback
	 * @return Base Element nested.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function nested ( bool $callback )
	{
		$this->nested = $callback;

		return $this;
	}

	/**
	 * Set element accept child.
	 * Restrictive element inside nested elements.
	 *
	 * @param string $callback
	 * @return string Element accept child.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function acceptChild ( string $callback )
	{
		$this->acceptChild = $callback;

		return $this;
	}

	/**
	 * Set element except child.
	 * Restrictive element inside nested elements.
	 *
	 * @param string $callback
	 * @return string Element except child.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function exceptChild ( string $callback )
	{
		$this->exceptChild = $callback;

		return $this;
	}

	/**
	 * Set element accept parent.
	 * Restrictive element inside nested elements.
	 *
	 * @param string $callback
	 * @return string Element accept parent.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function acceptParent ( string $callback )
	{
		$this->acceptParent = $callback;

		return $this;
	}

	/**
	 * Set element except parent.
	 * Restrictive element inside nested elements.
	 *
	 * @param string $callback
	 * @return string Element except_parent.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function exceptParent ( string $callback )
	{
		$this->exceptParent = $callback;

		return $this;
	}

	/**
	 * Set element filter.
	 * PHP Function. You can use this method to filter any shortcodes before executing.
	 *
	 * @return string Element filter.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function filter ()
	{
		$this->filter = $this->get_base_name();

		return $this;
	}

	/**
	 * Set element assets.
	 * Only load scripts and styles when using this element.
	 *
	 * @param array $callback
	 * @return Base Element assets.
	 * @since 1.0.0
	 * @access protected
	 * @protected
	 */
	public function assets ( array $callback )
	{
		$this->assets = $callback;

		return $this;
	}

	public function add_control ( $args )
	{
		$this->controls[] = $args;
	}

	public function _register_controls ()
	{
	}
}
