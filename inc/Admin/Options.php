<?php

namespace WPEssential\Plugins\Admin;

final class Options
{
	public static function constructor ()
	{
		add_filter( 'wpe/localization', [ __CLASS__, 'global_args' ], 11 );
		add_filter( 'wpe/localization', [ __CLASS__, 'tab_list' ], 13 );
	}

	public static function global_args ( $list )
	{
		return wp_parse_args(
			[
				'global_options_args' => self::options(),
				'global_tabs_args'    => self::tabs(),
			],
			$list
		);
	}

	public static function options ()
	{
		$list = [
			// position of label. If set to 'left' or 'right' or 'top', label-width option is also required
			'label-position'          => 'left',
			// width of label, e.g. '50px'. All its direct child form items will inherit this value. Width auto is supported.
			'label-width'             => 'auto',
			// whether the form is inline
			'inline'                  => false,
			// suffix of the label
			'label-suffix'            => '',
			// whether required fields should have a red asterisk (star) beside their labels
			'hide-required-asterisk'  => false,
			// whether to show the error message
			'show-message'            => true,
			// whether to display the error message inline with the form item
			'inline-message'          => false,
			// whether to display an icon indicating the validation result
			'status-icon'             => false,
			// whether to trigger validation when the rules prop is changed
			'validate-on-rule-change' => true,
			// control the size of components in this form ( medium / small / mini )
			'size'                    => 'medium',
			// whether to disabled all components in this form. If set to true, it cannot be overridden by its inner components' disabled prop
			'disabled'                => false
		];

		return apply_filters( 'wpe/register/admin_pages/options/global_args', $list );
	}

	public static function tabs ()
	{
		$list = [
			'main'     => [
				// menu display mode (horizontal / vertical)
				'mode'                => 'vertical',
				// whether the menu is collapsed (available only in vertical mode)
				'collapse'            => false,
				// background color of Menu (hex format)
				'background-color'    => '#545c64',
				// text color of Menu (hex format)
				'text-color'          => '#fff',
				// text color of currently active menu item (hex format)
				'active-text-color'   => '#ffd04b',
				// whether to enable the collapse transition
				'collapse-transition' => true,
			],
			'children' => [
				// custom class name for the popup menu
				'popper-class' => 'wpessential-option-panel',
			],
			'note'     => [
				// how the popover is triggered (click/focus/hover/manual)
				'trigger'       => 'click',
				// popover width
				'width'         => '200',
				// custom class name for Tooltip's popper
				'popper-class'  => 'wpessential-note',
				// position of Tooltip (top/top-start/top-end/bottom/bottom-start/bottom-end/left/left-start/left-end/right/right-start/right-end)
				'placemnet'     => 'left',
				// offset of the Tooltip
				'offset'        => 0,
				// animation name
				'transition'    => 'el-fade-in-linear',
				// whether an arrow is displayed. For more information, check Vue-popper page
				'visible-arrow' => true,
				// delay before appearing when trigger is hover, in milliseconds
				'open-delay'    => 0,
				// delay before disappearing when trigger is hover, in milliseconds
				'close-after'   => 0,
			]
		];

		return apply_filters( 'wpe/register/admin_pages/options/tab_global_args', $list );
	}

	public static function tab_list ( $list )
	{
		$theme    = [
			[
				'id'         => 'tab_1',
				'title'      => __( 'Tab 1', 'wpessential' ),
				'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
				'note'       => __( 'Example desc of the panel.', 'wpessential' ),
				'icon'       => 'el-icon-location',
				'image_icon' => 'el-icon-location',
				'note_icon'  => 'el-icon-warning',
				'priority'   => 0,
				'fields'     => 'field-test-tab',
				'children'   => [
					[
						'id'         => 'tab_1_1',
						'title'      => __( 'Tab 1 1', 'wpessential' ),
						'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
						'note'       => __( 'Example desc of the panel.', 'wpessential' ),
						'icon'       => 'el-icon-location',
						'image_icon' => 'el-icon-location',
						'note_icon'  => 'el-icon-warning',
						'priority'   => 0,
						'fields'     => 'field-test-tab',
					],
					[
						'id'         => 'tab_1_2',
						'title'      => __( 'Tab 1 2', 'wpessential' ),
						'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
						'note'       => __( 'Example desc of the panel.', 'wpessential' ),
						'icon'       => 'el-icon-location',
						'image_icon' => 'el-icon-location',
						'note_icon'  => 'el-icon-warning',
						'priority'   => 0,
						'fields'     => 'field-test-tab',
					]
				]
			],
			[
				'id'         => 'tab_2',
				'title'      => __( 'Tab 2', 'wpessential' ),
				'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
				'note'       => __( 'Example desc of the panel.', 'wpessential' ),
				'icon'       => 'el-icon-location',
				'image_icon' => 'el-icon-location',
				'note_icon'  => 'el-icon-warning',
				'priority'   => 0,
				'fields'     => 'field-test-tab',
			],
			[
				'id'         => 'tab_3',
				'title'      => __( 'Tab 3', 'wpessential' ),
				'desc'       => __( 'Example desc of the panel.', 'wpessential' ),
				'note'       => __( 'Example desc of the panel.', 'wpessential' ),
				'icon'       => 'el-icon-location',
				'image_icon' => 'el-icon-location',
				'note_icon'  => 'el-icon-warning',
				'priority'   => 0,
				'fields'     => 'field-test-tab',
			]
		];
		$theme    = apply_filters( 'wpe/register/admin_pages/options/theme_options/tabs', $theme );
		$plugins  = apply_filters( 'wpe/register/admin_pages/options/plugins_options/tabs', [] );
		$tab_list = [
			'theme'   => $theme,
			'plugins' => $plugins,
		];

		return wp_parse_args( [ 'tabs' => $tab_list ], $list );
	}
}
