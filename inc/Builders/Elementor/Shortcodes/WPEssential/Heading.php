<?php

namespace WPEssential\Plugins\Builders\Elementor\Shortcodes\WPEssential;

use Elementor\Controls_Manager;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Typography;
use WPEssential\Plugins\Builders\Elementor\Utility\Base;
use WPEssential\Plugins\Fields\Choose;
use WPEssential\Plugins\Fields\Color;
use WPEssential\Plugins\Fields\CTypography;
use WPEssential\Plugins\Fields\PopoverToggle;
use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Fields\Textarea;
use WPEssential\Plugins\Fields\Url;
use WPEssential\Plugins\Implement\Shortcodes;

class Heading extends Base implements Shortcodes
{
	/**
	 * Set widget skings.
	 *
	 * @return string $skins_list name.
	 * @access public
	 * @public
	 */
	public $skins_list = [];

	/**
	 * Set widget keywords.
	 * Retrieve widget keywords.
	 *
	 * @return array Widget keywords.
	 * @access public
	 * @since 1.0.0
	 * @public
	 */
	public function set_keywords ()
	{
		return [ 'heading', 'title', 'text' ];
	}

	/**
	 * Register widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function _register_controls ()
	{
		$this->start_controls_section(
			'section_1',
			[
				'label' => __( 'Post Settings', 'wpessential-blog-post' )
			]
		);

		$opt = Textarea::make( __( 'Title', 'wpessential' ) )
					   ->dynamic( true )
					   ->placeholder( __( 'Enter your title', 'wpessential' ) )
					   ->default( __( 'Add Your Heading Text Here', 'wpessential' ) )
					   ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Url::make( __( 'Link', 'wpessential' ) )
				  ->dynamic( true )
				  ->default( [ 'url' => '' ] )
				  ->separator( 'before' )
				  ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Select::make( __( 'Size', 'wpessential' ) )
					 ->options( wpe_element_size() )
					 ->default( 'default' )
					 ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Select::make( __( 'HTML Tag', 'wpessential' ) )
					 ->options( wpe_heading_tags() )
					 ->default( 'h2' )
					 ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$opt = Choose::make( __( 'Alignment', 'wpessential' ) )
					 ->options( [
						 'left'    => [
							 'title' => __( 'Left', 'wpessential' ),
							 'icon'  => 'eicon-text-align-left',
						 ],
						 'center'  => [
							 'title' => __( 'Center', 'wpessential' ),
							 'icon'  => 'eicon-text-align-center',
						 ],
						 'right'   => [
							 'title' => __( 'Right', 'wpessential' ),
							 'icon'  => 'eicon-text-align-right',
						 ],
						 'justify' => [
							 'title' => __( 'Justified', 'wpessential' ),
							 'icon'  => 'eicon-text-align-justify',
						 ],
					 ] )
					 ->wrap_selectors( [ '' => 'text-align: {{VALUE}};' ] )
					 ->default( '' )
					 ->toArray();
		$this->add_responsive_control( $opt[ 'id' ], $opt );

		$this->end_controls_section();

		$this->start_controls_section(
			'section_2',
			[
				'label' => __( 'Title', 'wpessential' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$opt = Color::make( __( 'Text Color', 'wpessential' ) )
					->wrap_selectors( [ '.wpessential-heading-title' => 'color: {{VALUE}};' ] )
					->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$this->common_key = 'typography';

		$opt = PopoverToggle::make( __( 'Typography', 'wpessential' ) )
							->global( true )
							->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$this->start_popover();

		$opts = CTypography::make( __( 'typography', 'wpessential' ) )->typography();
		foreach ( $opts as $opt ) {
			$opt = $opt->toArray();
			$this->add_control( $opt[ 'id' ], $opt );
		}

		$this->end_popover();

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'typography',
				'global'   => [
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				],
				'selector' => '{{WRAPPER}} .wpessential-heading-title',
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'text_shadow',
				'selector' => '{{WRAPPER}} .elementor-heading-title',
			]
		);

		$opt = Select::make( __( 'Blend Mode', 'wpessential' ) )
					 ->options( wpe_blend_mode() )
					 ->wrap_selectors( [ '.wpessential-heading-title' => 'mix-blend-mode: {{VALUE}}' ] )
					 ->toArray();
		$this->add_control( $opt[ 'id' ], $opt );

		$this->end_controls_section();
	}

	/**
	 * Render widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function render ()
	{
		$settings = wpe_gen_attr( $this->get_settings_for_display() );
		echo do_shortcode( "[{$this->get_base_name()} {$settings}']" );
	}
}
