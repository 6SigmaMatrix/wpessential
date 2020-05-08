<?php

namespace WPEssential\Builders\WPBakery\Shortcodes;


use WPEssential\Builders\WPBakery\Utility\Base;

class Post extends Base
{

	/**
	 * Set element name.
	 * Retrieve name of your shortcode for human reading inside element list.
	 *
	 * @return string Element name.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_name ()
	{
		return __( 'Post', 'wpessentail' );
	}

	/**
	 * Set element base.
	 * Retrieve Shortcode tag. For [my_shortcode] shortcode base is my_shortcode.
	 *
	 * @return string Element base.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_base ()
	{
		return substr( strrchr( __CLASS__, "\\" ), 1 );
	}

	/**
	 * Set element description.
	 * Retrieve Short description of your element, it will be visible in “Add element” window.
	 *
	 * @return string Element description.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_desc ()
	{
		return __( 'Display the blog post', 'wpessential' );
	}

	/**
	 * Set element weight.
	 * Retrieve Content elements with greater weight will be rendered first in “Content Elements” grid
	 * (Available from WPBakery Page Builder 3.7 version).
	 *
	 * @return bool Element weight.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_weight ()
	{
		return 1;
	}

	/**
	 * Set element category.
	 * Retrieve Category which best suites to describe the functionality of this shortcode. Default
	 * categories: Content, Social, Structure. You can add your own category, simply enter new category
	 * title here.
	 *
	 * @return string Element category.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_category ()
	{
		return 'WPEssential';
	}

	/**
	 * Set element icon.
	 * Retrieve element icon.
	 *
	 * @return string Element icon.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_element_icon ()
	{
		return '';
	}

	/**
	 * Set element html template.
	 * Retrieve Path to shortcode template. This is useful if you want
	 * to reassign path of existing content elements through your plugin.
	 *
	 * @return string Element html template.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function set_html_template ()
	{
		return wpe_template_url( 'templates/wpbakery/wpe-post.php' );
	}

	/**
	 * Register element controls.
	 * Retrieve List of shortcode attributes. Array which holds your shortcode params,
	 * these params will be editable in shortcode settings page
	 *
	 * @return array Element controls.
	 * @since 1.0.0
	 * @access public
	 * @public
	 */
	public function _register_controls ()
	{
		return [
			self::number( 'count', [ 'heading' => __( 'Post', 'wpessential' ) ] )
		];
	}
}
