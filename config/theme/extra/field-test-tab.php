<?php

use WPEssential\Plugins\Fields\Color;
use WPEssential\Plugins\Fields\Divider;
use WPEssential\Plugins\Fields\ImageSelect;
use WPEssential\Plugins\Fields\Info;
use WPEssential\Plugins\Fields\Media;
use WPEssential\Plugins\Fields\Number;
use WPEssential\Plugins\Fields\Select;
use WPEssential\Plugins\Fields\Switcher;
use WPEssential\Plugins\Fields\Text;
use WPEssential\Plugins\Fields\Textarea;
use WPEssential\Plugins\Fields\Url;
use WPEssential\Plugins\Fields\Wysiwyg;

return [
	Text::make( __( 'WPE Text Field', 'wpessential' ) )
		->subtitle( __( 'Subtitle description' ) )
		->desc( __( 'Subtitle description' ) )
		->placeholder( __( 'Enter the text', 'wpessential' ) )
		->max( 20 )
		->min( 5 )
		->word_limit_show( true )
		->clearable( true )
		->disabled( false )
		->readonly( false )
		->note_title( __( 'WPE ', 'wpessential' ) )
		->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
		->default( 'site title' )
		->toArray(),
	Textarea::make( __( 'WPE Textarea', 'wpessential' ) )
			->subtitle( __( 'Subtitle description' ) )
			->desc( __( 'Subtitle description' ) )
			->placeholder( __( 'Enter the text', 'wpessential' ) )
			->max( 20 )
			->min( 5 )
			->word_limit_show( true )
			->clearable( true )
			->disabled( false )
			->readonly( false )
			->min_rows( 2 )
			->max_rows( 5 )
			->note_title( __( 'WPE Textarea', 'wpessential' ) )
			->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
			->default( 'site title' )
			->toArray(),
	Url::make( __( 'WPE Url', 'wpessential' ) )
	   ->subtitle( __( 'Subtitle description' ) )
	   ->desc( __( 'Subtitle description' ) )
	   ->placeholder( __( 'Enter the text', 'wpessential' ) )
	   ->max( 20 )
	   ->min( 5 )
	   ->word_limit_show( true )
	   ->clearable( true )
	   ->disabled( false )
	   ->readonly( false )
	   ->note_title( __( 'WPE Textarea', 'wpessential' ) )
	   ->note_desc( __( 'Example desc of the panel.', 'wpessential' ) )
	   ->default( 'sitetitle' )
	   ->toArray(),
	Number::make( __( 'WPE Number', 'wpessential' ) )
		  ->subtitle( __( 'Short Description' ) )
		  ->placeholder( __( 'Enter the text', 'wpessential' ) )
		  ->maxlength( 20 )
		  ->minlength( 5 )
		  ->max( 20 )
		  ->min( 5 )
		  ->controls( true )
		  ->controls_position( 'left' )
		  ->step( 0.5 )
		  ->word_limit_show( true )
		  ->field_size( 'small' )
		  ->clearable( true )
		  ->disabled( false )
		  ->readonly( false )
		  ->note_title( __( 'Title', 'wpessential' ) )
		  ->note_desc( __( 'Description.', 'wpessential' ) )
		  ->default( 'Hello Word' )
		  ->toArray(),
	Select::make( __( 'WPE Select Field Examil', 'wpessential' ) )
		  ->subtitle( __( 'Short Description' ) )
		  ->placeholder( __( 'Enter the text', 'wpessential' ) )
		  ->clearable( true )
		  ->filterable( true )
		  ->autocomplete( 'on' )
		  ->disabled( false )
		  ->readonly( false )
		  ->note_title( __( 'Title', 'wpessential' ) )
		  ->note_desc( __( 'Description.', 'wpessential' ) )
		  ->default( '0' )
		  ->options(
			  [
				  '0' => __( 'WPEssential0', 'wpessential' ),
				  '1' => __( 'WPEssential1', 'wpessential' ),
				  '2' => __( 'WPEssential2', 'wpessential' ),
				  '3' => __( 'WPEssential3', 'wpessential' ),
			  ]
		  )
		  ->toArray(),
	Select::make( __( 'WPE Select Field Examil', 'wpessential' ) )
		  ->subtitle( __( 'Short Description' ) )
		  ->placeholder( __( 'Enter the text', 'wpessential' ) )
		  ->clearable( true )
		  ->filterable( true )
		  ->autocomplete( 'on' )
		  ->disabled( false )
		  ->readonly( false )
		  ->multiple( true )
		  ->multiple_limit( 3 )
		  ->reserve_keyword( false )
		  ->note_title( __( 'Title', 'wpessential' ) )
		  ->note_desc( __( 'Description.', 'wpessential' ) )
		  ->default( [ '0', '1' ] )
		  ->options(
			  [
				  '0' => __( 'WPEssential0', 'wpessential' ),
				  '1' => __( 'WPEssential1', 'wpessential' ),
				  '2' => __( 'WPEssential2', 'wpessential' ),
				  '3' => __( 'WPEssential3', 'wpessential' ),
			  ]
		  )
		  ->toArray(),
	Color::make( __( 'WPE Select Field Examil', 'wpessential' ) )
		 ->subtitle( __( 'Short Description' ) )
		 ->field_size( 'small' )
		 ->disabled( false )
		 ->note_title( __( 'Title', 'wpessential' ) )
		 ->note_desc( __( 'Description.', 'wpessential' ) )
		 ->default( '#000' )
		 ->predefine( [
			 '#ff4500',
			 '#ff8c00',
			 '#ffd700',
			 '#90ee90',
			 '#00ced1',
			 '#1e90ff',
			 '#c71585',
		 ] )
		 ->toArray(),
	RgbaColor::make( __( 'WPE Select Field Examil', 'wpessential' ) )
			 ->subtitle( __( 'Short Description' ) )
			 ->field_size( 'small' )
			 ->disabled( false )
			 ->note_title( __( 'Title', 'wpessential' ) )
			 ->note_desc( __( 'Description.', 'wpessential' ) )
			 ->default( 'rgba(255, 69, 0, 0.68)' )
			 ->predefine( [
				 'rgba(255, 69, 0, 0.68)',
				 'rgb(255, 120, 0)',
			 ] )
			 ->toArray(),
	Date::make( __( 'WPE Date Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'date' )
		->_align( 'center' )
		->_format( 'yyyy-MM-dd' )
		->_time_arrow_control( true )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( '2020-05-17' )
		->toArray(),
	Date::make( __( 'WPE Date Time Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'datetime' )
		->_align( 'center' )
		->_format( '2020-05-17 05:55:53' )
		->_time_arrow_control( true )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( '2020-05-17' )
		->toArray(),
	Date::make( __( 'WPE Year Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'year' )
		->_align( 'center' )
		->_format( 'yyyy' )
		->_time_arrow_control( true )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( '2020' )
		->toArray(),
	Date::make( __( 'WPE Month Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'month' )
		->_align( 'center' )
		->_format( 'MM' )
		->_time_arrow_control( true )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( '10' )
		->toArray(),
	Date::make( __( 'WPE Week Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'week' )
		->_align( 'center' )
		->_format( 'dd' )
		->_time_arrow_control( true )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( '10' )
		->toArray(),
	Date::make( __( 'WPE Daterange Field Examil', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'daterange' )
		->_align( 'center' )
		->_format( 'yyyy-MM-dd' )
		->_time_arrow_control( true )
		->_range_separator( 'All' )
		->_start_placeholder( 'Select Start Date' )
		->_end_placeholder( 'Select End Date' )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( [ '2020:05:15', '2020:05:20' ] )
		->toArray(),
	Date::make( __( 'WPE Daterange Field Examils', 'wpessential' ) )
		->subtitle( __( 'Short Description' ) )
		->field_size( 'small' )
		->disabled( false )
		->readonly( false )
		->clearable( false )
		->_type( 'datetimerange' )
		->_align( 'center' )
		->_format( 'yyyy-MM-dd HH:mm:ss' )
		->_time_arrow_control( true )
		->_range_separator( 'All' )
		->_start_placeholder( 'Select Start Date' )
		->_end_placeholder( 'Select End Date' )
		->note_title( __( 'Title', 'wpessential' ) )
		->note_desc( __( 'Description.', 'wpessential' ) )
		->default( [ '2020:05:15 05:55:53', '2020:05:20 06:55:53' ] )
		->toArray(),
	Divider::make( __( 'WPE Divider Examil 1', 'wpessential' ) )
		   ->desc( __( 'Subtitle description' ) )
		   ->_icon( 'el-icon-star-on' )
		   ->_direction( 'vertical' )
		   ->_content_position( 'center' )
		   ->toArray(),
	Divider::make( __( 'WPE Divider Examil 2', 'wpessential' ) )
		   ->desc( __( 'Subtitle description' ) )
		   ->_icon( 'el-icon-star-on' )
		   ->_direction( 'horizontal' )
		   ->_content_position( 'right' )
		   ->toArray(),
	Divider::make( __( 'WPE Divider Examil 3', 'wpessential' ) )
		   ->desc( __( 'Subtitle description' ) )
		   ->_direction( 'horizontal' )
		   ->_content_position( 'left' )
		   ->toArray(),
	Wysiwyg::make( __( 'WPE Wysiwyg', 'wpessential' ) )
		   ->subtitle( __( 'Subtitle description' ) )
		   ->desc( __( 'Subtitle description' ) )
		   ->toArray(),
	ImageSelect::make( __( 'WPE Code', 'wpessential' ) )
			   ->subtitle( __( 'Subtitle description' ) )
			   ->desc( __( 'Subtitle description' ) )
			   ->options( [
				   'test'  => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
				   'test2' => 'https://wpbuffs.com/wp-content/uploads/2016/09/How-to-edit-WordPress-code.jpg',
			   ] )
			   ->toArray(),
	Info::make( __( 'WPE Codess', 'wpessential' ) )
		->subtitle( __( 'Subtitle description' ) )
		->desc( __( 'Subtitle description' ) )
		->_type( 'success' )
		->_closable( true )
		->_align( 'left' )
		->_close_text( 'Testing' )
		->_show_icon( true )
		->_effect( 'dark' )
		->toArray(),
	Media::make( __( 'WPE Media', 'wpessential' ) )
		 ->subtitle( __( 'Subtitle description' ) )
		 ->desc( __( 'Subtitle descriptionss' ) )
		 ->_add_text( __( 'Add Image' ) )
		 ->_update_text( __( 'Update Image' ) )
		 ->toArray(),
	Switcher::make( __( 'WPE Switcher', 'wpessential' ) )
			->subtitle( __( 'Switcher description' ) )
			->desc( __( 'Switcher descriptionss' ) )
			->active_icon()
			->inactive_icon()
			->active_color()
			->inactive_color()
			->active_text()
			->inactive_text()
			->active_value()
			->inactive_value()
	/*
	[
		'id'       => 'toggle',
		'type'     => 'wpe-toggle',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 'yes',
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'disabled'       => false,
			'active-text'    => 'Active Text',
			'inactive-text'  => 'Inactive Text',
			'active-value'   => 'yes',
			'inactive-value' => 'no',

		]
	],
	[
		'id'       => 'toggles',
		'type'     => 'wpe-toggle',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 'yes',
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'disabled'            => false,
			'active-icon-class'   => 'fas fa-bell',
			'inactive-icon-class' => 'fas fa-home',
			'active-value'        => 'yes',
			'inactive-value'      => 'no',

		]
	],
	[
		'id'       => 'slider',
		'type'     => 'wpe-slider',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 80,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'show-tooltip'        => true,
			'min'                 => - 1,
			'max'                 => 100,
			'step'                => 10,
			'disabled'            => false,
			'show-steps'          => false,
			'show-input'          => false,
			'range'               => false,
			'show-input-controls' => false,
			'input-size'          => 'small',
			'vertical'            => false,
			'height'              => '200px',
		]
	],
	[
		'id'       => 'sliderSss',
		'type'     => 'wpe-slider',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 80,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'min'                 => - 1,
			'max'                 => 100,
			'step'                => 10,
			'disabled'            => false,
			'show-tooltip'        => true,
			'show-steps'          => false,
			'show-input'          => true,
			'show-input-controls' => true,
			'range'               => false,
			'input-size'          => 'small',
			'vertical'            => false,
			'height'              => '200px',
		]
	],
	[
		'id'       => 'sliderS',
		'type'     => 'wpe-slider',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => [ 10, 80 ],
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'min'                 => - 1,
			'max'                 => 100,
			'step'                => 10,
			'disabled'            => false,
			'show-tooltip'        => true,
			'range'               => true,
			'show-stops'          => true,
			'show-input-controls' => true,
			'input-size'          => 'small',
			'show-input'          => false,
			'vertical'            => false,
			'height'              => '200px',
		]
	],
	[
		'id'       => 'sliderSs',
		'type'     => 'wpe-slider',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => [ 10, 80 ],
		'note'     => __( 'WPEssential', 'wpessential' ),
		'settings' => [
			'min'                 => - 1,
			'max'                 => 100,
			'step'                => 10,
			'disabled'            => false,
			'show-tooltip'        => true,
			'range'               => false,
			'show-stops'          => true,
			'show-input-controls' => true,
			'input-size'          => 'small',
			'show-input'          => false,
			'vertical'            => true,
			'height'              => '200px',
		]
	],
	[
		'id'       => 'transfer',
		'type'     => 'wpe-transfer',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => [ 0, 2 ],
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'filterable'         => true,
			'filter-placeholder' => __( 'WPEssential', 'wpessential' ),
			'button-texts'       => [
				__( 'WPEssential', 'wpessential' ),
				__( 'WPEssential2', 'wpessential' )
			],
		]
	],
	[
		'id'       => 'radio',
		'type'     => 'wpe-radio',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 5,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'disabled' => false,
			'border'   => false,
			'size'     => 'medium',
		]
	],
	[
		'id'       => 'radiodd',
		'type'     => 'wpe-radio',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 5,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'disabled' => false,
			'border'   => false,
			'size'     => 'medium',
			'class'    => 'wpe-radio-block'
		]
	],
	[
		'id'       => 'buttonset',
		'type'     => 'wpe-radio',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 5,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'disabled' => false,
			'border'   => true,
			'size'     => 'medium',
		]
	],
	[
		'id'       => 'buttonseddt',
		'type'     => 'wpe-radio',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 5,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'disabled' => false,
			'border'   => true,
			'size'     => 'medium',
			'class'    => 'wpe-radio-block'
		]
	],
	[
		'id'       => 'buttonsetd',
		'type'     => 'wpe-button-set',
		'title'    => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => 5,
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			0 => __( 'WPEssential0', 'wpessential' ),
			2 => __( 'WPEssential2', 'wpessential' ),
			3 => __( 'WPEssential3', 'wpessential' ),
			4 => __( 'WPEssential4', 'wpessential' ),
			5 => __( 'WPEssential5', 'wpessential' ),
		],
		'settings' => [
			'disabled' => false,
		]
	]
	/*[
		'id'       => 'colorlink',
		'type'     => 'wpe-link-color',
		'title'  => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => '#000',
		'note'     => __( 'WPEssential', 'wpessential' ),
	],*/
	/*[
		'id'       => 'buttongroup',
		'type'     => 'wpe-button-group',
		'title'  => __( 'Site Title', 'wpessential' ),
		'subtitle' => __( 'Enter the site title.', 'wpessential' ),
		'desc'     => __( 'Enter the site title.', 'wpessential' ),
		'defined'  => [
			0,
			2,
		],
		'note'     => __( 'WPEssential', 'wpessential' ),
		'options'  => [
			[ 'key' => 0, 'label' => __( 'WPEssential0', 'wpessential' ) ],
			[ 'key' => 2, 'label' => __( 'WPEssential2', 'wpessential' ) ],
			[ 'key' => 3, 'label' => __( 'WPEssential3', 'wpessential' ) ],
			[ 'key' => 4, 'label' => __( 'WPEssential4', 'wpessential' ) ],
			[ 'key' => 5, 'label' => __( 'WPEssential5', 'wpessential' ) ],
		]
	],*/
];
