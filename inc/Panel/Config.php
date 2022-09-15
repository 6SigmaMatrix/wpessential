<?php

namespace WPEssential\Plugins\Panel;

final class Config
{
	public static function init ()
	{
		return [
			'global_options_args' => self::options(),
			'global_tabs_args'    => self::tabs(),
		];
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
			'main'         => [
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
			'children'     => [
				// custom class name for the popup menu
				'popper-class' => 'wpessential-option-panel',
			],
			'note'         => [
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
			],
			'footer_share' => [
				[
					'title' => 'FaceBook',
					'icon'  => 'el-icon-plus',
					'url'   => 'https://facebook.com',
				],
				[
					'title' => 'Twitter',
					'icon'  => 'el-icon-plus',
					'url'   => 'https://twitter.com',
				],
				[
					'title' => 'Linkedin',
					'icon'  => 'el-icon-plus',
					'url'   => 'https://linkedin.com',
				],
				[
					'title' => 'YouTube',
					'icon'  => 'el-icon-plus',
					'url'   => 'https://youtube.com',
				],
				[
					'title' => 'Tumbler',
					'icon'  => 'el-icon-plus',
					'url'   => 'https://tumbler.com',
				]
			]
		];

		return apply_filters( 'wpe/register/admin_pages/options/tab_global_args', $list );
	}
}
